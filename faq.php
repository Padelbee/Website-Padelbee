<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1155: FAQ im neuen Design. Fragen und Antworten unverändert aus inc/faq-data.php
// (keine Quelle in Martins Präsentationen, Entscheidung über neue Inhalte bei Martin).
$lang = 'de';
include __DIR__ . '/inc/faq-data.php';
$faqs = $faq_data_de;
tc_page_start([
    'path' => '/faq',
    'title' => 'Padel FAQ: Häufige Fragen zu Padel · Padelbee',
    'description' => 'Häufige Fragen zu Padel: Regeln, Ausrüstung, Kosten und Spielorte sowie zum Bau und zur Miete eines Padel-Courts mit Padelbee. Alle Antworten im Überblick.',
    'breadcrumb' => ['FAQ' => '/faq'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $faqs), '/faq'),
    ],
]);
?>
<section class="band dark grid-bg">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; FAQ</p>
    <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padel FAQ</span>Häufig gestellte <span class="kw">Fragen.</span></h1>
    <p class="lead">Hier findest du Antworten rund um Padel, von Regeln und Ausrüstung bis zu Kosten und Spielorten. Du planst eine eigene Anlage? Mehr dazu unter <a href="/padel-court-bauen">Padel Court bauen</a> und <a href="/courts">Padel-Courts</a>.</p>
  </div>
</section>

<section class="band grid-bg" style="background-color:var(--grey-050)" id="faq-liste">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Alles rund um <span class="hl">Padel.</span></h2>
    <div class="faq-list">
<?php foreach ($faqs as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= nl2br(tc_h($f['antwort'])) ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Ready. <span class="kw">Play.</span></h2>
    <p class="lead" style="margin:18px auto 0">Deine Frage war nicht dabei? Schreib uns, wir sind für dich da.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Allgemein</div><b>Padelbee</b><div class="mail"><a href="mailto:info@padelbee.de">info@padelbee.de</a></div></div>
    </div>
<?php $tcFormButton = 'Frage stellen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
