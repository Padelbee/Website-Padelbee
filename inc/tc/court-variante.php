<?php
/**
 * Gemeinsame Vorlage für die Court-Variantenseiten (Standard, Panorama).
 * Inhalte aus der Courts-Präsentation 2026 (Folie 4, 5, Modellfolien) und
 * Martins neuestem Entwurf (the-court.com/courts). Keine Texte der alten Seite.
 *
 * Optional: 'extra_html' (eigener Block nach den Modellen, z. B. Modellreihe als Vergleich).
 * Erwartet $v = [
 *   'path', 'name', 'title', 'description', 'label', 'h1' (HTML), 'lead' (HTML),
 *   'image', 'alt', 'stats' => [[Zahl-HTML, Text, Zusatz], ...], 'note',
 *   'models_label', 'models_h2' (HTML), 'models_lead',
 *   'models' => [[
 *     'logo', 'logo_h', 'maker', 'tier', 'name', 'text', 'image'?, 'alt'?,
 *     'specs' => [[Titel, Text], ...], 'facts' => [...], 'price'?, 'price_incl'?, 'price_note'?, 'brand', 'fit'? ('contain')
 *   ], ...],
 *   'others' => [[k, Titel, Text, Link, Linktext, Bild], ...]
 * ]
 */
$products = array_map(fn($m) => tc_schema_product($m['name'], strip_tags($m['text']), [
    'brand' => $m['brand'],
    'category' => 'Padel-Court',
    'image' => $m['image'] ?? $v['image'],
    'path' => $v['path'],
    'price' => isset($m['price']) ? $m['price'] : null,
]), $v['models']);
foreach ($v['schema_extra'] ?? [] as $x) {
    $products[] = tc_schema_product($x['name'], $x['text'], ['brand' => $x['brand'], 'category' => 'Padel-Court', 'image' => $x['image'], 'path' => $v['path']]);
}

tc_page_start([
    'path' => $v['path'],
    'title' => $v['title'],
    'description' => $v['description'],
    'breadcrumb' => ['Courts' => '/courts', $v['name'] => $v['path']],
    'og_image' => $v['image'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [tc_schema_item_list($v['name'] . ': Modelle', $products)],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; <a href="/courts">Courts</a> &nbsp;/&nbsp; <?= tc_h($v['name']) ?></p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type><?= $v['label'] ?></span><?= $v['h1'] ?></h1>
      <p class="lead"><?= $v['lead'] ?></p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Court anfragen</a><a class="btn ghost" href="#v-modelle">Modelle vergleichen</a></div>
    </div>
    <figure class="courtfig courtphoto"><img src="<?= $v['image'] ?>" alt="<?= tc_h($v['alt']) ?>"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
<?php foreach ($v['stats'] as $s): ?>
      <div><b><?= $s[0] ?></b><span><?= $s[1] ?><?php if (!empty($s[2])): ?><em class="st-sub"><?= $s[2] ?></em><?php endif; ?></span></div>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band grid-bg" id="v-modelle">
  <div class="inner">
    <p class="label" data-type><?= $v['models_label'] ?></p>
    <h2 class="reveal"><?= $v['models_h2'] ?></h2>
    <p class="lead"><?= $v['models_lead'] ?></p>
    <div class="vmodels">
<?php foreach ($v['models'] as $m): ?>
      <article class="vmodel reveal">
        <div class="vm-top">
          <div class="vm-media">
<?php if (!empty($m['image'])): ?>
            <figure class="vm-img<?= !empty($m['fit']) ? ' fit-' . $m['fit'] : '' ?>"><img src="<?= $m['image'] ?>" alt="<?= tc_h($m['alt']) ?>" loading="lazy"></figure>
<?php endif; ?>
          </div>
          <div class="vm-head">
            <div class="logo"><div class="m" data-logo="<?= $m['logo'] ?>" data-h="<?= $m['logo_h'] ?>"></div></div>
            <div class="k"><?= $m['maker'] ?> · <?= $m['tier'] ?></div>
            <h3 data-type><?= $m['name'] ?></h3>
            <p><?= $m['text'] ?></p>
<?php if (!empty($m['price'])): ?>
            <p class="vm-price"><b>ab <?= number_format((float) $m['price'], 0, ',', '.') ?> €</b> netto<?php if (!empty($m['price_incl'])): ?><span><?= $m['price_incl'] ?></span><?php endif; ?><?php if (!empty($m['price_note'])): ?><span><?= $m['price_note'] ?></span><?php endif; ?></p>
<?php endif; ?>
<?php if (!empty($m['facts'])): ?>
            <div class="facts vm-facts"><?php foreach ($m['facts'] as $f): ?><span><?= $f ?></span><?php endforeach; ?></div>
<?php endif; ?>
          </div>
        </div>
        <details class="vm-more">
          <summary>Technische Daten</summary>
          <dl class="vm-specs">
<?php foreach ($m['specs'] as $sp): ?>
            <div><dt><?= $sp[0] ?></dt><dd><?= $sp[1] ?></dd></div>
<?php endforeach; ?>
          </dl>
        </details>
      </article>
<?php endforeach; ?>
    </div>
<?= $v['extra_html'] ?? '' ?>
    <div class="v-foot">
      <p class="fav-note fav-note-l">Technische Angaben und Garantien lt. Hersteller. Die Garantie gewährt der jeweilige Hersteller, nicht die THE COURT GmbH.</p>
      <p class="v-midcta"><a class="btn" href="#kontakt">Vergleich anfragen</a></p>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="v-strategie">
  <div class="inner">
    <p class="label" data-type>Court-Systeme · Detail</p>
    <h2 class="reveal">Nicht nur technisch. Auch <span class="hl">strategisch.</span></h2>
    <div class="v-leadrow">
      <p class="v-links"><a class="btn ghost" href="/courts#c-marke">Alle Gestaltungsoptionen</a><a class="btn ghost" href="/courts#c-fundament">Das richtige Fundament</a></p>
    </div>
    <div class="gest g3">
      <article class="gbox reveal"><div class="k">Individualisierung</div><p>Kunstrasen in nahezu allen Farben, farblich angepasste Stahlkonstruktion.</p></article>
      <article class="gbox reveal"><div class="k">Sonderausstattung</div><p>Zusätzliche Türen, Fangnetze und Branding-Optionen sind projektabhängig umsetzbar.</p></article>
      <article class="gbox reveal"><div class="k">Mehrkosten</div><p>Details und eventuelle Mehrkosten stimmen wir im weiteren Planungsprozess individuell mit dir ab.</p></article>
    </div>
  </div>
</section>

<section class="band" id="v-varianten">
  <div class="inner">
    <p class="label" data-type>Weitere Varianten</p>
    <h2 class="reveal">Drei Varianten, ein <span class="hl">Prinzip.</span></h2>
    <div class="cards c<?= count($v['others']) ?>">
<?php foreach ($v['others'] as $o): ?>
      <article class="card variant vflat reveal"><figure class="vimg"><img src="<?= $o[5] ?>" alt="<?= tc_h($o[1]) ?>-Court Rendering" loading="lazy"></figure><div class="vf-body"><div class="k"><?= $o[0] ?></div><h3 data-type><?= $o[1] ?></h3><p><?= $o[2] ?></p><span class="tier"><a href="<?= $o[3] ?>"><?= $o[4] ?></a></span></div></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Let's build <span class="kw">your court.</span></h2>
    <p class="lead" style="margin:18px auto 0">Gemeinsam entwickeln wir eine Lösung, die funktional überzeugt und deine Anlage klar und unverwechselbar positioniert. Sichere dir jetzt dein unverbindliches Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Padelcourt']; $tcFormButton = 'Beratungsgespräch anfragen'; include __DIR__ . '/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
