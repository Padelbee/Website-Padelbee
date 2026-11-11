<?php
require __DIR__ . '/inc/tc/layout.php';
$vorteile = [
    ['Bewertung', 'Korrekte Bewertung der Angebote für den Platzbau'],
    ['Vergleich', 'Detaillierter Vergleich der vorliegenden Angebote'],
    ['Planung', 'Sichere Planung der Baukosten'],
];
tc_page_start([
    'path' => '/angebotsvergleich',
    'title' => 'Angebotsvergleich für Padel-Plätze · THE COURT',
    'description' => 'Angebotsvergleich für Padel-Projekte: korrekte Bewertung der Angebote, detaillierter Vergleich und sichere Planung der Baukosten.',
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
      <p class="lead">Aus nunmehr 14 Jahren Erfahrung im Bau von Padel-Plätzen haben wir nun den Angebotsvergleich entwickelt. Wir kennen die Details, auf die es ankommt und die Fallen, die eventuell lauern.</p>
    </div>
    <div class="hero-art frei" style="max-width:420px"><img src="/media/leistungen/angebotsvergleich-hero.png?v=2" alt="Zwei Hände halten mehrere Angebote zum Vergleich"></div>
  </div>
</section>

<section class="band grid-bg" id="v-beispiel">
  <div class="inner">
    <p class="label">Angebotsvergleich</p>
    <h2 class="reveal">Mit dem Padelbee <span class="hl">Angebotsvergleich.</span></h2>
    <p class="lead">Jedes Angebot für den Bau von Padel-Plätzen ist anders strukturiert und nicht alle tatsächlich anfallenden Kosten sind auf den ersten Blick erkennbar. Gleichzeitig spielt die konkrete Situation am Standort bzw. Bauplatz eine gewichtige Rolle: Bodenbeschaffenheit, Fundamentbau, Infrastruktur, Zuwege, Baustellenabsicherung etc. sind Variablen, die in die Kostenanalyse und damit der Investmentplanung mit einfließen müssen.</p>
    <figure class="reveal" style="margin:44px 0 0;border-top:4px solid var(--yellow);background:var(--white);border-inline:1px solid var(--line);border-bottom:1px solid var(--line)"><img src="/images/tabelle.png" alt="Beispiel eines Angebotsvergleichs: Hersteller, Ausstattung und Kosten pro Court nebeneinander, Preise unkenntlich gemacht" loading="lazy" style="width:100%;height:auto;display:block"></figure>
    <p class="label" style="margin-top:14px">Beispiel eines Angebotsvergleichs, Preise unkenntlich gemacht</p>
  </div>
</section>

<section class="band grid-bg" id="v-vorteile" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Vorteile</p>
    <h2 class="reveal">Die Vorteile für <span class="hl">dich.</span></h2>
    <div class="cards c3">
<?php foreach ($vorteile as $i => $v): ?>
      <article class="card reveal"><div class="k">Vorteil <?= sprintf('%02d', $i + 1) ?></div><h3 data-type><?= $v[0] ?></h3><p><?= $v[1] ?></p></article>
<?php endforeach; ?>
    </div>
  </div>
</section>


<?php $tcPreselect = ['Angebotsvergleich']; $tcKontaktLead = 'So schnell bekommst du unsere Unterstützung. Schreib uns einfach. Gerne senden wir dir dein persönliches Angebot. Deine Anfrage ist dabei selbstverständlich unverbindlich.'; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
