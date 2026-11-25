<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1667: Zentrale FAQ mit allen Fragen aus Martins Entwurf (the-court.com: Startseite, Courts, Automaten,
// Motions, Referenzen; Stand 23.11.2026). Antworten wie auf den Unterseiten von padelbee.de, Marke "Padelbee",
// rechtliche Hinweise "THE COURT GmbH". Events-Fragen warten auf Martin (Fragenliste).
// Die alten Fragen aus inc/faq-data.php (alte Website) werden nicht mehr verwendet.
$gruppen = [
    [
        'id' => 'faq-projekt', 'label' => 'Padelbee &amp; Projekt', 'h2' => 'Dein <span class="hl">Projekt.</span>',
        'link' => ['/padel-court-bauen', 'Zu Padel Court bauen'],
        'faqs' => [
            ['frage' => 'Was macht Padelbee?', 'antwort' => 'Padelbee ist ein Projektentwickler für Padel-, Pickleball- und Tennisanlagen in Deutschland, Österreich und der Schweiz. Wir begleiten dich von Beratung und Finanzierung über Planung und Bau bis zu Digitalisierung und Betrieb. Du hast einen Ansprechpartner für jede Phase. Für dein Projekt wählen wir aus über 30 Partnern aus Planung, Court- und Hallenbau, Digitalisierung und Equipment die passenden aus. Mehr dazu bei unseren <a href="/partner">Partnern</a>.'],
            ['frage' => 'Was kostet eine Padelanlage?', 'antwort' => 'Für die erste Kalkulation brauchst du drei Zahlen. Ein Padel-Court kostet ab 27.000 € netto, das Fundament als Richtwert rund 35.000 € und eine Halle ab 280 €/m² netto. Dazu kommen Planung, Genehmigung, Licht und Digitalisierung. Den genauen Betrag bestimmen Standort, Variante und Ausstattung. Mehr dazu beim <a href="/padel-court-bauen">Padel Court bauen</a>.'],
            ['frage' => 'Für wen baut ihr Padelanlagen?', 'antwort' => 'Wir bauen für Vereine, Hotels, Gewerbe und die öffentliche Hand. Das reicht vom Tennisverein, der ungenutzte Plätze in Padel-Courts umwandelt, bis zum kommerziellen Betreiber mit eigener Halle. Neben Padel planen wir auch Anlagen für Pickleball und Tennis. Unser Angebot richtet sich ausschließlich an Unternehmen, Vereine und die öffentliche Hand, nicht an Privatpersonen.'],
            ['frage' => 'Wie läuft ein Padel-Projekt ab?', 'antwort' => 'Ein Padel-Projekt läuft bei uns in sieben Etappen, von Beratung und Finanzierung über Planung und Architektur, Bau und Digitalisierung bis zu Betrieb und auf Wunsch Franchise. Am Anfang prüfen wir Fläche, Zielgruppe und Potenzial deines Standorts. Danach klären wir Finanzierung und Genehmigung, bevor gebaut wird. Mehr dazu bei der <a href="/standortanalyse">Standortanalyse</a> und beim <a href="/padel-court-bauen">Padel Court bauen</a>.'],
            ['frage' => 'In welchen Ländern seid ihr aktiv?', 'antwort' => 'Wir sind in Deutschland, Österreich und der Schweiz aktiv. Unsere 50 Projekte reichen von Garbsen bis Graz und werden aus Unterföhring bei München gesteuert. Dazu zählen Anlagen, die wir beraten, geplant oder gebaut haben, vom Tennisverein bis zum kommerziellen Betreiber. Alle Standorte siehst du auf der <a href="/#projekte">Projektkarte</a> und in unseren <a href="/referenzen">Referenzen</a>.'],
            ['frage' => 'Wie starte ich mein Projekt?', 'antwort' => 'Du startest mit einem kostenlosen Erstgespräch. Darin sprechen wir über deinen Standort, dein Budget und dein Nutzungskonzept und klären, ob Padel dort passt. Danach rechnen wir deine Anlage durch und zeigen dir, welche Courts, welches Fundament und welche Finanzierung infrage kommen. Schreib uns einfach über das <a href="#kontakt">Kontaktformular</a> oder per E-Mail.'],
        ],
    ],
    [
        'id' => 'faq-courts', 'label' => 'Courts · Halle', 'h2' => 'Courts &amp; <span class="hl">Halle.</span>',
        'link' => ['/courts', 'Zu den Padel-Courts'],
        'faqs' => [
            ['frage' => 'Welche Padel-Court-Varianten gibt es?', 'antwort' => 'Die drei Varianten heißen Standard, Panorama und Full-Panorama. Sie unterscheiden sich vor allem in den Streben zwischen den Glaselementen. Standard ist besonders stabil und wirtschaftlich, Panorama bietet größere Glasflächen und bessere Sicht, Full-Panorama ist der Show-Court für Indoor-Clubs und Turniere. Jede Variante gibt es als Doppel- und als Einzel-Court. Mehr dazu beim <a href="/standard-court">Standard Court</a>, <a href="/panorama-court">Panorama Court</a> und <a href="/premier-court">Full-Panorama Court</a>.'],
            ['frage' => 'Was kostet ein Padel-Court?', 'antwort' => 'Ein Padel-Court kostet ab 27.000 € netto. Der Endpreis hängt von Variante, Hersteller und Ausstattung ab, etwa von Kunstrasen, Licht und Branding. Für die Gesamtkalkulation kommen das Fundament mit einem Richtwert von rund 35.000 € und bei Bedarf eine Halle ab 280 €/m² netto dazu. Mehr dazu bei den <a href="/courts">Padel-Courts</a>.'],
            ['frage' => 'Mit welchen Court-Herstellern arbeitet ihr?', 'antwort' => 'Unsere fünf Hersteller sind Padel Concept, 100% Padel, Padel Factory, The Player\'s Court und Premium Padel Courts. Wir sind nicht an einen einzelnen Hersteller gebunden und vergleichen für dich Qualität, Lieferzeit, Herstellergarantie und Preis. Für draußen sind Padel Concept und Padel Factory unsere Favoriten, für die Halle 100% Padel. Mehr dazu bei den <a href="/courts#c-hersteller">Herstellern</a>.'],
            ['frage' => 'Wie viel Garantie gibt es auf einen Padel-Court?', 'antwort' => 'Je nach Hersteller gibt es bis zu 15 Jahre Herstellergarantie auf die Konstruktion (lt. Hersteller). Die 15 Jahre nennt Padel Factory, bei der mobilen Plattform reichen die Angaben der Hersteller von 2 bis 15 Jahren. Die Garantie gewährt immer der jeweilige Hersteller, nicht die THE COURT GmbH. Welche Bedingungen gelten, prüfen wir für dein Projekt mit dem Hersteller.'],
            ['frage' => 'Was passt besser, festes Fundament oder mobile Plattform?', 'antwort' => 'Das hängt vor allem von deinem Standort und der Laufzeit deines Miet- oder Pachtvertrags ab. Das feste Fundament ist eine Betonplatte mit Streifenfundament für langfristige Standorte. Die mobile Plattform kommt ohne Beton aus und lässt sich ab- und wieder aufbauen, ideal für Zwischennutzungen. Beide liegen preislich in einem ähnlichen Rahmen, als Richtwert rund 35.000 €. Mehr dazu beim <a href="/courts#c-fundament">Fundament</a>.'],
            ['frage' => 'Wie viel Platz braucht eine Padelhalle?', 'antwort' => 'Eine Polycarbonat-Halle braucht für einen Court 12 × 21 m, also 252 m², für vier Courts 26 × 50 m. Die gedämmte ThermoRoof-Halle braucht für einen Court 13 × 27 m und für vier Courts 28 × 51 m. Breite, Länge und Höhe sind flexibel, beide Hallen sind erweiterbar. Die Preise starten bei 280 €/m² netto. Mehr dazu bei der <a href="/halle">Padel-Halle</a>.'],
            ['frage' => 'Kann ich meinen Court im eigenen Design gestalten?', 'antwort' => 'Ja, dein Court lässt sich an deine Marke anpassen. Stahl und Details gibt es in jeder RAL-Farbe, den Kunstrasen in vielen Farben, zum Beispiel Blau, Grün, Terracotta oder Petrol. Logos sind auf Netz, Netzkante, Türen und Netzpfosten möglich. Dazu wählst du Lichtmasten, Lichttemperatur und zusätzliche LEDs. Alles stimmen wir mit dem Hersteller ab.'],
        ],
    ],
    [
        'id' => 'faq-automaten', 'label' => 'Automaten · Digitalisierung', 'h2' => 'Automaten &amp; <span class="hl">Zugang.</span>',
        'link' => ['/automatenloesungen', 'Zu den Automaten'],
        'faqs' => [
            ['frage' => 'Wie funktioniert ein Schläger-Verleihautomat?', 'antwort' => 'Ein Verleihautomat gibt Schläger ohne Personal aus, in vier Schritten. Deine Spieler wählen am Touchscreen oder per App, bezahlen bargeldlos mit Karte, Apple Pay, Google Pay oder PayPal und hinterlegen eine Kaution. Dann öffnet sich das richtige Fach automatisch. Nach dem Spiel kommt der Schläger zurück ins Fach und die Kaution wird freigegeben.'],
            ['frage' => 'Was kostet ein Padel-Automat?', 'antwort' => 'Unsere zehn Automaten kosten zwischen 3.500 € und 19.180 € netto. Der Ballautomat Padel Ball Premium startet bei 3.500 €, der Verleihautomat Padel Premium 12 bei 4.950 € plus 49 € Grundgebühr im Monat. Die RentalBOX gibt es ab 5.190 €. Bei einigen Modellen kommt eine monatliche Grundgebühr dazu. Alle Preise sind netto, Stand 10/2026.'],
            ['frage' => 'Welcher Verleihautomat passt zu wie vielen Courts?', 'antwort' => 'Für drei bis vier Courts reicht als Faustregel eine RentalBOX in Größe M mit 23 Fächern für 5.490 € netto. Die RentalBOX gibt es in den Größen S bis XXL und sie wächst mit deiner Anlage. Welche Größe zu deiner Court-Anzahl passt, siehst du im RentalBOX-Konfigurator bei den <a href="/automatenloesungen">Automaten</a>. Kombinierbar ist sie mit der DualBOX Lift für Getränke, Snacks und Bälle.'],
            ['frage' => 'Kann ich einen Automaten finanzieren?', 'antwort' => 'Ja, du kannst kaufen, leasen oder im Mietkauf finanzieren. Leasing startet bei 109 € im Monat, der Leasinggeber bleibt Eigentümer. Im Mietkauf ab 104 € im Monat bist du ab dem ersten Tag wirtschaftlicher Eigentümer, zum Beispiel bei 48 Monaten Laufzeit und 20 % Schlussrate, Bonität vorausgesetzt. Steuerliche und bilanzielle Fragen klärst du bitte immer mit deinem Steuerberater.'],
            ['frage' => 'Was ist in der monatlichen Grundgebühr enthalten?', 'antwort' => 'Die Grundgebühr deckt Telemetrie, Fernwartung und Software-Updates ab. Damit verwaltest du deinen Automaten per App oder Display, auch aus der Ferne, und bekommst Updates automatisch. Wie hoch die Gebühr ist, hängt vom Modell ab. Bei unseren Automaten liegt sie zwischen 29 € und 59 € im Monat, manche Modelle haben keine.'],
            ['frage' => 'Was kostet Smart Access & Light Control?', 'antwort' => 'Smart Access &amp; Light Control kostet 2.000 € einmalig plus eine monatliche Gebühr nach Court-Anzahl, und zwar 49 € für 1 bis 4 Courts, 89 € für 5 bis 8 und 129 € für 9 bis 12 Courts. Ab 13 Courts gibt es ein individuelles Angebot. Relais und elektrische Schlösser sind nicht enthalten und werden von deinem Elektriker installiert. Alle Preise netto.'],
            ['frage' => 'Für wen ist das Automaten-Angebot gedacht?', 'antwort' => 'Unser Automaten-Angebot richtet sich ausschließlich an Unternehmen, Vereine und die öffentliche Hand. Typische Betreiber sind Padelhallen, Tennisvereine mit Padel-Courts, Hotels und Freizeitanlagen, die Schläger, Bälle, Snacks und Getränke rund um die Uhr anbieten wollen. Automaten von uns stehen unter anderem in Memmingen, Straubing und Mainburg. Mehr dazu in unseren <a href="/referenzen">Referenzen</a>.'],
        ],
    ],
    [
        'id' => 'faq-verein', 'label' => 'Joint Venture · Motions Racket Club', 'h2' => 'Padel im <span class="hl">Verein.</span>',
        'link' => ['/betreiberkonzept', 'Zum Betreiberkonzept'],
        'faqs' => [
            ['frage' => 'Kann mein Tennisverein Padel ohne eigene Investition bekommen?', 'antwort' => 'Ja, über das Joint Venture mit dem Motions Racket Club. Dein Verein stellt die Fläche und bekommt dafür Pacht. Bau, Finanzierung und Betrieb übernimmt das Joint Venture, für den Verein liegt die Investition bei 0 €. Deine Mitglieder spielen mit 30 % Rabatt. Mehr dazu beim <a href="/betreiberkonzept#b-finanzierung">Betreiberkonzept</a>.'],
            ['frage' => 'Was ist der Motions Racket Club?', 'antwort' => 'Der Motions Racket Club ist der Betreiber im Joint Venture mit Padelbee. Padelbee entwickelt das Projekt, der Motions Racket Club betreibt die Anlage. Gemeinsam bringen wir Padel auf das Gelände von Tennisvereinen. Die Anlage läuft unter der Marke „Motions Racket Club [Standort]“ mit Co-Branding deines Vereins.'],
            ['frage' => 'Was kostet das Joint Venture meinen Verein?', 'antwort' => 'Dein Verein investiert 0 € und trägt kein Investitionsrisiko. Bau, Finanzierung und Betrieb der Padel-Courts übernimmt das Joint Venture. Dein Verein stellt die Fläche zur Verfügung und kümmert sich um die Pflege von Außenflächen und Courts sowie um die Sanitärräume. Steuerliche und rechtliche Fragen klärst du bitte immer mit deinem Steuerberater.'],
            ['frage' => 'Wie viel Pacht bekommt mein Verein?', 'antwort' => 'Dein Verein bekommt eine ortsübliche Pacht pro Tennisplatz und Monat, langfristig vereinbart. Wie hoch sie genau ist, hängt von Standort und Fläche ab. Deshalb rechnen wir sie für deinen Verein individuell durch. Statt Pflegekosten für einen ungenutzten Platz hast du damit planbare Einnahmen.'],
            ['frage' => 'Wie viele Padel-Courts passen auf einen Tennisplatz?', 'antwort' => 'Auf einen Tennisplatz passen bis zu zwei Padel-Courts. Ein Padel-Court braucht deutlich weniger Fläche als ein Tennisplatz. Aus einem ungenutzten Tennisplatz kann so eine kleine Padelanlage werden, ohne dass dein Verein neues Gelände braucht. Ob deine Plätze passen, prüfen wir vor Ort zusammen mit Baurecht, Lärmschutz und Licht.'],
            ['frage' => 'Was haben die Vereinsmitglieder davon?', 'antwort' => 'Deine Mitglieder bekommen 30 % Rabatt auf den Stundenpreis, an allen MRC-Standorten und nicht nur zu Hause. Sie können 24 Stunden früher buchen als alle anderen und erhalten Zugang zu Events, Training und Partnerrabatten. Das Joint Venture baut außerdem Angebote für Kinder und Einsteiger auf.'],
            ['frage' => 'Wer übernimmt welche Aufgaben?', 'antwort' => 'Das Joint Venture übernimmt Bau, Finanzierung und Betrieb, Jugend- und Trainingsangebote, Turniere zu rabattierten Konditionen und die Marke. Dein Verein übernimmt die Fläche gegen Pacht, die Pflege von Außenflächen und Courts, die Sanitärräume und verankert Padel im Vereinsleben. So bleibt dein Verein Gastgeber, aber nicht Unternehmer.'],
        ],
    ],
    [
        'id' => 'faq-referenzen', 'label' => 'Referenzen', 'h2' => 'Unsere <span class="hl">Referenzen.</span>',
        'link' => ['/referenzen', 'Alle Referenzen ansehen'],
        'faqs' => [
            ['frage' => 'Wie viele Projekte hat Padelbee umgesetzt?', 'antwort' => 'Auf unserer Projektkarte stehen 50 Projekte, von Garbsen bei Hannover bis Graz in Österreich. Jeder Punkt ist eine Anlage, die wir beraten, geplant oder gebaut haben, gesteuert aus Unterföhring bei München. Einen Teil davon zeigen wir in unseren <a href="/referenzen">Referenzen</a> mit Bildern und Details, Projekte in Planung sind als solche gekennzeichnet.'],
            ['frage' => 'Welche Arten von Anlagen habt ihr gebaut?', 'antwort' => 'Unsere Referenzen reichen von Outdoor-Courts im Tennisverein bis zu Padelhallen kommerzieller Betreiber. Ein Beispiel ist H30 Fitness &amp; Padel in Memmingen mit vier Double- und zwei Single-Courts in einer kernsanierten Brauereihalle. 0711 Padel in Stuttgart steht auf einer mobilen Plattform.'],
            ['frage' => 'Was bedeutet „in Planung“ bei einem Projekt?', 'antwort' => '„In Planung“ heißt, dass die Anlage noch nicht gebaut ist. Wir begleiten diese Projekte bereits, etwa bei Planung, Genehmigung oder Finanzierung, und die Eröffnung steht noch bevor. Sobald die Anlage fertig ist, ergänzen wir Bilder und Details.'],
            ['frage' => 'Wo stehen Automaten von Padelbee?', 'antwort' => 'Verleih- und Verkaufsautomaten von uns stehen unter anderem in Memmingen, im Scheck Club in Unterföhring, bei 0711 Padel in Stuttgart, bei Donau Padel, im Padel Point in Konradsreuth, beim TC BW Neufahrn, in Straubing und beim TC GR Mainburg. Unser ganzes Sortiment findest du bei den <a href="/automatenloesungen">Automaten</a>.'],
            ['frage' => 'Wie wird mein Projekt zur nächsten Referenz?', 'antwort' => 'Dein Projekt startet mit einem kostenlosen Erstgespräch. Darin prüfen wir Fläche, Zielgruppe und Potenzial deines Standorts und besprechen Budget und Finanzierung. Danach planen wir Courts, Fundament und bei Bedarf eine Halle und setzen sie mit unseren Partnern um.'],
        ],
    ],
];
$alleFaqs = array_merge(...array_column($gruppen, 'faqs'));
tc_page_start([
    'path' => '/faq',
    'title' => 'FAQ Padelanlage: Kosten, Courts und Ablauf · Padelbee',
    'description' => 'FAQ zur Padelanlage: Kosten, Ablauf, Padel-Courts, Halle, Automaten, Padel im Tennisverein und unsere Referenzen. Alle Antworten von Padelbee auf einen Blick.',
    'breadcrumb' => ['FAQ' => '/faq'],
    'extra_head' => '<link rel="stylesheet" href="/media/tc/p-faq.css?v=' . TC_ASSET_VERSION . '">',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => html_entity_decode(strip_tags($f['antwort']), ENT_QUOTES, 'UTF-8')], $alleFaqs), '/faq'),
    ],
]);
?>
<section class="band dark grid-bg c-hero f-hero">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; FAQ</p>
    <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padelbee FAQ</span>Häufig gestellte <span class="kw">Fragen.</span></h1>
    <p class="lead">Hier findest du Antworten rund um deine Padelanlage, von Kosten und Ablauf über Courts und Halle bis zu Automaten, Padel im Verein und unseren Referenzen.</p>
    <nav class="faq-nav" aria-label="FAQ-Themen">
<?php foreach ($gruppen as $g): ?>
      <a href="#<?= $g['id'] ?>"><?= rtrim(strip_tags($g['h2']), '.') ?></a>
<?php endforeach; ?>
    </nav>
  </div>
</section>

<?php foreach ($gruppen as $gi => $g): ?>
<section class="band grid-bg" id="<?= $g['id'] ?>"<?= $gi % 2 ? ' style="background-color:var(--grey-050)"' : '' ?>>
  <div class="inner">
    <p class="label" data-type><?= $g['label'] ?></p>
    <h2 class="reveal"><?= $g['h2'] ?></h2>
    <a class="more-link" href="<?= tc_h($g['link'][0]) ?>"><?= tc_h($g['link'][1]) ?></a>
    <div class="faq-list">
<?php foreach ($g['faqs'] as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>
<?php endforeach; ?>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Ready. <span class="kw">Play.</span></h2>
    <p class="lead" style="margin:18px auto 0">Deine Frage war nicht dabei? Schreib uns, wir sind für dich da.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcFormButton = 'Frage stellen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
