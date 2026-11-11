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
    <div class="sa-wrap"><svg class="sa-art" viewBox="0 0 400 400" role="img" aria-label="Stadtplan mit gelber Stecknadel als Symbol für die Standortanalyse"><defs><radialGradient id="saFadeG" cx="50%" cy="56%" r="50%"><stop offset="0" stop-color="#fff"/><stop offset=".4" stop-color="#fff" stop-opacity=".75"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></radialGradient><mask id="saFadeM"><rect width="400" height="400" fill="url(#saFadeG)"/></mask></defs><g mask="url(#saFadeM)" class="sa-map" opacity=".85"><path d="M-20 352 C 90 322, 150 384, 250 366 S 370 318, 420 338" fill="none" stroke="#A3C9C2" stroke-width="12" stroke-linecap="round" opacity=".10"/><line x1="68" y1="133" x2="163" y2="119" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="73" y1="125" x2="85" y2="207" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="70" y1="150" x2="165" y2="137" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="90" y1="122" x2="102" y2="205" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="70" y1="168" x2="171" y2="154" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="112" y1="121" x2="123" y2="200" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="71" y1="182" x2="173" y2="167" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="138" y1="121" x2="148" y2="193" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="72" y1="204" x2="178" y2="189" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="158" y1="111" x2="171" y2="197" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="261" y1="107" x2="336" y2="137" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="258" y1="105" x2="231" y2="173" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="252" y1="121" x2="332" y2="154" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="278" y1="107" x2="246" y2="184" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="237" y1="135" x2="333" y2="174" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="301" y1="115" x2="269" y2="196" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="233" y1="152" x2="324" y2="189" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="320" y1="127" x2="290" y2="200" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="221" y1="169" x2="321" y2="209" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="344" y1="131" x2="311" y2="214" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="87" y1="250" x2="171" y2="272" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="86" y1="248" x2="67" y2="319" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="80" y1="268" x2="168" y2="292" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="111" y1="251" x2="90" y2="329" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="69" y1="284" x2="169" y2="311" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="127" y1="257" x2="107" y2="331" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="70" y1="302" x2="160" y2="326" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="155" y1="262" x2="133" y2="341" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="65" y1="313" x2="159" y2="338" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="174" y1="269" x2="154" y2="345" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="231" y1="284" x2="316" y2="257" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="232" y1="275" x2="260" y2="361" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="238" y1="300" x2="320" y2="273" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="250" y1="278" x2="273" y2="347" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="245" y1="320" x2="326" y2="294" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="273" y1="266" x2="298" y2="344" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="242" y1="335" x2="337" y2="304" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="290" y1="257" x2="317" y2="340" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="251" y1="349" x2="338" y2="321" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="313" y1="255" x2="337" y2="329" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="156" y1="57" x2="258" y2="64" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="163" y1="42" x2="157" y2="135" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="161" y1="70" x2="252" y2="76" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="188" y1="47" x2="182" y2="134" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="151" y1="86" x2="259" y2="93" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="206" y1="53" x2="201" y2="131" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="159" y1="107" x2="248" y2="114" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="228" y1="57" x2="223" y2="130" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="155" y1="120" x2="251" y2="127" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="250" y1="52" x2="244" y2="138" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="164" y1="277" x2="256" y2="290" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="170" y1="271" x2="158" y2="354" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="156" y1="294" x2="259" y2="309" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="187" y1="277" x2="176" y2="352" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="154" y1="313" x2="256" y2="328" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="209" y1="280" x2="198" y2="356" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="150" y1="329" x2="255" y2="344" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="232" y1="274" x2="218" y2="368" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="152" y1="347" x2="248" y2="361" stroke="#2A6B66" stroke-width="1" opacity=".8"/><line x1="253" y1="287" x2="243" y2="361" stroke="#2A6B66" stroke-width="1" opacity=".8"/><path d="M-20 118 C 100 140, 160 88, 260 108 S 380 160, 420 150" fill="none" stroke="#3A807A" stroke-width="2.6" stroke-linecap="round"/><path d="M50 420 C 90 330, 150 280, 200 236 S 300 120, 338 -20" fill="none" stroke="#3A807A" stroke-width="2.6" stroke-linecap="round"/><path d="M-20 296 C 80 268, 150 250, 200 236 S 330 228, 420 268" fill="none" stroke="#3A807A" stroke-width="2.6" stroke-linecap="round"/><path d="M188 104 C 268 92 338 150 334 214 L 326 262 C 312 326 250 352 198 350 C 128 348 84 318 72 262 L 66 222 C 62 160 118 112 188 104 Z" fill="none" stroke="#3A807A" stroke-width="2.6" stroke-linecap="round"/></g><ellipse cx="200" cy="236" rx="14" ry="5" fill="#001A1A" opacity=".6" class="sa-shadow"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse" style="animation-delay:1.2s"/><g class="sa-pin"><path d="M200 234 C200 234 162 188 162 158 A38 38 0 1 1 238 158 C238 188 200 234 200 234 Z" fill="#CCFF00"/><circle cx="200" cy="157" r="14" fill="#002424"/></g></svg></div>
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
