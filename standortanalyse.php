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
    'description' => 'Erstscreening für Padel-Anlagen: Standort- & Marktanalyse, technische Vorprüfung, Wirtschaftlichkeitsanalyse, Konzeptvisualisierung und klare Go/No-Go-Empfehlung.',
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
      <p class="label" style="color:var(--white)" data-type>Standortanalyse · Markt · Business&nbsp;Case</p>
      <h1 class="sa-h1">Erstscreening.<br>Erst <span class="kw">prüfen.</span></h1>
      <p class="lead">Vom Start weg helfen wir dir, deine Chancen richtig zu bewerten, Investments sinnvoll zu planen und die Weichen zu stellen, damit Padel auch an deinem Standort boomt.</p>
    </div>
    <div class="sa-wrap"><svg class="sa-art" viewBox="0 0 400 400" role="img" aria-label="Stadtkarte mit gelber Stecknadel als Symbol für die Standortanalyse"><defs><mask id="saHex"><polygon points="356.5,233.3 249.4,352.2 92.9,318.9 43.5,166.7 150.6,47.8 307.1,81.1" fill="#fff" stroke="#fff" stroke-width="34" stroke-linejoin="round"/></mask></defs><g mask="url(#saHex)"><rect width="400" height="400" fill="#0E3B3B"/><g class="sa-roads"><line x1="-20" y1="-70" x2="420" y2="-98" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="-32" x2="420" y2="-66" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="0" x2="420" y2="-10" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="29" x2="420" y2="29" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="62" x2="420" y2="57" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="97" x2="420" y2="64" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="135" x2="420" y2="161" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="165" x2="420" y2="143" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="206" x2="420" y2="241" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="239" x2="420" y2="231" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="278" x2="420" y2="241" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="310" x2="420" y2="293" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="336" x2="420" y2="305" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="372" x2="420" y2="397" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="404" x2="420" y2="411" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="444" x2="420" y2="433" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-71" y1="-20" x2="-98" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-41" y1="-20" x2="-59" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="2" y1="-20" x2="-2" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="34" y1="-20" x2="39" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="71" y1="-20" x2="59" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="112" y1="-20" x2="123" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="141" y1="-20" x2="145" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="180" y1="-20" x2="203" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="219" y1="-20" x2="206" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="258" y1="-20" x2="235" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="287" y1="-20" x2="302" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="320" y1="-20" x2="319" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="354" y1="-20" x2="365" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="399" y1="-20" x2="404" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="437" y1="-20" x2="425" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="470" y1="-20" x2="476" y2="420" stroke="#2A6B66" stroke-width="1.2" opacity="0.7"/><line x1="-20" y1="90" x2="420" y2="150" stroke="#2A6B66" stroke-width="3" opacity="0.9"/><line x1="-20" y1="300" x2="420" y2="250" stroke="#2A6B66" stroke-width="3" opacity="0.9"/><line x1="120" y1="-20" x2="170" y2="420" stroke="#2A6B66" stroke-width="3" opacity="0.9"/><line x1="330" y1="-20" x2="280" y2="420" stroke="#2A6B66" stroke-width="3" opacity="0.9"/><path d="M-20 210 Q120 170 200 200 T420 190" fill="none" stroke="#2A6B66" stroke-width="3" opacity=".9"/></g><path d="M303.4 232.0 L292.4 258.6 L278.2 286.4 L243.4 304.9 L200.0 301.9 L159.5 300.0 L137.0 275.8 L101.4 260.4 L94.7 232.0 L93.9 201.4 L122.2 177.8 L163.5 170.8 L200.0 163.8 L240.5 164.0 L262.2 188.7 L292.5 205.3 Z" fill="#A3C9C2" fill-opacity=".07" stroke="#A3C9C2" stroke-width="2.5" stroke-linejoin="round" pathLength="1" class="sa-area"/></g><polygon points="385.8,239.5 258.7,380.7 72.9,341.2 14.2,160.5 141.3,19.3 327.1,58.8" fill="none" stroke="#CCFF00" stroke-width="3" stroke-linejoin="round" pathLength="1" class="sa-hex"/><ellipse cx="200" cy="236" rx="16" ry="6" fill="#001A1A" opacity=".6" class="sa-shadow"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse" style="animation-delay:1.2s"/><g class="sa-pin"><path d="M200 234 C200 234 160 186 160 156 A40 40 0 1 1 240 156 C240 186 200 234 200 234 Z" fill="#CCFF00"/><path d="M200 234 C200 234 160 186 160 156 A40 40 0 0 1 200 116 L200 234Z" fill="#000" opacity=".08"/><circle cx="200" cy="155" r="15" fill="#002424"/></g></svg></div>
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
