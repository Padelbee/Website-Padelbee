<?php
require __DIR__ . '/inc/tc/layout.php';
$schritte = [
    ['Erstkontakt &amp; Projekt&shy;aufnahme', 'Der erste Schritt zu deiner Padel-Anlage: Wir erfassen deine Wünsche und prüfen die grundsätzliche Machbarkeit.',
        ['Standort-Quickcheck und erste Machbarkeitsbewertung', 'Definition von Projektzielen und Anforderungen (temporär/dauerhaft, Kapazitäten, Betriebskonzept)', 'Erste Kostenschätzung und Planung einer Standortbesichtigung']],
    ['Standort&shy;analyse &amp; Gelände&shy;aufnahme', 'Detaillierte Erfassung aller relevanten Standortdaten mit modernster Technik.',
        ['Gemeinsame Begehung und Analyse vor Ort', 'Vermessung mit GPS, Drohne und Laser-Scanning', 'Erfassung der Infrastruktur (Zufahrten, Leitungen, Entwässerung)', 'Erstellung von 2D- und 3D-CAD-Modellen']],
    ['Konzept&shy;entwicklung &amp; Grundlagen&shy;analyse', 'Entwicklung des optimalen Konzepts unter Berücksichtigung aller rechtlichen und technischen Rahmenbedingungen.',
        ['Prüfung der baurechtlichen Zulässigkeit (§34/§35 BauGB)', 'Technische Untersuchungen (Boden, Altlasten, Erschließung)', 'Variantenplanung: Court-Anzahl, Überdachung, Parkplätze', '3D-Visualisierungen und Kostenschätzung nach DIN 276']],
    ['Abstimmung &amp; Genehmigung', 'Wir kümmern uns um alle behördlichen Genehmigungen und koordinieren alle Beteiligten.',
        ['Frühzeitige Klärung mit Behörden', 'Erstellung der Bauantragsunterlagen und Fachgutachten', 'Koordination aller Beteiligten bis zur Genehmigung']],
    ['Kosten-, Termin- &amp; Gremien&shy;freigabe', 'Detaillierte Planung und finale Freigabe für die Projektumsetzung.',
        ['Detaillierte Kalkulation und Grobterminplan', 'Prüfung von Fördermitteln und Abstimmung mit Vereins- oder Kommunalgremien', 'Offizielle Projektfreigabe zur Umsetzung']],
    ['Werkplanung, Aus&shy;schreibung &amp; Vergabe', 'Detaillierte Ausführungsplanung und professionelle Vergabe aller Gewerke.',
        ['Detailplanung aller Gewerke (Fundamente, Technik, Beleuchtung)', 'Leistungsverzeichnisse, Angebotsprüfung und Vergabeempfehlung', 'Vertragsgestaltung und Bauzeitenplanung']],
    ['Bau&shy;ausführung &amp; Inbetrieb&shy;nahme', 'Von der Baustelle bis zur erfolgreichen Eröffnung deiner Padel-Anlage.',
        ['Baustellenkoordination und Qualitätsmanagement', 'Fachgerechte Montage der Padelcourts', 'Offizielle Abnahme, Eröffnung und Begleitung der Startphase']],
];
tc_page_start([
    'path' => '/sportplatzbau',
    'title' => 'Sportplatzbau für Padel- & Sportanlagen · THE COURT',
    'description' => 'Sportplatzbau mit Padelbee und thecourt.dev: Von der Idee bis zum fertigen Spielfeld. Planung und Realisierung moderner Padel- und Sportanlagen für Kommunen, Vereine und Investoren.',
    'breadcrumb' => ['Sportplatzbau' => '/sportplatzbau'],
    'og_image' => '/media/leistungen/sportplatzbau-anlage.jpg',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Sportplatzbau: Planung & Realisierung von Padel- und Sportanlagen',
            'Entwicklung, Planung und Realisierung moderner Padel- und Sportanlagen für Kommunen, Vereine und Investoren: Geländeaufnahme, Konzept, Genehmigung, Ausschreibung, Bauausführung und Inbetriebnahme.',
            '/sportplatzbau',
            ['serviceType' => 'Sportplatzbau', 'image' => '/media/leistungen/sportplatzbau-anlage.jpg']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Sportplatzbau</p>
      <p class="label" style="color:var(--white)" data-type>thecourt.dev · Planung &amp; Realisierung moderner Padel- und Sportanlagen</p>
      <h1>Sportplatz&shy;<span class="kw">bau.</span></h1>
      <p class="lead">thecourt.dev ist dein Spezialist für die Entwicklung, Planung und Realisierung moderner Padel- und Sportanlagen. Von der ersten Standortidee bis zur fertigen Inbetriebnahme begleitet thecourt.dev Kommunen, Vereine und Investoren durch den gesamten Prozess: ganzheitlich, transparent und praxisnah.</p>
    </div>
    <figure class="a-herofig"><img src="/media/leistungen/sportplatzbau-anlage.jpg" alt="Illustration einer beleuchteten Padel-Anlage im Grünen" loading="lazy"><figcaption>Padel- und Sportanlage</figcaption></figure>
  </div>
</section>

<section class="band grid-bg" id="sp-schritte">
  <div class="inner">
    <p class="label">Unsere Leistungsschritte</p>
    <h2 class="reveal">Von der Erstidee bis zur <span class="hl">Eröffnung.</span></h2>
    <div class="cards c4">
<?php foreach ($schritte as $i => $s): ?>
      <article class="card reveal"><div class="k">Schritt <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $s[0] ?></h3><p><?= $s[1] ?></p><ul class="ticks"><?php foreach ($s[2] as $li): ?><li><?= $li ?></li><?php endforeach; ?></ul></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="sp-ergebnis">
  <div class="inner">
    <div class="vs" style="align-items:center">
      <figure class="reveal" style="margin:0"><img src="/media/leistungen/sportplatzbau-ergebnis.jpg" alt="Illustration einer fertigen Padel-Anlage mit Stadion im Hintergrund" loading="lazy" style="width:100%;height:auto;display:block;border-top:4px solid var(--yellow)"></figure>
      <div>
        <p class="label">thecourt.dev</p>
        <h2 class="reveal">Das <span class="kw">Ergebnis.</span></h2>
        <p class="lead">Eine hochwertige und innovative Padel- und Sportanlage, individuell auf Standort, Nutzung und Budget abgestimmt, entwickelt mit der Erfahrung und Planungssicherheit von thecourt.dev.</p>
      </div>
    </div>
  </div>
</section>

<section class="band" id="sp-partner">
  <div class="inner">
    <p class="label">Partner</p>
    <h2 class="reveal">In <span class="hl">Zusammenarbeit</span> mit</h2>
    <div class="vs">
      <article class="card reveal"><img src="/images/partner/gabriel.png" alt="Gabriel Partners Real Estate" loading="lazy" style="height:48px;width:auto;display:block"><h3 style="margin-top:20px">Gerrit S. Molineus <small>Architekt und Projektentwickler</small></h3><p>Gabriel Partners Real Estate</p></article>
      <article class="card dk reveal"><div class="k">Planung &amp; Realisierung</div><h3>thecourt.dev</h3><p>Spezialist für die Entwicklung, Planung und Realisierung moderner Padel- und Sportanlagen.</p><a class="btn" href="https://thecourt.dev/" target="_blank" rel="noopener noreferrer" style="margin-top:20px">thecourt.dev besuchen</a></article>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Padel Court bauen - Bauplanung, Platzbau & Baubegleitung']; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
