<?php
require __DIR__ . '/inc/tc/layout.php';
$schritte = [
    ['Erstkontakt', 'Erstkontakt &amp; Projektaufnahme', 'Der erste Schritt zu deiner Padel-Anlage: Wir erfassen deine Wünsche und prüfen die grundsätzliche Machbarkeit.',
        ['Standort-Quickcheck und erste Machbarkeitsbewertung', 'Projektziele und Anforderungen: temporär oder dauerhaft, Kapazitäten, Betriebskonzept', 'Erste Kostenschätzung und Planung einer Standortbesichtigung']],
    ['Gelände', 'Standortanalyse &amp; Geländeaufnahme', 'Detaillierte Erfassung aller relevanten Standortdaten mit modernster Technik.',
        ['Gemeinsame Begehung und Analyse vor Ort', 'Vermessung mit GPS, Drohne und Laser-Scanning', 'Erfassung der Infrastruktur: Zufahrten, Leitungen, Entwässerung', '2D- und 3D-CAD-Modelle']],
    ['Konzept', 'Konzeptentwicklung &amp; Grundlagenanalyse', 'Das optimale Konzept unter Berücksichtigung aller rechtlichen und technischen Rahmenbedingungen.',
        ['Prüfung der baurechtlichen Zulässigkeit (§34/§35 BauGB)', 'Technische Untersuchungen: Boden, Altlasten, Erschließung', 'Variantenplanung: Court-Anzahl, Überdachung, Parkplätze', '3D-Visualisierungen und Kostenschätzung nach DIN 276']],
    ['Genehmigung', 'Abstimmung &amp; Genehmigung', 'Wir kümmern uns um alle behördlichen Genehmigungen und koordinieren alle Beteiligten.',
        ['Frühzeitige Klärung mit Behörden', 'Bauantragsunterlagen und Fachgutachten', 'Koordination aller Beteiligten bis zur Genehmigung']],
    ['Freigabe', 'Kosten-, Termin- &amp; Gremienfreigabe', 'Detaillierte Planung und finale Freigabe für die Umsetzung.',
        ['Detaillierte Kalkulation und Grobterminplan', 'Prüfung von Fördermitteln, Abstimmung mit Vereins- oder Kommunalgremien', 'Offizielle Projektfreigabe zur Umsetzung']],
    ['Vergabe', 'Werkplanung, Ausschreibung &amp; Vergabe', 'Detaillierte Ausführungsplanung und professionelle Vergabe aller Gewerke.',
        ['Detailplanung aller Gewerke: Fundamente, Technik, Beleuchtung', 'Leistungsverzeichnisse, Angebotsprüfung und Vergabeempfehlung', 'Vertragsgestaltung und Bauzeitenplanung']],
    ['Bau <span class="hl">&amp;</span> Start', 'Bauausführung &amp; Inbetriebnahme', 'Von der Baustelle bis zur erfolgreichen Eröffnung deiner Padel-Anlage.',
        ['Baustellenkoordination und Qualitätsmanagement', 'Fachgerechte Montage der Padel-Courts', 'Offizielle Abnahme, Eröffnung und Begleitung der Startphase']],
];
tc_page_start([
    'path' => '/sportplatzbau',
    'title' => 'Sportplatzbau für Padel- & Sportanlagen · THE COURT',
    'description' => 'Sportplatzbau mit Padelbee und thecourt.dev: Planung und Realisierung moderner Padel- und Sportanlagen für Kommunen, Vereine und Investoren.',
    'breadcrumb' => ['Sportplatzbau' => '/sportplatzbau'],
    'og_image' => '/images/anlagen/image008.png',
    'schema' => [
        tc_schema_service(
            'Sportplatzbau: Planung & Realisierung von Padel- und Sportanlagen',
            'Entwicklung, Planung und Realisierung moderner Padel- und Sportanlagen für Kommunen, Vereine und Investoren: Geländeaufnahme, Konzept, Genehmigung, Ausschreibung, Bauausführung und Inbetriebnahme.',
            '/sportplatzbau',
            ['serviceType' => 'Sportplatzbau', 'image' => '/images/anlagen/image008.png']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Sportplatzbau</p>
      <p class="label" style="color:var(--white)" data-type>Planung · Genehmigung · Realisierung</p>
      <h1>Sportplatz&shy;bau.<br>Von der Idee zur <span class="kw">Anlage.</span></h1>
      <p class="lead">Gemeinsam mit thecourt.dev entwickeln, planen und realisieren wir moderne Padel- und Sportanlagen. Von der ersten Standortidee bis zur Inbetriebnahme begleiten wir Kommunen, Vereine und Investoren durch den gesamten Prozess: ganzheitlich, transparent und praxisnah.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:34px"><a class="btn" href="/#kontakt">Projekt anfragen</a><a class="btn ghost" href="#sp-schritte">Leistungsschritte ansehen</a></div>
    </div>
    <figure class="a-herofig"><img src="/images/anlagen/image008.png" alt="Illustration einer beleuchteten Padel-Anlage im Grünen" loading="lazy"><figcaption>Padel- und Sportanlage</figcaption></figure>
  </div>
  <div class="inner hero-stats" style="padding-block:0 40px">
    <div class="stats">
      <div><b data-count="7">7</b><span>Schritte</span></div>
      <div><b data-count="3">3</b><span>Zielgruppen</span></div>
      <div><b>3D</b><span>Geländemodell</span></div>
      <div><b data-count="2">2</b><span>Planungspartner</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="sp-schritte">
  <div class="inner">
    <p class="label">Unsere Leistungsschritte</p>
    <h2 class="reveal">Von der Erstidee bis zur <span class="hl">Eröffnung.</span></h2>
    <p class="lead">Sieben Schritte, ein durchgängiger Prozess. Du weißt in jeder Phase, was passiert, was es kostet und was als Nächstes kommt.</p>
    <div class="cards c4">
<?php foreach ($schritte as $i => $s): ?>
      <article class="card reveal"><div class="k">Schritt <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $s[0] ?></h3><p><strong><?= $s[1] ?>:</strong> <?= $s[2] ?></p><ul class="ticks"><?php foreach ($s[3] as $li): ?><li><?= $li ?></li><?php endforeach; ?></ul></article>
<?php endforeach; ?>
      <article class="card dk reveal"><div class="k">Start</div><h3 data-type style="color:var(--white)">Dein <span class="kw">Projekt.</span></h3><p>Dein Projekt beginnt hier. Schick uns deine Eckdaten. Wir melden uns mit einem ersten Standort-Quickcheck.</p><a class="btn" href="/#kontakt" style="margin-top:20px">Erstkontakt aufnehmen</a></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="sp-ergebnis">
  <div class="inner">
    <div class="vs" style="align-items:center">
      <figure class="reveal" style="margin:0"><img src="/images/anlagen/image00423.png" alt="Illustration einer fertigen Padel-Anlage mit Stadion im Hintergrund" loading="lazy" style="width:100%;height:auto;display:block;border-top:4px solid var(--yellow)"></figure>
      <div>
        <p class="label">Das Ergebnis</p>
        <h2 class="reveal">Deine Anlage. <span class="kw">Durchdacht.</span></h2>
        <p class="lead">Eine hochwertige und innovative Padel- und Sportanlage, individuell auf Standort, Nutzung und Budget abgestimmt, entwickelt mit der Erfahrung und Planungssicherheit von thecourt.dev.</p>
      </div>
    </div>
  </div>
</section>

<section class="band" id="sp-partner">
  <div class="inner">
    <p class="label">In Zusammenarbeit mit</p>
    <h2 class="reveal">Starke <span class="hl">Partner.</span></h2>
    <div class="vs">
      <article class="card reveal"><img src="/images/partner/gabriel.png" alt="Gabriel Partners Real Estate" loading="lazy" style="height:48px;width:auto;display:block"><h3 style="margin-top:20px">Gerrit S. Molineus <small>Architekt &amp; Projektentwickler</small></h3><p>Gabriel Partners Real Estate</p></article>
      <article class="card dk reveal"><div class="k">Planung &amp; Realisierung</div><h3>thecourt.dev</h3><p>Spezialist für die Entwicklung, Planung und Realisierung moderner Padel- und Sportanlagen.</p><a class="btn" href="https://thecourt.dev/" target="_blank" rel="noopener noreferrer" style="margin-top:20px">thecourt.dev besuchen</a></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg">
  <div class="inner cta-band">
    <h2>Let's build <span class="kw">your venue.</span></h2>
    <a class="btn" href="/#kontakt">Beratungsgespräch anfragen</a>
  </div>
</section>
<?php tc_page_end();
