<?php
require __DIR__ . '/inc/tc/layout.php';
$court = [
    'path' => '/premier-court',
    'name' => 'PREMIER Court',
    'title' => 'PREMIER Court · Topklasse von 3B Padel · THE COURT',
    'description' => 'PREMIER Court von 3B Padel: Topklasse ohne tragende Verstrebungen, mit freiem Design und uneingeschränkter Sicht aus jeder Perspektive.',
    'label' => '3B Padel · Modell Premier',
    'h1' => 'PREMIER <span class="kw">Court.</span>',
    'h2' => 'Top of the <span class="hl">Range.</span>',
    'lead' => 'Das Modell Premier stellt die Topklasse der 3B Padel Courts dar. Es zeichnet sich durch den vollständigen Verzicht auf tragende Verstrebungen aus und bietet dadurch ein einzigartiges, freies Design mit uneingeschränkter Sicht aus jeder Perspektive. Diese Bauweise gewährleistet maximale Spielperformance, höchste Sicherheit und eine ästhetisch anspruchsvolle Optik. Im Grundpreis enthalten sind die komplette Konstruktion, ein 12 mm Sicherheitsglas-Kit, der fibrillierte Kunstrasenbelag sowie acht LED-Fluter.',
    'image' => '/media/courts/modelle/premier.jpg',
    'alt' => 'PREMIER Court ohne tragende Verstrebungen',
    'caption' => 'PREMIER Court · Top of the Range',
    'schema_name' => 'PREMIER Court',
    'boxes' => [
        ['Konstruktion', 'Die gesamte Struktur ist feuerverzinkt, um Langlebigkeit und Widerstandsfähigkeit sicherzustellen.'],
        ['Glaspanele', 'Die hochresistenten Einscheibensicherheitsgläser mit polierten und abgeschrägten Kanten sind in zwei Varianten erhältlich: 12 mm ESG Einscheibensicherheitsglas oder 6+6 mm Verbund-Sicherheitsglas.'],
        ['Kunstrasen', 'Erhältlich als fibrillierte oder strukturierte Ausführung, individuell anpassbar an die Spielvorlieben und den Komfort der Nutzer. Verfügbar in den Farben Grün, Blau und Rot.'],
        ['Beleuchtung', 'Die Beleuchtung ist in drei Intensitätsstufen verfügbar und sorgt für optimale Sicht bei Abendspielen: 17.500 Lumen, 18.500 Lumen und 23.000 Lumen.'],
    ],
];
include __DIR__ . '/inc/tc/court-modell.php';
