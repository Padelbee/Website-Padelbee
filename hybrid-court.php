<?php
require __DIR__ . '/inc/tc/layout.php';
$court = [
    'path' => '/hybrid-court',
    'name' => 'HYBRID Court',
    'title' => 'HYBRID Court aus Stahl und Holz von 3B Padel · THE COURT',
    'description' => 'HYBRID Court von 3B Padel: Kombination aus feuerverzinktem Stahl und massiven Holzbalken, erstmals vorgestellt auf der Padel Best Expo 2024 in Monte Carlo.',
    'label' => '3B Padel · Modell Hybrid',
    'h1' => 'HYBRID <span class="kw">Court.</span>',
    'h2' => 'Höchste Standards und exklusives <span class="hl">Design.</span>',
    'lead' => 'Das Modell Hybrid ist die neueste Entwicklung innerhalb der 3B Padel-Kollektion und wurde erstmals auf der Padel Best Expo 2024 in Monte Carlo vorgestellt. Es kombiniert zwei Werkstoffe mit gegensätzlichen Eigenschaften, Stahl und Holz, und vereint so Stabilität, Leichtigkeit und Flexibilität in einem einzigartigen Design. Diese Verbindung verleiht dem Court eine besondere Eleganz und sorgt zugleich für maximale Sicherheit und Komfort während des Spiels. Im Grundpreis enthalten sind die komplette Konstruktion, ein 12 mm Sicherheitsglas-Kit, der fibrillierte Kunstrasenbelag sowie acht leistungsstarke LED-Fluter.',
    'image' => '/media/courts/modelle/hybrid.jpg',
    'alt' => 'HYBRID Court aus Stahl und Holz',
    'caption' => 'HYBRID Court · Stahl und Holz',
    'schema_name' => 'HYBRID Court',
    'boxes' => [
        ['Konstruktion', 'Wie der Name bereits andeutet, besteht die Hybrid-Konstruktion aus einer Kombination von feuerverzinktem Stahl und massiven Holzbalken, eine Verbindung, die Eleganz, Innovation und Widerstandsfähigkeit auf einzigartige Weise vereint. Dieses Design verkörpert eine harmonische Symbiose aus moderner Technik und natürlicher Ästhetik.'],
        ['Glaspanele', 'Die hochresistenten Einscheibensicherheitsgläser mit polierten und abgeschrägten Kanten sind in zwei Varianten erhältlich: 12 mm Einscheibenglas oder 6+6 mm Verbund-Sicherheitsglas.'],
        ['Kunstrasen', 'Erhältlich als fibrillierte oder strukturierte Ausführung, individuell anpassbar an die Spielvorlieben und den Komfort der Nutzer. Verfügbar in den Farben Grün, Blau und Rot.'],
        ['Beleuchtung', 'Die Beleuchtung ist in drei Intensitätsstufen verfügbar und sorgt für optimale Sicht bei Abendspielen: 17.500 Lumen, 18.500 Lumen und 23.000 Lumen.'],
    ],
];
include __DIR__ . '/inc/tc/court-modell.php';
