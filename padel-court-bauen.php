<?php
require __DIR__ . '/inc/tc/layout.php';
tc_page_start([
    'path' => '/padel-court-bauen',
    'title' => 'Padel Court bauen · Bauplanung, Platzbau & Baubegleitung · THE COURT',
    'description' => 'Padel Court bauen lassen? Professionelle Bauplanung und Platzbau für Padel-Anlagen. Wir realisieren dein Padel-Projekt mit erfahrenen Architekten und Bauunternehmen.',
    'breadcrumb' => ['Padel Court bauen' => '/padel-court-bauen'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Padel Court bauen: Bauplanung, Platzbau & Baubegleitung',
            'Realisierung von Padel-Courts von der Bauplanung mit Architekten über Genehmigung, Fundament und Platzbau nach regionalen Normen bis zur Qualitätssicherung und Fertigstellung.',
            '/padel-court-bauen',
            ['serviceType' => 'Padel-Court-Bau', 'image' => '/media/leistungen/padel-court-baustellen.png']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Padel Court bauen</p>
      <p class="label" style="color:var(--white)" data-type>Bauplanung · Platzbau · Baubegleitung</p>
      <h1>Padel Court <span class="kw">bauen.</span></h1>
      <p class="lead">Padel Court bauen lassen? Padelbee steht an deiner Seite, damit alle Hürden aus dem Weg geräumt werden und dich keine Überraschungen im Projektverlauf erwarten. Beim Bau eines Padel Courts unterstützen wir dich von der ersten Planung bis zur Fertigstellung.</p>
    </div>
    <figure class="a-herofig" style="aspect-ratio:auto;max-width:520px;border-top:0;overflow:visible"><img src="/media/leistungen/padel-court-baustellen.png" alt="Fotos von Padel-Baustellen: Aushub mit Bagger, Fundament, Montage von Glas und Gitter" loading="lazy" style="height:auto;object-fit:contain"></figure>
  </div>
</section>

<section class="band grid-bg" id="b-ablauf">
  <div class="inner">
    <p class="label">Bauplanung &amp; Baubegleitung</p>
    <h2 class="reveal">Für eine reibungslose Realisierung deines <span class="hl">Padel Projekts.</span></h2>
    <ol class="flow">
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M4 26h24M7 26V12l9-6 9 6v14M13 26v-7h6v7"/></svg></i><h4>Organisieren</h4><p>Padelbee organisiert die zuverlässige Realisierung des kompletten Bauvorhabens, mit automatisierten Prozessen von Planung bis Fertigstellung. Wenn du einen Padel Court bauen möchtest, sind wir dein zuverlässiger Partner.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><rect x="5" y="4" width="22" height="24"/><path d="M10 10h12M10 15h12M10 20h7"/></svg></i><h4>Planen</h4><p>Mit erfahrenen Architekten erstellen wir einen dedizierten Bauplan mit Blick auf Standort, Bauauflagen und Umweltschutz und kümmern uns um die Genehmigung aller baulichen Maßnahmen. So wird dein Padel Court Bau professionell geplant.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M4 24h24M8 24v-6h16v6M12 18V8h8v10"/></svg></i><h4>Bauen</h4><p>Ein zuverlässiges Team aus Ingenieuren und Bauunternehmen führt den Bau des Fundaments und der Padel-Plätze entsprechend der regionalen &amp; lokalen Normen durch, inklusive aller gesetzlichen Gewährleistungsverpflichtungen. Dein Padel Court wird fachgerecht errichtet.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M6 17l6 6 14-14"/></svg></i><h4>Übergeben</h4><p>Während der gesamten Realisierungs-Phase wird selbstverständlich für die notwendige Qualitätssicherung und Sicherheit auf der Baustelle gesorgt. So stellen wir sicher, dass dein Padel Court Bau termingerecht und in höchster Qualität abgeschlossen wird.</p></li>
    </ol>
    <figure class="reveal" style="margin:44px 0 0;position:relative;border-top:4px solid var(--yellow)"><img src="/images/image-platzbau-1.jpg" alt="Luftaufnahme einer fertigen Padel-Anlage mit mehreren Courts und Spielern" loading="lazy" style="width:100%;height:auto;display:block"></figure>
    <p style="margin-top:32px"><a class="btn ghost-d" href="/courts">Court-Systeme &amp; Fundamente vergleichen</a></p>
  </div>
</section>

<section class="band grid-bg" id="b-weitere" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Weitere Leistungen von <span class="hl">Padelbee.</span></h2>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Initiale Standort&shy;analyse</h3><p>Analyse der Chancen am Standort mit konkreter Handlungsempfehlung für dein Vorhaben.</p><a class="btn ghost-d" href="/standortanalyse" style="margin-top:20px">Mehr zur Standortanalyse</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Entwicklung maßgeschneidertes Betreiber&shy;konzept</h3><p>Business-Plan, Angebots- und Marketing-Strategie für eine erfolgreiche Positionierung und einen reibungslosen Start am Standort.</p><a class="btn ghost-d" href="/betreiberkonzept" style="margin-top:20px">Mehr zum Betreiberkonzept</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Vermarktung heute und in Zukunft</h3><p>Marketingplan, Platzbuchungssoftware und Werbepakete digital &amp; lokal, für die laufende Gewinnung von Spieler*innen.</p><a class="btn ghost-d" href="/powerplay" style="margin-top:20px">Mehr zu PowerPlay®</a></article>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Padel Court bauen - Bauplanung, Platzbau & Baubegleitung']; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
