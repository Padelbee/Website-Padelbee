<?php
require __DIR__ . '/inc/tc/layout.php';
$partnership = [
    ['Service', 'Der volle Service von Padelbee, damit es nicht beim Startschuss bleibt und Padel an deinem Standort erfolgreich wird und bleibt.'],
    ['Beratung', 'Padelbee steht laufend beratend &amp; analysierend an deiner Seite, um jederzeit die richtigen Maßnahmen zu ergreifen.'],
    ['Digitali&shy;sierung', 'Padelbee liefert dir alle Tools zur Digitalisierung und Automatisierung des Spielbetriebs.'],
    ['Spieler gewinnen', 'Und das Beste: Padelbee gewinnt für dich neue Spieler*innen.'],
];
$mix = [
    ['Marketing-Business-Mix', 'Online Booking', '/images/Online-Booking.jpg', 'Smartphone mit geöffneter Padel-Buchungsapp', ['Aufschaltung auf die größte Padel-Buchungsplattform', 'Online Payment der Buchungen', 'Zugangssteuerung zu Plätzen']],
    ['Marketing-Business-Mix', 'Events &amp; Get-togethers', '/images/Events.jpg', 'Padel-Event mit vielen Spielern auf mehreren Courts', ['Eventkalender für Aktive und Beginner', 'Preispolitik inklusive', 'Die passende Werbung dazu']],
    ['Marketing-Business-Mix', 'Turniere &amp; Trainings', '/images/Turniere-und-Trainings.jpg', 'Padel-Training mit Trainer und Spielerin auf dem Court', ['Innovative Trainings- und Spielkonzepte', 'Für Beginner und Fortgeschrittene', 'Preispolitik inklusive']],
    ['Marketing-Business-Mix', 'Marketing &amp; Werbung', '/images/Marketing-Werbung.jpg', 'Laptop und Smartphone mit Social-Media-Seite eines Padel-Clubs', ['Wir vermarkten deine Angebote via Website, Landingpages &amp; Online Marketing', 'Wir liefern dir individuelle Werbemittel für Social Networks und lokales Marketing']],
    ['Das perfekte Round-Up', 'Coaching &amp; Consulting', '/images/Coaching-und-Consulting.jpg', 'Berater erklärt eine Strategie an einer Glaswand', ['Jährliche Season-Kickoff-Veranstaltung', 'Monatliche KPI-Analyse &amp; Optimierungsgespräche', 'Trainerausbildung']],
    ['Das perfekte Round-Up', 'Verkauf &amp; Verleih', '/images/Verkauf-und-Verleih.jpg', 'Verkaufs- und Verleihautomaten für Padel-Zubehör und Getränke', ['100% digitalisierte Verkaufs- und Verleihautomaten', 'Für Schläger, Bälle, Zubehör, Getränke und mehr', 'Payment Abwicklung inklusive']],
];
tc_page_start([
    'path' => '/powerplay',
    'title' => 'Padelbee PowerPlay® · Marketing und Business-Support für Padel-Anlagen · THE COURT',
    'description' => 'Padelbee PowerPlay®: Marketing und Business-Support für nachhaltigen Padel-Erfolg. Online Booking, Events, Turniere, Marketing, Coaching und Automaten.',
    'breadcrumb' => ['Padelbee PowerPlay®' => '/powerplay'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Padelbee PowerPlay®',
            'Marketing- und Business-Support für Padel-Anlagen: Online Booking mit Payment und Zugangssteuerung, Events, Turniere und Trainings, Marketing und Werbemittel, Coaching mit monatlicher KPI-Analyse sowie digitalisierte Verkaufs- und Verleihautomaten.',
            '/powerplay',
            ['serviceType' => 'Marketing und Betriebsunterstützung für Padel-Anlagen', 'image' => '/media/leistungen/powerplay-kopf.png']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Padelbee PowerPlay®</p>
      <p class="label" style="color:var(--white)" data-type>Partnership · Marketing · Spielbetrieb</p>
      <h1 class="pp-h1">Padelbee <span class="kw">PowerPlay®</span></h1>
      <p class="lead">Werde Teil des Booms und setze auf unser einzigartiges wie bewährtes Padelbee PowerPlay®. Mit der Padelbee Partnership genießt du den vollen Service, damit du Spieler*innen nicht nur gewinnst, sondern auch langfristig begeisterst.</p>
    </div>
    <div class="hero-art foto"><img src="/media/leistungen/powerplay-hero.png?v=3" alt="Padel-Spielerin in Bereitschaftsstellung auf dem Court"></div>
  </div>
</section>

<section class="band grid-bg" id="p-partnership">
  <div class="inner">
    <p class="label">Padelbee Partnership</p>
    <h2 class="reveal">Damit es nicht beim <span class="hl">Startschuss</span> bleibt.</h2>
    <div class="cards c4">
<?php foreach ($partnership as $i => $b): ?>
      <article class="card reveal"><div class="k">Partnership <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $b[0] ?></h3><p><?= $b[1] ?></p></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="p-mix">
  <div class="inner">
    <p class="label">Leistungen</p>
    <h2 class="reveal">Der Marketing-Business-Mix von <span class="kw">Padelbee.</span></h2>
    <div class="halls h4">
<?php foreach (array_slice($mix, 0, 4) as $m): ?>
      <article class="card reveal"><figure class="vimg"><img src="<?= $m[2] ?>" alt="<?= $m[3] ?>" loading="lazy"></figure><div class="k"><?= $m[0] ?></div><h3 data-type><?= $m[1] ?></h3><ul><?php foreach ($m[4] as $li): ?><li><?= $li ?></li><?php endforeach; ?></ul></article>
<?php endforeach; ?>
    </div>
    <p class="label" style="margin-top:72px">Das perfekte Round-Up</p>
    <h2 class="reveal">Padelbee leistet &amp; <span class="kw">organisiert.</span></h2>
    <div class="halls">
<?php foreach (array_slice($mix, 4) as $m): ?>
      <article class="card reveal"><figure class="vimg"><img src="<?= $m[2] ?>" alt="<?= $m[3] ?>" loading="lazy"></figure><div class="k"><?= $m[0] ?></div><h3 data-type><?= $m[1] ?></h3><ul><?php foreach ($m[4] as $li): ?><li><?= $li ?></li><?php endforeach; ?></ul></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band grid-bg" id="p-weitere" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Weitere Leistungen von <span class="hl">Padelbee.</span></h2>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Initiale Standort&shy;analyse</h3><p>Analyse der Chancen am Standort mit konkreter Handlungsempfehlung für dein Vorhaben.</p><a class="btn ghost-d" href="/standortanalyse" style="margin-top:20px">Mehr zur Standortanalyse</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Realisierung Platzbau &amp; Baubegleitung</h3><p>Zuverlässige Realisierung von Fundament und Plätzen durch ein eingespieltes Team von Architekten, Ingenieuren und Bauunternehmen.</p><a class="btn ghost-d" href="/padel-court-bauen" style="margin-top:20px">Mehr zum Platzbau</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Entwicklung maßgeschneidertes Betreiber&shy;konzept</h3><p>Business-Plan, Angebots- und Marketing-Strategie für eine erfolgreiche Positionierung und einen reibungslosen Start am Standort.</p><a class="btn ghost-d" href="/betreiberkonzept" style="margin-top:20px">Mehr zum Betreiberkonzept</a></article>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Padelbee Powerplay']; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
