<?php
require __DIR__ . '/inc/tc/layout.php';
$bausteine = [
    ['Markt', 'Standort- &amp; Marktanalyse', 'Bewertung von Lage, Einzugsgebiet, Wettbewerb und Zielgruppen sowie eine erste Nachfrage- und Auslastungsprognose.'],
    ['Technik', 'Technische &amp; bauliche Vorprüfung', 'Einschätzung der baulichen Machbarkeit inklusive Untergrund, Anschlüssen und möglicher Court-Layouts.'],
    ['Zahlen', 'Wirtschaftlichkeitsanalyse / Business Case', 'Investitions-, Kosten- und Umsatzplanung inklusive 5-Jahres-Prognose, Break-even, ROI und Szenarienrechnung.'],
    ['Konzept', 'Erste Konzeptvisualisierung', 'Moodboard, grobes Layout in 2D oder 3D sowie Optionen für Erweiterungen wie Gastro oder Zusatzflächen.'],
    ['Entscheidung', 'Beratung &amp; Entscheidungsvorlage', 'Ergebnispräsentation mit klarer Go/No-Go-Empfehlung und konkreter Umsetzungs-Roadmap.'],
];
tc_page_start([
    'path' => '/standortanalyse',
    'title' => 'Standortanalyse & Erstscreening für Padel-Anlagen · THE COURT',
    'description' => 'Erstscreening für Padel-Anlagen: Standort- und Marktanalyse, technische Vorprüfung, Business Case, Konzeptvisualisierung und Go/No-Go-Empfehlung.',
    'breadcrumb' => ['Standortanalyse' => '/standortanalyse'],
    'schema' => [
        tc_schema_service(
            'Standortanalyse & Erstscreening für Padel-Anlagen',
            'Standort- und Marktanalyse, technische und bauliche Vorprüfung, Wirtschaftlichkeitsanalyse mit 5-Jahres-Prognose, erste Konzeptvisualisierung und Go/No-Go-Empfehlung für geplante Padel-Anlagen.',
            '/standortanalyse',
            ['serviceType' => 'Standortanalyse', 'image' => '/images/pic_standortanalyse.png']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Standortanalyse</p>
      <p class="label" style="color:var(--white)" data-type>Erstscreening · Markt · Business Case</p>
      <h1>Standort&shy;analyse.<br>Erst <span class="kw">prüfen.</span></h1>
      <p class="lead">Vom Start weg helfen wir dir, deine Chancen richtig zu bewerten, Investments sinnvoll zu planen und die Weichen zu stellen, damit Padel auch an deinem Standort boomt. Für eine starke Marktstrategie, bevor der erste Spatenstich gesetzt ist.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="/#kontakt">Erstscreening anfragen</a><a class="btn ghost" href="#s-bausteine">Leistungen ansehen</a></div>
    </div>
    <figure class="a-herofig" style="aspect-ratio:auto;max-width:520px;border-top:0;overflow:visible"><img src="/images/pic_standortanalyse.png" alt="Stadtkarte mit Pin als Symbol für die Standortanalyse" loading="lazy" style="height:auto;object-fit:contain;animation:none"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b data-count="5">5</b><span>Bausteine im Erstscreening</span></div>
      <div><b data-count="5">5</b><span>Jahre Prognose</span></div>
      <div><b>2D/3D</b><span>Konzeptvisualisierung</span></div>
      <div><b>Go/No-Go</b><span>Klare Empfehlung</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="s-bausteine">
  <div class="inner">
    <p class="label">Erstscreening</p>
    <h2 class="reveal">Fünf Bausteine. Eine klare <span class="hl">Entscheidung.</span></h2>
    <p class="lead">Das Erstscreening zeigt dir, ob und wie sich Padel an deinem Standort rechnet. Am Ende steht eine belastbare Entscheidungsvorlage statt eines Bauchgefühls.</p>
    <div class="cards c3">
<?php foreach ($bausteine as $i => $b): ?>
      <article class="card reveal"><div class="k"><?= sprintf('%02d', $i + 1) ?> · <?= $b[0] ?></div><h3><?= $b[1] ?></h3><p><?= $b[2] ?></p></article>
<?php endforeach; ?>
      <article class="card reveal" style="background:var(--petrol);color:var(--white);border-color:var(--petrol)"><div class="k" style="color:var(--petrol-200)">Dein nächster Schritt</div><h3 style="color:var(--yellow)">Lohnt sich Padel bei dir?</h3><p style="color:var(--petrol-200)">Erzähl uns von deinem Standort. Wir melden uns mit einer ersten Einschätzung und dem passenden Umfang für dein Erstscreening.</p><a class="btn" href="/#kontakt" style="margin-top:20px">Standort prüfen lassen</a></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="s-weitere">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Nach der Analyse geht es <span class="kw">weiter.</span></h2>
    <p class="lead">Ist die Entscheidung gefallen, begleiten wir dich vom Platzbau über das Betreiberkonzept bis zur Vermarktung.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Bauplanung</div><h3>Realisierung Platzbau &amp; Baubegleitung</h3><p>Zuverlässige Realisierung von Fundament und Plätzen durch ein eingespieltes Team von Architekten, Ingenieuren und Bauunternehmen.</p><a class="btn ghost" href="/padel-court-bauen" style="margin-top:20px">Mehr zum Platzbau</a></article>
      <article class="card reveal"><div class="k">Betreiberkonzept</div><h3>Maßgeschneidertes Betreiberkonzept</h3><p>Business-Plan, Angebots- und Marketing-Strategie für eine erfolgreiche Positionierung und einen reibungslosen Start am Standort.</p><a class="btn ghost" href="/betreiberkonzept" style="margin-top:20px">Mehr zum Betreiberkonzept</a></article>
      <article class="card reveal"><div class="k">PowerPlay®</div><h3>Vermarktung heute und in Zukunft</h3><p>Marketingplan, Platzbuchungssoftware und Werbepakete digital und lokal, für die laufende Gewinnung von Spielerinnen und Spielern.</p><a class="btn ghost" href="/powerplay" style="margin-top:20px">Mehr zu PowerPlay®</a></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg">
  <div class="inner cta-band">
    <h2>Let's check <span class="kw">your spot.</span></h2>
    <a class="btn" href="/#kontakt">Beratungsgespräch anfragen</a>
  </div>
</section>
<?php tc_page_end();
