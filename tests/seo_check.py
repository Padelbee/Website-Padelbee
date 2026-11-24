#!/usr/bin/env python3
"""SEO-Regressionstest fuer padelbee.de (nur Standardbibliothek).

Aufruf: python3 tests/seo_check.py [--base URL] [--only gruppe] [--skip-form]
Gruppen: errors, form, redirects, pages, schema, sitemap, links
Exit-Code 1, wenn mindestens eine Pruefung FAIL ist.
"""
import argparse
import json
import sys
import urllib.error
import urllib.parse
import urllib.request
import xml.etree.ElementTree as ET
from html.parser import HTMLParser

CANON = "https://padelbee.de"
TIMEOUT = 15
UA = "padelbee-seo-check/1.0"

PAGES = ["/", "/courts", "/automatenloesungen", "/referenzen", "/blog", "/impressum",
         "/datenschutz", "/standortanalyse", "/padel-court-bauen", "/betreiberkonzept",
         "/powerplay", "/angebotsvergleich", "/sportplatzbau", "/halle", "/standard-court",
         "/panorama-court", "/hybrid-court", "/premier-court", "/team", "/jobs", "/partner",
         "/news", "/faq"]
REDIRECTS = [("/bauplanung", "/padel-court-bauen"), ("/bauplanung.php", "/padel-court-bauen"),
             ("/automaten", "/automatenloesungen"), ("/automaten/", "/automatenloesungen"),
             ("/courts/", "/courts"), ("/index.php", "/"),
             ("/standortanalyse.php", "/standortanalyse"), ("/team.php", "/team")]
PRODUCT = ["/standard-court", "/panorama-court", "/hybrid-court", "/premier-court"]
SERVICE = ["/standortanalyse", "/padel-court-bauen", "/betreiberkonzept", "/powerplay",
           "/angebotsvergleich", "/sportplatzbau", "/halle"]
ORG_TYPES = {"Organization", "LocalBusiness", "ProfessionalService"}
SITE_TYPES = {"WebSite", "WebPage"}
BAD_HOSTS = ("www.padelbee.de", "the-court.com")

results = {"OK": 0, "FAIL": 0, "WARN": 0}


def report(status, name, detail=""):
    results[status] += 1
    print("%-4s %s%s" % (status, name, (" - " + detail) if detail else ""))


def check(cond, name, detail=""):
    report("OK" if cond else "FAIL", name, "" if cond else detail)
    return cond


class NoRedirect(urllib.request.HTTPRedirectHandler):
    def redirect_request(self, *a, **k):
        return None


OPENER = urllib.request.build_opener(NoRedirect)


def fetch(url, method="GET", data=None):
    """Gibt (status, headers, body) zurueck; status 0 bei Netzwerkfehler. Folgt keinen Redirects."""
    req = urllib.request.Request(url, method=method, data=data, headers={"User-Agent": UA})
    try:
        with OPENER.open(req, timeout=TIMEOUT) as r:
            return r.status, r.headers, (r.read() if method != "HEAD" else b"")
    except urllib.error.HTTPError as e:
        try:
            body = e.read() if method != "HEAD" else b""
        except Exception:
            body = b""
        return e.code, e.headers, body
    except Exception as e:  # Timeout, DNS, Verbindung
        return 0, {}, str(e).encode()


def text(body):
    return body.decode("utf-8", "replace")


def path_of(loc, base):
    if not loc:
        return None
    return urllib.parse.urlparse(urllib.parse.urljoin(base + "/", loc)).path


class Page(HTMLParser):
    def __init__(self):
        super().__init__(convert_charrefs=True)
        self.title = None
        self._in_title = False
        self.h1 = 0
        self.metas = []
        self.links = []     # (rel, href)
        self.refs = []      # href/src
        self.lang = None
        self.jsonld = []
        self._in_ld = False
        self._ld = ""

    def handle_starttag(self, tag, attrs):
        a = {k: (v or "") for k, v in attrs}
        if tag == "html":
            self.lang = a.get("lang")
        elif tag == "title" and self.title is None:
            self._in_title = True
            self.title = ""
        elif tag == "h1":
            self.h1 += 1
        elif tag == "meta":
            self.metas.append(a)
        elif tag == "link":
            self.links.append((a.get("rel", "").lower(), a.get("href", "")))
        elif tag == "script" and a.get("type", "").lower() == "application/ld+json":
            self._in_ld = True
            self._ld = ""
        if tag in ("a", "link", "img", "script", "source", "iframe", "video", "audio"):
            rel = a.get("rel", "").lower()
            if tag == "link" and ("canonical" in rel or "alternate" in rel):
                return
            for k in ("href", "src"):
                if a.get(k):
                    self.refs.append(a[k])

    def handle_endtag(self, tag):
        if tag == "title":
            self._in_title = False
        elif tag == "script" and self._in_ld:
            self._in_ld = False
            self.jsonld.append(self._ld)

    def handle_data(self, data):
        if self._in_title and self.title is not None:
            self.title += data
        if self._in_ld:
            self._ld += data

    def meta(self, key, val):
        for m in self.metas:
            if m.get(key, "").lower() == val:
                return m.get("content", "")
        return None

    def canonical(self):
        for rel, href in self.links:
            if "canonical" in rel.split():
                return href
        return None


def walk_types(node, found):
    if isinstance(node, list):
        for n in node:
            walk_types(n, found)
    elif isinstance(node, dict):
        t = node.get("@type")
        for x in (t if isinstance(t, list) else [t]):
            if isinstance(x, str):
                found.append((x, node))
        for v in node.values():
            walk_types(v, found)


# ---------------------------------------------------------------- Gruppen
def group_errors(base, ctx):
    st, h, body = fetch(base + "/diese-seite-gibt-es-nicht")
    check(st == 404, "404 fuer unbekannte URL", "Status %s" % st)
    html = text(body)
    p = Page()
    try:
        p.feed(html)
    except Exception:
        pass
    r = p.meta("name", "robots") or ""
    if "noindex" in r.lower():
        report("OK", "404-Seite enthaelt meta robots noindex")
    else:
        report("WARN", "404-Seite ohne meta robots noindex")


def group_form(base, ctx):
    data = urllib.parse.urlencode({"name": "SEO Test", "email": "seo-test@example.invalid",
                                   "nachricht": "Automatischer Test, bitte ignorieren",
                                   "datenschutz": "1"}).encode()
    st, h, _ = fetch(base + "/m-senden.php", "POST", data)
    loc = h.get("Location", "") if h else ""
    ok = ("error=captcha" in loc or "error=spam" in loc) or (st != 0 and "danke" not in loc and st not in (200,)) \
        or (st == 200)
    # Erfolg waere Redirect auf danke; alles andere ohne Token gilt als abgelehnt
    ok = st != 0 and "danke" not in loc
    strict = "error=captcha" in loc or "error=spam" in loc
    check(ok, "POST /m-senden.php ohne Turnstile-Token nicht erfolgreich",
          "Status %s, Location %r" % (st, loc))
    if ok and not strict:
        report("WARN", "Form-POST ohne Fehlerparameter captcha/spam", "Status %s, Location %r" % (st, loc))


def group_redirects(base, ctx):
    for src, dst in REDIRECTS:
        st, h, _ = fetch(base + src)
        loc = h.get("Location", "") if h else ""
        got = path_of(loc, base)
        check(st == 301 and got == dst, "301 %s -> %s" % (src, dst),
              "Status %s, Location %r" % (st, loc))


def load_pages(base, ctx):
    if "pages" in ctx:
        return ctx["pages"]
    pages = {}
    for path in PAGES:
        st, h, body = fetch(base + path)
        p = Page()
        if st == 200:
            try:
                p.feed(text(body))
            except Exception:
                pass
        pages[path] = (st, p)
    ctx["pages"] = pages
    return pages


def group_pages(base, ctx):
    pages = load_pages(base, ctx)
    titles = {}
    for path in PAGES:
        st, p = pages[path]
        if not check(st == 200, "200 %s" % path, "Status %s" % st):
            continue
        t = (p.title or "").strip()
        check(bool(t), "title %s" % path, "fehlt oder leer")
        if t:
            titles.setdefault(t, []).append(path)
        d = p.meta("name", "description")
        if d is None or not d.strip():
            report("FAIL", "meta description %s" % path, "fehlt")
        elif not 50 <= len(d.strip()) <= 170:
            report("WARN", "meta description %s" % path, "Laenge %d" % len(d.strip()))
        else:
            report("OK", "meta description %s" % path)
        check(p.h1 == 1, "genau eine h1 %s" % path, "gefunden: %d" % p.h1)
        want = CANON + path
        c = p.canonical()
        check(c == want, "canonical %s" % path, "ist %r, erwartet %r" % (c, want))
        for prop in ("og:title", "og:description", "og:url"):
            v = p.meta("property", prop)
            check(bool(v and v.strip()), "%s %s" % (prop, path), "fehlt")
        ogu = p.meta("property", "og:url") or ""
        check(not any(b in (c or "") or b in ogu for b in BAD_HOSTS),
              "kein www/the-court.com in canonical/og:url %s" % path,
              "canonical %r, og:url %r" % (c, ogu))
        check((p.lang or "").lower() == "de", "html lang=de %s" % path, "ist %r" % p.lang)
        rb = (p.meta("name", "robots") or "").lower()
        check("noindex" not in rb, "kein noindex %s" % path, "robots=%r" % rb)
    dups = {t: ps for t, ps in titles.items() if len(ps) > 1}
    check(not dups, "title eindeutig", "; ".join("%r: %s" % (t, ", ".join(ps)) for t, ps in dups.items()))


def group_schema(base, ctx):
    pages = load_pages(base, ctx)
    for path in PAGES:
        st, p = pages[path]
        if st != 200:
            report("FAIL", "JSON-LD %s" % path, "Seite nicht erreichbar (Status %s)" % st)
            continue
        found = []
        ok = True
        for raw in p.jsonld:
            try:
                doc = json.loads(raw)
            except Exception as e:
                ok = False
                report("FAIL", "JSON-LD parsebar %s" % path, str(e))
                continue
            docs = doc if isinstance(doc, list) else [doc]
            for d in docs:
                ctxv = json.dumps(d.get("@context", "")) if isinstance(d, dict) else ""
                if "schema.org" not in ctxv:
                    ok = False
                    report("FAIL", "JSON-LD @context schema.org %s" % path, "ctx %s" % ctxv)
                if any(b in json.dumps(d) for b in BAD_HOSTS):
                    ok = False
                    report("FAIL", "JSON-LD ohne www/the-court.com %s" % path, "gefunden")
            walk_types(doc, found)
        types = {t for t, _ in found}
        check(bool(p.jsonld), "JSON-LD vorhanden %s" % path, "kein ld+json Block")
        check(bool(types & ORG_TYPES), "JSON-LD Organization %s" % path, "Typen: %s" % sorted(types))
        check(bool(types & SITE_TYPES), "JSON-LD WebSite/WebPage %s" % path, "Typen: %s" % sorted(types))
        if path != "/":
            check("BreadcrumbList" in types, "JSON-LD BreadcrumbList %s" % path, "fehlt")
        if path == "/faq":
            q = sum(1 for t, _ in found if t == "Question")
            check("FAQPage" in types and q >= 3, "JSON-LD FAQPage mit >=3 Question %s" % path,
                  "FAQPage=%s, Questions=%d" % ("FAQPage" in types, q))
        if path == "/team":
            check("Person" in types, "JSON-LD Person %s" % path, "fehlt")
        if path == "/jobs":
            jobs = [n for t, n in found if t == "JobPosting"]
            need = ("title", "datePosted", "hiringOrganization", "jobLocation")
            bad = [", ".join(k for k in need if not j.get(k)) for j in jobs]
            check(bool(jobs) and not any(bad), "JSON-LD JobPosting vollstaendig %s" % path,
                  "keine JobPosting" if not jobs else "fehlend: %s" % bad)
        if path in PRODUCT:
            check("Product" in types, "JSON-LD Product %s" % path, "fehlt")
        if path in SERVICE:
            check("Service" in types, "JSON-LD Service %s" % path, "fehlt")


def group_sitemap(base, ctx):
    st, h, body = fetch(base + "/sitemap.xml")
    if check(st == 200, "sitemap.xml 200", "Status %s" % st):
        try:
            root = ET.fromstring(body)
            locs = [e.text.strip() for e in root.iter() if e.tag.endswith("}loc") or e.tag == "loc"]
            check(True, "sitemap.xml gueltiges XML")
        except Exception as e:
            check(False, "sitemap.xml gueltiges XML", str(e))
            locs = None
        if locs is not None:
            want = {CANON + p for p in PAGES}
            got = set(locs)
            check(got == want and len(locs) == len(got), "sitemap.xml enthaelt genau die Seiten",
                  "fehlen: %s; zuviel: %s" % (sorted(want - got), sorted(got - want)))
            check(not any(b in l for l in locs for b in BAD_HOSTS), "sitemap.xml ohne www/the-court.com",
                  "gefunden")
    st, h, body = fetch(base + "/robots.txt")
    check(st == 200, "robots.txt 200", "Status %s" % st)
    check("Sitemap: https://padelbee.de/sitemap.xml" in text(body), "robots.txt verweist auf Sitemap",
          "Zeile fehlt")


def group_links(base, ctx):
    pages = load_pages(base, ctx)
    host = urllib.parse.urlparse(base).netloc
    targets = {}
    for path in PAGES:
        st, p = pages[path]
        if st != 200:
            continue
        for ref in p.refs:
            ref = ref.strip()
            if not ref or ref.startswith(("#", "mailto:", "tel:", "javascript:", "data:")):
                continue
            u = urllib.parse.urlparse(urllib.parse.urljoin(base + path, ref))
            if u.scheme not in ("http", "https") or u.netloc != host:
                continue
            url = urllib.parse.urlunparse((u.scheme, u.netloc, u.path or "/", "", u.query, ""))
            targets.setdefault(url, path)
    bad = 0
    for url, src in sorted(targets.items()):
        st, h, _ = fetch(url, "HEAD")
        if st in (405, 501, 403, 0):
            st, h, _ = fetch(url, "GET")
        good = st == 200
        detail = "Status %s" % st
        if st == 301:
            loc = (h or {}).get("Location", "")
            t = urllib.parse.urljoin(url, loc)
            st2, _, _ = fetch(t, "HEAD")
            if st2 in (405, 501, 403, 0):
                st2, _, _ = fetch(t, "GET")
            good = st2 == 200
            detail = "301 -> %s -> Status %s" % (loc, st2)
        if not good:
            bad += 1
            report("FAIL", "Link %s" % url, "%s (Quelle: %s)" % (detail, src))
    check(bad == 0, "Linkcheck (%d interne Ziele)" % len(targets), "%d defekt" % bad)


GROUPS = [("errors", group_errors), ("form", group_form), ("redirects", group_redirects),
          ("pages", group_pages), ("schema", group_schema), ("sitemap", group_sitemap),
          ("links", group_links)]


def main():
    ap = argparse.ArgumentParser(description=__doc__)
    ap.add_argument("--base", default="http://localhost:8091")
    ap.add_argument("--only", action="append", choices=[g for g, _ in GROUPS],
                    help="nur diese Gruppe(n), mehrfach moeglich")
    ap.add_argument("--skip-form", action="store_true", help="kein POST an m-senden.php")
    a = ap.parse_args()
    base = a.base.rstrip("/")
    ctx = {}
    for name, fn in GROUPS:
        if a.only and name not in a.only:
            continue
        if name == "form" and a.skip_form:
            continue
        print("== %s" % name)
        try:
            fn(base, ctx)
        except Exception as e:  # Skript darf nie abstuerzen
            report("FAIL", "Gruppe %s abgebrochen" % name, repr(e))
    print("\nSumme: %d OK, %d FAIL, %d WARN" % (results["OK"], results["FAIL"], results["WARN"]))
    return 1 if results["FAIL"] else 0


if __name__ == "__main__":
    sys.exit(main())
