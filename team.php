<?php
require __DIR__ . '/inc/tc/layout.php';
$team = [
    ['Martin Gaffal', 'Team Padelbee', 'Co-Founder / Geschäftsführer', '/images/team/martin.png'],
    ['Stefan Möbius', 'Team MPM · Team Padelbee', 'Co-Founder', '/images/team/stefan.png'],
    ['Oliver Scheck-Poturicek', 'Team Scheck Club', 'Experte mit Referenzanlage', '/images/team/oliver.png'],
    ['Gerrit Molineus', 'Team Gabriel Realestate', 'M.Sc. Architekt / Projektentwicklung', '/images/team/gerrit.png'],
    ['Angélique Willner', 'Team MPM', 'Projektleitung &amp; Projektsteuerung', '/images/team/angelique.png'],
    ['Christian Bonk', 'Team Padelbee', 'Padelexperte · Padelcoach', '/images/team/christian.jpg'],
    ['Florian von Stuckrad', 'Team MPM', 'Sports &amp; Products', '/media/team/florian.jpg'],
    ['Philipp Kamp', 'Team MPM', 'Sales Manager', '/media/team/philipp.jpg'],
    ['Sebastien Collinet', 'Team Padelbee', 'Projektleiter NRW', '/images/team/SEBASTIEN.png'],
];
tc_page_start([
    'path' => '/team',
    'title' => 'Das Padelbee Team · Padel-Experten für dein Projekt · THE COURT',
    'description' => 'Das Padelbee Team: Volle Energie & Kompetenz für dein Padel-Projekt. Über 14 Jahre Padel-Erfahrung und 15 Jahre Marketing-Expertise für Racket Sports.',
    'breadcrumb' => ['Team' => '/team'],
    'page_type' => 'AboutPage',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => array_map(
        fn($p) => tc_schema_person($p[0], ['jobTitle' => html_entity_decode($p[2]), 'image' => $p[3]]),
        $team
    ),
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px);grid-template-columns:1fr">
    <div style="max-width:860px">
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Team</p>
      <p class="label" style="color:var(--white)" data-type>Racket Sports · Padel · Projektentwicklung</p>
      <h1>Das Padelbee <span class="kw">Team.</span></h1>
      <p class="lead">Wir lieben Racket Sports, kommen vom Tennis und anderen Sportarten und sehen in Padel eine Sportart, die ganz vielen Menschen in unserem Land jede Menge Spielspaß liefern wird. Der Einstieg ist leicht, Leistungsunterschiede gibt es im Gegensatz zu anderen Sportarten kaum bzw. jeder oder jede kann gegen jeden oder jede ganz einfach spielen.</p>
    </div>
  </div>
</section>

<section class="band grid-bg" id="t-team">
  <div class="inner">
    <p class="label">Team</p>
    <h2 class="reveal">Volle Energie &amp; Kompetenz für dein <span class="hl">Padel-Projekt.</span></h2>
    <p class="lead">Das Beste dabei: Wenn man es richtig anstellt, wird Padel an nahezu jedem Standort ein Erfolg. Wir, das Team von Padelbee, helfen dir auf dem Weg dorthin und in Zukunft.</p>
    <div class="cards c3">
<?php foreach ($team as $p): ?>
      <article class="card reveal"><figure class="vimg" style="aspect-ratio:1/1"><img src="<?= $p[3] ?>" alt="<?= tc_h($p[0]) ?>" loading="lazy" style="object-position:center 25%"></figure><div class="k"><?= $p[1] ?></div><h3 data-type><?= tc_h($p[0]) ?></h3><p><?= $p[2] ?></p></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<?php $tcPreselect = []; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
