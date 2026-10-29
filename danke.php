<?php
require __DIR__ . '/inc/tc/layout.php';
tc_page_start([
    'path' => '/danke.php',
    'view' => 'danke',
    'title' => 'Vielen Dank für deine Anfrage · THE COURT by Padelbee',
    'description' => 'Vielen Dank für deine Nachricht. Wir melden uns innerhalb von 24 Stunden bei dir.',
    'robots' => 'noindex,follow',
    'canonical' => false,
    'jsonld' => false,
]);
?>
<section class="band dark grid-bg">
  <div class="inner tc-center" style="min-height:60vh;display:flex;flex-direction:column;justify-content:center;align-items:center">
    <p class="label" style="color:var(--white)">Anfrage gesendet</p>
    <h1>Vielen Dank für deine <span class="kw">Nachricht.</span></h1>
    <p class="lead" style="margin-inline:auto">Wir melden uns innerhalb von 24 Stunden bei dir.<br>Dein Padelbee Team</p>
    <div class="ctas"><a class="btn" href="/">Zurück zur Startseite</a></div>
  </div>
</section>
<?php tc_page_end();
