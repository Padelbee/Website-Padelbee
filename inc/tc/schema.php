<?php
/**
 * Schema.org / JSON-LD Bausteine für das THE-COURT-Layout.
 *
 * Alle Funktionen liefern Arrays (JSON-LD-Knoten). tc_page_start() sammelt sie in EINEM
 * <script type="application/ld+json"> mit @graph. Seiten übergeben zusätzliche Knoten über
 * $page['schema'] (Liste von Knoten). Knoten referenzieren die Organisation per
 * ['@id' => TC_ORG_ID] statt sie zu duplizieren.
 */

const TC_SITE_URL = 'https://padelbee.de';
const TC_ORG_ID = 'https://padelbee.de/#org';
const TC_WEBSITE_ID = 'https://padelbee.de/#website';

/** Absolute URL auf padelbee.de (ohne www). '/' ergibt https://padelbee.de/ */
function tc_url(string $path = '/'): string
{
    if (preg_match('#^https?://#i', $path)) {
        return $path;
    }
    if ($path === '' || $path[0] !== '/') {
        $path = '/' . $path;
    }
    return TC_SITE_URL . $path;
}

/** Entfernt null, '' und leere Arrays rekursiv (Listen werden neu durchnummeriert). */
function tc_schema_clean(array $node): array
{
    $out = [];
    foreach ($node as $k => $v) {
        if (is_array($v)) {
            $v = tc_schema_clean($v);
            if ($v === []) {
                continue;
            }
        } elseif ($v === null || $v === '') {
            continue;
        }
        $out[$k] = $v;
    }
    return array_is_list($node) ? array_values($out) : $out;
}

/** Organisation (site-weit, @id #org). */
function tc_schema_organization(): array
{
    $services = [
        'Beratung', 'Finanzierung', 'Planung & Architektur',
        'Bau von Padel-, Pickleball- und Tennisanlagen', 'Digitalisierung', 'Betrieb', 'Franchise',
        'Padel-Courts', 'Hallensysteme', 'Verleih- und Verkaufsautomaten',
    ];
    return [
        '@type' => ['Organization', 'ProfessionalService'],
        '@id' => TC_ORG_ID,
        'name' => 'THE COURT GmbH',
        'legalName' => 'THE COURT GmbH',
        'alternateName' => ['Padelbee', 'THE COURT by Padelbee'],
        'url' => tc_url('/'),
        'email' => 'info@padelbee.de',
        'telephone' => '+4915118175125',
        'logo' => tc_url('/media/logo.png'),
        'image' => tc_url('/media/intro.jpg'),
        'description' => 'Projektentwickler und 360°-Plattform für Padel, Pickleball und Tennis: Beratung, Finanzierung, Planung & Architektur, Bau, Digitalisierung, Betrieb und Franchise.',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Münchner Str. 15',
            'postalCode' => '85774',
            'addressLocality' => 'Unterföhring',
            'addressRegion' => 'Bayern',
            'addressCountry' => 'DE',
        ],
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'Deutschland'],
            ['@type' => 'Country', 'name' => 'Österreich'],
            ['@type' => 'Country', 'name' => 'Schweiz'],
        ],
        'founder' => [
            ['@type' => 'Person', 'name' => 'Martin Gaffal'],
            ['@type' => 'Person', 'name' => 'Stefan Möbius'],
        ],
        'knowsAbout' => ['Padel', 'Pickleball', 'Tennis', 'Padel-Court', 'Padelhalle', 'Sportstättenbau', 'Verleihautomaten'],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Leistungen',
            'itemListElement' => array_map(
                fn(string $n) => ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => $n]],
                $services
            ),
        ],
    ];
}

/** WebSite (site-weit, @id #website). */
function tc_schema_website(): array
{
    return [
        '@type' => 'WebSite',
        '@id' => TC_WEBSITE_ID,
        'url' => tc_url('/'),
        'name' => 'Padelbee',
        'alternateName' => 'THE COURT by Padelbee',
        'inLanguage' => 'de-DE',
        'publisher' => ['@id' => TC_ORG_ID],
    ];
}

/**
 * WebPage-Knoten der aktuellen Seite.
 * @param array  $page  Seiten-Array von tc_page_start (path, title, description, og_image)
 * @param string $type  WebPage | CollectionPage | AboutPage | ContactPage | FAQPage ...
 */
function tc_schema_webpage(array $page, string $type = 'WebPage'): array
{
    $url = tc_url($page['path'] ?? '/');
    return tc_schema_clean([
        '@type' => $type,
        '@id' => $url . '#webpage',
        'url' => $url,
        'name' => $page['title'] ?? '',
        'description' => $page['description'] ?? '',
        'inLanguage' => 'de-DE',
        'isPartOf' => ['@id' => TC_WEBSITE_ID],
        'about' => ['@id' => TC_ORG_ID],
        'primaryImageOfPage' => !empty($page['og_image']) ? ['@type' => 'ImageObject', 'url' => tc_url($page['og_image'])] : null,
    ]);
}

/**
 * BreadcrumbList. $crumbs = ['Name' => '/pfad', ...]; "Start" wird vorangestellt, falls nicht enthalten.
 * Das letzte Element ist die aktuelle Seite.
 */
function tc_schema_breadcrumb(array $crumbs): array
{
    if (!array_key_exists('Start', $crumbs)) {
        $crumbs = ['Start' => '/'] + $crumbs;
    }
    $items = [];
    $pos = 1;
    foreach ($crumbs as $name => $path) {
        $items[] = [
            '@type' => 'ListItem',
            'position' => $pos++,
            'name' => (string) $name,
            'item' => tc_url($path),
        ];
    }
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

/**
 * Service (Leistungsseite).
 * @param array $opts serviceType, image (Pfad), areaServed (Liste Namen), offers (fertiger Offer-Knoten), extra (Array wird gemerged)
 */
function tc_schema_service(string $name, string $description, string $path, array $opts = []): array
{
    $url = tc_url($path);
    $node = [
        '@type' => 'Service',
        '@id' => $url . '#service',
        'name' => $name,
        'description' => $description,
        'url' => $url,
        'serviceType' => $opts['serviceType'] ?? $name,
        'provider' => ['@id' => TC_ORG_ID],
        'areaServed' => array_map(
            fn(string $c) => ['@type' => 'Country', 'name' => $c],
            $opts['areaServed'] ?? ['Deutschland', 'Österreich', 'Schweiz']
        ),
        'image' => !empty($opts['image']) ? tc_url($opts['image']) : null,
        'offers' => $opts['offers'] ?? null,
    ];
    return tc_schema_clean(array_merge($node, $opts['extra'] ?? []));
}

/**
 * Product (Court, Automat ...).
 * @param array $opts brand (String), category, image (Pfad), url/path, price (Zahl|String), priceCurrency,
 *                    availability (default InStock, nur mit price), sku, extra (Array wird gemerged)
 */
function tc_schema_product(string $name, string $description, array $opts = []): array
{
    $offers = null;
    if (isset($opts['price']) && $opts['price'] !== '') {
        $offers = [
            '@type' => 'Offer',
            'price' => (string) $opts['price'],
            'priceCurrency' => $opts['priceCurrency'] ?? 'EUR',
            'availability' => $opts['availability'] ?? 'https://schema.org/InStock',
            'url' => !empty($opts['path']) ? tc_url($opts['path']) : null,
            'seller' => ['@id' => TC_ORG_ID],
        ];
    }
    $node = [
        '@type' => 'Product',
        'name' => $name,
        'description' => $description,
        'brand' => !empty($opts['brand']) ? ['@type' => 'Brand', 'name' => $opts['brand']] : null,
        'category' => $opts['category'] ?? null,
        'sku' => $opts['sku'] ?? null,
        'image' => !empty($opts['image']) ? tc_url($opts['image']) : null,
        'url' => !empty($opts['path']) ? tc_url($opts['path']) : null,
        'offers' => $offers,
    ];
    return tc_schema_clean(array_merge($node, $opts['extra'] ?? []));
}

/** ItemList aus fertigen Knoten (z. B. Products). Jeder Eintrag wird als ListItem mit "item" eingebettet. */
function tc_schema_item_list(string $name, array $items): array
{
    $list = [];
    $pos = 1;
    foreach ($items as $item) {
        $list[] = ['@type' => 'ListItem', 'position' => $pos++, 'item' => $item];
    }
    return ['@type' => 'ItemList', 'name' => $name, 'itemListElement' => $list];
}

/**
 * FAQPage. $faqs = [['frage' => '…', 'antwort' => '…'], …] (gleiches Format wie inc/faq-data.php).
 * $path optional, dann bekommt der Knoten eine @id.
 */
function tc_schema_faq(array $faqs, string $path = ''): array
{
    $entities = [];
    foreach ($faqs as $f) {
        $entities[] = [
            '@type' => 'Question',
            'name' => (string) ($f['frage'] ?? ''),
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => (string) ($f['antwort'] ?? '')],
        ];
    }
    return tc_schema_clean([
        '@type' => 'FAQPage',
        '@id' => $path !== '' ? tc_url($path) . '#faq' : null,
        'mainEntity' => $entities,
    ]);
}

/** Blog (Container der Artikel). */
function tc_schema_blog(string $name, string $description, string $path = '/blog'): array
{
    return [
        '@type' => 'Blog',
        '@id' => tc_url($path) . '#blog',
        'name' => $name,
        'description' => $description,
        'url' => tc_url($path),
        'inLanguage' => 'de-DE',
        'publisher' => ['@id' => TC_ORG_ID],
    ];
}

/**
 * Article/BlogPosting. $opts: path, headline, description, image, datePublished, dateModified, author (Name)
 */
function tc_schema_article(array $opts): array
{
    $url = tc_url($opts['path'] ?? '/blog');
    return tc_schema_clean([
        '@type' => $opts['type'] ?? 'BlogPosting',
        '@id' => $url . '#article',
        'mainEntityOfPage' => $url,
        'headline' => $opts['headline'] ?? '',
        'description' => $opts['description'] ?? '',
        'image' => !empty($opts['image']) ? tc_url($opts['image']) : null,
        'datePublished' => $opts['datePublished'] ?? null,
        'dateModified' => $opts['dateModified'] ?? ($opts['datePublished'] ?? null),
        'author' => !empty($opts['author']) ? ['@type' => 'Person', 'name' => $opts['author']] : ['@id' => TC_ORG_ID],
        'publisher' => ['@id' => TC_ORG_ID],
        'inLanguage' => 'de-DE',
    ]);
}

/** Person (Team-Seite). $opts: jobTitle, image (Pfad), email, description */
function tc_schema_person(string $name, array $opts = []): array
{
    return tc_schema_clean([
        '@type' => 'Person',
        'name' => $name,
        'jobTitle' => $opts['jobTitle'] ?? null,
        'description' => $opts['description'] ?? null,
        'image' => !empty($opts['image']) ? tc_url($opts['image']) : null,
        'email' => $opts['email'] ?? null,
        'worksFor' => ['@id' => TC_ORG_ID],
    ]);
}

/** JSON-LD-Script aus einer Knotenliste (ein @graph). */
function tc_schema_script(array $nodes): string
{
    $graph = ['@context' => 'https://schema.org', '@graph' => array_values(array_map('tc_schema_clean', $nodes))];
    $json = json_encode($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG | JSON_HEX_AMP);
    return '<script type="application/ld+json">' . $json . '</script>';
}
