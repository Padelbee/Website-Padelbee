<?php
require __DIR__ . '/inc/tc/layout.php';
$vorteile = [
    ['Bewertung', 'Korrekte Bewertung der Angebote für den Platzbau.'],
    ['Vergleich', 'Detaillierter Vergleich der vorliegenden Angebote.'],
    ['Planung', 'Sichere Planung der Baukosten.'],
];
tc_page_start([
    'path' => '/angebotsvergleich',
    'title' => 'Angebotsvergleich für Padel-Plätze · THE COURT',
    'description' => 'Angebotsvergleich für den Bau von Padel-Plätzen: korrekte Bewertung der Angebote, detaillierter Vergleich und sichere Planung der Baukosten.',
    'breadcrumb' => ['Angebotsvergleich' => '/angebotsvergleich'],
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Angebotsvergleich für Padel-Plätze',
            'Bewertung und detaillierter Vergleich von Angeboten für den Bau von Padel-Plätzen inklusive Standortfaktoren wie Bodenbeschaffenheit, Fundamentbau, Infrastruktur und Baustellenabsicherung für eine sichere Planung der Baukosten.',
            '/angebotsvergleich',
            ['serviceType' => 'Angebotsvergleich', 'image' => '/media/leistungen/angebotsvergleich-kopf.png']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Angebotsvergleich</p>
      <p class="label" style="color:var(--white)" data-type>Angebote · Baukosten · Planungssicherheit</p>
      <h1>Angebots&shy;<span class="kw">vergleich.</span></h1>
      <p class="lead">Aus über 14 Jahren Erfahrung im Bau von Padel-Plätzen haben wir den Padelbee Angebotsvergleich entwickelt. Wir kennen die Details, auf die es ankommt, und die Fallen, die eventuell lauern.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:34px"><a class="btn" href="#kontakt">Angebotsvergleich anfragen</a><a class="btn ghost" href="#v-beispiel">Beispiel-Vergleich ansehen</a></div>
    </div>
    <figure class="a-herofig" style="aspect-ratio:auto;max-width:520px;border-top:0;overflow:visible"><img src="/media/leistungen/angebotsvergleich-kopf.png" alt="Zwei Hände halten mehrere Angebote zum Vergleich" loading="lazy" style="height:auto;object-fit:contain"></figure>
  </div>
  <div class="inner hero-stats" style="padding-block:0 40px">
    <div class="stats">
      <div><b data-count="14" data-pre="+">+14</b><span>Jahre Padel-Erfahrung</span></div>
      <div><b data-count="5">5</b><span>Court-Hersteller</span></div>
      <div><b data-count="30" data-plus>30+</b><span>Partner</span></div>
      <div><b data-count="50">50</b><span>Projekte</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="v-beispiel">
  <div class="inner">
    <p class="label">Warum ein Vergleich</p>
    <h2 class="reveal">Kein Angebot ist wie das <span class="hl">andere.</span></h2>
    <p class="lead">Jedes Angebot für den Bau von Padel-Plätzen ist anders aufgebaut, und nicht alle tatsächlich anfallenden Kosten sind auf den ersten Blick erkennbar. Gleichzeitig spielt die konkrete Situation an deinem Standort und Bauplatz eine große Rolle: Bodenbeschaffenheit, Fundamentbau, Infrastruktur, Zuwege, Baustellenabsicherung und mehr fließen in die Kostenanalyse und damit in deine Investmentplanung ein.</p>
    <figure class="reveal" style="margin:44px 0 0;border-top:4px solid var(--yellow);background:var(--white);border-inline:1px solid var(--line);border-bottom:1px solid var(--line)"><img src="/images/tabelle.png" alt="Beispiel eines Angebotsvergleichs: Hersteller, Ausstattung und Kosten pro Court nebeneinander, Preise unkenntlich gemacht" loading="lazy" style="width:100%;height:auto;display:block"></figure>
    <p class="label" style="margin-top:14px">Beispiel eines Angebotsvergleichs, Preise unkenntlich gemacht</p>
  </div>
</section>

<section class="band dark grid-bg" id="v-vorteile">
  <div class="inner">
    <p class="label">Die Vorteile für dich</p>
    <h2 class="reveal">Sicher planen, bevor du <span class="kw">unterschreibst.</span></h2>
    <p class="lead">Wir prüfen die Angebote, die dir vorliegen, Punkt für Punkt und zeigen dir, was wirklich drinsteckt und was fehlt.</p>
    <div class="cards c3">
<?php foreach ($vorteile as $i => $v): ?>
      <article class="card reveal"><div class="k">Vorteil <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $v[0] ?></h3><p><?= $v[1] ?></p></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band grid-bg" id="v-weitere" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Weitere Leistungen</p>
    <h2 class="reveal">Vom Standort bis zum <span class="hl">fertigen Court.</span></h2>
    <p class="lead">Wenn der Vergleich steht, begleiten wir dich auf Wunsch durch das ganze Projekt.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Standort&shy;analyse</h3><p>Analyse der Potenziale am Standort und der Chancen am Markt mit Handlungsempfehlung zu Positionierung, Platzbau und Betrieb.</p><a class="btn ghost-d" href="/standortanalyse" style="margin-top:20px">Mehr zur Standortanalyse</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Platzbau</h3><p>Zuverlässige Realisierung von Fundament und Plätzen durch ein eingespieltes Team von Architekten, Ingenieuren und Bauunternehmen.</p><a class="btn ghost-d" href="/padel-court-bauen" style="margin-top:20px">Mehr zum Platzbau</a></article>
      <article class="card reveal"><div class="k">Leistung</div><h3 data-type>Courts</h3><p>Standard, Panorama oder Full-Panorama: Padel-Courts von fünf Herstellern, dazu Fundamente und Hallensysteme.</p><a class="btn ghost-d" href="/courts" style="margin-top:20px">Mehr zu den Courts</a></article>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Angebotsvergleich']; $tcKontaktLead = 'So schnell bekommst du unsere Unterstützung: Schreib uns einfach. Gerne senden wir dir dein persönliches Angebot. Deine Anfrage ist dabei selbstverständlich unverbindlich.'; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
