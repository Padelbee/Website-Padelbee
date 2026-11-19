<?php
require __DIR__ . '/inc/tc/layout.php';

// Referenzprojekte: eine Datenquelle für Server-HTML (SEO) und referenzen.js (Filter, Detailansicht).
$refs = json_decode((string) file_get_contents(__DIR__ . '/inc/tc/referenzen-data.json'), true) ?: [];
$refs = array_values(array_filter($refs, fn($p) => ($p['live'] ?? true) !== false));
usort($refs, fn($a, $b) =>
    [count($b['bilder'] ?? []) > 0, $b['jahr'] ?? 0, $b['created'] ?? 0]
    <=> [count($a['bilder'] ?? []) > 0, $a['jahr'] ?? 0, $a['created'] ?? 0]);
$year = (int) date('Y');
$refCourts = array_sum(array_map(fn($p) => (!($p['jahr'] ?? 0) || $p['jahr'] <= $year) ? (int) ($p['courts'] ?? 0) : 0, $refs));
$refJson = json_encode($refs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP);

$refSchema = tc_schema_item_list('Referenzprojekte von Padelbee', array_map(fn($p) => [
    '@type' => 'SportsActivityLocation',
    'name' => $p['titel'],
    'description' => $p['kurz'] ?: null,
    'address' => ['@type' => 'PostalAddress', 'addressLocality' => $p['ort'], 'addressCountry' => $p['land'] ?: 'Deutschland'],
], $refs));

tc_page_start([
    'path' => '/referenzen',
    'title' => 'Referenzen · Padel-Projekte, die wir bewegt haben · THE COURT',
    'description' => 'Referenzen von Padelbee: Padel-Courts und Hallen für Tennisvereine, Betreiber und Kommunen, vom Scheck Club München bis Konradsreuth und Mainburg.',
    'breadcrumb' => ['Referenzen' => '/referenzen'],
    'page_type' => 'CollectionPage',
    'schema' => [$refSchema],
    'extra_scripts' => '<script>window.REF_STATIC=' . $refJson . ';</script>' . "\n"
        . '<script src="/media/tc/referenzen.js?v=' . TC_ASSET_VERSION . '"></script>',
]);
?>
<section class="band dark grid-bg r-hero">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Referenzen</p>
    <p class="label" style="color:var(--white)" data-type>Referenzen</p>
    <h1>Projekte, die wir <span class="kw">bewegt haben.</span></h1>
    <p class="lead">Wir entwickeln, planen und bauen Padel-Anlagen für Tennisvereine, Sportvereine, Betreiber und Kommunen in ganz Deutschland. Entdecke eine Auswahl unserer Projekte.</p>
    <div class="c-stats r-stats" style="margin-top:44px">
      <div><b id="rsProj"><?= count($refs) ?></b><span>Projekte</span></div>
      <div><b id="rsCourts"><?= $refCourts ?></b><span>Courts</span></div>
      <div><b>12</b><span>Courts in unserer Referenzanlage</span></div>
    </div>
  </div>
</section>

<section class="band" id="r-liste">
  <div class="inner">
    <div class="r-top">
      <div>
        <p class="label">Referenzen</p>
        <h2 class="reveal">Padel-Anlagen in ganz <span class="hl">Deutschland.</span></h2>
        <p class="lead">Unsere eigene Referenzanlage ist der <a href="/team">Scheck Club in Unterföhring bei München</a>. Mit 12 Padel-Courts ist er eine der größten Anlagen Deutschlands. Von hier aus begleiten wir Projekte jeder Größe, von zwei Outdoor-Courts auf einem Tennisplatz über <a href="/courts">mobile Court-Plattformen</a> bis zur neuen <a href="/halle">Padel-Halle</a>.</p>
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
    <div class="refs" id="refs" aria-live="polite">
<?php foreach ($refs as $p):
    $imgs = $p['bilder'] ?? [];
    $geplant = (($p['jahr'] ?? 0) > $year) || stripos((string) $p['titel'], 'planung') !== false;
    $meta = implode(' · ', array_filter([$p['ort'] ?? '', ($p['land'] ?? '') !== 'Deutschland' ? ($p['land'] ?? '') : '', $p['zielgruppe'] ?? '']));
?>
      <button type="button" class="ref" onclick="location.hash='referenzen/<?= tc_h($p['id']) ?>'">
        <figure>
<?php if ($imgs): ?>
          <img src="<?= tc_h($imgs[0]['url'] ?? '') ?>" alt="<?= tc_h(($imgs[0]['alt'] ?? '') ?: $p['titel'] . ' in ' . $p['ort']) ?>" loading="lazy">
<?php else: ?>
          <div class="noimg court-ph"><span><?= $geplant ? 'In Planung' : 'Bilder folgen' ?></span></div>
<?php endif; ?>
<?php if (!empty($p['jahr'])): ?>          <span class="badge"><?= (int) $p['jahr'] ?></span>
<?php endif; ?>
<?php if (count($imgs) > 1): ?>          <span class="nimg"><?= count($imgs) ?> Bilder</span>
<?php endif; ?>
        </figure>
        <div class="rb">
          <div class="pk"><?= tc_h($meta) ?></div>
          <h3><?= tc_h($p['titel']) ?></h3>
<?php if (!empty($p['kurz'])): ?>          <p><?= tc_h($p['kurz']) ?></p>
<?php endif; ?>
          <div class="rf"><?php if ((int) ($p['courts'] ?? 0)): ?><span><?= (int) $p['courts'] ?> Courts</span><?php endif; foreach (array_slice($p['kategorien'] ?? [], 0, 3) as $k): ?><span><?= tc_h($k) ?></span><?php endforeach; ?></div>
        </div>
      </button>
<?php endforeach; ?>
    </div>
    <div class="r-empty" id="rEmpty" hidden>
      <h3>Referenzen folgen in Kürze.</h3>
      <p>Wir stellen hier gerade unsere abgeschlossenen Projekte zusammen. Bis dahin zeigt dir die <a href="/#projekte">Projektkarte</a> alle 50 Standorte.</p>
    </div>
    <p class="r-hint" id="rHint" hidden></p>
  </div>
</section>

<section class="band dark grid-bg">
  <div class="inner cta-band">
    <div style="max-width:760px">
      <h2>Dein Projekt ist das <span class="kw">nächste.</span></h2>
      <p class="lead" style="margin:16px 0 0">Gemeinsam entwickeln wir eine Lösung, die funktional überzeugt und deine Anlage klar und unverwechselbar positioniert.</p>
    </div>
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
