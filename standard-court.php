<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt nach der Courts-Präsentation 2026 (Folie 4, 5, 9, 14, 24, 25) und
// Martins neuestem Entwurf (the-court.com/courts, Stand 23.11.2026).
$glas3b = 'Hochresistentes ESG mit polierten, abgeschrägten Kanten, als 12 mm Einscheibenglas oder 6+6 mm VSG.';
$licht3b = 'Drei Intensitätsstufen mit 17.500, 18.500 oder 23.000 Lumen für optimale Sicht bei Abendspielen.';
$rasen3b = 'Fibrilliert oder strukturiert, anpassbar an Spielvorlieben und Komfort. Verfügbar in Grün, Blau und Rot.';
$v = [
    'path' => '/standard-court',
    'name' => 'Standard Court',
    'title' => 'Standard Court: Padel-Court-Modelle im Vergleich · Padelbee',
    'description' => 'Der Standard Court ist die stabile, wirtschaftliche Padel-Court-Variante. Modelle von Padel Factory, Padel Concept und 100% Padel, ab 27.275 € netto.',
    'label' => 'Court-Variante · Einstieg',
    'h1' => 'Standard <span class="kw">Court.</span>',
    'lead' => 'Der Standard Court ist die klassische, wirtschaftliche Lösung. Zusätzliche Streben zwischen den Glaselementen machen die Konstruktion besonders stabil, ideal bei Fokus auf Preis-Leistung und Robustheit. Jedes Modell gibt es als Double- und als Single-Court.',
    'image' => '/media/courts/standard.jpg',
    'alt' => 'Standard Court Rendering mit Streben zwischen den Glaselementen',
    'stats' => [
        ['3', 'Standard-Modelle', 'von 3 Herstellern'],
        ['<small>bis zu</small> 15', 'Jahre Garantie', 'Padel Factory, lt. Hersteller'],
        ['144 km/h', 'Windlast', 'Standard Club, lt. Hersteller'],
        ['27.275 €', 'ab, pro Court netto', 'Smash Standard, Stand 11/2026'],
    ],
    'note' => 'Preise netto, zzgl. Übernachtungs- und Verpflegungskosten. Die Garantie gewährt der jeweilige Hersteller, nicht die THE COURT GmbH.',
    'models_label' => 'Standard-Modelle',
    'models_h2' => 'Drei Hersteller. <span class="hl">Ein</span> Ansprechpartner.',
    'models_lead' => 'Jeder Hersteller hat eigene Stärken. Wir vergleichen die Standard-Modelle für dich auf Basis deines Standorts, deines Budgets und deines Nutzungskonzepts und empfehlen den Court, der technisch, wirtschaftlich und qualitativ passt.',
    'models' => [
        [
            'logo' => 'padelfactory', 'logo_h' => 44, 'brand' => '3B Padel',
            'maker' => '3B Padel', 'tier' => 'Basismodell',
            'name' => 'Smash Standard',
            'text' => 'Das Basismodell aus Italien mit selbsttragender Stahlrohrkonstruktion (Profil 80 × 40 mm) zwischen den Glasfeldern. Die hohe Anzahl selbsttragender Elemente gewährleistet außergewöhnliche Stabilität und Sicherheit. Der Richtpreis umfasst die komplette Stahlkonstruktion, das 10 mm-Glas-Kit, den fibrillierten Kunstrasen sowie 8 Flutlichtstrahler.',
            'price' => 27275, 'price_note' => 'zzgl. Übernachtungs- und Verpflegungskosten',
            'image' => '/media/courts/modelle/standard-smash.jpg', 'alt' => '3B Padel Smash Standard Court',
            'specs' => [
                ['Konstruktion', 'Die gesamte Struktur ist feuerverzinkt, um Langlebigkeit und Widerstandsfähigkeit sicherzustellen.'],
                ['Kunstrasen', $rasen3b],
                ['Glaspanele', $glas3b],
                ['Beleuchtung', $licht3b],
            ],
            'facts' => ['15 J. Herstellergarantie (lt. Hersteller)', 'Feuerverzinkt und pulverbeschichtet', 'Produktion in Italien'],
        ],
        [
            'logo' => 'padelconcept', 'logo_h' => 54, 'brand' => 'Padel Concept',
            'maker' => 'Padel Concept', 'tier' => 'Standard',
            'name' => 'Standard Club',
            'text' => 'Standard-Court im klassischen Design, geeignet für den Innen- und Außenbereich. Die Glaspanele sind aus ESG 10 mm.',
            'image' => '/media/courts/modelle/standard-club.jpg', 'alt' => 'Padel Concept Standard Club Court in einer Halle, Rendering',
            'specs' => [
                ['Konstruktion', 'Verzinkte Stahlkonstruktion, pulverbeschichtet nach Kundenwunsch. Entwickelt nach Vorgaben der IPF und EPA sowie den Anforderungen der WPT.'],
                ['Kunstrasen', 'Europäische Hersteller wie Mondo, Edelgrass oder Italgrass, monofilament oder fibrilliert, zertifiziert. Standardfarben Blau oder Grün.'],
                ['Glaspanele', 'Zertifiziertes ESG auf 5 mm starken Moosgummidichtungen zur Reduzierung von Vibrationen und zum Schutz vor Beschädigungen.'],
                ['Beleuchtung', '„Pro-Version“ der Lampenhalterung in dreieckiger Form. LED-Beleuchtungssystem gemäß internationalen Standards.'],
            ],
            'facts' => ['Windlast 144 km/h (lt. Hersteller)', 'Netz in „Pro-Version“ mit Netzkopfband', 'Schnelle Lieferung'],
        ],
        [
            'logo' => '100padel', 'logo_h' => 54, 'brand' => '100% Padel',
            'maker' => '100% Padel', 'tier' => 'Standard',
            'name' => 'Klassischer Padelplatz',
            'text' => 'Das robuste Modell im klassischen Design. Die stabile Konstruktion aus Pfosten mit Stützstreben und geprüftem Sicherheitsglas ist die wirtschaftliche Basis für jede Anlage.',
            'image' => '/media/courts/modelle/standard-100padel.jpg', 'alt' => '100% Padel Klassischer Padelplatz, Zeichnungen aus drei Perspektiven',
            'specs' => [
                ['Konstruktion', '100 × 50 mm Pfosten mit Stützstreben, 50 × 50 × 4 mm elektroverschweißtes Drahtgitter.'],
                ['Kunstrasen', 'Faserrasen, Monofilament oder Supercourt, als Premium-Rasen von Mondo.'],
                ['Glas', 'Geprüftes Sicherheitsglas. Glasanker mit Neopren und Verriegelungsbolzen geschützt.'],
                ['Beleuchtung', 'Direkte Beleuchtung mit 3 m hohen Lichtmasten aus kaltverzinktem 80.60-Rohr und 200-W-LED-Lampen.'],
            ],
            'facts' => ['Einbrennlackierung, Sonderfarben erhältlich', 'Verzinkt (nicht feuerverzinkt), 2 Jahre Gewährleistung', 'Montageteam in Deutschland'],
        ],
    ],
    'others' => [
        ['Premium', 'Panorama', 'Deutlich weniger sichtbare Streben, größere Glasflächen und eine offenere Anmutung. Bessere Sicht für Zuschauer und ein hochwertiger Gesamteindruck.', '/panorama-court', 'Zum Panorama Court', '/media/courts/panorama.jpg'],
        ['Topklasse', 'Full-Panorama', 'Nahezu durchgehende Glasflächen und eine minimale Stahlstruktur. Repräsentativ, mit klarem Show-Court-Charakter, vor allem für Indoor-Clubs und TV-Übertragungen.', '/courts#c-systeme', 'Alle Varianten vergleichen', '/media/courts/full.jpg'],
    ],
];
include __DIR__ . '/inc/tc/court-variante.php';
