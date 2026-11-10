<?php
require __DIR__ . '/inc/tc/layout.php';
$court = [
    'path' => '/standard-court',
    'name' => 'Standard Court',
    'title' => 'Standard Court · Modell SMASH von 3B Padel · THE COURT',
    'description' => 'Standard Court von 3B Padel: Basismodell für Vereine und gewerbliche Betreiber. Modell SMASH mit selbsttragender, feuerverzinkter Stahlrohrkonstruktion.',
    'label' => '3B Padel · Modell SMASH',
    'h1' => 'Standard <span class="kw">Court.</span>',
    'h2' => 'Modell <span class="hl">SMASH.</span>',
    'lead' => 'Das Modell Smash bildet das Basismodell aus Italien und zeichnet sich durch eine selbsttragende Stahlrohrkonstruktion mit Profilmaßen von 80 × 40 mm zwischen den Glasfeldern aus. Die hohe Anzahl der selbsttragenden Elemente gewährleistet außergewöhnliche Stabilität und Sicherheit. Der Richtpreis umfasst die komplette Stahlkonstruktion, das 10 mm-Glas-Kit, den fibrillierten Kunstrasen sowie 8 Flutlichtstrahler.',
    'image' => '/media/courts/modelle/standard-smash.jpg',
    'alt' => 'Standard Court Modell SMASH',
    'caption' => 'Standard Court · Modell SMASH',
    'schema_name' => 'Standard Court Modell SMASH',
    'boxes' => [
        ['Konstruktion', 'Die gesamte Struktur ist feuerverzinkt, um Langlebigkeit und Widerstandsfähigkeit im Outdoor-Einsatz sicherzustellen.'],
        ['Kunstrasen', 'Erhältlich als fibrillierte oder strukturierte Ausführung, individuell anpassbar an die Spielvorlieben und den Komfort der Nutzer. Verfügbar in den Farben Grün, Blau und Rot.'],
        ['Glaspanele', 'Die hochresistenten Einscheibensicherheitsgläser mit polierten und abgeschrägten Kanten sind in zwei Varianten erhältlich: 12 mm Einscheibenglas oder 6+6 mm Verbund-Sicherheitsglas.'],
        ['Beleuchtung', 'Die Beleuchtung ist in drei Intensitätsstufen verfügbar und sorgt für optimale Sicht bei Abendspielen: 17.500 Lumen, 18.500 Lumen und 23.000 Lumen.'],
    ],
];
include __DIR__ . '/inc/tc/court-modell.php';
