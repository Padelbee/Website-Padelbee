<?php
require __DIR__ . '/inc/tc/layout.php';
$bausteine = [
    ['Markt <span class="hl">&amp;</span> Standort', 'Standort- und Marktanalyse', 'Bewertung von Lage, Einzugsgebiet, Wettbewerb und Zielgruppen sowie eine erste Nachfrage- und Auslastungsprognose.'],
    ['Technik <span class="hl">&amp;</span> Bau', 'Technische und bauliche Vorprüfung', 'Einschätzung der baulichen Machbarkeit inklusive Untergrund, Anschlüssen und möglicher Court-Layouts.'],
    ['Business Case', 'Wirtschaftlichkeitsanalyse', 'Investitions-, Kosten- und Umsatzplanung inklusive 5-Jahres-Prognose, Break-even, ROI und Szenarienrechnung.'],
    ['Konzept', 'Erste Konzeptvisualisierung', 'Moodboard, grobes Layout in 2D oder 3D sowie Optionen für Erweiterungen wie Gastro oder Zusatzflächen.'],
    ['Go/No-Go', 'Beratung und Entscheidungsvorlage', 'Ergebnispräsentation mit klarer Go/No-Go-Empfehlung und konkreter Umsetzungs-Roadmap.'],
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
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Standortanalyse</p>
      <p class="label" style="color:var(--white)" data-type>Erstscreening · Markt · Business Case</p>
      <h1>Standort&shy;analyse.<br>Erst <span class="kw">prüfen.</span></h1>
      <p class="lead">Vom Start weg helfen wir dir, deine Chancen richtig zu bewerten, Investments sinnvoll zu planen und die Weichen zu stellen, damit Padel auch an deinem Standort boomt. Für eine starke Marktstrategie, bevor der erste Spatenstich gesetzt ist.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:34px"><a class="btn" href="/#kontakt">Erstscreening anfragen</a><a class="btn ghost" href="#s-bausteine">Leistungen ansehen</a></div>
    </div>
    <figure class="a-herofig" style="aspect-ratio:auto;max-width:520px;border-top:0;overflow:visible"><img src="/images/pic_standortanalyse.png" alt="Stadtkarte mit Pin als Symbol für die Standortanalyse" loading="lazy" style="height:auto;object-fit:contain;animation:none"></figure>
  </div>
  <div class="inner hero-stats" style="padding-block:0 40px">
    <div class="stats">
      <div><b data-count="5">5</b><span>Bausteine</span></div>
      <div><b data-count="5">5</b><span>Jahre Prognose</span></div>
      <div><b>2D/3D</b><span>Visualisierung</span></div>
      <div><b data-count="1">1</b><span>Klare Empfehlung</span></div>
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
      <article class="card reveal"><div class="k">Baustein <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $b[0] ?></h3><p><strong><?= $b[1] ?>:</strong> <?= $b[2] ?></p></article>
<?php endforeach; ?>
      <article class="card dk reveal"><div class="k">Dein nächster Schritt</div><h3 data-type style="color:var(--white)">Dein <span class="kw">Standort?</span></h3><p>Lohnt sich Padel bei dir? Erzähl uns von deinem Standort. Wir melden uns mit einer ersten Einschätzung und dem passenden Umfang für dein Erstscreening.</p><a class="btn" href="/#kontakt" style="margin-top:20px">Standort prüfen lassen</a></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="s-weitere">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Nach der Analyse geht es <span class="kw">weiter.</span></h2>
    <p class="lead">Ist die Entscheidung gefallen, begleiten wir dich vom Platzbau über das Betreiberkonzept bis zur Vermarktung.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Platzbau</h3><p><strong>Realisierung Platzbau und Baubegleitung:</strong> Zuverlässige Realisierung von Fundament und Plätzen durch ein eingespieltes Team von Architekten, Ingenieuren und Bauunternehmen.</p><a class="btn ghost" href="/padel-court-bauen" style="margin-top:20px">Mehr zum Platzbau</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Betreiber&shy;konzept</h3><p><strong>Maßgeschneidertes Betreiberkonzept:</strong> Business-Plan, Angebots- und Marketing-Strategie für eine erfolgreiche Positionierung und einen reibungslosen Start am Standort.</p><a class="btn ghost" href="/betreiberkonzept" style="margin-top:20px">Mehr zum Betreiberkonzept</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>PowerPlay®</h3><p><strong>Vermarktung heute und in Zukunft:</strong> Marketingplan, Platzbuchungssoftware und Werbepakete digital und lokal, für die laufende Gewinnung von Spielerinnen und Spielern.</p><a class="btn ghost" href="/powerplay" style="margin-top:20px">Mehr zu PowerPlay®</a></article>
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
