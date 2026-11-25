<?php
require __DIR__ . '/inc/tc/layout.php';
// Variantenseite Full-Panorama (URL /premier-court bleibt, Premier Extreme ist das Full-Panorama-Modell von Padel Factory).
// Inhalt nach der Courts-Präsentation 2026 (Folie 4, 5, 8, 11, 13, 16, 24, 27), Martins neuestem Entwurf
// (the-court.com/courts, Blog "Standard, Panorama oder Full Panorama?") und der Referenz Straubing (referenzen-data.json).
$glas3b = 'Hochresistentes ESG mit polierten, abgeschrägten Kanten, als 12 mm Einscheibenglas oder 6+6 mm VSG.';
$licht3b = 'Drei Intensitätsstufen mit 17.500, 18.500 oder 23.000 Lumen für optimale Sicht bei Abendspielen.';
$rasen3b = 'Fibrilliert oder strukturiert, anpassbar an Spielvorlieben und Komfort. Verfügbar in Grün, Blau und Rot.';
ob_start(); ?>
    <p class="a-trust reveal">In Straubing entstehen gerade drei Full-Panorama-Courts von 100% Padel, in einer Neubauhalle für einen kommerziellen Betreiber. <a class="more-link" href="/referenzen">Alle Referenzen ansehen</a></p>
<?php $refHtml = ob_get_clean();

$v = [
    'path' => '/premier-court',
    'name' => 'Premier Court',
    'title' => 'Premier Court und Full-Panorama-Court im Vergleich · Padelbee',
    'description' => 'Premier Court und Full-Panorama-Court mit nahezu durchgehendem Glas, der Show-Court für Indoor-Clubs. Modelle von Padel Factory, Padel Concept und 100% Padel.',
    'label' => 'Premier Court · Full&#8209;Panorama · Topklasse',
    'h1' => 'Full&#8209;Panorama <span class="kw">Court.</span>',
    'lead' => 'Der Full-Panorama Court ist die Topklasse. Nahezu durchgehende Glasflächen und eine minimale Stahlstruktur geben ihm eine sehr elegante, repräsentative Optik. Er ist der Show-Court für Indoor-Clubs, Turniere und TV-Übertragungen. Bei Padel Factory heißt er Premier Extreme Panoramic, kurz Premier Court.',
    'image' => '/media/courts/cp_indoor_ret.jpg',
    'alt' => 'Indoor-Padelhalle mit Courts von 100% Padel, Herstellerreferenz',
    'stats' => [
        ['3', 'Full-Panorama-Modelle', 'von 3 Herstellern'],
        ['<small>bis zu</small> 15', 'Jahre Hersteller&shy;garantie', 'Padel Factory, lt. Hersteller'],
        ['12 mm', 'ESG-Glas', 'Premier Extreme, Full Panorama'],
        ['29.400 €', 'ab, pro Court netto', 'Premier Extreme, Stand 11/2026'],
    ],
    'models_label' => 'Full-Panorama-Modelle',
    'models_h2' => 'Drei Hersteller. Ein <span class="hl">Ansprechpartner.</span>',
    'models_lead' => 'Mehr Glas, weniger Stahl, aber nicht jeder Standort braucht den Show-Court. Wir vergleichen die Modelle für deinen Standort, dein Budget und dein Nutzungskonzept und empfehlen den passenden Court.',
    'models' => [
        [
            'logo' => 'padelfactory', 'logo_h' => 44, 'brand' => '3B Padel',
            'maker' => '3B Padel', 'tier' => 'Topklasse',
            'name' => 'Premier Extreme Panoramic',
            'text' => 'Die Topklasse der 3B Padel Courts verzichtet vollständig auf tragende Verstrebungen. Das ergibt ein einzigartiges, freies Design mit uneingeschränkter Sicht aus jeder Perspektive, häufig auch als Center-Court eingesetzt.',
            'price' => 29400, 'price_incl' => 'inkl. kompletter Konstruktion, 12-mm-Glas-Kit, fibrilliertem Kunstrasen und acht LED-Flutern', 'price_note' => 'zzgl. Übernachtungs- und Verpflegungskosten',
            'image' => '/media/courts/pf_milano.jpg', 'alt' => 'Padel Factory Premier Court in Mailand, Herstellerreferenz',
            'specs' => [
                ['Konstruktion', 'Die gesamte Struktur ist feuerverzinkt, für Langlebigkeit und Widerstandsfähigkeit.'],
                ['Kunstrasen', $rasen3b],
                ['Glaspanele', $glas3b],
                ['Beleuchtung', $licht3b],
            ],
            'facts' => ['15 J. Herstellergarantie (lt. Hersteller)', 'Feuerverzinkt und pulverbeschichtet', 'Verstärkte Statik für Wind- und Schneelasten', 'Produktion in Italien'],
        ],
        [
            'logo' => 'padelconcept', 'logo_h' => 54, 'brand' => 'Padel Concept',
            'maker' => 'Padel Concept', 'tier' => 'Full Panorama',
            'name' => 'Full Panorama',
            'text' => 'Full-Panorama-Design mit uneingeschränkter Sicht, speziell für den Indoor-Einsatz.',
            'image' => '/media/courts/full.jpg', 'alt' => 'Full-Panorama-Court, Rendering',
            'specs' => [
                ['Konstruktion', 'Verzinkte Stahlkonstruktion, pulverbeschichtet nach Kundenwunsch. Entwickelt nach Vorgaben der IPF und EPA sowie den Anforderungen der WPT.'],
                ['Kunstrasen', 'Europäische Hersteller wie Mondo, Edelgrass oder Italgrass, monofilament oder fibrilliert, zertifiziert. Standardfarben Blau oder Grün.'],
                ['Glaspanele', 'Zertifiziertes ESG 12 mm auf 5 mm starken Moosgummidichtungen zur Reduzierung von Vibrationen und zum Schutz vor Beschädigungen.'],
                ['Beleuchtung', '„Pro-Version“ der Lampenhalterung in dreieckiger Form. LED-Beleuchtungssystem gemäß internationalen Standards.'],
            ],
            'facts' => ['Windlast 144 km/h (lt. Hersteller)', 'Netz in „Pro-Version“ mit Netzkopfband', 'Vorrätige Courts und Ersatzteile', 'Eigene Montageteams, Beratung auf Deutsch'],
        ],
        [
            'logo' => '100padel', 'logo_h' => 54, 'brand' => '100% Padel',
            'maker' => '100% Padel', 'tier' => 'Full Panorama', 'fav' => 'Favorit Indoor',
            'name' => 'Full Panorama',
            'text' => 'Das Modell mit spektakulärer Aussicht, ideal für Video- und TV-Übertragungen sowie als repräsentativer Center-Court. Gebaut wird es hauptsächlich für Indoor Padel Clubs.',
            'image' => '/media/courts/cp_indoor.jpg', 'alt' => 'Padelhalle mit Courts von 100% Padel, Herstellerreferenz',
            'specs' => [
                ['Konstruktion', '100 × 50 mm Pfosten mit Stützstreben, 50 × 50 × 4 mm elektroverschweißtes Drahtgitter.'],
                ['Kunstrasen', 'Faserrasen, Monofilament oder Supercourt, als Premium-Rasen von Mondo.'],
                ['Glas', 'Sicherheitsbarriere aus zertifiziertem Sicherheitsglas für uneingeschränkte Sicht.'],
                ['Beleuchtung', 'Direkte Beleuchtung mit 3 m hohen Lichtmasten aus kaltverzinktem 80.60-Rohr und 200-W-LED-Lampen.'],
            ],
            'facts' => ['Turnierausrüster der Premier Padel Tour (lt. Hersteller)', 'Einbrennlackierung, Farbe nach Wahl', 'Verzinkt (nicht feuerverzinkt), 2 Jahre Gewährleistung', 'Montageteam in Deutschland'],
        ],
    ],
    'extra_html' => $refHtml,
    'faq' => [
        ['frage' => 'Für wen eignet sich der Full-Panorama Court?', 'antwort' => 'Der Full-Panorama Court ist der Show-Court für Indoor-Clubs, Turniere und TV-Übertragungen. Nicht jeder Standort braucht ihn. Unsere Faustregel ist einfach. Wo Zuschauer stehen, lohnt sich Panorama, wo Wind und Wetter wirken, punktet Standard. Mehr dazu beim <a href="/panorama-court">Panorama Court</a> und beim <a href="/standard-court">Standard Court</a>.'],
        ['frage' => 'Was kostet ein Premier Court?', 'antwort' => 'Der Premier Extreme Panoramic von Padel Factory kostet ab 29.400 € netto pro Court, inklusive kompletter Konstruktion, 12-mm-Glas-Kit, fibrilliertem Kunstrasen und acht LED-Flutern, zuzüglich Übernachtungs- und Verpflegungskosten. Der Endpreis hängt von Hersteller und Ausstattung ab. Für die Gesamtkalkulation kommt das Fundament mit einem Richtwert von rund 35.000 € dazu, mehr dazu unter <a href="/courts#c-fundament">Fundament</a>. Für die Halle siehst du alle Maße unter <a href="/halle">Padel Halle</a>.'],
        ['frage' => 'Wie viel Garantie gibt es auf einen Full-Panorama Court?', 'antwort' => 'Padel Factory nennt 15 Jahre Herstellergarantie auf die Konstruktion (lt. Hersteller). Bei 100% Padel sind es 2 Jahre Gewährleistung. Die Garantie gewährt immer der jeweilige Hersteller, nicht die THE COURT GmbH. Welche Bedingungen gelten, prüfen wir für dein Projekt mit dem Hersteller.'],
    ],
    'others' => [
        ['Einstieg', 'Standard', 'Die klassische, wirtschaftliche Lösung. Zusätzliche Streben zwischen den Glaselementen machen die Konstruktion besonders stabil.', '/standard-court', 'Zum Standard Court', '/media/courts/standard.jpg'],
        ['Premium', 'Panorama', 'Deutlich weniger sichtbare Streben, größere Glasflächen und eine offenere Anmutung. Bessere Sicht für Zuschauer und ein hochwertiger&nbsp;Gesamteindruck.', '/panorama-court', 'Zum Panorama Court', '/media/courts/panorama.jpg'],
    ],
];
include __DIR__ . '/inc/tc/court-variante.php';
