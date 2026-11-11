<?php
require __DIR__ . '/inc/tc/layout.php';
$bausteine = [
    ['Marketing', 'Wir entwickeln deine Marketing-Strategie mit Schärfung der USPs, der Preispolitik und einer differenzierenden Positionierung, um relevante Zielgruppen sofort und dauerhaft für Padel zu begeistern.'],
    ['Business-Plan', 'Wir setzen für dich die Business-Planung auf, definieren KPIs und liefern dir alle notwendigen Planungsunterlagen.'],
    ['Personal', 'Wir definieren mit dir den besten Personal-Mix und die individuellen Zuständigkeiten für reibungslose Prozesse.'],
    ['Automati&shy;sierung', 'Wir beraten dich zu praktischen Automatisierungen und den dazu benötigten Hard-/Software-Komponenten für eine einfache Platzbuchung, Zugangs- und Lichtsteuerung und mehr.'],
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
      <p class="lead">Aufbauend auf das Erstscreening entwickelt Padelbee eine maßgeschneiderte Erfolgsstrategie für deine Anlage, heißt: Du erhältst eine individuelle Beratung und ein maßgeschneidertes Betreiberkonzept, damit du mit Padel sofort erfolgreich starten kannst.</p>
    </div>
    <div class="hero-art foto"><img src="/media/leistungen/betreiberkonzept-hero.png?v=2" alt="Zwei Padel-Spieler im Gespräch auf dem Court"></div>
  </div>
</section>

<section class="band grid-bg" id="k-bausteine">
  <div class="inner">
    <p class="label">Betreiberkonzept</p>
    <h2 class="reveal">Für einen erfolgreichen Start mit <span class="hl">Padel.</span></h2>
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
    <h2 class="reveal">Weitere Leistungen von <span class="hl">Padelbee.</span></h2>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Initiale Standort&shy;analyse</h3><p>Analyse der Chancen am Standort mit konkreter Handlungsempfehlung für dein Vorhaben.</p><a class="btn ghost-d" href="/standortanalyse" style="margin-top:20px">Mehr zur Standortanalyse</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Realisierung Platzbau &amp; Baubegleitung</h3><p>Zuverlässige Realisierung von Fundament und Plätzen durch ein eingespieltes Team von Architekten, Ingenieuren und Bauunternehmen.</p><a class="btn ghost-d" href="/padel-court-bauen" style="margin-top:20px">Mehr zum Platzbau</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Vermarktung heute und in Zukunft</h3><p>Marketingplan, Platzbuchungssoftware und Werbepakete digital &amp; lokal, für die laufende Gewinnung von Spieler*innen.</p><a class="btn ghost-d" href="/powerplay" style="margin-top:20px">Mehr zu PowerPlay®</a></article>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Maßgeschneidertes Betreiberkonzept']; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
