<?php
require __DIR__ . '/inc/tc/layout.php';
tc_page_start([
    'path' => '/blog',
    'title' => 'Blog · Padel-Wissen für Vereine, Betreiber und Kommunen · THE COURT',
    'description' => 'Kosten, Genehmigung, Court-Systeme, Hallen, Automaten und Betrieb: Praxiswissen aus über 50 Padel-Projekten von Padelbee und The Court.',
    'breadcrumb' => ['Blog' => '/blog'],
    'page_type' => 'CollectionPage',
    'schema' => [tc_schema_blog('Padel-Wissen', 'Kosten, Genehmigung, Court-Systeme, Hallen, Automaten und Betrieb: Praxiswissen aus über 50 Padel-Projekten von Padelbee und The Court.')],
    'extra_scripts' => '<script src="/media/tc/blog.js?v=' . TC_ASSET_VERSION . '"></script>',
]);
?>
<section class="band dark grid-bg b-hero" id="b-list-hero">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Blog</p>
    <p class="label" style="color:var(--white)" data-type>Wissen · Praxis · Projekte</p>
    <h1>Padel-<span class="kw">Wissen.</span></h1>
    <p class="lead">Kosten, Genehmigung, Court-Systeme, Hallen, Automaten und Betrieb: Was wir aus über 50 Projekten gelernt haben, für Vereine, Betreiber, Hotels und Kommunen.</p>
  </div>
</section>

<section class="band" id="b-liste">
  <div class="inner">
    <div class="r-top">
      <div><p class="label">Artikel</p><h2 class="reveal">Neu im <span class="hl">Blog.</span></h2></div>
      <div id="bAdmin" hidden><button type="button" class="btn" id="bNew">+ Artikel schreiben</button></div>
    </div>
    <div class="filters" role="group" aria-label="Artikel filtern" id="bFilters"></div>
    <div class="posts" id="posts"></div>
    <div class="r-empty" id="bEmpty" hidden>
      <h3>Die ersten Artikel sind in Arbeit.</h3>
      <p>Bis dahin findest du alles Wichtige zu <a href="/courts">Padel-Courts</a> und <a href="/automatenloesungen">Automaten</a> auf unseren Themenseiten.</p>
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
    <div class="b-foot"><a class="btn" href="/#kontakt">Projekt besprechen</a><a class="btn ghost-l" href="/blog">Alle Artikel</a><button type="button" class="btn ghost-l" id="baEdit" hidden>Bearbeiten</button></div>
  </div>
</article>

<section class="band dark grid-bg">
  <div class="inner cta-band">
    <h2>Fragen zu deinem <span class="kw">Projekt?</span></h2>
    <a class="btn" href="/#kontakt">Kostenloses Erstgespräch</a>
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
