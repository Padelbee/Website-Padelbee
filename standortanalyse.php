<?php
require __DIR__ . '/inc/tc/layout.php';
$bausteine = [
    ['Standort- &amp; Markt&shy;analyse', 'Bewertung von Lage, Einzugsgebiet, Wettbewerb, Zielgruppen sowie erste Nachfrage- und Auslastungsprognose.'],
    ['Technische &amp; bauliche Vorprüfung', 'Einschätzung der baulichen Machbarkeit inklusive Untergrund, Anschlüssen und möglicher Court-Layouts.'],
    ['Wirtschaftlichkeits&shy;analyse / Business Case', 'Investitions-, Kosten- und Umsatzplanung inklusive 5-Jahres-Prognose, Break-even, ROI und Szenarienrechnung.'],
    ['Erste Konzept&shy;visualisierung', 'Moodboard, grobes Layout (2D/3D) sowie Optionen für Erweiterungen wie Gastro oder Zusatzflächen.'],
    ['Beratung &amp; Entscheidungs&shy;vorlage', 'Ergebnispräsentation mit klarer Go/No-Go-Empfehlung und konkreter Umsetzungs-Roadmap.'],
];
tc_page_start([
    'path' => '/standortanalyse',
    'title' => 'Standortanalyse & Erstscreening für Padel-Anlagen · THE COURT',
    'description' => 'Erstscreening für Padel-Anlagen: Standort- und Marktanalyse, technische Vorprüfung, Business Case, Konzeptvisualisierung und Go/No-Go-Empfehlung.',
    'breadcrumb' => ['Standortanalyse' => '/standortanalyse'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Standortanalyse & Erstscreening für Padel-Anlagen',
            'Standort- und Marktanalyse, technische und bauliche Vorprüfung, Wirtschaftlichkeitsanalyse mit 5-Jahres-Prognose, erste Konzeptvisualisierung und Go/No-Go-Empfehlung für geplante Padel-Anlagen.',
            '/standortanalyse',
            ['serviceType' => 'Standortanalyse', 'image' => '/media/leistungen/standortanalyse-karte.png']
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
      <p class="lead">Vom Start weg helfen wir dir, deine Chancen richtig zu bewerten, Investments sinnvoll zu planen und die Weichen zu stellen, damit Padel auch an deinem Standort boomt.</p>
    </div>
    <figure class="a-herofig" style="aspect-ratio:auto;max-width:520px;border-top:0;overflow:visible"><img src="/media/leistungen/standortanalyse-karte.png" alt="Stadtkarte mit Pin als Symbol für die Standortanalyse" loading="lazy" style="height:auto;object-fit:contain"></figure>
  </div>
</section>

<section class="band grid-bg" id="s-bausteine">
  <div class="inner">
    <p class="label">Erstscreening</p>
    <h2 class="reveal">Für eine starke Marktstrategie an deinem <span class="hl">Standort.</span></h2>
    <div class="cards c3">
<?php foreach ($bausteine as $i => $b): ?>
      <article class="card reveal"><div class="k">Baustein <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $b[0] ?></h3><p><?= $b[1] ?></p></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band grid-bg" id="s-weitere" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Weitere Leistungen von <span class="hl">Padelbee.</span></h2>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Realisierung Platzbau &amp; Baubegleitung</h3><p>Zuverlässige Realisierung von Fundament und Plätzen durch ein eingespieltes Team von Architekten, Ingenieuren und Bauunternehmen.</p><a class="btn ghost-d" href="/padel-court-bauen" style="margin-top:20px">Mehr zum Platzbau</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Entwicklung maßgeschneidertes Betreiber&shy;konzept</h3><p>Business-Plan, Angebots- und Marketing-Strategie für eine erfolgreiche Positionierung und einen reibungslosen Start am Standort.</p><a class="btn ghost-d" href="/betreiberkonzept" style="margin-top:20px">Mehr zum Betreiberkonzept</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Vermarktung heute und in Zukunft</h3><p>Marketingplan, Platzbuchungssoftware und Werbepakete digital &amp; lokal, für die laufende Gewinnung von Spieler*innen.</p><a class="btn ghost-d" href="/powerplay" style="margin-top:20px">Mehr zu PowerPlay®</a></article>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Erstscreening']; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
