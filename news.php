<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1155: News im neuen Design. Inhalt wie bisher: LinkedIn-Beiträge von Padelbee (SociableKit-Widget).
tc_page_start([
    'path' => '/news',
    'title' => 'Padelbee News: Aktuelles aus der Padel-Welt',
    'description' => 'Padelbee News: Aktuelles von uns, unseren Padel-Projekten und aus der Padel-Welt. Die neuesten Beiträge von Padelbee auf LinkedIn im Überblick.',
    'breadcrumb' => ['News' => '/news'],
    'page_type' => 'CollectionPage',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>' . "\n" . '<script src="https://widgets.sociablekit.com/linkedin-page-posts/widget.js" defer></script>',
]);
?>
<section class="band dark grid-bg">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; News</p>
    <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padelbee News</span>Aktuelles von uns und aus der <span class="kw">Padel-Welt.</span></h1>
    <p class="lead">Neue Projekte, Events und Einblicke aus unserem Alltag. <a class="more-link" href="/referenzen">Fertige Anlagen ansehen</a></p>
  </div>
</section>

<section class="band grid-bg" id="news-feed">
  <div class="inner">
    <p class="label" data-type>LinkedIn</p>
    <h2 class="reveal">Neueste <span class="hl">Beiträge.</span></h2>
    <div class="sk-ww-linkedin-page-post" data-embed-id="25653061" style="margin-top:32px"></div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Ready. <span class="kw">Play.</span></h2>
    <p class="lead" style="margin:18px auto 0">Du willst mit deinem Projekt die nächste Meldung sein? Sprich mit uns über deine Anlage.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcFormButton = 'Projekt anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
