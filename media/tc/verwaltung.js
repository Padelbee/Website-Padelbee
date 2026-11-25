/* DEV-1667: Selbstverwaltung für /referenzen und /blog.
   Stellt die Schnittstelle bereit, die Martins Editoren (referenzen.js, blog.js) erwarten
   (claude.use('db' | 'assets' | 'user')), und speichert über /verwaltung-api.php.
   Wird nur für angemeldete Nutzer geladen (siehe cs_admin_scripts in inc/tc/content-store.php). */
(() => {
  const CSRF = (window.PB_ADMIN || {}).csrf || '';
  const API = '/verwaltung-api.php';
  const listeners = {};

  function fail(code) { const e = new Error(code || 'error'); e.code = code; return e; }

  async function post(data) {
    const fd = new FormData();
    Object.entries(data).forEach(([k, v]) => fd.append(k, v));
    const r = await fetch(API, { method: 'POST', body: fd, headers: { 'X-PB-CSRF': CSRF }, credentials: 'same-origin' });
    const j = await r.json().catch(() => ({}));
    if (!r.ok) throw fail(r.status === 401 || r.status === 403 ? 'invalid_argument' : (j.error || 'error'));
    return j;
  }

  async function load(coll) {
    const r = await fetch(API + '?coll=' + encodeURIComponent(coll), { credentials: 'same-origin', cache: 'no-store' });
    if (!r.ok) throw fail('load_failed');
    const j = await r.json();
    return j.docs || [];
  }

  async function notify(coll) {
    const docs = await load(coll);
    (listeners[coll] || []).forEach(({ field, dir, cb }) => {
      const sorted = docs.slice().sort((a, b) => {
        const x = a[field] || 0, y = b[field] || 0;
        return dir === 'desc' ? (y > x ? 1 : y < x ? -1 : 0) : (x > y ? 1 : x < y ? -1 : 0);
      });
      cb({ docs: sorted.map(d => ({ id: d.id, data: () => { const c = Object.assign({}, d); delete c.id; return c; } })) });
    });
  }

  function collection(coll) {
    return {
      orderBy(field, dir) {
        return {
          onSnapshot(cb, err) {
            (listeners[coll] = listeners[coll] || []).push({ field, dir, cb });
            notify(coll).catch(e => err && err(e));
            return () => { listeners[coll] = (listeners[coll] || []).filter(l => l.cb !== cb); };
          }
        };
      },
      doc(id) {
        return {
          id: id || '',
          async set(body) { await post({ action: 'set', coll, id: id || '', doc: JSON.stringify(body) }); await notify(coll); },
          async delete() { await post({ action: 'delete', coll, id: id || '' }); await notify(coll); }
        };
      }
    };
  }

  const db = { collection };
  const assets = {
    async upload(blob, opts) {
      const fd = new FormData();
      const type = (opts && opts.type) || blob.type || 'image/jpeg';
      const ext = type === 'image/png' ? 'png' : type === 'image/webp' ? 'webp' : 'jpg';
      fd.append('action', 'upload');
      fd.append('file', blob, 'bild.' + ext);
      const r = await fetch(API, { method: 'POST', body: fd, headers: { 'X-PB-CSRF': CSRF }, credentials: 'same-origin' });
      const j = await r.json().catch(() => ({}));
      if (!r.ok) throw fail(j.error === 'too_large' ? 'too_large' : (j.error || 'error'));
      return { id: j.id, url: j.url };
    },
    async delete(id) { await post({ action: 'asset-delete', id }); }
  };
  const user = { canEdit: () => true };

  window.claude = window.claude || {};
  window.claude.use = async name => ({ db, assets, user })[name] || null;

  // Hinweis oben auf der Seite: angemeldet, Abmelden
  document.addEventListener('DOMContentLoaded', () => {
    const bar = document.createElement('div');
    bar.className = 'pb-adminbar';
    bar.innerHTML = 'Bearbeitungsmodus aktiv · <a href="/verwaltung">Verwaltung</a> · <a href="/verwaltung?abmelden=1">Abmelden</a>';
    document.body.appendChild(bar);
  });
})();
