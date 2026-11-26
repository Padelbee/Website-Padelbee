<?php
require __DIR__ . '/inc/tc/layout.php';
// Kernteam laut Firmenpräsentation 2026, Folie 7 ("Energie & Kompetenz.")
// [Name, Rolle, Foto oder null]
$team = [
    ['Martin Gaffal', 'Co-Founder · Geschäftsführer', '/images/team/martin.png'],
    ['Stefan Möbius', 'Co-Founder', '/images/team/stefan.png'],
    ['Laura Waack', 'Founder Associate', '/media/team/laura.jpg'],
    ['Angélique Willner', 'Projektentwicklung', '/images/team/angelique.png'],
    ['Florian von Stuckrad', 'Sports & Products', '/media/team/florian.jpg'],
    ['Christian Bonk', 'Padelexperte · Padelcoach', '/images/team/christian.jpg'],
    ['Philipp Kamp', 'Sales Manager', '/media/team/philipp.jpg'],
];
// Partner aus dem Netzwerk (bisher auf /team, nicht auf Folie 7; mit Martin klären)
$netzwerk = [
    ['Oliver Scheck-Poturicek', 'Scheck Club', 'Betreiber unserer Referenzanlage', '/images/team/oliver.png'],
    ['Gerrit Molineus', 'Gabriel Realestate', 'M.Sc. Architekt · Projektentwicklung', '/images/team/gerrit.png'],
    ['Sebastien Collinet', 'Padelbee', 'Projektleiter NRW', '/images/team/SEBASTIEN.png'],
];
$initials = fn(string $n) => implode('', array_map(fn($w) => mb_substr($w, 0, 1), array_slice(explode(' ', $n), 0, 2)));
tc_page_start([
    'path' => '/team',
    'title' => 'Das Padelbee Team · Energie & Kompetenz für dein Padel-Projekt · THE COURT',
    'description' => 'Das Padelbee Team um Martin Gaffal und Stefan Möbius: Projektentwickler für Padel-Anlagen mit über 14 Jahren Padel-Erfahrung, Office im Scheck Club München.',
    'breadcrumb' => ['Team' => '/team'],
    'page_type' => 'AboutPage',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => array_merge(
        array_map(fn($p) => tc_schema_person($p[0], ['jobTitle' => $p[1], 'image' => $p[2]]), $team),
        [tc_schema_clean([
            '@type' => 'Place',
            'name' => 'Padelbee Office im Scheck Club',
            'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'Münchner Str. 15', 'postalCode' => '85774', 'addressLocality' => 'Unterföhring', 'addressCountry' => 'DE'],
        ])]
    ),
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px);grid-template-columns:1fr">
    <div style="max-width:860px">
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Team</p>
      <p class="label" style="color:var(--white)" data-type>Entwickeln · Konzipieren · Beraten · Bauen · Betreiben</p>
      <h1>Das Padelbee <span class="kw">Team.</span></h1>
      <p class="lead">Padelbee ist ein spezialisierter Projektentwickler für den Aufbau und Betrieb von Padel-Anlagen. Das Unternehmen begleitet seine Kunden von der <a href="/standortanalyse">Standort- und Potenzialanalyse</a> über Planung, <a href="/padel-court-bauen">Bau und Baubegleitung</a> bis hin zu nachhaltigen <a href="/betreiberkonzept">Betreiberkonzepten</a>. Dabei arbeiten wir 100% kundenorientiert.</p>
    </div>
  </div>
</section>

<section class="band grid-bg" id="t-team">
  <div class="inner">
    <p class="label">Das Padelbee Team</p>
    <h2 class="reveal">Energie &amp; <span class="hl">Kompetenz.</span></h2>
    <p class="lead">Unser Ziel ist, dass Padel an deinem Standort schnell startet und erfolgreich bleibt. Dafür bringen wir über 14 Jahre Padel-Erfahrung in Planung, Fundamentbau, Platzbau und Betrieb mit. Dazu kommen über 20 Jahre Erfahrung im Betrieb von Sportanlagen und im Marketing für Racket Sports.</p>
    <div class="cards c4">
<?php foreach ($team as $p): ?>
      <article class="card reveal"><figure class="vimg<?= $p[2] ? '' : ' ini' ?>" style="aspect-ratio:1/1"><?php if ($p[2]): ?><img src="<?= $p[2] ?>" alt="<?= tc_h($p[0]) ?>, <?= tc_h($p[1]) ?> bei Padelbee" loading="lazy" style="object-position:center 25%"><?php else: ?><span aria-hidden="true"><?= tc_h($initials($p[0])) ?></span><?php endif; ?></figure><div class="k"><?= tc_h($p[1]) ?></div><h3 data-type><?= tc_h($p[0]) ?></h3></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" id="t-netzwerk">
  <div class="inner">
    <p class="label">Unser Netzwerk</p>
    <h2 class="reveal">Starkes <span class="hl">Partnernetzwerk.</span></h2>
    <p class="lead">Wir arbeiten mit spezialisierten Architekturbüros für ganz Deutschland, effizient und schnell. Dazu kommt ein starkes Netzwerk aus <a href="/partner">Fachfirmen und Lieferanten</a> im Bau und für den Betrieb.</p>
    <div class="cards c3">
<?php foreach ($netzwerk as $p): ?>
      <article class="card reveal"><figure class="vimg" style="aspect-ratio:1/1"><img src="<?= $p[3] ?>" alt="<?= tc_h($p[0]) ?>, <?= tc_h($p[1]) ?>" loading="lazy" style="object-position:center 25%"></figure><div class="k"><?= tc_h($p[1]) ?></div><h3 data-type><?= tc_h($p[0]) ?></h3><p><?= tc_h($p[2]) ?></p></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band grid-bg" id="t-office">
  <div class="inner">
    <div class="t-office">
      <figure class="reveal"><img src="/media/uploads/a5b1ead76ff421ef2585a90d24bed755.jpg" alt="Padel-Halle im Scheck Club Unterföhring, Blick von der Galerie auf die Courts" loading="lazy"></figure>
      <div>
        <p class="label">Unser Office</p>
        <h2 class="reveal">Wo Racketsports <span class="hl">365 Tage</span> pulsiert.</h2>
        <p class="lead">Unser Büro liegt im Scheck Club in Unterföhring bei München. Mit 12 Padel-Courts ist er eine der größten Padel-Anlagen Deutschlands und unsere <a href="/referenzen">Referenzanlage</a>.</p>
        <p class="t-addr">Scheck Club · Münchner Str. 15 · 85774 Unterföhring</p>
      </div>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Wir sind <span class="kw">für dich</span> da.</h2>
    <p class="lead" style="margin:18px auto 0">Du hast einen Standort, wir haben den Plan. Sichere dir jetzt dein unverbindliches Beratungsgespräch, damit Padel bei dir schnell startet und erfolgreich bleibt.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcFormButton = 'Beratungsgespräch anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
