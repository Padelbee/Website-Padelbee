<?php
require __DIR__ . '/inc/tc/layout.php';
$automaten = [
    ['Padel Premium 12 Fach', 'Sportogo', '4950'],
    ['Padel Premium 24 Fach', 'Sportogo', '6950'],
    ['RentalBOX S', 'Pure Vending', '5190'],
    ['Racx IQ + Payx 8', 'Zuply', '8483'],
    ['Padel Ball Premium', 'Sportogo', '3500'],
    ['SportsBOX', 'Pure Vending', '5490'],
    ['Snack Touch Business', 'Sportogo', '7140'],
    ['Snack Touch Premium Plus', 'Sportogo', '9680'],
    ['DualBOX Lift', 'Pure Vending', '5990'],
    ['Linx IQ + Payx 8', 'Zuply', '19180'],
];
$automatenProducts = array_map(
    fn($a) => tc_schema_product($a[0], 'Verleih- und Verkaufsautomat für Padel- und Tennisanlagen von ' . $a[1], [
        'brand' => $a[1], 'category' => 'Verkaufsautomat', 'price' => $a[2], 'path' => '/automatenloesungen',
    ]),
    $automaten
);
tc_page_start([
    'path' => '/automatenloesungen',
    'title' => 'Schläger-Verleihautomaten & Verkaufsautomaten für Padel · THE COURT',
    'description' => 'Verleih- und Verkaufsautomaten für Padel- und Tennisanlagen: Schlägerverleih, Bälle, Snacks und Getränke 24/7. Preise, RentalBOX-Konfigurator, Leasing und Mietkauf.',
    'breadcrumb' => ['Automaten' => '/automatenloesungen'],
    'schema' => [
        tc_schema_service('Verleih- und Verkaufsautomaten', 'Schlägerverleih, Bälle, Snacks und Getränke rund um die Uhr, ohne Personal: Verleih- und Verkaufsautomaten für Padel- und Tennisanlagen inklusive Leasing und Mietkauf.', '/automatenloesungen'),
        tc_schema_item_list('Verleih- und Verkaufsautomaten für Padel', $automatenProducts),
    ],
    'extra_scripts' => '<script src="/media/tc/automaten.js?v=' . TC_ASSET_VERSION . '"></script>',
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Automaten</p>
      <p class="label" style="color:var(--white)" data-type>Digitalisierung · Verleih · Verkauf</p>
      <h1>Mehr Service.<br>Mehr <span class="kw">Umsatz.</span></h1>
      <p class="lead">Schlägerverleih, Bälle, Snacks und Getränke direkt am Court: vollautomatisch, rund um die Uhr und ohne Personal. Du gewinnst Zusatzerlöse und mehr Zeit für deine Community.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="/#kontakt">Automaten anfragen</a><a class="btn ghost" href="#a-produkte">Produkte ansehen</a></div>
    </div>
    <figure class="a-herofig"><img src="/media/automaten/sg12b.jpg" alt="Beleuchteter Schläger-Verleihautomat mit 12 Fächern neben einem Padel-Court" loading="lazy"><figcaption>Verleihautomat · 12 Fächer</figcaption></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b>24/7</b><span>Verfügbar</span></div>
      <div><b data-count="100">100</b><span>% automatisiert</span></div>
      <div><b data-count="10">10</b><span>Automaten im Portfolio</span></div>
      <div><b>104 €</b><span>ab, pro Monat im Mietkauf</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="a-ablauf">
  <div class="inner">
    <p class="label">So funktioniert's</p>
    <h2 class="reveal">Buchen. Öffnen. <span class="hl">Spielen.</span></h2>
    <p class="lead">Deine Spieler leihen und kaufen selbstständig, bargeldlos und ohne Wartezeit. Du verwaltest alles per App oder Display, auch aus der Ferne.</p>
    <ol class="flow" id="flow">
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><rect x="9" y="3" width="14" height="26" rx="1"/><path d="M14 25h4"/></svg></i><h4>Auswählen</h4><p>Am Touchscreen oder per App: Schläger, Bälle, Drinks.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><rect x="4" y="8" width="24" height="16" rx="1"/><path d="M4 13h24M8 19h6"/></svg></i><h4>Bezahlen</h4><p>Karte, Apple &amp; Google Pay, PayPal. Kaution beim Verleih.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><rect x="5" y="4" width="22" height="24"/><path d="M5 12h22M5 20h22M20 8h3"/></svg></i><h4>Fach öffnet</h4><p>Das richtige Fach entriegelt automatisch.</p></li>
      <li><i aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M6 16a10 10 0 1 0 3-7"/><path d="M6 4v6h6"/></svg></i><h4>Zurückgeben</h4><p>Schläger zurück ins Fach, Kaution wird freigegeben.</p></li>
    </ol>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Digitalisierung</div><h3>100 % automatisiert</h3><p>Vollautomatischer Verleih und Verkauf, rund um die Uhr, ohne Personal. Remote-Verwaltung per App oder Display, Telemetrie und Software-Updates inklusive.</p></article>
      <article class="card reveal"><div class="k">Zusatzeinnahmen</div><h3>Mehr Umsatz</h3><p>Schlägerverleih, Bälle, Griffbänder, Snacks und Getränke: direkte Zusatzerlöse auf deiner Anlage, auch dann, wenn niemand vor Ort ist.</p></article>
      <article class="card reveal"><div class="k">Community</div><h3>Mehr Zeit</h3><p>Kein Schlüsseldienst, kein Kassieren, kein Nachfragen an der Theke. Dein Team kümmert sich um die Spieler statt um die Logistik.</p></article>
    </div>
  </div>
</section>

<section class="band" id="a-produkte">
  <div class="inner">
    <p class="label">Produkte</p>
    <h2 class="reveal">Der richtige Automat für deine <span class="hl">Anlage.</span></h2>
    <p class="lead">Zehn Automaten von drei Partnern. Filtere nach dem, was du anbieten willst.</p>
    <div class="filters" role="group" aria-label="Produkte filtern">
      <button type="button" class="fbtn" data-f="all" aria-pressed="true">Alle</button>
      <button type="button" class="fbtn" data-f="verleih" aria-pressed="false">Schlägerverleih</button>
      <button type="button" class="fbtn" data-f="baelle" aria-pressed="false">Bälle &amp; Zubehör</button>
      <button type="button" class="fbtn" data-f="snacks" aria-pressed="false">Snacks &amp; Getränke</button>
    </div>
    <div class="prods" id="prods">
      <article class="prod" data-cat="verleih">
        <figure class="ph photo"><img src="/media/automaten/sg12.jpg" alt="Verleihautomat Padel Premium mit 12 Fächern" loading="lazy"></figure>
        <div class="pb"><div class="pk">Sportogo · Verleihautomat</div><h3>Padel Premium 12 Fach</h3>
        <ul><li>45 × 54 × 194 cm, 75 kg, 230 V / LAN</li><li>7" Touchscreen, Plexiglasfront, LED</li><li>Bargeldlos, Remote-Verwaltung</li><li>In Blau und Schwarz</li></ul>
        <div class="price"><b>4.950 €</b><span>+ 49 €/Monat Grundgebühr</span></div></div>
      </article>
      <article class="prod" data-cat="verleih">
        <figure class="ph photo"><img src="/media/automaten/sg24.jpg" alt="Zwei Verleihautomaten Padel Premium mit insgesamt 24 Fächern" loading="lazy"></figure>
        <div class="pb"><div class="pk">Sportogo · Verleihautomat</div><h3>Padel Premium 24 Fach</h3>
        <ul><li>90 × 54 × 194 cm, 150 kg, 230 V / LAN</li><li>7" Touchscreen, Plexiglasfront, LED</li><li>Bargeldlos, Remote-Verwaltung</li><li>In Blau und Schwarz</li></ul>
        <div class="price"><b>6.950 €</b><span>+ 49 €/Monat Grundgebühr</span></div></div>
      </article>
      <article class="prod" data-cat="verleih">
        <figure class="ph cut"><img src="/media/automaten/rentalbox.webp" alt="RentalBOX Schläger-Verleihautomat" loading="lazy"></figure>
        <div class="pb"><div class="pk">Pure Vending · Verleihautomat</div><h3>RentalBOX</h3>
        <ul><li>Verleih mit Sicherheitskaution</li><li>Mietdauer und Preise frei einstellbar</li><li>Padel- und Pickleballschläger</li><li>Indoor oder Outdoor (+ 500 €, überdacht)</li></ul>
        <div class="price"><b>ab 5.190 €</b><span>Mietkauf ab 104 €/Monat</span></div></div>
      </article>
      <div class="prod cfgrow" data-cat="verleih" id="a-konfigurator">
        <div class="cfg-head"><div class="pk">RentalBOX-Konfigurator</div><h3>Wie viele <span class="kw">Courts</span> hast du?</h3><p>Die RentalBOX wächst mit deiner Anlage. Schieb den Regler auf deine Court-Anzahl und sieh, welche Größe passt.</p></div>
        <div class="cfg">
          <div class="cfg-in">
            <label for="courtsRange" class="cfg-lab">Courts auf deiner Anlage: <b id="courtsOut">3</b></label>
            <input type="range" id="courtsRange" min="1" max="12" value="3" step="1">
            <div class="cfg-scale" aria-hidden="true"><span>1</span><span>4</span><span>8</span><span>12</span></div>
            <div class="sizes" id="sizes" aria-hidden="true"><span data-s="S">S</span><span data-s="M">M</span><span data-s="L">L</span><span data-s="XL">XL</span><span data-s="XXL">XXL</span></div>
          </div>
          <div class="cfg-out" aria-live="polite">
            <div class="k">Empfohlene Größe</div>
            <div class="cfg-size" id="cfgSize">M</div>
            <div class="lockers" id="lockers" aria-hidden="true"></div>
            <dl><div><dt>Fächer</dt><dd id="cfgFach">23</dd></div><div><dt>Preis netto</dt><dd id="cfgPreis">5.490 €</dd></div><div><dt>Ausgelegt für</dt><dd id="cfgFor">3–4 Courts</dd></div></dl>
          </div>
        </div>
        <p class="fine" style="margin-top:16px">Varianten VS / VM / VL mit 15, 33 oder 51 Fächern für Tennis und Minigolf ab 5.690 €. Kombinierbar mit der DualBOX Lift für Getränke, Snacks und Bälle.</p>
      </div>
      <article class="prod" data-cat="verleih">
        <figure class="ph photo"><img src="/media/automaten/zuply_racx.jpg" alt="Zuply Racx IQ Verleihautomat mit Gewichtssensoren" loading="lazy"></figure>
        <div class="pb"><div class="pk">Zuply · Premium · Indoor</div><h3>Racx IQ + Payx 8</h3>
        <ul><li>Bis zu 50 Produkte, 35 kg pro Fach</li><li>Gewichtssensoren für maximale Sicherheit</li><li>8" Touchscreen, QR-Code-Reader</li><li>Verleih plus Bälle und Zubehör</li></ul>
        <div class="price"><b>8.483 €</b><span>+ 59 €/Monat Grundgebühr</span></div></div>
      </article>
      <article class="prod" data-cat="baelle">
        <figure class="ph art" aria-hidden="true"><svg viewBox="0 0 200 240" class="cans"><g class="can"><rect x="34" y="40" width="40" height="150" rx="6"/><circle cx="54" cy="70" r="13"/><circle cx="54" cy="110" r="13"/><circle cx="54" cy="150" r="13"/></g><g class="can" style="animation-delay:.25s"><rect x="80" y="40" width="40" height="150" rx="6"/><circle cx="100" cy="70" r="13"/><circle cx="100" cy="110" r="13"/><circle cx="100" cy="150" r="13"/></g><g class="can" style="animation-delay:.5s"><rect x="126" y="40" width="40" height="150" rx="6"/><circle cx="146" cy="70" r="13"/><circle cx="146" cy="110" r="13"/><circle cx="146" cy="150" r="13"/></g><text x="100" y="222" text-anchor="middle">BIS ZU 100 DOSEN</text></svg></figure>
        <div class="pb"><div class="pk">Sportogo · Ballautomat</div><h3>Padel Ball Premium</h3>
        <ul><li>Bis zu 100 Balldosen, 3er und 4er</li><li>45 × 54 × 194 cm, 75 kg</li><li>Plexiglasfront, LED, bargeldlos</li><li>Modular kombinierbar mit Premium 12/24</li></ul>
        <div class="price"><b>3.500 €</b><span>netto</span></div></div>
      </article>
      <article class="prod" data-cat="baelle">
        <figure class="ph cut"><img src="/media/automaten/sportsbox.webp" alt="SportsBOX Verkaufsautomat für Bälle und Zubehör" loading="lazy"></figure>
        <div class="pb"><div class="pk">Pure Vending · Sportautomat</div><h3>SportsBOX</h3>
        <ul><li>Bis zu 144 Balldosen, 88 Griffbänder und Zubehör</li><li>21,5" Touchscreen, digitaler Warenkorb</li><li>Outdoor-Version (überdacht)</li><li>Zzgl. Nayax-Terminal 400 €</li></ul>
        <div class="price"><b>5.490 €</b><span>Mietkauf ab 110 €/Monat</span></div></div>
      </article>
      <article class="prod" data-cat="snacks baelle">
        <figure class="ph cut"><img src="/media/automaten/touch_business.webp" alt="Snack Touch Business Verkaufsautomat" loading="lazy"></figure>
        <div class="pb"><div class="pk">Sportogo · Verkaufsautomat</div><h3>Snack Touch Business</h3>
        <ul><li>Bis zu 229 Produkte, 50 Balldosen</li><li>Gekühlt +3 °C, zwei Temperaturzonen</li><li>7" Touchscreen, Wi-Fi und Bluetooth</li><li>Ohne Ball-Option: 6.640 €</li></ul>
        <div class="price"><b>7.140 €</b><span>+ 29 €/Monat Grundgebühr</span></div></div>
      </article>
      <article class="prod" data-cat="snacks baelle">
        <figure class="ph cut dark"><img src="/media/automaten/touch_premium.webp" alt="Snack Touch Premium Plus Verkaufsautomat" loading="lazy"></figure>
        <div class="pb"><div class="pk">Sportogo · Verkaufsautomat</div><h3>Snack Touch Premium Plus</h3>
        <ul><li>Bis zu 444 Produkte, 100 Balldosen</li><li>10" Touch-Tablet, LED-Preisleisten</li><li>Gekühlt, Einbruchsschutz</li><li>106 × 79 × 183 cm</li></ul>
        <div class="price"><b>9.680 €</b><span>+ 29 €/Monat Grundgebühr</span></div></div>
      </article>
      <article class="prod" data-cat="snacks baelle">
        <figure class="ph cut"><img src="/media/automaten/dualbox.webp" alt="DualBOX Lift Automat für Getränke, Snacks und Bälle" loading="lazy"></figure>
        <div class="pb"><div class="pk">Pure Vending · Kombiautomat</div><h3>DualBOX Lift</h3>
        <ul><li>Gekühlt: 208 Flaschen/Dosen und 112 Snacks</li><li>Ungekühlt: 48 Balldosen, 33 Griffbänder</li><li>Produktlift, bruchsicher auch für Glas</li><li>Optional Altersprüfung (595 €)</li></ul>
        <div class="price"><b>5.990 €</b><span>Mietkauf ab 120 €/Monat</span></div></div>
      </article>
      <article class="prod" data-cat="snacks verleih">
        <figure class="ph photo"><img src="/media/automaten/zuply_combo.jpg" alt="Zuply Linx und Racx im Padelbee-Branding" loading="lazy"></figure>
        <div class="pb"><div class="pk">Zuply · Premium · Indoor</div><h3>Linx IQ + Payx 8</h3>
        <ul><li>Gekühlt 0–4 °C, Drinks und Snacks</li><li>50 Produkte, 35 kg pro Fach, Gewichtssensoren</li><li>8" Touch-Tablet, QR-Code-Reader</li><li>Im Bild kombiniert mit Racx IQ, in deinem Branding</li></ul>
        <div class="price"><b>19.180 €</b><span>+ 58 €/Monat Grundgebühr</span></div></div>
      </article>
    </div>
    <p class="fine" style="color:var(--muted)">Alle Preise netto. Pure Vending ab Lager Rietberg, zzgl. Fracht. Mietkauf-Beispiel: 48 Monate, 20 % Schlussrate, Bonität vorausgesetzt. Grundgebühren beinhalten Telemetrie, Fernwartung und Software-Updates. Stand 10/2026.</p>
  </div>
</section>

<section class="band grid-bg" style="background-color:var(--grey-050)" id="a-smart">
  <div class="inner">
    <p class="label">Smart Solutions</p>
    <h2 class="reveal">Mehr Kontrolle. Mehr <span class="hl">Effizienz.</span></h2>
    <p class="lead">Licht und Zugang laufen automatisch mit deinen Buchungen. Kein Licht brennt umsonst, niemand braucht einen Schlüssel.</p>
    <div class="smartwrap">
      <article class="smartcard reveal">
        <figure class="ph art" aria-hidden="true"><svg viewBox="0 0 200 240" class="smartsvg"><circle class="bulb" cx="70" cy="80" r="30"/><path d="M58 112h24M60 122h20" class="ln"/><rect x="120" y="60" width="44" height="80" class="lock"/><circle cx="150" cy="100" r="5" class="dot"/><path d="M40 170h120" class="ln"/><circle cx="100" cy="170" r="6" class="pulse"/><text x="100" y="222" text-anchor="middle">LICHT · ZUGANG · BUCHUNG</text></svg></figure>
        <div class="pb"><div class="pk">Sportogo · Smart Solutions</div><h3>Smart Access &amp; Light Control</h3>
        <ul><li>Licht schaltet automatisch mit der Buchung</li><li>Zugangskontrolle mit der Buchungs-App verknüpft</li><li>Relais und elektrische Schlösser nicht inkl.</li><li>Installationsanleitung für den Elektriker</li></ul>
        <div class="price"><b>2.000 €</b><span>einmalig, netto</span></div></div>
      </article>
      <div>
        <p class="k tiers-k">Monatliche Gebühr nach Court-Anzahl</p>
        <div class="tiers">
          <div><span>1–4 Courts</span><b>49 €</b><small>pro Monat</small></div>
          <div><span>5–8 Courts</span><b>89 €</b><small>pro Monat</small></div>
          <div><span>9–12 Courts</span><b>129 €</b><small>pro Monat</small></div>
          <div><span>13+ Courts</span><b>Anfrage</b><small>individuell</small></div>
        </div>
        <p class="fine" style="color:var(--muted)">Für Licht- und Zutrittssteuerung sind Relais und elektrische Schlösser zu installieren, diese sind nicht im Angebot enthalten. Alle Preise netto.</p>
      </div>
    </div>
  </div>
</section>

<section class="band" id="a-finanzierung">
  <div class="inner">
    <p class="label">Finanzierung</p>
    <h2 class="reveal">Flexibel <span class="hl">finanziert.</span></h2>
    <p class="lead">Kaufen, leasen oder im Mietkauf: Über den Finanzierungspartner von Pure Vending findest du die Variante, die zu deiner Bilanz passt. Konditionen bekommst du über uns.</p>
    <div class="vs">
      <article class="card reveal"><h3>Leasing <small>ab 109 €/Monat</small></h3><ul class="ticks"><li>Leasinggeber bleibt Eigentümer</li><li>Bilanzneutral, deine Eigenkapitalquote bleibt unberührt</li><li>Raten steuerlich absetzbar</li><li>Keine Kaufpflicht, Option auf Übernahme zum Restwert</li></ul></article>
      <article class="card reveal"><h3>Mietkauf <small>ab 104 €/Monat</small></h3><ul class="ticks"><li>Wirtschaftliches Eigentum ab Tag 1</li><li>Rechtliches Eigentum nach der letzten Rate</li><li>Abschreibung möglich</li><li>USt. zu Beginn fällig, per Vorsteuer erstattbar</li></ul></article>
    </div>
    <div class="ideal"><span class="k">Ideal für</span><span>Tennisvereine</span><span>Padel-Clubs</span><span>Sporthallen</span><span>Sporthotels</span><span>Eventveranstalter</span></div>
    <p class="fine" style="color:var(--muted)">Monatliche Rate „ab“, abhängig von Laufzeit, Schlussrate und Konfiguration. Beispiel: 48 Monate, 20 % Schlussrate, Bonität vorausgesetzt.</p>
  </div>
</section>

<section class="band dark grid-bg" id="a-partner">
  <div class="inner">
    <p class="label">Unsere Automaten-Partner</p>
    <h2 class="reveal">Drei Partner. <span class="kw">Ein</span> Ansprechpartner.</h2>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Österreich</div><h3>Sportogo</h3><p>Digitale Verleih- und Verkaufsautomaten speziell für Padel. Plexiglasfächer mit LED, Smart Access und Lichtsteuerung, verknüpft mit deiner Buchungs-App.</p></article>
      <article class="card reveal"><div class="k">Gütersloh · 9 Länder</div><h3>Pure Vending</h3><p>Sport Vending für Padel- und Tennisanlagen. RentalBOX mit Kautionssystem, SportsBOX und DualBOX Lift, 21,5" Touchscreens und flexible Finanzierung.</p></article>
      <article class="card reveal"><div class="k">Niederlande · Produktion Italien</div><h3>Zuply</h3><p>Premium Vending für Indoor-Clubs. Großes Fassungsvermögen und Gewichtssensoren für maximale Sicherheit, auf Wunsch komplett in deinem Branding.</p></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" style="border-top:1px solid var(--line-d)">
  <div class="inner cta-band">
    <div><h2>Ready. <span class="kw">Play.</span></h2><p class="lead">Dein Sales Team: Laura, Philipp, Christian und Martin. <a href="mailto:info@padelbee.de" style="color:var(--yellow)">info@padelbee.de</a></p></div>
    <a class="btn" href="/#kontakt">Angebot anfragen</a>
  </div>
</section>
<?php tc_page_end();
