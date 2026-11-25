<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt: Martins Entwurf (the-court.com, Stand 23.11.2026: "Für wen wir bauen", FAQ, Partnernetzwerk),
// Referenz SC Eching (Folie 17 und inc/tc/referenzen-data.json), Bau-Partner (Folie 3).
$spFaq = [
    ['frage' => 'Wie viele Padel-Courts passen auf einen Tennisplatz?', 'antwort' => 'Auf einen Tennisplatz passen bis zu zwei Padel-Courts. Ein Padel-Court braucht deutlich weniger Fläche als ein Tennisplatz. Aus einem ungenutzten Tennisplatz kann so eine kleine Padelanlage werden, ohne dass dein Verein neues Gelände braucht. Ob deine Plätze passen, prüfen wir vor Ort, zusammen mit Baurecht, Lärm und Licht. Wie das abläuft, steht unter <a href="/standortanalyse">Standortanalyse</a>.'],
];
tc_page_start([
    'path' => '/sportplatzbau',
    'title' => 'Sportplatzbau für Tennis, Pickleball & Padel · Padelbee',
    'description' => 'Sportplatzbau für Vereine, Hotels, Gewerbe und Kommunen: Tennis-, Pickleball- und Padelanlagen aus einer Hand, von der Beratung bis zum Betrieb.',
    'breadcrumb' => ['Sportplatzbau' => '/sportplatzbau'],
    'og_image' => '/media/courts/anlage_luftbild.jpg',
    'extra_head' => '<link rel="stylesheet" href="/media/tc/p-sportplatzbau.css?v=' . TC_ASSET_VERSION . '">',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Sportplatzbau: Tennis-, Pickleball- und Padelanlagen',
            'Beratung, Entwicklung und Bau moderner Racketsportanlagen für Padel, Pickleball und Tennis für Vereine, Hotels, Gewerbe und die öffentliche Hand in Deutschland, Österreich und der Schweiz.',
            '/sportplatzbau',
            ['serviceType' => 'Sportplatzbau', 'image' => '/media/courts/anlage_luftbild.jpg']
        ),
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $spFaq), '/sportplatzbau'),
    ],
]);
$spGroups = [
    ['Vereine', 'Tennisvereine', 'Padel als zweites Standbein, mit mehr Mitgliedern und mehr Auslastung.'],
    ['Vereine', 'Sportvereine', 'Neue Sparten mit wenig Fläche und schneller Amortisation.'],
    ['Hotellerie · Gewerbe', 'Hotels &amp; kommerzielle Betreiber', 'Beratung und Bau von Anlagen für Hotels, Resorts und private Betreiber.'],
    ['Golf', 'Golfclubs', 'Racketsport als Ergänzung für Mitglieder und Gäste.'],
    ['Öffentlich', 'Kommunen', 'Sportinfrastruktur für Bürgerinnen und Bürger, inklusive Fördermittel.'],
    ['Tourismus', 'Tourismusverbände', 'Padel und Pickleball als Attraktion für Regionen und Gäste.'],
];
$spLogos = [
    ['txt', 'BAP', 'Barthe Asmuth Partner', 'Architektur'],
    ['planeco', 'Planung'],
    ['acp', 'Projektmanagement'],
    ['polytan', 'Sportbeläge'],
    ['txt', 'InfraConstruct', 'Bau GmbH', 'Tiefbau'],
    ['avsyntec', 'Rebound Ace'],
    ['kramke', 'Bau'],
    ['txt', 'The Court', 'Development', 'Sportplatzbau'],
];
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Sportplatzbau</p>
      <h1 class="sp-h1"><span class="label h1-kicker" style="color:var(--white)" data-type>Sportplatzbau · Tennis · Pickleball · Padel</span>Moderne <span class="kw">Racketsport&shy;anlagen.</span></h1>
      <p class="lead">Beim Sportplatzbau beraten, entwickeln und bauen wir moderne Anlagen für Padel, Pickleball und Tennis, für Vereine, Hotels, Gewerbe und die öffentliche Hand.</p>
      <p class="lead">Wie ein Projekt abläuft, liest du unter <a href="/standortanalyse">Standortanalyse</a> und <a href="/padel-court-bauen">Padel&nbsp;Court&nbsp;bauen</a>.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Anlage anfragen</a><a class="btn ghost" href="#sp-referenz">Referenz ansehen</a></div>
    </div>
    <figure class="courtfig courtphoto"><img src="/media/courts/anlage_luftbild.jpg" alt="Luftaufnahme einer Anlage mit fünf Padel-Courts neben Tennisplätzen"></figure>
  </div>
</section>

<section class="band grid-bg" id="sp-mehrsport">
  <div class="inner">
    <p class="label" data-type>Mehrsportanlagen</p>
    <h2 class="reveal">Mehr aus deiner Anlage <span class="hl">machen.</span></h2>
    <p class="lead">Neben Padel planen wir auch Anlagen für Pickleball und Tennis.</p>
    <div class="cards c3">
      <article class="card dk reveal"><div class="k">Tennisverein</div><h3 data-type>Leere Plätze nutzen</h3><p>In vielen Vereinen stehen Tennisplätze leer. Ein Platz, der nicht bespielt wird, kostet nur. Auf einen Tennisplatz passen bis zu zwei Padel-Courts, und Padel bringt jüngere Spieler, Familien und Firmen auf die Anlage.</p><p>Padel und Tennis sind keine Konkurrenz. Wer Padel entdeckt, bleibt oft auch beim Tennis.</p><ul class="chips"><li>Planbare Einnahmen statt Pflegekosten</li><li>Mehr Leben im Vereinsheim und in der Gastronomie</li></ul></article>
      <article class="card dk reveal"><div class="k">Hotel</div><h3 data-type>Das Upgrade, das Gäste buchen</h3><p>Padel ist der Sport, den Gäste im Urlaub ausprobieren wollen. Leicht zu lernen, gesellig, perfekt für Paare, Familien und Firmengruppen. Schon ein Einzel-Court reicht für ein starkes Angebot.</p><ul class="chips"><li><a href="/halle">Ganzjährig mit Halle</a></li><li><a href="/automatenloesungen">Ohne Personal mit Automaten</a></li><li><a href="/courts#c-marke">Mit deiner Marke</a></li></ul></article>
      <article class="card dk reveal"><div class="k">Pickleball</div><h3 data-type>Attraktion für Gäste</h3><p>Padel und Pickleball machen Regionen und Hotels für Gäste attraktiv. Im Partnernetzwerk ist Joola unser Partner für Pickleball.</p><div class="sp-joola" role="img" aria-label="Joola"><div class="m" data-logo="joola" data-h="44"></div></div><ul class="chips"><li><a href="/partner">Alle Partner</a></li></ul></article>
    </div>
  </div>
</section>

<section class="band" id="sp-referenz" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>Referenz</p>
    <h2 class="reveal">SC <span class="hl">Eching.</span></h2>
    <p class="lead">Der SC Eching bei München baut einen neuen Tennispark mit 5 Rebound Ace Tennisplätzen und 2 Outdoor Padel Courts. Wir begleiten den Verein von der Beratung und Finanzierung über Planung, Architektur und Bau bis zu Digitalisierung und Betrieb.</p>
    <div class="fd-cost reveal">
      <div><span>Neubau Tennispark</span><b>5 + 2</b><p>5 Rebound Ace Tennisplätze und 2 Outdoor Padel Courts.</p></div>
      <div><span>In Planung</span><b>Fertig 2027</b><p>Die Fertigstellung ist für 2027 geplant.</p><p><a class="more-link" href="/referenzen">Alle Referenzen ansehen</a></p></div>
    </div>
    <ul class="chips reveal"><li>Beratung</li><li>Finanzierung</li><li>Planung &amp; Architektur</li><li>Bau</li><li>Digitalisierung</li><li>Betrieb</li></ul>
  </div>
</section>

<section class="band dark grid-bg" id="sp-partner">
  <div class="inner">
    <p class="label" data-type>Bau-Partner</p>
    <h2 class="reveal">Stark im <span class="kw">Netzwerk.</span></h2>
    <p class="lead">30+ Partner aus Planung, Bau, Courtbau, Hallenbau, Digitalisierung, Equipment und Events. Für dein Projekt wählen wir die passenden aus.</p>
    <div class="logos">
<?php foreach ($spLogos as $l): ?>
<?php if ($l[0] === 'txt'): ?>
      <div class="lg reveal"><span class="t"><?= $l[3] ?></span><div class="txt"><?= $l[1] ?><small><?= $l[2] ?></small></div></div>
<?php else: ?>
      <div class="lg reveal" role="img" aria-label="<?= tc_h($l[0]) ?>"><span class="t"><?= $l[1] ?></span><div class="m" data-logo="<?= $l[0] ?>" data-h="48"></div></div>
<?php endif; ?>
<?php endforeach; ?>
    </div>
    <p class="partnernote sp-partnernote"><a class="more-link" href="/partner">Alle Partner ansehen</a></p>
  </div>
</section>

<section class="band grid-bg" id="sp-faq">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zum <span class="hl">Sportplatzbau.</span></h2>
    <div class="faq-list">
<?php foreach ($spFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Egal, wer du bist, wir finden das passende <span class="kw">Konzept.</span></h2>
    <p class="lead" style="margin:18px auto 0">Ob Verein, Hotel, Gewerbe oder Kommune, wir zeigen dir, welche Racketsportanlage zu deinem Standort passt. Sichere dir jetzt dein unverbindliches Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Tennisplatzbau', 'Pickleball', 'Padelcourt']; $tcFormButton = 'Anlage anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
