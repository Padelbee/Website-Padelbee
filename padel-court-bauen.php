<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt: Bauphasen 4 bis 7 (Firmenpräsentation 2026, Folien 15 und 16) und Martins Entwurf
// (the-court.com, Stand 23.11.2026: FAQ, Ratgeber zu Kosten, Ablauf, Genehmigung und Finanzierung).
// DEV-1667: FAQ wie in Martins Entwurf, jede Frage nur auf einer Seite (verschoben von der Startseite).
$pbFaq = [
    ['frage' => 'Wie läuft ein Padel-Projekt ab?', 'antwort' => 'Ein Padel-Projekt läuft bei uns in sieben Etappen, von Beratung und Finanzierung über Planung und Architektur, Bau und Digitalisierung bis zu Betrieb und auf Wunsch Franchise. Am Anfang prüfen wir Fläche, Zielgruppe und Potenzial deines Standorts. Danach klären wir Finanzierung und Genehmigung, bevor gebaut wird. Mehr dazu bei der <a href="/standortanalyse">Standortanalyse</a>.'],
    ['frage' => 'Was kostet eine Padelanlage?', 'antwort' => 'Für die erste Kalkulation brauchst du drei Zahlen. Ein Padel-Court kostet ab 27.000 € netto, das Fundament als Richtwert rund 35.000 € und eine Halle ab 280 €/m² netto. Den genauen Betrag bestimmen Standort, Variante und Ausstattung. Mehr dazu bei den <a href="/courts">Padel-Courts</a> und der <a href="/halle">Padel-Halle</a>.'],
    ['frage' => 'Warum ist das Fundament so wichtig?', 'antwort' => 'Das Fundament entscheidet über Jahrzehnte Spielspaß. Wer hier spart, zahlt später, denn Risse, Pfützen und eine schiefe Glaswand sind teurer als jede saubere Gründung. Als Richtwert rechnen wir mit rund 35.000 €, abhängig von Standort, Boden und Bauauflagen. Mehr dazu beim <a href="/courts#c-fundament">Fundament</a>.'],
    ['frage' => 'Für wen passt eine mobile Plattform?', 'antwort' => 'Nicht jede Fläche ist für immer. Die mobile Plattform passt zu kurzen Pachtverträgen, Zwischennutzungen, Parkdecks oder Gewerbeflächen mit unsicherer Zukunft. Der Court steht darauf wie auf einem festen Fundament, lässt sich aber abbauen und an einem neuen Ort wieder aufstellen.'],
];
tc_page_start([
    'path' => '/padel-court-bauen',
    'title' => 'Padel Court bauen: Ablauf, Kosten & Finanzierung · Padelbee',
    'description' => 'Padel Court bauen in Deutschland: Bauantrag, Ausschreibung und Bau deines Padelcourts mit Padelbee. Mit Kosten ab 27.000 € netto und Finanzierungswegen.',
    'breadcrumb' => ['Padel Court bauen' => '/padel-court-bauen'],
    'og_image' => '/media/referenzen/scheck-aufbau-4.jpg',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Padel Court bauen: Bauantrag, Ausschreibung und Bau',
            'Padel Court bauen in Deutschland, Österreich und der Schweiz: Bauantrag und Fachgutachten, Kosten-, Termin- und Gremienfreigabe, Werkplanung, Ausschreibung und Vergabe, Bauausführung, Montage der Padelcourts, Abnahme und Eröffnung.',
            '/padel-court-bauen',
            ['serviceType' => 'Padel-Court-Bau', 'image' => '/media/referenzen/scheck-aufbau-4.jpg']
        ),
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => html_entity_decode(strip_tags($f['antwort']), ENT_QUOTES, 'UTF-8')], $pbFaq), '/padel-court-bauen'),
    ],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Padel Court bauen</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padel Court bauen · Planung · Bau</span>Bis zum ersten <span class="kw">Aufschlag.</span></h1>
      <p class="lead lead-fill">Zwischen der ersten Idee und dem ersten Aufschlag liegen viele Entscheidungen. Beim Padel Court bauen begleiten wir dich in Deutschland, Österreich und der Schweiz durch alle, vom Bauantrag <span class="keep">bis zur Eröffnung deines Padelcourts.</span></p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Bau anfragen</a><a class="btn ghost" href="#p-ablauf">Ablauf ansehen</a></div>
    </div>
    <figure class="courtfig courtphoto"><img src="/media/referenzen/scheck-aufbau-4.jpg" alt="Scheck Club München: fertig montierte Padel-Courts in der Halle"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b data-count="4">4</b><span>Bauphasen<em class="st-sub">Phase 4 bis 7</em></span></div>
      <div><b>27 T€</b><span>ab, pro Court netto<em class="st-sub">Stand 11/2026</em></span></div>
      <div><b>35 T€</b><span>Fundament<em class="st-sub">Richtwert</em></span></div>
      <div><b><small>ab</small> 280 €</b><span>pro m² Halle netto<em class="st-sub">Stand 11/2026</em></span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="p-ablauf">
  <div class="inner">
    <p class="label" data-type>Bauphasen 4 bis 7</p>
    <h2 class="reveal">Vom Bauantrag bis zur <span class="hl">Eröffnung.</span></h2>
    <p class="lead">Eine Padel-Anlage baut man nicht nebenbei. Nach der <a href="/standortanalyse">Standortanalyse</a> begleiten wir dich durch die nächsten vier&nbsp;Bauphasen.</p>
    <div class="cards c2">
      <article class="card reveal"><div class="k">Phase 04</div><h3 data-type>Abstimmungen &amp; Bauantrag</h3><p>Wir sprechen mit der Baubehörde, erstellen den Bauantrag und reichen ihn ein.</p><ul class="chips"><li>Erstgespräch Baubehörde</li><li>Bauantragsunterlagen</li><li>Fachgutachten (Lärm, Statik, Beleuchtung)</li><li>Einreichung bei der Genehmigungsbehörde</li></ul></article>
      <article class="card reveal"><div class="k">Phase 05</div><h3 data-type>Kosten-, Termin- &amp; Gremienfreigabe</h3><p>Wir berechnen die Kosten, erstellen einen Grobterminplan und prüfen Fördermittel, bis die Umsetzung beschlossen ist.</p><ul class="chips"><li>Kostenberechnung &amp; Grobterminplan</li><li>Fördermittelprüfung / Vereinsgremien</li><li>Beschluss zur Umsetzung</li></ul></article>
      <article class="card reveal"><div class="k">Phase 06</div><h3 data-type>Werkplanung, Ausschreibung &amp; Vergabe</h3><p>Wir planen die Details, schreiben die Gewerke aus und geben dir eine Vergabeempfehlung.</p><ul class="chips"><li>Detailplanung für Fundamente, Beleuchtung und Entwässerung</li><li>Ausschreibung &amp; Vergabeempfehlung</li><li>Vertragsgestaltung &amp; verbindliche Terminschiene</li></ul></article>
      <article class="card reveal"><div class="k">Phase 07</div><h3 data-type>Bauausführung &amp; Inbetriebnahme</h3><p>Wir koordinieren die Baustelle, montieren die Padelcourts und begleiten die Eröffnung.</p><ul class="chips"><li>Baustelleneinrichtung &amp; Koordination</li><li>Montage Padelcourts &amp; Qualitätssicherung</li><li>Abnahme, Eröffnung &amp; Monitoring</li></ul></article>
    </div>
    <div class="gest reveal" style="margin-top:28px">
      <article class="gbox"><div class="k">Planung &amp; Architektur</div><p>Wir stimmen Courts, Halle, Licht, Wege und Sanitär aufeinander ab, alles genehmigungsfähig. Den Bauantrag erstellen wir mit spezialisierten Architekturbüros.</p></article>
      <article class="gbox"><div class="k">Bau</div><p>Courts, Hallen und Fundamente bauen wir schlüsselfertig, mit Ausschreibung und Bauleitung. Dafür setzen wir auf über 30 Partner aus Planung, Court- und Hallenbau.</p></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="p-genehmigung">
  <div class="inner">
    <p class="label" data-type>Genehmigung</p>
    <h2 class="reveal">Genehmigung ohne <span class="kw">Kopfschmerzen.</span></h2>
    <p class="lead">Der Court ist schnell bestellt, die Genehmigung dauert oft länger. Wer die typischen Stolpersteine kennt, spart Wochen. Drei Themen solltest du früh klären.</p>
    <div class="cards c3">
      <article class="card dk reveal"><div class="k">Thema 01</div><h3 data-type>Lage und Baurecht</h3><p>Was erlaubt der Bebauungsplan auf deiner Fläche? Auf bestehenden Sportanlagen ist das oft einfacher als auf der grünen Wiese.</p></article>
      <article class="card dk reveal"><div class="k">Thema 02</div><h3 data-type>Lärm</h3><p>Padel ist lauter als Tennis. Der Ballwechsel an der Glaswand ist hörbar. Abstand zur Wohnbebauung, Ausrichtung der Courts und Spielzeiten gehören früh ins Konzept.</p></article>
      <article class="card dk reveal"><div class="k">Thema 03</div><h3 data-type>Licht</h3><p>Flutlicht verlängert die Spielzeit, braucht aber eine saubere Planung. Lichtmasten, Lichttemperatur und Ausrichtung planen wir von Anfang an mit.</p></article>
    </div>
    <p class="fav-note">Unser Tipp ist, die Gemeinde früh an den Tisch zu holen. Mit einem guten Konzept überzeugst du sie, bevor es überhaupt zu Einsprüchen kommt.</p>
  </div>
</section>

<section class="band" id="p-kosten">
  <div class="inner">
    <p class="label" data-type>Kosten</p>
    <h2 class="reveal">Was kostet ein <span class="hl">Padel Court?</span></h2>
    <p class="lead">Die erste Frage in jedem Gespräch ist die nach den Kosten. Ehrlich gesagt kostet es weniger, als viele denken, und mehr, als ein Court allein. Die Tabelle zeigt die Richtwerte, mit denen wir im Erstgespräch rechnen. Alle Preise sind netto, Stand November 2026.</p>
    <div class="tablewrap reveal">
      <table class="plat">
        <thead><tr><th>Baustein</th><th>Richtwert netto</th><th>Wovon der Preis abhängt</th></tr></thead>
        <tbody>
          <tr><td>Padel-Court</td><td>ab 27.000 € pro Court</td><td>Variante, Hersteller, Ausstattung wie Kunstrasen, Licht und Branding</td></tr>
          <tr><td>Fundament</td><td>rund 35.000 €</td><td>Standort, Boden und Bauauflagen</td></tr>
          <tr><td>Elastische Tragschicht</td><td>2.000 bis 5.000 € pro Court extra</td><td>optional, schont Gelenke und Belag</td></tr>
          <tr><td>Halle</td><td>ab 280 €/m²</td><td>System (Polycarbonat oder ThermoRoof) und Größe</td></tr>
          <tr><td>Smart Access &amp; Light Control</td><td>2.000 € einmalig plus 49 bis 129 € im Monat</td><td>Anzahl der Courts</td></tr>
          <tr><td>Verleihautomat</td><td>ab 4.950 € plus 49 € im Monat</td><td>Modell und Anzahl der Fächer</td></tr>
        </tbody>
      </table>
    </div>
    <p class="fav-note fav-note-l">Die Zahlen sind Richtwerte, kein Angebot. Dazu kommen Planung, Genehmigung, Licht und Digitalisierung. Genau hier trennt sich eine gute von einer teuren Anlage.</p><p class="more-row"><a class="more-link" href="/courts">Court-Varianten</a><a class="more-link" href="/halle">Hallen</a><a class="more-link" href="/automatenloesungen">Automaten</a></p>
    <h3 class="reveal" style="margin-top:clamp(40px,5vw,64px);font-size:clamp(26px,2.6vw,36px)">Welcher Padel Court passt zu deinem Budget?</h3>
    <p class="lead">Die drei Court-Varianten unterscheiden sich vor allem in den Streben zwischen den Glaselementen. Jede Variante gibt es als Doppel- oder als Einzel-Court.</p>
    <div class="tablewrap reveal">
      <table class="plat">
        <thead><tr><th>Variante</th><th>Merkmal</th><th>Passt zu</th></tr></thead>
        <tbody>
          <tr><td><a href="/standard-court">Standard</a></td><td>zusätzliche Streben, besonders stabil</td><td>Vereinen, Outdoor-Anlagen, Fokus auf Preis-Leistung</td></tr>
          <tr><td><a href="/panorama-court">Panorama</a></td><td>weniger Streben, größere Glasflächen</td><td>Clubs mit Zuschauern</td></tr>
          <tr><td><a href="/premier-court">Full Panorama</a></td><td>fast durchgehend Glas, minimaler Stahlrahmen</td><td>Indoor-Clubs, Turnieren, TV-Übertragungen</td></tr>
        </tbody>
      </table>
    </div>
    <p class="fav-note fav-note-l">Wo Zuschauer stehen, lohnt sich Panorama, wo Wind und Wetter wirken, punktet Standard. Wir arbeiten mit fünf Herstellern und vergleichen für dich Qualität, Lieferzeit, Herstellergarantie und Preis.</p>
    <p style="margin-top:28px"><a class="btn" href="#kontakt">Anlage durchrechnen lassen</a></p>
  </div>
</section>

<section class="band grid-bg" id="p-fundament" style="background-color:var(--grey-050)">
  <div class="inner">
    <div class="t-office">
      <figure class="reveal"><img src="/media/courts/cp_outdoor1.jpg" alt="Court auf festem Fundament im Bau" loading="lazy"></figure>
      <div>
        <p class="label" data-type>Fundament</p>
        <h2 class="reveal">Fest oder <span class="hl">mobil?</span></h2>
        <p class="lead">Die Wahl hängt vom Standort und von der Laufzeit deines Miet- oder Pachtvertrags ab. Beide Varianten liegen preislich in einem ähnlichen Rahmen.</p>
        <div style="display:flex;gap:10px 28px;flex-wrap:wrap"><a class="more-link" href="/courts#c-fundament">Das richtige Fundament</a><a class="more-link" href="/referenzen#r-scheck">Aufbau im Scheck Club</a></div>
      </div>
    </div>
  </div>
</section>

<section class="band" id="p-finanzierung">
  <div class="inner">
    <p class="label" data-type>Finanzierung</p>
    <h2 class="reveal">Du musst <span class="hl">nicht sofort</span> sechsstellig investieren.</h2>
    <p class="lead">Drei Wege stehen dir offen. Welcher passt, hängt von deinen Zielen&nbsp;ab.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Passt zu Betreibern mit Kapital und langfristigem Plan</div><h3 data-type>Kauf</h3><p>Du investierst einmal und dir gehört alles.</p></article>
      <article class="card reveal"><div class="k">Passt zu mobilen Plattformen und Automaten</div><h3 data-type>Leasing</h3><p>Die Raten fließen aus dem laufenden Betrieb, die Liquidität bleibt. Für Automaten gibt es Leasing ab 109 € und Mietkauf ab 104 € im Monat, zum Beispiel mit 48 Monaten Laufzeit und 20 % Schlussrate, Bonität vorausgesetzt.</p></article>
      <article class="card reveal"><div class="k">Passt zu Tennisvereinen</div><h3 data-type>Joint Venture</h3><p>Der Verein stellt die Fläche, das Joint Venture mit dem Motions Racket Club baut, finanziert und betreibt. Du bekommst Pacht und investierst 0 €.</p></article>
    </div>
    <p class="fav-note fav-note-l">Steuerliche und bilanzielle Fragen klärst du bitte immer mit deinem Steuerberater.</p>
  </div>
</section>

<section class="band grid-bg" id="p-faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zum <span class="hl">Padel Court bauen.</span></h2>
    <div class="faq-list">
<?php foreach ($pbFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Aus einer Idee wird eine Anlage, die <span class="kw">läuft.</span></h2>
    <p class="lead" style="margin:18px auto 0">Starte mit Etappe 1 und sprich mit uns über deinen Standort. Sichere dir jetzt dein unverbindliches Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Padel Court bauen - Bauplanung, Platzbau & Baubegleitung', 'Padelcourt']; $tcFormButton = 'Beratungsgespräch anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
