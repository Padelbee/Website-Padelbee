<?php
/**
 * THE-COURT-Layout (neues Design, seit DEV-1086).
 *
 * Verwendung in einer Seite:
 *
 *   require __DIR__ . '/inc/tc/layout.php';
 *   tc_page_start([
 *       'path'        => '/standortanalyse',        // '/' für Start, sonst Pfad ohne Slash am Ende
 *       'title'       => 'Standortanalyse für Padel · THE COURT',
 *       'description' => 'Meta-Description …',
 *       'breadcrumb'  => ['Leistungen' => '/#leistungen', 'Standortanalyse' => '/standortanalyse'],
 *       'schema'      => [tc_schema_service(...)],   // zusätzliche JSON-LD-Knoten
 *       'view'        => 'standortanalyse',          // optional, Name des <div class="view"> (Default aus path)
 *   ]);
 *   ?>
 *   <section class="band">…</section>               // Inhalt der Seite, OHNE <div class="view"> und OHNE <main>
 *   <?php tc_page_end();
 *
 * tc_page_start gibt <head>, Header und <main id="top"><div class="view" data-view="…"> aus,
 * tc_page_end schließt View und Main und gibt Footer, Skripte und </body></html> aus.
 *
 * Cache-Busting: Bei jeder Änderung an media/tc/* TC_ASSET_VERSION hochzählen.
 */

require_once __DIR__ . '/schema.php';

const TC_ASSET_VERSION = 1;

// Tracking/Consent wie auf der bisherigen Seite (GA4, CCM19, HubSpot). Auf false setzen, um alles abzuschalten.
const TC_TRACKING = true;

/** HTML-Escape-Kurzform. */
function tc_h($s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Interner Zustand zwischen tc_page_start und tc_page_end. */
function &tc_state(): array
{
    static $state = [];
    return $state;
}

/** Standard-View-Name aus dem Pfad ('/' = start, '/standard-court' = standard-court). */
function tc_view_name(array $page): string
{
    if (!empty($page['view'])) {
        return (string) $page['view'];
    }
    if (!empty($page['nav'])) {
        return (string) $page['nav'];
    }
    $path = trim((string) ($page['path'] ?? '/'), '/');
    return $path === '' ? 'start' : preg_replace('/[^a-z0-9-]/i', '', $path);
}

/**
 * Menüstruktur (Header, mobile Navigation, Footer). Links sind absolute Pfade.
 * Anker der Startseite (#leistungen …) bekommen auf Unterseiten das Präfix "/".
 */
function tc_menu(): array
{
    return [
        'leistungen' => [
            'Standortanalyse' => '/standortanalyse',
            'Platzbau & Baubegleitung' => '/padel-court-bauen',
            'Sportplatzbau' => '/sportplatzbau',
            'Betreiberkonzept' => '/betreiberkonzept',
            'Padelbee PowerPlay®' => '/powerplay',
            'Angebotsvergleich' => '/angebotsvergleich',
        ],
        'courts' => [
            'Standard Court' => '/standard-court',
            'Panorama Court' => '/panorama-court',
            'Hybrid Court' => '/hybrid-court',
            'Premier Court' => '/premier-court',
            'Halle' => '/halle',
        ],
        'unternehmen' => [
            'Team' => '/team',
            'Jobs' => '/jobs',
            'Partner' => '/partner',
            'News' => '/news',
            'FAQ' => '/faq',
        ],
    ];
}

function tc_logos(string $style = ''): string
{
    return '<img src="/media/tc/logo-padelbee.svg" alt="Padelbee">' . '<span class="sep"></span>'
        . '<img src="/media/tc/logo-thecourt.svg" alt="The Court" style="height:26px">';
}

function tc_header(bool $isStart): void
{
    $a = $isStart ? '' : '/'; // Präfix für Startseiten-Anker
    $menu = tc_menu();
    ?>
<header class="site-head band">
  <div class="row">
    <a class="brand" href="/" aria-label="Padelbee und The Court"><?= tc_logos() ?></a>
    <nav class="nav" aria-label="Hauptnavigation">
      <a href="/" data-nav="start">Start</a>
      <div class="dd">
        <button type="button" class="dd-btn" aria-expanded="false" aria-controls="ddMenu" data-nav-group="courts automaten">Lösungen <svg width="10" height="6" viewBox="0 0 10 6" aria-hidden="true"><path d="M1 1l4 4 4-4" fill="none" stroke="currentColor" stroke-width="1.8"/></svg></button>
        <div class="dd-menu mega" id="ddMenu">
          <a href="/courts" data-nav="courts"><span class="dd-k">Courts</span><b>Padel-Courts</b><small>Drei Varianten, fünf Hersteller, Fundamente</small></a>
          <a href="/courts#c-hallen"><span class="dd-k">Hallen</span><b>Hallenlösungen</b><small>Polycarbonat und ThermoRoof, ab 250 €/m²</small></a>
          <a href="/automatenloesungen" data-nav="automaten"><span class="dd-k">Automaten</span><b>Verleih &amp; Verkauf</b><small>Schläger, Bälle, Snacks und Getränke 24/7</small></a>
<?php foreach (['leistungen' => 'Leistungen', 'courts' => 'Court-Varianten', 'unternehmen' => 'Unternehmen'] as $key => $label): ?>
          <div class="dd-grp"><p class="dd-h"><?= tc_h($label) ?></p>
<?php foreach ($menu[$key] as $name => $href): ?>
            <a class="dd-s" href="<?= tc_h($href) ?>"><?= tc_h($name) ?></a>
<?php endforeach; ?>
          </div>
<?php endforeach; ?>
        </div>
      </div>
      <a href="<?= $a ?>#leistungen">Leistungen</a><a href="<?= $a ?>#projekte">Projekte</a><a href="/referenzen" data-nav="referenzen">Referenzen</a><a href="/blog" data-nav="blog">Blog</a><a href="<?= $a ?>#kontakt">Kontakt</a>
    </nav>
    <button type="button" class="burger" aria-expanded="false" aria-controls="mnav" aria-label="Menü öffnen"><span></span><span></span><span></span></button>
    <a class="btn head-cta" href="<?= $a ?>#kontakt">Projekt anfragen</a>
  </div>
  <nav class="mnav" id="mnav" aria-label="Mobile Navigation" hidden>
    <a href="/">Start</a>
    <p class="mnav-k">Lösungen</p>
    <a href="/courts" class="sub">Padel-Courts</a><a href="/courts#c-hallen" class="sub">Hallenlösungen</a><a href="/automatenloesungen" class="sub">Automaten</a>
<?php foreach (['leistungen' => 'Leistungen', 'courts' => 'Court-Varianten', 'unternehmen' => 'Unternehmen'] as $key => $label): ?>
    <p class="mnav-k"><?= tc_h($label) ?></p>
    <?php foreach ($menu[$key] as $name => $href): ?><a href="<?= tc_h($href) ?>" class="sub"><?= tc_h($name) ?></a><?php endforeach; ?>

<?php endforeach; ?>
    <p class="mnav-k">Mehr</p>
    <a href="<?= $a ?>#leistungen">Leistungen</a><a href="<?= $a ?>#projekte">Projekte</a><a href="/referenzen">Referenzen</a><a href="/blog">Blog</a><a href="<?= $a ?>#partner">Partner</a><a href="<?= $a ?>#film">Film</a><a href="<?= $a ?>#kontakt">Kontakt</a>
  </nav>
</header>
<?php
}

function tc_footer(bool $isStart): void
{
    $a = $isStart ? '' : '/';
    $menu = tc_menu();
    ?>
<nav class="band foot-nav" aria-label="Seitenübersicht" style="background:var(--petrol)"><div class="foot-links"><a href="/">Start</a><a href="/courts">Padel-Courts</a><a href="/courts#c-hallen">Hallenlösungen</a><a href="/automatenloesungen">Verleih- &amp; Verkaufsautomaten</a><a href="/referenzen">Referenzen</a><a href="/blog">Blog</a><a href="<?= $a ?>#leistungen">Leistungen</a><a href="<?= $a ?>#projekte">Projektkarte</a><a href="<?= $a ?>#partner">Partner</a><a href="<?= $a ?>#kontakt">Kontakt</a><a href="/impressum">Impressum</a><a href="/datenschutz">Datenschutz</a></div>
<div class="foot-links foot-links2"><?php foreach ($menu as $group): foreach ($group as $name => $href): ?><a href="<?= tc_h($href) ?>"><?= tc_h($name) ?></a><?php endforeach; endforeach; ?></div></nav>
<footer class="foot band"><div class="row"><div><?= tc_logos() ?></div><div>Oktober 2026</div></div></footer>
<?php
}

/**
 * Gibt Dokumentkopf, Header und die Öffnung von <main>/<div class="view"> aus.
 *
 * @param array $page
 *   path         string  Pfad der Seite, '/' für Start (Pflicht)
 *   title        string  <title> (Klartext, wird escaped)
 *   description  string  Meta-Description (Klartext)
 *   og_image     string  Pfad oder URL, Default /media/intro.jpg
 *   robots       string  Default 'index,follow,max-image-preview:large'
 *   schema       array   Zusätzliche JSON-LD-Knoten (Liste von Arrays, z. B. aus tc_schema_service())
 *   page_type    string  Typ des WebPage-Knotens (WebPage, CollectionPage, FAQPage …)
 *   breadcrumb   array   ['Name' => '/pfad', …] OHNE "Start"; leer/fehlend bei Startseite
 *   view|nav     string  Name des Views = data-view = window.STATIC_VIEW = aktiver Menüpunkt (data-nav)
 *   extra_head   string  Roh-HTML für den <head>
 *   extra_scripts string Roh-HTML, wird NACH dem Footer und VOR dem Haupt-Skript ausgegeben
 *   canonical    bool    false = kein rel=canonical (z. B. 404)
 *   jsonld       bool    false = kein JSON-LD (z. B. 404, danke)
 */
function tc_page_start(array $page): void
{
    $path = (string) ($page['path'] ?? '/');
    $page['path'] = $path;
    $isStart = ($path === '/');
    $canonical = tc_url($path);
    $title = (string) ($page['title'] ?? 'THE COURT by Padelbee');
    $desc = (string) ($page['description'] ?? '');
    $ogImage = tc_url($page['og_image'] ?? '/media/intro.jpg');
    $robots = (string) ($page['robots'] ?? 'index,follow,max-image-preview:large');
    $view = tc_view_name($page);
    $page['og_image'] = $page['og_image'] ?? null;

    $state = &tc_state();
    $state = ['page' => $page, 'view' => $view, 'is_start' => $isStart];

    $v = TC_ASSET_VERSION;
    ?><!doctype html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<title><?= tc_h($title) ?></title>
<meta name="description" content="<?= tc_h($desc) ?>">
<meta name="robots" content="<?= tc_h($robots) ?>">
<meta name="theme-color" content="#002424">
<?php if (($page['canonical'] ?? true) !== false): ?>
<link rel="canonical" href="<?= tc_h($canonical) ?>">
<?php endif; ?>
<meta property="og:type" content="website"><meta property="og:locale" content="de_DE"><meta property="og:site_name" content="Padelbee">
<meta property="og:title" content="<?= tc_h($title) ?>">
<meta property="og:description" content="<?= tc_h($desc) ?>">
<meta property="og:url" content="<?= tc_h($canonical) ?>"><meta property="og:image" content="<?= tc_h($ogImage) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= tc_h($title) ?>">
<meta name="twitter:description" content="<?= tc_h($desc) ?>">
<meta name="twitter:image" content="<?= tc_h($ogImage) ?>">
<link rel="icon" type="image/png" href="/media/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
<link rel="stylesheet" href="/media/fonts/fonts.css">
<link rel="stylesheet" href="/media/tc/the-court.css?v=<?= $v ?>">
<link rel="stylesheet" href="/media/tc/tc-extra.css?v=<?= $v ?>">
<?php if (($page['jsonld'] ?? true) !== false) {
        $nodes = [tc_schema_organization(), tc_schema_website(), tc_schema_webpage($page, (string) ($page['page_type'] ?? 'WebPage'))];
        if (!$isStart && !empty($page['breadcrumb'])) {
            $nodes[] = tc_schema_breadcrumb($page['breadcrumb']);
        }
        foreach ((array) ($page['schema'] ?? []) as $node) {
            $nodes[] = $node;
        }
        echo tc_schema_script($nodes), "\n";
    } ?>
<?= $page['extra_head'] ?? '' ?>
<?php if (TC_TRACKING): ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EDT6G30T20"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-EDT6G30T20');</script>
<script src="https://cloud.ccm19.de/app.js?apiKey=1a9603ffb3b304e1b2fae2a806846cbacf3795537350db7e&amp;domain=69118fc1086bc66c5c03daf2" referrerpolicy="origin"></script>
<?php endif; ?>
</head>
<body>

<?php tc_header($isStart); ?>

<main id="top">
<script>window.STATIC_VIEW=<?= json_encode($view) ?>;</script>
<div class="view" data-view="<?= tc_h($view) ?>">
<?php
}

/** Schließt View und Main, gibt Footer, Skripte und das Dokumentende aus. */
function tc_page_end(array $more = []): void
{
    $state = tc_state();
    $page = $state['page'] ?? [];
    $isStart = $state['is_start'] ?? false;
    $v = TC_ASSET_VERSION;
    ?>
</div>
</main>
<?php tc_footer($isStart); ?>

<?= $page['extra_scripts'] ?? '' ?>
<?= $more['extra_scripts'] ?? '' ?>
<script src="/media/tc/the-court.js?v=<?= $v ?>"></script>
<?php if (TC_TRACKING): ?>
<!-- HubSpot -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/49314061.js"></script>
<?php endif; ?>
</body>
</html>
<?php
}
