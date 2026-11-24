<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt nach der Courts-Präsentation 2026 (Folie 4, 5, 10, 15, 19 bis 22, 26) und
// Martins neuestem Entwurf (the-court.com/courts, Variante Panorama, Stand 23.11.2026).
$galis = [
    ['Mundial 90/160', 'Der Panorama-Court schlechthin. Das klassische Modell verbindet ein einheitliches, schlichtes Design mit herausragender Stabilität durch robuste Eckpfeiler. Der vielseitigste Court der Range.', 'Panoramic', 'Filux', 'Galis', '90/160 km/h', '/media/courts/modelle/galis-19.jpg'],
    ['M360', 'Eine Weiterentwicklung des Mundial mit schlankem, abgerundetem Eckpfeiler. Die Struktur verbindet Stabilität und Eleganz und erweitert die Sicht auf den Court.', 'Panoramic', 'Filux', 'Galis', '90 km/h', '/media/courts/modelle/galis-20.jpg'],
    ['Atlas', 'Die Evolution des Mundial ohne Eckpfeiler. Mehr Sichtbarkeit und eine klare Ästhetik, entwickelt, um sich in jedes Umfeld einzufügen.', 'Ultrapanoramic', 'Filux', 'Galis', '68 km/h', '/media/courts/modelle/galis-21.jpg'],
    ['Wilson 90/160', 'Aus der Verbindung von Padel Galis und Wilson. Die Eckpfeiler geben hohe Stabilität und verbessern die Sicht, dazu Wilson-Individualisierungen, Hochglanzlackierung und Premium-Beleuchtung.', 'Panoramic', '4 × 64 LED', 'V-Shape', '90/160 km/h', '/media/courts/modelle/galis-22.jpg'],
];
ob_start(); ?>
    <article class="vmodel vrange reveal">
      <div class="vr-head">
        <div class="logo"><div class="m" data-logo="padelgalis" data-h="50"></div></div>
        <div class="k">Padel Galis · The Player's Court</div>
        <h3 data-type>Vier Panorama-Modelle</h3>
        <p>Laut Hersteller offizieller Court-Partner der Premier Padel Tour und der Federación Española de Pádel. Alle vier Modelle haben den Kunstrasen PG5 und unterscheiden sich vor allem bei Eckpfeilern, Beleuchtung und Windlast.</p>
      </div>
      <div class="vr-grid">
<?php foreach ($galis as $g): ?>
        <div class="vr-item">
          <figure class="vm-img"><img src="<?= $g[6] ?>" alt="Padel Galis <?= tc_h($g[0]) ?> Court" loading="lazy"></figure>
          <h4><?= tc_h($g[0]) ?></h4>
          <p><?= tc_h($g[1]) ?></p>
          <dl><div><dt>Struktur</dt><dd><?= $g[2] ?></dd></div><div><dt>Beleuchtung</dt><dd><?= $g[3] ?></dd></div><div><dt>Lichtmast</dt><dd><?= $g[4] ?></dd></div><div><dt>Windlast</dt><dd><?= $g[5] ?></dd></div></dl>
        </div>
<?php endforeach; ?>
      </div>
    </article>
<?php $galisHtml = ob_get_clean();

$v = [
    'path' => '/panorama-court',
    'name' => 'Panorama Court',
    'title' => 'Panorama Court: Padel-Court-Modelle im Vergleich · Padelbee',
    'description' => 'Panorama Court mit größeren Glasflächen und offener Sicht. Sieben Modelle von Padel Factory, Padel Concept, 100% Padel und Padel Galis, ab 28.150 € netto.',
    'label' => 'Court-Variante · Premium',
    'h1' => 'Panorama <span class="kw">Court.</span>',
    'lead' => 'Der Panorama Court hat deutlich weniger sichtbare Streben, größere Glasflächen und eine offenere Anmutung. Das bringt bessere Sicht für Zuschauer und einen hochwertigen Gesamteindruck. Du bekommst ihn bei uns von vier <a href="/courts#c-hersteller">Court-Herstellern</a>, jedes Modell als Double- und als Single-Court.',
    'image' => '/media/courts/panorama.jpg',
    'alt' => 'Panorama Court Rendering mit großen Glasflächen',
    'stats' => [
        ['7', 'Panorama-Modelle', 'von 4 Herstellern'],
        ['<small>bis zu</small> 160 km/h', 'Windlast', 'Padel Galis, lt. Hersteller'],
        ['12 mm', 'ESG-Glas', 'Wing Panoramic, Panorama'],
        ['28.150 €', 'ab, pro Court netto', 'Wing Panoramic, Stand 11/2026'],
    ],
    'models_label' => 'Panorama-Modelle',
    'models_h2' => 'Vier Hersteller. <span class="hl">Ein</span> Ansprechpartner.',
    'models_lead' => 'Jeder Hersteller hat eigene Stärken. Wir vergleichen die Panorama-Modelle für dich auf Basis deines Standorts, deines Budgets und deines Nutzungskonzepts und empfehlen den Court, der technisch, wirtschaftlich und qualitativ passt.',
    'models' => [
        [
            'logo' => 'padelfactory', 'logo_h' => 44, 'brand' => '3B Padel',
            'maker' => '3B Padel', 'tier' => 'Zwischenstufe',
            'name' => 'Wing Panoramic',
            'text' => 'Modernes, offenes Design als Zwischenstufe der Court-Kollektion. Die vertikalen Verstrebungen zwischen den Glasflächen entfallen, nur vier Trägerrohre stehen an den Ecken. Das sorgt für ein offeneres Spielgefühl. Der Richtpreis umfasst Stahlkonstruktion, 12-mm-Glas-Kit, fibrillierten Kunstrasen und 8 Flutlichtstrahler.',
            'price' => 28150, 'price_note' => 'zzgl. Übernachtungs- und Verpflegungskosten',
            'image' => '/media/courts/modelle/panorama-wing.jpg', 'alt' => '3B Padel Wing Panoramic Court',
            'specs' => [
                ['Konstruktion', 'Die gesamte Struktur ist feuerverzinkt, um Langlebigkeit und Widerstandsfähigkeit sicherzustellen.'],
                ['Kunstrasen', 'Fibrilliert oder strukturiert, anpassbar an Spielvorlieben und Komfort. Verfügbar in Grün, Blau und Rot.'],
                ['Glaspanele', 'Hochresistentes ESG mit polierten, abgeschrägten Kanten, als 12 mm Einscheibenglas oder 6+6 mm VSG.'],
                ['Beleuchtung', 'Drei Intensitätsstufen mit 17.500, 18.500 oder 23.000 Lumen für optimale Sicht bei Abendspielen.'],
            ],
            'facts' => ['15 J. Herstellergarantie (lt. Hersteller)', 'Feuerverzinkt und pulverbeschichtet', 'Produktion in Italien'],
        ],
        [
            'logo' => 'padelconcept', 'logo_h' => 54, 'brand' => 'Padel Concept',
            'maker' => 'Padel Concept', 'tier' => 'Panorama',
            'name' => 'Panorama',
            'text' => 'Panorama-Design mit uneingeschränkter Sicht, geeignet für den Indoor- und Outdoorbereich. Die Glaspanele sind aus ESG 12 mm.',
            'image' => '/media/courts/modelle/panorama-padelconcept.jpg', 'alt' => 'Padel Concept Panorama Court in einer Halle, Rendering',
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
            'maker' => '100% Padel', 'tier' => 'Panorama',
            'name' => 'Panorama-Padelplatz',
            'text' => 'Das hochwertige Modell mit elegantem Design. Größere, offenere Glasflächen sorgen für bessere Sicht und einen modernen Gesamteindruck.',
            'image' => '/media/courts/modelle/panorama-100padel.jpg', 'alt' => '100% Padel Panorama-Padelplatz, Zeichnungen aus drei Perspektiven',
            'specs' => [
                ['Konstruktion', '100 × 50 mm Pfosten mit Stützstreben, 50 × 50 × 4 mm elektroverschweißtes Drahtgitter.'],
                ['Kunstrasen', 'Faserrasen, Monofilament oder Supercourt, als Premium-Rasen von Mondo.'],
                ['Glas', 'Geprüfte Sicherheitsbarriere aus Sicherheitsglas für eine offene Sicht auf das Spiel.'],
                ['Beleuchtung', 'Direkte Beleuchtung mit 3 m hohen Lichtmasten aus kaltverzinktem 80.60-Rohr und 200-W-LED-Lampen.'],
            ],
            'facts' => ['Einbrennlackierung, Farbe nach Kundenwunsch', 'Verzinkt (nicht feuerverzinkt), 2 Jahre Gewährleistung', 'Montageteam in Deutschland'],
        ],
    ],
    'extra_html' => $galisHtml,
    'others' => [
        ['Einstieg', 'Standard', 'Die klassische, wirtschaftliche Lösung. Zusätzliche Streben zwischen den Glaselementen machen die Konstruktion besonders stabil.', '/standard-court', 'Zum Standard Court', '/media/courts/standard.jpg'],
        ['Topklasse', 'Full-Panorama', 'Nahezu durchgehende Glasflächen und eine minimale Stahlstruktur. Repräsentativ, mit klarem Show-Court-Charakter, vor allem für Indoor-Clubs und TV-Übertragungen.', '/courts#c-systeme', 'Alle Varianten vergleichen', '/media/courts/full.jpg'],
    ],
];
// Galis-Modelle zusätzlich als Produkte für Google
$v['schema_extra'] = array_map(fn($g) => ['name' => $g[0], 'text' => $g[1], 'brand' => 'Padel Galis', 'image' => $g[6]], $galis);
include __DIR__ . '/inc/tc/court-variante.php';
