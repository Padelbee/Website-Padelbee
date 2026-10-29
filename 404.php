<?php
require __DIR__ . '/inc/tc/layout.php';
http_response_code(404);
tc_page_start([
    'path' => '/404',
    'view' => 'notfound',
    'title' => 'Seite nicht gefunden · THE COURT by Padelbee',
    'description' => 'Diese Seite gibt es nicht (mehr). Zur Startseite von Padelbee und THE COURT.',
    'robots' => 'noindex,follow',
    'canonical' => false,
    'jsonld' => false,
]);
?>
<section class="band dark grid-bg">
  <div class="inner tc-center" style="min-height:60vh;display:flex;flex-direction:column;justify-content:center;align-items:center">
    <p class="label" style="color:var(--white)">Fehler 404</p>
    <h1>Seite nicht <span class="kw">gefunden.</span></h1>
    <p class="lead" style="margin-inline:auto">Diese Adresse gibt es nicht (mehr). Vielleicht hilft dir eine dieser Seiten weiter.</p>
    <div class="ctas"><a class="btn" href="/">Zur Startseite</a><a class="btn ghost" href="/courts">Padel-Courts</a><a class="btn ghost" href="/#kontakt">Projekt anfragen</a></div>
  </div>
</section>
<?php tc_page_end();
