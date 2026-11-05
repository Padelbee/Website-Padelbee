<?php
require __DIR__ . '/inc/tc/layout.php';
tc_page_start([
    'path' => '/padel-court-bauen',
    'title' => 'Padel Court bauen · Bauplanung, Platzbau & Baubegleitung · THE COURT',
    'description' => 'Padel Court bauen lassen: Bauplanung mit Architekten, Genehmigung, Fundament und Platzbau nach lokalen Normen sowie Baubegleitung bis zur Fertigstellung.',
    'breadcrumb' => ['Padel Court bauen' => '/padel-court-bauen'],
    'schema' => [
        tc_schema_service(
            'Padel Court bauen: Bauplanung, Platzbau & Baubegleitung',
            'Realisierung von Padel-Courts von der Bauplanung mit Architekten über Genehmigung, Fundament und Platzbau nach regionalen Normen bis zur Qualitätssicherung und Fertigstellung.',
            '/padel-court-bauen',
            ['serviceType' => 'Padel-Court-Bau', 'image' => '/images/leistugen-baustelle.png']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Padel Court bauen</p>
      <p class="label" style="color:var(--white)" data-type>Bauplanung · Platzbau · Baubegleitung</p>
      <h1>Padel Court <span class="kw">bauen.</span></h1>
      <p class="lead">Du willst einen Padel Court bauen lassen? Wir stehen an deiner Seite, räumen alle Hürden aus dem Weg und sorgen dafür, dass dich im Projektverlauf keine Überraschungen erwarten. Von der ersten Planung bis zur Fertigstellung.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="/#kontakt">Bauprojekt anfragen</a><a class="btn ghost" href="#b-ablauf">Ablauf ansehen</a></div>
    </div>
    <figure class="a-herofig" style="aspect-ratio:auto;max-width:520px;border-top:0;overflow:visible"><img src="/images/leistugen-baustelle.png" alt="Fotos von Padel-Baustellen: Aushub mit Bagger, Fundament, Montage von Glas und Gitter" loading="lazy" style="height:auto;object-fit:contain;animation:none"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b data-count="4">4</b><span>Phasen bis zum Court</span></div>
      <div><b>1</b><span>Ansprechpartner</span></div>
      <div><b>Plan</b><span>mit erfahrenen Architekten</span></div>
      <div><b>Norm</b><span>regional &amp; lokal gebaut</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="b-ablauf">
  <div class="inner">
    <p class="label">Bauplanung &amp; Baubegleitung</p>
    <h2 class="reveal">Von der Planung bis zum <span class="hl">ersten Match.</span></h2>
    <p class="lead">Für eine reibungslose Realisierung deines Padel-Projekts organisieren wir das komplette Bauvorhaben, mit eingespielten Prozessen von der Planung bis zur Fertigstellung.</p>
    <ol class="flow">
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M4 26h24M7 26V12l9-6 9 6v14M13 26v-7h6v7"/></svg></i><h4>Organisieren</h4><p>Wir steuern das gesamte Bauvorhaben und sind dein zentraler Ansprechpartner.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><rect x="5" y="4" width="22" height="24"/><path d="M10 10h12M10 15h12M10 20h7"/></svg></i><h4>Planen</h4><p>Bauplan mit Architekten, Genehmigung aller baulichen Maßnahmen.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M4 24h24M8 24v-6h16v6M12 18V8h8v10"/></svg></i><h4>Bauen</h4><p>Fundament und Courts nach regionalen und lokalen Normen.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M6 17l6 6 14-14"/></svg></i><h4>Übergeben</h4><p>Qualitätssicherung, Abnahme und termingerechte Fertigstellung.</p></li>
    </ol>
    <div class="cards c4">
      <article class="card reveal"><div class="k">Phase 01</div><h3 data-type>Organisation</h3><p><strong>Alles aus einer Hand:</strong> Wir organisieren die zuverlässige Realisierung des kompletten Bauvorhabens, mit automatisierten Prozessen von der Planung bis zur Fertigstellung. Wenn du einen Padel Court bauen möchtest, sind wir dein Partner.</p></article>
      <article class="card reveal"><div class="k">Phase 02</div><h3 data-type>Bauplanung</h3><p><strong>Plan und Genehmigung:</strong> Mit erfahrenen Architekten erstellen wir einen dedizierten Bauplan mit Blick auf Standort, Bauauflagen und Umweltschutz und kümmern uns um die Genehmigung aller baulichen Maßnahmen.</p></article>
      <article class="card reveal"><div class="k">Phase 03</div><h3 data-type>Platzbau</h3><p><strong>Fundament und Courts:</strong> Ein eingespieltes Team aus Ingenieuren und Bauunternehmen baut Fundament und Padel-Plätze nach regionalen und lokalen Normen, inklusive aller gesetzlichen Gewährleistungsverpflichtungen.</p></article>
      <article class="card reveal"><div class="k">Phase 04</div><h3 data-type>Baubegleitung</h3><p><strong>Qualität und Sicherheit:</strong> Während der gesamten Bauphase sorgen wir für Qualitätssicherung und Sicherheit auf der Baustelle. So wird dein Court termingerecht und in hoher Qualität fertig.</p></article>
    </div>
    <figure class="reveal" style="margin:44px 0 0;position:relative;border-top:4px solid var(--yellow)"><img src="/images/image-platzbau-1.jpg" alt="Luftaufnahme einer fertigen Padel-Anlage mit mehreren Courts und Spielern" loading="lazy" style="width:100%;height:auto;display:block"></figure>
    <p style="margin-top:32px"><a class="btn ghost" href="/courts">Court-Systeme &amp; Fundamente vergleichen</a></p>
  </div>
</section>

<section class="band dark grid-bg" id="b-weitere">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Alles rund um dein <span class="kw">Padel-Projekt.</span></h2>
    <p class="lead">Vor dem Bau prüfen wir deinen Standort, danach bringen wir deine Anlage an den Start und halten sie erfolgreich.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Standort&shy;analyse</h3><p><strong>Erstscreening deines Standorts:</strong> Analyse der Potenziale am Standort und der Chancen am Markt mit Handlungsempfehlung zu Positionierung, Platzbau und Betrieb.</p><a class="btn ghost" href="/standortanalyse" style="margin-top:20px">Mehr zur Standortanalyse</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Betreiber&shy;konzept</h3><p><strong>Maßgeschneidertes Betreiberkonzept:</strong> Business-Plan, Angebots- und Marketing-Strategie für eine erfolgreiche Positionierung und einen reibungslosen Start am Standort.</p><a class="btn ghost" href="/betreiberkonzept" style="margin-top:20px">Mehr zum Betreiberkonzept</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>PowerPlay®</h3><p><strong>Vermarktung heute und in Zukunft:</strong> Marketingplan, Platzbuchungssoftware und Werbepakete digital und lokal, für die laufende Gewinnung von Spielerinnen und Spielern.</p><a class="btn ghost" href="/powerplay" style="margin-top:20px">Mehr zu PowerPlay®</a></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg">
  <div class="inner cta-band">
    <h2>Let's build <span class="kw">your court.</span></h2>
    <a class="btn" href="/#kontakt">Beratungsgespräch anfragen</a>
  </div>
</section>
<?php tc_page_end();
