<?php
require __DIR__ . '/inc/tc/layout.php';
// Partnernetzwerk nach Firmenpräsentation 2026 (Folie 3) und Martins neuestem Entwurf (the-court.com, Stand 23.11.2026).
// Logos: Masken aus the-court.js (data-logo), für Partner ohne Maske eine Textkachel.
$ratio = ['100padel' => 1.144, 'acp' => 5.856, 'activeconnected' => 6.167, 'avsyntec' => 8.867, 'babolat' => 6.344, 'btv' => 4.089, 'dsstahl' => 4.922, 'dtb' => 2.411, 'haltec' => 3.278, 'joola' => 3.167, 'kramke' => 4.433, 'mejorset' => 2.789, 'mindspring' => 6.711, 'mrc' => 9.189, 'okatent' => 6.356, 'padelconcept' => 1.811, 'padelfactory' => 4.825, 'padelgalis' => 3.333, 'patricio' => 4.133, 'planeco' => 4.067, 'playtomic' => 6.033, 'polytan' => 3.533, 'purevending' => 5.278, 'pws' => 1.51, 'rna' => 9.489, 'scheck' => 2.856, 'sportogo' => 5.044, 'wilson' => 4.067, 'zuply' => 4.511];
$logoH = function (string $k, float $area = 7200, float $maxW = 210) use ($ratio): int {
    $r = $ratio[$k];
    $h = sqrt($area / $r);
    $w = $h * $r;
    if ($w > $maxW) {
        $w = $maxW;
        $h = $w / $r;
    }
    if ($h > $maxW / 2.2) {
        $h = $maxW / 2.2;
    }
    return (int) round($h);
};
// Kachel: ['m', Maske, Name, Info] oder ['t', Text, Name, Info, Untertitel]. Info nur aus Martins Entwurf/Folie 3.
$gruppen = [
    ['dark' => false, 'items' => [
        ['k' => 'Planung · Architektur · Bau', 't' => 'Planen &amp; Bauen', 'text' => 'Architektur, Planung, Projektmanagement, Tiefbau und Sportbeläge. Unsere spezialisierten Architekturbüros arbeiten für ganz Deutschland, effizient und schnell.', 'link' => [['/sportplatzbau', 'Zum Sportplatzbau'], ['/padel-court-bauen', 'So läuft der Bau ab']], 'tiles' => [
            ['t', 'BAP', 'BAP', 'Architektur', 'Barthe Asmuth Partner'],
            ['m', 'planeco', 'planeco', 'Planung'],
            ['m', 'acp', 'ACP', 'Projektmanagement'],
            ['m', 'polytan', 'Polytan', 'Sportbeläge'],
            ['t', 'InfraConstruct', 'InfraConstruct', 'Tiefbau', 'Bau GmbH'],
            ['m', 'avsyntec', 'AV Syntec Europa', 'Rebound Ace'],
            ['m', 'kramke', 'Kramke', 'Bau'],
            ['t', 'thecourt.dev', 'thecourt.dev', 'Sportplatzbau', 'Structure. Systemized.'],
        ]],
        ['k' => 'Courts · Hallen', 't' => 'Courts &amp; Hallen', 'text' => 'Jeder Hersteller hat eigene Stärken. Wir sind an keinen einzelnen Hersteller gebunden und vergleichen für dich Qualität, Lieferzeit, Herstellergarantie und Preis. Hallen bauen wir mit dem Gesamtsystem von Padel Factory und weiteren Hallenbauern wie Haltec, DS Stahl, Okatent und Kramke.', 'link' => [['/courts#c-hersteller', 'Alle Hersteller im Detail'], ['/halle', 'Zur Padel-Halle']], 'tiles' => [
            ['m', 'padelfactory', 'Padel Factory', 'Italien · 15 J. Garantie lt. Hersteller'],
            ['m', 'padelgalis', 'Padel Galis', 'Spanien · The Player\'s Court'],
            ['m', 'padelconcept', 'Padel Concept', 'Lettland · kurze Lieferzeiten'],
            ['m', 'mejorset', 'Mejor Set', 'Spanien · Premium Padel Courts'],
            ['m', '100padel', '100% Padel', 'Frankreich · Montage in Deutschland'],
            ['m', 'haltec', 'Haltec', 'Hallen'],
            ['m', 'dsstahl', 'DS Stahl', 'Hallen'],
            ['m', 'okatent', 'Okatent', 'Hallen'],
        ]],
    ]],
    ['dark' => false, 'items' => [
        ['k' => 'Digital · Automaten · Equipment · Finanzierung', 't' => 'Digital &amp; Equipment', 'text' => 'Buchung, Zugang, Licht und Automaten greifen ineinander. Für Schlägerverleih, Bälle, Snacks und Getränke rund um die Uhr arbeiten wir mit Automatenpartnern zusammen. Kauf, Leasing oder Joint Venture, wir finden das Modell, das zu dir passt. Für die Finanzierung haben wir mindspringpadel an unserer Seite.', 'link' => [['/automatenloesungen', 'Zu den Automaten']], 'tiles' => [
            ['m', 'playtomic', 'Playtomic', 'Buchung'],
            ['m', 'sportogo', 'Sportogo', 'Verleih'],
            ['m', 'purevending', 'purevending', 'Automaten'],
            ['m', 'zuply', 'Zuply', 'Vending'],
            ['t', 'Levendo Global', 'Levendo Global', 'Digital', ''],
            ['m', 'babolat', 'Babolat', 'Equipment'],
            ['t', 'Dunlop', 'Dunlop', 'Equipment', ''],
            ['m', 'wilson', 'Wilson', 'Equipment'],
            ['m', 'joola', 'Joola', 'Pickleball'],
            ['m', 'mindspring', 'mindspringpadel', 'Finanzierung'],
        ]],
        ['k' => 'Clubs · Academy · Events · Verbände', 't' => 'Clubs, Events &amp; Verbände', 'text' => 'Padel für deinen Verein ohne eigene Investition. Dein Verein stellt die Fläche gegen Pacht, das Joint Venture übernimmt Bau, Finanzierung und Betrieb. Padelbee entwickelt, der Motions Racket Club betreibt. Dazu kommen strukturierte Trainingsprogramme, Betreiber-Coaching sowie professionelle Planung und Durchführung von Turnieren und Events.', 'link' => [['/betreiberkonzept#b-netzwerk', 'Zum Betreiberkonzept']], 'tiles' => [
            ['m', 'mrc', 'Motions Racket Club', 'Joint Venture'],
            ['m', 'scheck', 'Scheck Club', 'Referenzclub'],
            ['m', 'rna', 'Rafa Nadal Academy', 'Academy'],
            ['m', 'patricio', 'Patricio Travel', 'Travel'],
            ['m', 'activeconnected', 'active connected', 'Messe'],
            ['m', 'pws', 'Padel World Summit', 'Summit'],
            ['t', 'Best of Three', 'Best of Three', 'Events', 'Challenge'],
            ['t', 'Sports Tech Nation', 'Sports Tech Nation', 'Messe', '2026'],
            ['m', 'btv', 'Bayerischer Tennis-Verband', 'Offizieller Infrastrukturpartner'],
            ['m', 'dtb', 'Deutscher Tennis Bund', 'Verband'],
        ]],
    ]],
];
$orgs = [];
foreach ($gruppen as $band) {
    foreach ($band['items'] as $g) {
        foreach ($g['tiles'] as $t) {
            $orgs[$t[2]] = tc_schema_clean(['@type' => 'Organization', 'name' => $t[2], 'description' => html_entity_decode($g['t'], ENT_QUOTES, 'UTF-8')]);
        }
    }
}
$pTile = function (array $t) use ($logoH): void { ?>
          <div class="pt">
<?php if ($t[0] === 'm'): ?>
            <div class="lg" role="img" aria-label="<?= tc_h($t[2]) ?>"><div class="m" data-logo="<?= tc_h($t[1]) ?>" data-h="<?= $logoH($t[1]) ?>"></div></div>
<?php else: ?>
            <div class="lg"><div class="txt"><?= tc_h($t[1]) ?><?php if (($t[4] ?? '') !== ''): ?><small><?= tc_h($t[4]) ?></small><?php endif; ?></div></div>
<?php endif; ?>
            <p class="pn"><b><?= tc_h($t[2]) ?></b><?php if ($t[3] !== ''): ?><span><?= tc_h($t[3]) ?></span><?php endif; ?></p>
          </div>
<?php };
tc_page_start([
    'path' => '/partner',
    'title' => 'Padelbee Partner · Courtbau, Hallen & Digital',
    'description' => 'Padelbee Partner: über 30 Partner für Courtbau, Hallenbau, Digitalisierung, Finanzierung und Equipment. Wir wählen für dein Padel-Projekt die passenden aus.',
    'breadcrumb' => ['Partner' => '/partner'],
    'page_type' => 'CollectionPage',
    'extra_head' => '<link rel="stylesheet" href="/media/tc/p-partner.css?v=' . TC_ASSET_VERSION . '">',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [tc_schema_item_list('Partner von Padelbee', array_values($orgs))],
]);
?>
<section class="band dark grid-bg c-hero p-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Partner</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padelbee Partner · 360° Padel-Expertise</span>Unser <span class="kw">Partner&shy;netzwerk.</span></h1>
      <p class="lead">Für jedes Projekt wählen wir aus über 30 Partnern die passenden aus, von Planung und Bau über <a href="/courts#c-hersteller">Courts</a> und <a href="/halle">Hallen</a> bis zu <a href="/automatenloesungen">Digitalisierung</a>, Equipment und Events.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Projekt anfragen</a><a class="btn ghost" href="#p-netzwerk">Partner ansehen</a></div>
    </div>
    <div class="p-btv">
      <p>Offizieller Padel-Infrastrukturpartner des Bayerischen Tennis-Verbands</p>
      <div class="m" role="img" aria-label="Bayerischer Tennis-Verband" data-logo="btv" data-h="<?= $logoH('btv', 5200, 210) ?>"></div>
    </div>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats r-stats">
      <div><b data-count="30" data-plus>30+</b><span>Partner</span></div>
      <div><b data-count="5">5</b><span>Court-Hersteller</span></div>
      <div><b data-count="8">8</b><span>Partnerbereiche</span></div>
    </div>
  </div>
</section>

<?php foreach ($gruppen as $bi => $band): ?>
<section class="band grid-bg"<?= $bi === 0 ? ' id="p-netzwerk"' : ' id="p-digital" style="background-color:var(--grey-050)"' ?>>
  <div class="inner">
<?php if ($bi === 0): ?>
    <p class="label" data-type>Partnernetzwerk</p>
    <h2 class="reveal">Mit wem wir <span class="hl">arbeiten.</span></h2>
    <p class="lead">Du hast einen Ansprechpartner für jede Phase. Für dein Projekt wählen wir aus unserem Netzwerk die passenden Partner aus, je nach Projektanforderung auch weitere Anbieter.</p>
<?php else: ?>
    <p class="label" data-type>Digital, Finanzierung &amp; Events</p>
    <h2 class="reveal">Mehr als <span class="hl">Courts.</span></h2>
    <p class="lead">Buchung, Automaten, Equipment, Finanzierung, Joint Venture und Events machen aus einer Anlage einen laufenden Betrieb.</p>
<?php endif; ?>
    <div style="margin-top:20px">
<?php foreach ($band['items'] as $g): ?>
      <div class="pg reveal">
        <div>
<?php if ($g['k'] !== ''): ?>
          <p class="label k" data-type><?= $g['k'] ?></p>
<?php endif; ?>
          <h3 data-type><?= $g['t'] ?></h3>
<?php if ($g['text'] !== ''): ?>
          <p class="t"><?= $g['text'] ?></p>
<?php endif; ?>
<?php foreach ($g['link'] ?? [] as $l): ?>
          <a class="pg-more" href="<?= tc_h($l[0]) ?>"><?= tc_h($l[1]) ?></a>
<?php endforeach; ?>
        </div>
        <div class="pg-logos n<?= count($g['tiles']) ?>">
<?php foreach ($g['tiles'] as $t) $pTile($t); ?>
        </div>
      </div>
<?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Wir wählen die <span class="kw">passenden aus.</span></h2>
    <p class="lead" style="margin:18px auto 0">Erzähl uns von deinem Standort und deinem Vorhaben. Im kostenlosen Erstgespräch klären wir, welche Partner zu deinem Projekt passen.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
