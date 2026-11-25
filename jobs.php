<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1667 (Beti 25.11.2026, Variante B): Inhalte der alten Website entfernt (Bienen-Bild, Start-up-Text,
// Werkstudenten-Anzeige, PDF-Link, JobPosting-Schema). Martins Entwurf hat keine Jobs-Seite.
// Ob eine Stelle offen ist und welche Bewerbungsadresse gilt, klärt Martin (Fragenliste 32, 33).
// Text: Martins Fakten (Zielgruppen, 50 Projekte, DACH, Unterföhring), Bewerbungssatz eigen.
tc_page_start([
    'path' => '/jobs',
    'title' => 'Jobs bei Padelbee · Padel-Projektentwicklung',
    'description' => 'Jobs bei Padelbee: Wir entwickeln, planen und bauen Padelanlagen in Deutschland, Österreich und der Schweiz. Bewirb dich initiativ und werde Teil unseres Teams.',
    'breadcrumb' => ['Jobs' => '/jobs'],
]);
?>
<section class="band dark grid-bg c-hero hero-1col">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Jobs</p>
    <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Jobs bei Padelbee</span>Mach mit bei <span class="kw">Padelbee.</span></h1>
    <p class="lead">Wir entwickeln, planen und bauen Padel-, Pickleball- und Tennisanlagen für Vereine, Hotels, Gewerbe und die öffentliche Hand. Unsere 50 Projekte in Deutschland, Österreich und der Schweiz steuern wir aus Unterföhring bei&nbsp;München.</p>
    <a class="more-link" href="/team">Unser Team kennenlernen</a>
  </div>
</section>

<section class="band grid-bg" id="j-bewerbung">
  <div class="inner">
    <p class="label" data-type>Bewerbung</p>
    <h2 class="reveal">Bewirb dich <span class="hl">initiativ.</span></h2>
    <p class="lead">Du willst Teil von Padelbee werden? Schick uns deine Initiativbewerbung mit Lebenslauf und einem kurzen Anschreiben.</p>
    <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:34px"><a class="btn" href="mailto:info@padelbee.de?subject=Initiativbewerbung">Jetzt bewerben</a></div>
  </div>
</section>
<?php tc_page_end();
