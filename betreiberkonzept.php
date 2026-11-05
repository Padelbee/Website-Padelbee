<?php
require __DIR__ . '/inc/tc/layout.php';
$bausteine = [
    ['Marketing', 'Wir entwickeln deine Marketing-Strategie mit Schärfung der USPs, der Preispolitik und einer differenzierenden Positionierung, um relevante Zielgruppen sofort und dauerhaft für Padel zu begeistern.'],
    ['Business-Plan', 'Wir setzen für dich die Business-Planung auf, definieren KPIs und liefern dir alle notwendigen Planungsunterlagen.'],
    ['Personal', 'Wir definieren mit dir den besten Personal-Mix und die individuellen Zuständigkeiten für reibungslose Prozesse.'],
    ['Automati&shy;sierung', 'Wir beraten dich zu praktischen Automatisierungen und den dazu benötigten Hard- und Software-Komponenten für eine einfache Platzbuchung, Zugangs- und Lichtsteuerung und mehr.'],
];
tc_page_start([
    'path' => '/betreiberkonzept',
    'title' => 'Betreiberkonzept für Padel-Anlagen · THE COURT',
    'description' => 'Maßgeschneidertes Betreiberkonzept für Padel-Anlagen: Marketing-Strategie, Business-Planung mit KPIs, Personal-Mix und Automatisierung für einen erfolgreichen Start.',
    'breadcrumb' => ['Betreiberkonzept' => '/betreiberkonzept'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Betreiberkonzept für Padel-Anlagen',
            'Maßgeschneidertes Betreiberkonzept aufbauend auf das Erstscreening: Marketing-Strategie mit USPs und Preispolitik, Business-Planung mit KPIs, Personal-Mix und Beratung zur Automatisierung von Platzbuchung, Zugangs- und Lichtsteuerung.',
            '/betreiberkonzept',
            ['serviceType' => 'Betreiberkonzept', 'image' => '/media/leistungen/betreiberkonzept-kopf.png']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Betreiberkonzept</p>
      <p class="label" style="color:var(--white)" data-type>Strategie · Business-Plan · Betrieb</p>
      <h1>Betreiber&shy;<span class="kw">konzept.</span></h1>
      <p class="lead">Aufbauend auf das Erstscreening entwickeln wir eine maßgeschneiderte Erfolgsstrategie für deine Anlage. Du erhältst eine individuelle Beratung und ein maßgeschneidertes Betreiberkonzept, damit du mit Padel sofort erfolgreich starten kannst.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:34px"><a class="btn" href="#kontakt">Betreiberkonzept anfragen</a><a class="btn ghost" href="#k-bausteine">4 Bausteine ansehen</a></div>
    </div>
    <figure class="a-herofig" style="aspect-ratio:auto;max-width:520px;border-top:0;overflow:visible"><img src="/media/leistungen/betreiberkonzept-kopf.png" alt="Zwei Padel-Spieler im Gespräch auf dem Court" loading="lazy" style="height:auto;object-fit:contain"></figure>
  </div>
  <div class="inner hero-stats" style="padding-block:0 40px">
    <div class="stats">
      <div><b data-count="4">4</b><span>Bausteine</span></div>
      <div><b data-count="1">1</b><span>Ansprechpartner</span></div>
      <div><b data-count="50">50</b><span>Projekte</span></div>
      <div><b data-count="14" data-pre="+">+14</b><span>Jahre Padel-Erfahrung</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="k-bausteine">
  <div class="inner">
    <p class="label">Betreiberkonzept</p>
    <h2 class="reveal">Für einen erfolgreichen Start mit <span class="hl">Padel.</span></h2>
    <p class="lead">Vier Bausteine machen aus deiner Anlage einen funktionierenden Betrieb: wer deine Zielgruppe ist, was sich rechnet, wer was macht und was automatisch läuft.</p>
    <div class="cards c4">
<?php foreach ($bausteine as $i => $b): ?>
      <article class="card reveal"><div class="k">Baustein <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $b[0] ?></h3><p><?= $b[1] ?></p></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band grid-bg" id="k-weitere" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Vor und nach dem <span class="hl">Konzept.</span></h2>
    <p class="lead">Vorher prüfen wir deinen Standort und bauen deine Plätze, danach bringen wir Spielerinnen und Spieler auf deine Courts.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Standort&shy;analyse</h3><p>Analyse der Chancen am Standort mit konkreter Handlungsempfehlung für dein Vorhaben.</p><a class="btn ghost-d" href="/standortanalyse" style="margin-top:20px">Mehr zur Standortanalyse</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Platzbau</h3><p>Zuverlässige Realisierung von Fundament und Plätzen durch ein eingespieltes Team von Architekten, Ingenieuren und Bauunternehmen.</p><a class="btn ghost-d" href="/padel-court-bauen" style="margin-top:20px">Mehr zum Platzbau</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>PowerPlay®</h3><p>Marketingplan, Platzbuchungssoftware und Werbepakete digital und lokal, für die laufende Gewinnung von Spielerinnen und Spielern.</p><a class="btn ghost-d" href="/powerplay" style="margin-top:20px">Mehr zu PowerPlay®</a></article>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Maßgeschneidertes Betreiberkonzept']; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
