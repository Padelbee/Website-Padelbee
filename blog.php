<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1667: Artikel aus Martins Entwurf (the-court.com/blog, Stand 23.11.2026), 22 Beiträge in inc/tc/blog-data.json.
// Angepasst für padelbee.de: "THE COURT" -> "Padelbee" (rechtlich "THE COURT GmbH"), Gedankenstriche -> Kommas,
// Links auf padelbee.de-Seiten. Keine Texte der alten Website.
// Artikel öffnen per #blog/<slug> wie die Referenzen. Eigene URLs je Artikel und Selbstverwaltung klärt Matthias.
$blogPosts = json_decode((string) file_get_contents(__DIR__ . '/inc/tc/blog-data.json'), true) ?: [];
$blogPosts = array_values(array_filter($blogPosts, fn($p) => !empty($p['live'])));
usort($blogPosts, fn($a, $b) => strcmp($b['datum'] ?? '', $a['datum'] ?? ''));
$blogDesc = 'Padel-Ratgeber von Padelbee: Kosten, Genehmigung, Court-Systeme, Hallen, Automaten und Betrieb. Praxiswissen aus über 50 Projekten für Vereine und Betreiber.';
$blogSchema = tc_schema_blog('Padel-Wissen', $blogDesc);
$blogSchema['blogPost'] = array_map(fn($p) => array_filter([
    '@type' => 'BlogPosting',
    'headline' => $p['titel'],
    'description' => $p['teaser'],
    'datePublished' => $p['datum'],
    'author' => ['@type' => 'Person', 'name' => $p['autor']],
    'url' => tc_url('/blog') . '#blog/' . $p['slug'],
    'image' => !empty($p['cover']['url']) ? tc_url($p['cover']['url']) : null,
]), $blogPosts);
$blogMonths = ['', 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
$blogDate = function (string $d) use ($blogMonths): string {
    $t = strtotime($d);
    return $t ? (int) date('j', $t) . '. ' . $blogMonths[(int) date('n', $t)] . ' ' . date('Y', $t) : '';
};
tc_page_start([
    'path' => '/blog',
    'title' => 'Padel Blog: Kosten, Genehmigung und Courts · Padelbee',
    'description' => $blogDesc,
    'breadcrumb' => ['Blog' => '/blog'],
    'page_type' => 'CollectionPage',
    'schema' => [$blogSchema],
    'extra_scripts' => '<script>window.BLOG_STATIC=' . json_encode($blogPosts, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) . ';</script>' . "\n" . '<script src="/media/tc/blog.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
]);
?>
<section class="band dark grid-bg b-hero" id="b-list-hero">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Blog</p>
    <p class="label" style="color:var(--white)" data-type>Padel-Ratgeber · Wissen · Praxis</p>
    <h1>Padel-<span class="kw">Wissen.</span></h1>
    <p class="lead">In unserem Padel-Ratgeber steht, was wir aus über 50 Projekten gelernt haben, für Vereine, Betreiber, Hotels und Kommunen. Es geht um Kosten, Genehmigung, Court-Systeme, Hallen, Automaten und&nbsp;Betrieb.</p>
  </div>
</section>

<section class="band" id="b-liste">
  <div class="inner">
    <div class="r-top">
      <div><p class="label">Artikel</p><h2 class="reveal">Neu im <span class="hl">Blog.</span></h2></div>
      <div id="bAdmin" hidden><button type="button" class="btn" id="bNew">+ Artikel schreiben</button></div>
    </div>
    <div class="filters" role="group" aria-label="Artikel filtern" id="bFilters"></div>
    <div class="posts" id="posts">
<?php foreach ($blogPosts as $i => $p): ?>
      <a class="post<?= $i === 0 ? ' lead-post' : '' ?>" href="#blog/<?= tc_h($p['slug']) ?>">
        <figure><?php if (!empty($p['cover']['url'])): ?><img src="<?= tc_h($p['cover']['url']) ?>" alt="<?= tc_h($p['titel']) ?>" loading="lazy"><?php endif; ?></figure>
        <div class="rb"><div class="pk"><?= tc_h(implode(' · ', array_filter([$p['kategorie'], $blogDate($p['datum'])]))) ?></div><h3><?= tc_h($p['titel']) ?></h3><p><?= tc_h($p['teaser']) ?></p><span class="more">Weiterlesen →</span></div>
      </a>
<?php endforeach; ?>
    </div>
    <div class="r-empty" id="bEmpty" hidden>
      <h3>Die ersten Artikel sind in Arbeit.</h3>
      <p>Bis dahin erfährst du alles Wichtige bei <a href="/courts">Padel-Courts</a> und <a href="/automatenloesungen">Automaten</a>.</p>
    </div>
    <p class="r-hint" id="bHint" hidden></p>
  </div>
</section>

<article class="band b-article" id="bArticle" hidden>
  <div class="inner b-inner">
    <p class="crumb crumb-l"><a href="/">Start</a> &nbsp;/&nbsp; <a href="/blog">Blog</a></p>
    <p class="pk" id="baMeta"></p>
    <h2 id="baTitle"></h2>
    <p class="b-teaser" id="baTeaser"></p>
    <figure class="b-cover" id="baCoverFig"><img id="baCover" alt=""></figure>
    <div class="b-body" id="baBody"></div>
    <div class="b-foot"><a class="btn" href="#kontakt">Projekt besprechen</a><a class="btn ghost-l" href="/blog">Alle Artikel</a><button type="button" class="btn ghost-l" id="baEdit" hidden>Bearbeiten</button></div>
  </div>
</article>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Fragen zu deinem <span class="kw">Projekt?</span></h2>
    <p class="lead" style="margin:18px auto 0">Sprich mit uns im kostenlosen Erstgespräch über deinen Standort, dein Budget und dein Nutzungskonzept.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcFormButton = 'Kostenloses Erstgespräch'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>

<div class="r-modal" id="bForm" hidden role="dialog" aria-modal="true" aria-labelledby="bfHead">
  <form class="r-sheet r-formsheet" id="bFormEl" novalidate>
    <button type="button" class="r-close" data-close aria-label="Schließen">×</button>
    <p class="pk">Blog</p>
    <h2 id="bfHead">Artikel schreiben</h2>
    <div class="rf-grid">
      <label class="wide">Titel *<input name="titel" required maxlength="110" placeholder="z. B. Was kostet ein Padel-Court 2026?"></label>
      <label>Kategorie<select name="kategorie"><option>Courts</option><option>Hallen</option><option>Automaten</option><option>Finanzierung</option><option>Genehmigung</option><option>Betrieb</option><option>Projekte</option><option>News</option></select></label>
      <label>Datum<input name="datum" type="date"></label>
      <label>Autor<input name="autor" maxlength="60" placeholder="z. B. Martin Gaffal"></label>
      <label>URL-Kürzel<input name="slug" maxlength="80" placeholder="wird aus dem Titel erzeugt"></label>
      <label class="wide">Teaser (Vorschau und Google-Beschreibung, max. 160 Zeichen)<input name="teaser" maxlength="160"></label>
      <label class="wide">Text<textarea name="text" rows="14" maxlength="30000" placeholder="Absätze mit Leerzeile trennen.&#10;## Zwischenüberschrift&#10;- Aufzählung&#10;**fett**"></textarea></label>
      <div class="wide">
        <div class="rf-lab">Titelbild <small>JPG, PNG oder WebP, wird automatisch verkleinert.</small></div>
        <div class="rf-imgs" id="bfImgs"></div>
        <label class="rf-drop" id="bfDrop"><input type="file" id="bfFile" accept="image/jpeg,image/png,image/webp"><span>Bild hierher ziehen oder <u>auswählen</u></span></label>
      </div>
      <label class="rf-toggle wide"><input type="checkbox" name="live"> Veröffentlichen (sonst Entwurf)</label>
    </div>
    <p class="rf-msg" id="bfMsg" role="status"></p>
    <div class="rf-actions">
      <button type="button" class="rf-del" id="bfDel" hidden>Artikel löschen</button>
      <span></span>
      <button type="button" class="btn ghost-l" data-close>Abbrechen</button>
      <button type="submit" class="btn" id="bfSave">Speichern</button>
    </div>
  </form>
</div>
<?php tc_page_end();
