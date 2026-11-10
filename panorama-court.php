<?php
require __DIR__ . '/inc/tc/layout.php';
$court = [
    'path' => '/panorama-court',
    'name' => 'Panorama Court',
    'title' => 'Panorama Court · Modell Wing von 3B Padel · THE COURT',
    'description' => 'Panorama Court von 3B Padel: Modell Wing mit offenem Design ohne vertikale Verstrebungen zwischen den Glasflächen, für klarere Sicht und offeneres Spielgefühl.',
    'label' => '3B Padel · Modell Wing',
    'h1' => 'Panorama <span class="kw">Court.</span>',
    'h2' => 'Modell <span class="hl">Wing.</span>',
    'lead' => 'Das Modell Wing steht für ein modernes, offenes Design und bildet die Zwischenstufe der Court-Kollektion. Es zeichnet sich durch den Wegfall der vertikalen Verstrebungen zwischen den Glasflächen aus: Lediglich vier Trägerrohre sind an den Ecken der Konstruktion positioniert. Dies sorgt für eine klarere Sicht und ein offeneres Spielgefühl. Der Richtpreis umfasst die Stahlkonstruktion, das 12 mm-Glas-Kit, den fibrillierten Kunstrasen sowie 8 Flutlichtstrahler.',
    'image' => '/media/courts/modelle/panorama-wing.jpg',
    'alt' => 'Panorama Court Modell Wing',
    'caption' => 'Panorama Court · Modell Wing',
    'schema_name' => 'Panorama Court Modell Wing',
    'boxes' => [
        ['Konstruktion', 'Die gesamte Struktur ist feuerverzinkt, um Langlebigkeit und Widerstandsfähigkeit sicherzustellen.'],
        ['Glaspanele', 'Die hochresistenten Einscheibensicherheitsgläser mit polierten und abgeschrägten Kanten sind in zwei Varianten erhältlich: 12 mm Einscheibenglas oder 6+6 mm Verbund-Sicherheitsglas.'],
        ['Kunstrasen', 'Erhältlich als fibrillierte oder strukturierte Ausführung, individuell anpassbar an die Spielvorlieben und den Komfort der Nutzer. Verfügbar in den Farben Grün, Blau und Rot.'],
        ['Beleuchtung', 'Die Beleuchtung ist in drei Intensitätsstufen verfügbar und sorgt für optimale Sicht bei Abendspielen: 17.500 Lumen, 18.500 Lumen und 23.000 Lumen.'],
    ],
];
include __DIR__ . '/inc/tc/court-modell.php';
