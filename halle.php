<?php
require __DIR__ . '/inc/tc/layout.php';
$produkte = [
    ['Polycarbonat', '1 Court', '/images/halle/produkt1.png', 'Polycarbonat-Überdachung 8mm (Exolon) für einen Court, ohne Side-Panels, inkl. verschiebbarer Seitenwände', '12×21m / 252 m² / 9,42m Höhe'],
    ['Polycarbonat', '1 Court Bogendach', '/images/halle/produkt2.png', 'Bogendachkonstruktion für einen Court mit 8 mm Polycarbonat-Eindeckung, inkl. verschiebbarer Seitenwände', '13×27m / 354 m² / 9,42m Höhe'],
    ['Polycarbonat', '2 Courts', '/images/halle/produkt3.png', 'Polycarbonat-Überdachung 8mm (Exolon) für zwei Courts, ohne Side-Panels, inkl. verschiebbarer Seitenwände', '25×26m / 666 m² / 12,64m Höhe'],
    ['Polycarbonat', '3 Courts', '/images/halle/produkt4.png', 'Polycarbonat-Überdachung 8mm (Exolon) für drei Courts, ohne Side-Panels, inkl. verschiebbarer Seitenwände', '26×36m / 932 m² / 12,64m Höhe'],
    ['Polycarbonat', '4 Courts', '/images/halle/produkt5.png', 'Polycarbonat-Überdachung 8mm (Exolon) für vier Courts, ohne Side-Panels, inkl. verschiebbarer Seitenwände', '26×50m / 1290 m² / 12,64m Höhe'],
    ['Thermo Roof', 'Thermo Roof', '/images/halle/produkt6.png', 'Thermo Roof Überdachung 40mm und vertikale Wände mit 50mm PVC Rahmen', '18×25m / 398 m² / 9,42m Höhe'],
    ['Thermo Roof', '4 Court Thermo Roof', '/images/halle/produkt7.png', '4 Court Thermo Roof mit 40mm und vertikale Wände mit 50mm PVC Rahmen', '28×51m / 1412 m² / 9,42m Höhe'],
];
$schema = [
    ['Grundriss', '/images/halle/1.png'],
    ['Schnitt 1', '/images/halle/2.png'],
    ['Schnitt 2', '/images/halle/3.png'],
    ['Axonometrie', '/images/halle/4.jpg'],
];
$konstruktion = [
    ['a) Stützen / Pfeiler', '/images/halle/a.png', 'Grundplatten 46 × 46 × 1 cm, am Boden befestigt mit M20-Ankerbolzen sowie Versteifungsblechen (Dicke 6 mm), elektrogeschweißt an den Hohlprofilen. Höhen-Tragwerk (Fachwerk) aus Hohlprofilen 35 × 35 × 3 mm. Diagonale Streben mit horizontalen Verbindungsverstärkungen aus Hohlprofilen 35 × 35 × 3 mm.'],
    ['b) Verbindungs- / Kopplungsträger', '/images/halle/b.jpg', 'Höhen-Tragwerk (Fachwerk) aus Hohlprofilen 35 × 35 × 3 mm. Diagonale Streben mit vertikalen Verbindungsverstärkungen aus Hohlprofilen 35 × 35 × 3 mm.'],
    ['c) Bogenbinder / Hauptträger', '/images/halle/c1.jpg', 'Bogenbinder aus Hohlstahlprofilen mit rechteckigem Querschnitt 60 × 100 × 3 mm. Diagonale Streben mit vertikalen Verbindungsverstärkungen aus Hohlprofilen 35 × 35 × 3 mm.'],
];
tc_page_start([
    'path' => '/halle',
    'title' => 'Padel-Halle · Überdachungen aus Polycarbonat & Thermo Roof · THE COURT',
    'description' => 'Padel in der Halle: Indoor-Lösungen von Padelbee. Überdachungen aus Polycarbonat und Thermo Roof für 1 bis 4 Courts aus feuerverzinktem Stahl.',
    'breadcrumb' => ['Halle' => '/halle'],
    'og_image' => '/media/courts/halle.jpg',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Padel-Hallen und Überdachungen',
            'Überdachungs-Lösungen aus Polycarbonat und Thermo Roof für Padel-Courts: Tragkonstruktion aus feuerverzinktem Stahl, geeignet für Photovoltaik, CE-Kennzeichnung gemäß UNI EN 1090-1, für 1 bis 4 Courts.',
            '/halle',
            ['serviceType' => 'Hallenbau für Padel', 'image' => '/media/courts/halle.jpg']
        ),
    ],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Halle</p>
      <p class="label" style="color:var(--white)" data-type>Polycarbonat · Thermo Roof · Indoor</p>
      <h1>Padel in der <span class="kw">Halle.</span></h1>
      <p class="lead">Wir setzen auf das Gesamtsystem von Padel Factory: Courts und Halle technisch sauber abgestimmt. Für andere Anforderungen arbeiten wir mit weiteren Hallenbauern wie Haltec, DS Stahl und Okatent.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Halle anfragen</a><a class="btn ghost" href="#h-produkte">Hallen-Produkte ansehen</a></div>
    </div>
    <figure class="a-herofig" style="aspect-ratio:16/10;max-width:560px"><img src="/media/courts/halle.jpg" alt="Polycarbonat-Halle mit zwei Courts, Luftansicht" style="object-position:center"><figcaption>Hallensystem · Polycarbonat</figcaption></figure>
  </div>
</section>

<section class="band grid-bg" id="h-produkte">
  <div class="inner">
    <p class="label">Hallen-Produkte</p>
    <h2 class="reveal">Hallen-<span class="hl">Produkte.</span></h2>
    <div class="cards c4">
<?php foreach ($produkte as $p): ?>
      <article class="card reveal"><figure class="vimg" style="background:var(--white)"><img src="<?= $p[2] ?>" alt="<?= tc_h($p[1]) ?>" loading="lazy" style="object-fit:contain"></figure><div class="k"><?= $p[0] ?></div><h3 data-type><?= $p[1] ?></h3><p><?= $p[3] ?></p><p style="margin-top:10px;font-weight:600;color:var(--ink,inherit)"><?= $p[4] ?></p></article>
<?php endforeach; ?>
    </div>
    <p style="margin-top:32px"><a class="btn ghost-d" href="/courts">Courts &amp; Hallensysteme vergleichen</a></p>
  </div>
</section>

<section class="band dark grid-bg" id="h-schema">
  <div class="inner">
    <p class="label">Standardschema</p>
    <h2 class="reveal">Überdachungs-Lösungen aus <span class="kw">Polycarbonat.</span></h2>
    <p class="lead">Standardschema der Überdachung für 1 Spielfeld. Modularer Aufbau · Grundriss, Schnitte, Axonometrie</p>
    <div class="cards c4">
<?php foreach ($schema as $s): ?>
      <figure class="card reveal" style="margin:0;background:var(--white)"><div style="aspect-ratio:4/3;display:flex;align-items:center;justify-content:center"><img src="<?= $s[1] ?>" alt="<?= $s[0] ?>" loading="lazy" style="max-width:100%;max-height:100%;object-fit:contain;display:block"></div><figcaption class="k" style="margin-top:14px;color:var(--muted)"><?= $s[0] ?></figcaption></figure>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band grid-bg" id="h-konstruktion">
  <div class="inner">
    <p class="label">Konstruktion</p>
    <h2 class="reveal">Beschreibung der tragenden <span class="hl">Konstruktion.</span></h2>
    <p class="lead">Die Konstruktion besteht aus Trägern, Stützen und Fachwerkbögen aus feuerverzinktem Stahl mit quadratischem Querschnitt 300 × 300 mm, aufgebaut aus vier tragenden Hohlprofilen mit einem Querschnitt von 35 × 35 × 3 mm sowie diagonalen Verbindungsstreben gleicher Profilart. Die Konstruktion ist wie folgt aufgebaut:</p>
    <div class="cards c3">
<?php foreach ($konstruktion as $k): ?>
      <article class="card reveal"><figure class="vimg" style="background:var(--white)"><img src="<?= $k[1] ?>" alt="<?= tc_h(substr($k[0], 3)) ?>" loading="lazy" style="object-fit:contain"></figure><div class="k">Konstruktion</div><h3 data-type><?= $k[0] ?></h3><p><?= $k[2] ?></p></article>
<?php endforeach; ?>
    </div>
    <div class="cards c3" style="margin-top:20px">
      <article class="card dk reveal"><div class="k">Photovoltaik</div><p>Die Stahlkonstruktion ist für die Installation von Photovoltaikmodulen geeignet. Für diesen Anwendungsfall wird empfohlen, die darunterliegende Überdachung vorzugsweise aus Polycarbonat auszuführen.</p></article>
      <article class="card dk reveal"><div class="k">CE-Kennzeichnung</div><p>Die Überdachung wird mit CE-Kennzeichnung für tragende Stahlbauteile gemäß UNI EN 1090-1 ausgeführt. Sämtliche Metallkomponenten erhalten eine Feuerverzinkung gemäß UNI EN ISO 1461.</p></article>
    </div>
  </div>
</section>

<section class="band" id="h-beispiele" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Aus der Praxis</p>
    <h2 class="reveal"><span class="hl">Projektbeispiele.</span></h2>
    <div class="gallery">
      <figure class="reveal"><img src="/images/halle/beispiel1.png" alt="Projektbeispiel 1: Montage der Bogenbinder mit Kran" loading="lazy"><figcaption>Projektbeispiel 1</figcaption></figure>
      <figure class="reveal"><img src="/images/halle/beispiel2.png" alt="Projektbeispiel 2: Montage der Stahlbögen über mehreren Courts" loading="lazy"><figcaption>Projektbeispiel 2</figcaption></figure>
      <figure class="reveal"><img src="/images/halle/beispiel3.png" alt="Projektbeispiel 3: Hubarbeitsbühne unter dem Bogendach" loading="lazy"><figcaption>Projektbeispiel 3</figcaption></figure>
      <figure class="reveal"><img src="/images/halle/beispiel4.png" alt="Projektbeispiel 4: fertige Halle mit Polycarbonat-Dach" loading="lazy"><figcaption>Projektbeispiel 4</figcaption></figure>
      <figure class="reveal"><img src="/images/halle/beispiel5.jpg" alt="Projektbeispiel 5: beleuchtete Halle bei Nacht" loading="lazy"><figcaption>Projektbeispiel 5</figcaption></figure>
    </div>
  </div>
</section>

<?php $tcPreselect = ['Hallenlösungen']; include __DIR__ . '/inc/tc/kontakt-section.php'; ?>
<?php tc_page_end();
