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
    <div class="sa-wrap"><svg class="sa-art" viewBox="0 0 400 400" role="img" aria-label="Stadtkarte mit gelber Stecknadel als Symbol für die Standortanalyse"><defs><radialGradient id="saFadeG" cx="50%" cy="56%" r="50%"><stop offset="0" stop-color="#fff"/><stop offset=".55" stop-color="#fff" stop-opacity=".85"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></radialGradient><mask id="saFadeM"><rect width="400" height="400" fill="url(#saFadeG)"/></mask></defs><g mask="url(#saFadeM)" class="sa-map"><g transform="rotate(-14 200 200)"><line x1="-300" y1="-28" x2="700" y2="-28" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-28" y1="-300" x2="-28" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="10" x2="700" y2="10" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="10" y1="-300" x2="10" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="48" x2="700" y2="48" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="48" y1="-300" x2="48" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="86" x2="700" y2="86" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="86" y1="-300" x2="86" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="124" x2="700" y2="124" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="124" y1="-300" x2="124" y2="700" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="-300" y1="162" x2="700" y2="162" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="162" y1="-300" x2="162" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="200" x2="700" y2="200" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="200" y1="-300" x2="200" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="238" x2="700" y2="238" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="238" y1="-300" x2="238" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="276" x2="700" y2="276" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="276" y1="-300" x2="276" y2="700" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="-300" y1="314" x2="700" y2="314" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="314" y1="-300" x2="314" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="352" x2="700" y2="352" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="352" y1="-300" x2="352" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="390" x2="700" y2="390" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="390" y1="-300" x2="390" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="428" x2="700" y2="428" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="428" y1="-300" x2="428" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/></g></g><circle cx="200" cy="236" r="96" fill="#A3C9C2" fill-opacity=".06" class="sa-map"/><circle cx="200" cy="236" r="96" fill="none" stroke="#A3C9C2" stroke-width="1.5" stroke-dasharray="4 9" opacity=".8" class="sa-zone"/><ellipse cx="200" cy="236" rx="14" ry="5" fill="#001A1A" opacity=".55" class="sa-shadow"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse" style="animation-delay:1.2s"/><g class="sa-pin"><path d="M200 234 C200 234 162 188 162 158 A38 38 0 1 1 238 158 C238 188 200 234 200 234 Z" fill="#CCFF00"/><circle cx="200" cy="157" r="14" fill="#002424"/></g></svg></div>
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
