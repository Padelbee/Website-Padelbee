<?php
/**
 * Gemeinsame Vorlage für die Court-Modellseiten (Standard, Panorama, Hybrid, Premier).
 * Texte stammen von der alten Seite padelbee.de (lang/de.php), nur in du-Form.
 *
 * Erwartet $court = [
 *   'path', 'name' (z. B. 'Standard Court'), 'h1' (HTML), 'label', 'h2' (HTML),
 *   'lead', 'image', 'alt', 'caption', 'title', 'description', 'schema_name',
 *   'boxes' => [[Titel, Text], ...]
 * ]
 */
tc_page_start([
    'path' => $court['path'],
    'title' => $court['title'],
    'description' => $court['description'],
    'breadcrumb' => ['Courts' => '/courts', $court['name'] => $court['path']],
    'og_image' => $court['image'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_product($court['schema_name'], strip_tags($court['lead']), [
            'brand' => '3B Padel',
            'category' => 'Padel-Court',
            'image' => $court['image'],
            'path' => $court['path'],
        ]),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; <a href="/courts">Courts</a> &nbsp;/&nbsp; <?= tc_h($court['name']) ?></p>
      <p class="label" style="color:var(--white)" data-type><?= $court['label'] ?></p>
      <h1><?= $court['h1'] ?></h1>
      <p class="lead"><?= $court['lead'] ?></p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Court anfragen</a><a class="btn ghost" href="#m-ausstattung">Ausstattung ansehen</a></div>
    </div>
    <figure class="a-herofig" style="aspect-ratio:16/10;max-width:560px"><img src="<?= $court['image'] ?>" alt="<?= tc_h($court['alt']) ?>" style="object-position:center"><figcaption><?= tc_h($court['caption']) ?></figcaption></figure>
  </div>
</section>

<section class="band grid-bg" id="m-ausstattung">
  <div class="inner">
    <p class="label">Ausstattung</p>
    <h2 class="reveal"><?= $court['h2'] ?></h2>
    <div class="cards c4">
<?php foreach ($court['boxes'] as $b): ?>
      <article class="card reveal"><div class="k"><?= tc_h($court['name']) ?></div><h3 data-type><?= $b[0] ?></h3><p><?= $b[1] ?></p></article>
<?php endforeach; ?>
    </div>
    <p style="margin-top:32px"><a class="btn ghost-d" href="/courts">Alle Court-Systeme vergleichen</a></p>
  </div>
</section>

<?php $tcPreselect = ['Padelcourt']; include __DIR__ . '/kontakt-section.php'; ?>
<?php tc_page_end();
