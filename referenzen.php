<?php
require __DIR__ . '/inc/tc/layout.php';
tc_page_start([
    'path' => '/referenzen',
    'title' => 'Referenzen · Abgeschlossene Padel- und Tennisprojekte · THE COURT',
    'description' => 'Abgeschlossene Projekte von Padelbee und The Court: Padel-, Pickleball- und Tennisanlagen für Vereine, Hotels, Betreiber und Kommunen in DACH.',
    'breadcrumb' => ['Referenzen' => '/referenzen'],
    'page_type' => 'CollectionPage',
    'extra_scripts' => '<script src="/media/tc/referenzen.js?v=' . TC_ASSET_VERSION . '"></script>',
]);
?>
<section class="band dark grid-bg r-hero">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Referenzen</p>
    <p class="label" style="color:var(--white)" data-type>Projekte · Referenzen · Eröffnungen</p>
    <h1>Gebaut. Eröffnet. <span class="kw">Gespielt.</span></h1>
    <p class="lead">Abgeschlossene Projekte von Padelbee und The Court: Padel-, Pickleball- und Tennisanlagen für Vereine, Hotels, Betreiber und Kommunen in Deutschland, Österreich und der Schweiz.</p>
    <div class="c-stats r-stats" style="margin-top:44px">
      <div><b id="rsProj">0</b><span>Referenzprojekte</span></div>
      <div><b id="rsCourts">0</b><span>Courts gebaut</span></div>
      <div><b id="rsLand">0</b><span>Länder</span></div>
      <div><b>50+</b><span>Projekte in Arbeit</span></div>
    </div>
  </div>
</section>

<section class="band" id="r-liste">
  <div class="inner">
    <div class="r-top">
      <div>
        <p class="label">Referenzen</p>
        <h2 class="reveal">Unsere <span class="hl">Projekte.</span></h2>
      </div>
      <div class="r-admin" id="rAdmin" hidden>
        <button type="button" class="btn" id="rNew">+ Projekt anlegen</button>
      </div>
    </div>
    <div class="filters" role="group" aria-label="Referenzen filtern" id="rFilters">
      <button type="button" class="fbtn" data-rf="all" aria-pressed="true">Alle</button>
      <button type="button" class="fbtn" data-rf="Padel" aria-pressed="false">Padel</button>
      <button type="button" class="fbtn" data-rf="Pickleball" aria-pressed="false">Pickleball</button>
      <button type="button" class="fbtn" data-rf="Tennis" aria-pressed="false">Tennis</button>
      <button type="button" class="fbtn" data-rf="Halle" aria-pressed="false">Halle</button>
      <button type="button" class="fbtn" data-rf="Automaten" aria-pressed="false">Automaten</button>
    </div>
    <div class="refs" id="refs" aria-live="polite"></div>
    <div class="r-empty" id="rEmpty" hidden>
      <h3>Referenzen folgen in Kürze.</h3>
      <p>Wir stellen hier gerade unsere abgeschlossenen Projekte zusammen. Bis dahin zeigt dir die <a href="/#projekte">Projektkarte</a> alle 50 Standorte.</p>
    </div>
    <p class="r-hint" id="rHint" hidden></p>
  </div>
</section>

<section class="band dark grid-bg">
  <div class="inner cta-band">
    <h2>Dein Projekt ist das <span class="kw">nächste.</span></h2>
    <a class="btn" href="/#kontakt">Projekt anfragen</a>
  </div>
</section>

<!-- Detail -->
<div class="r-modal" id="rDetail" hidden role="dialog" aria-modal="true" aria-labelledby="rdTitle">
  <div class="r-sheet">
    <button type="button" class="r-close" data-close aria-label="Schließen">×</button>
    <div class="rd-gal"><img id="rdImg" alt=""><button type="button" class="rd-nav prev" aria-label="Vorheriges Bild">‹</button><button type="button" class="rd-nav next" aria-label="Nächstes Bild">›</button><div class="rd-count" id="rdCount"></div></div>
    <div class="rd-thumbs" id="rdThumbs"></div>
    <div class="rd-body">
      <p class="pk" id="rdMeta"></p>
      <h2 id="rdTitle"></h2>
      <div class="rd-facts" id="rdFacts"></div>
      <div class="rd-text" id="rdText"></div>
      <div class="rd-chips" id="rdChips"></div>
      <div class="rd-edit" id="rdEdit" hidden><button type="button" class="btn ghost-d" id="rdEditBtn">Bearbeiten</button></div>
    </div>
  </div>
</div>

<!-- Editor -->
<div class="r-modal" id="rForm" hidden role="dialog" aria-modal="true" aria-labelledby="rfHead">
  <form class="r-sheet r-formsheet" id="rFormEl" novalidate>
    <button type="button" class="r-close" data-close aria-label="Schließen">×</button>
    <p class="pk">Referenz</p>
    <h2 id="rfHead">Projekt anlegen</h2>
    <div class="rf-grid">
      <label class="wide">Projektname *<input name="titel" required maxlength="120" placeholder="z. B. TC Musterstadt, 3 Padel-Courts"></label>
      <label>Ort *<input name="ort" required maxlength="80" placeholder="Stadt"></label>
      <label>Land<select name="land"><option>Deutschland</option><option>Österreich</option><option>Schweiz</option></select></label>
      <label>Fertigstellung (Jahr)<input name="jahr" type="number" min="2015" max="2035" placeholder="2026"></label>
      <label>Anzahl Courts<input name="courts" type="number" min="0" max="99" placeholder="3"></label>
      <label>Bauherr<select name="zielgruppe"><option value="">Bitte wählen</option><option>Tennisverein</option><option>Sportverein</option><option>Kommerzieller Betreiber</option><option>Hotel</option><option>Golfclub</option><option>Kommune</option><option>Tourismusverband</option></select></label>
      <label>Court-Hersteller / Partner<input name="hersteller" maxlength="120" placeholder="z. B. Padel Factory"></label>
      <fieldset class="wide"><legend>Kategorie</legend><div class="rf-checks" data-group="kategorien">
        <label><input type="checkbox" value="Padel">Padel</label><label><input type="checkbox" value="Pickleball">Pickleball</label><label><input type="checkbox" value="Tennis">Tennis</label><label><input type="checkbox" value="Halle">Halle</label><label><input type="checkbox" value="Automaten">Automaten</label></div></fieldset>
      <fieldset class="wide"><legend>Unsere Leistungen</legend><div class="rf-checks" data-group="leistungen">
        <label><input type="checkbox" value="Beratung">Beratung</label><label><input type="checkbox" value="Finanzierung">Finanzierung</label><label><input type="checkbox" value="Planung & Architektur">Planung &amp; Architektur</label><label><input type="checkbox" value="Bau">Bau</label><label><input type="checkbox" value="Digitalisierung">Digitalisierung</label><label><input type="checkbox" value="Betrieb">Betrieb</label><label><input type="checkbox" value="Franchise">Franchise</label></div></fieldset>
      <label class="wide">Kurzbeschreibung (für die Kachel)<input name="kurz" maxlength="180" placeholder="Ein Satz, max. 180 Zeichen"></label>
      <label class="wide">Projektbeschreibung<textarea name="text" rows="6" maxlength="4000" placeholder="Ausgangslage, Lösung, Ergebnis. Absätze mit Leerzeile trennen."></textarea></label>
      <div class="wide">
        <div class="rf-lab">Bilder <small>Das erste Bild ist das Titelbild. JPG, PNG oder WebP, werden automatisch verkleinert.</small></div>
        <div class="rf-imgs" id="rfImgs"></div>
        <label class="rf-drop" id="rfDrop"><input type="file" id="rfFile" accept="image/jpeg,image/png,image/webp" multiple><span>Bilder hierher ziehen oder <u>auswählen</u></span></label>
      </div>
      <label class="rf-toggle wide"><input type="checkbox" name="live" checked> Auf der Website anzeigen</label>
    </div>
    <p class="rf-msg" id="rfMsg" role="status"></p>
    <div class="rf-actions">
      <button type="button" class="rf-del" id="rfDel" hidden>Projekt löschen</button>
      <span></span>
      <button type="button" class="btn ghost-l" data-close>Abbrechen</button>
      <button type="submit" class="btn" id="rfSave">Speichern</button>
    </div>
  </form>
</div>
<?php tc_page_end();
