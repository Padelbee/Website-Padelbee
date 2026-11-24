<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt nach Martins neuestem Claude-Entwurf (the-court.com/courts, Stand 23.11.2026),
// ergänzt um Angaben aus der Courts-Präsentation 2026 (jeweils unter "Mehr Details").
$courts = [
    ['Standard-Court', 'Die klassische, wirtschaftliche Padel-Court-Lösung mit zusätzlichen Streben zwischen den Glaselementen: stabil, robust und mit gutem Preis-Leistungs-Verhältnis.', '/media/courts/standard.jpg'],
    ['Panorama-Court', 'Padel-Court mit deutlich weniger sichtbaren Streben, größeren Glasflächen und offener Anmutung für bessere Sicht und hochwertigen Gesamteindruck.', '/media/courts/panorama.jpg'],
    ['Full-Panorama-Court', 'Padel-Court mit nahezu durchgehenden Glasflächen und minimaler Stahlstruktur: repräsentativer Show-Court, vor allem für Indoor-Clubs.', '/media/courts/full.jpg'],
];
$courtProducts = array_map(
    fn($c) => tc_schema_product($c[0], $c[1], ['category' => 'Padel-Court', 'image' => $c[2], 'path' => '/courts', 'extra' => ['manufacturer' => ['@id' => TC_ORG_ID]]]),
    $courts
);
$courtsFaq = [
    ['frage' => 'Welche Padel-Court-Varianten gibt es?', 'antwort' => 'Die drei Varianten heißen Standard, Panorama und Full-Panorama. Sie unterscheiden sich vor allem in den Streben zwischen den Glaselementen. Standard ist besonders stabil und wirtschaftlich, Panorama bietet größere Glasflächen und bessere Sicht, Full-Panorama ist der Show-Court für Indoor-Clubs und Turniere. Jede Variante gibt es als Doppel- und als Einzel-Court. Mehr dazu beim <a href="/standard-court">Standard-Court</a> und beim <a href="/panorama-court">Panorama-Court</a>.'],
    ['frage' => 'Was kostet ein Padel-Court?', 'antwort' => 'Ein Padel-Court kostet ab 27.000 € netto. Der Endpreis hängt von Variante, Hersteller und Ausstattung ab, etwa von Kunstrasen, Licht und Branding. Für die Gesamtkalkulation kommen das Fundament mit einem Richtwert von rund 35.000 € und bei Bedarf eine Halle ab 280 €/m² netto dazu. Wie dein Projekt von der Planung bis zum Bau abläuft, liest du unter <a href="/padel-court-bauen">Padel Court bauen</a>.'],
    ['frage' => 'Mit welchen Court-Herstellern arbeitet ihr?', 'antwort' => 'Unsere fünf Hersteller sind Padel Concept, 100% Padel, Padel Factory, The Player\'s Court und Premium Padel Courts. Wir sind nicht an einen einzelnen Hersteller gebunden und vergleichen für dich Qualität, Lieferzeit, Herstellergarantie und Preis. Für draußen sind Padel Concept und Padel Factory unsere Favoriten, für die Halle 100% Padel. Alle Partner findest du unter <a href="/partner">Partner</a>.'],
    ['frage' => 'Wie viel Garantie gibt es auf einen Padel-Court?', 'antwort' => 'Je nach Hersteller gibt es bis zu 15 Jahre Herstellergarantie auf die Konstruktion (lt. Hersteller). Die 15 Jahre nennt Padel Factory; bei der mobilen Plattform reichen die Angaben der Hersteller von 2 bis 15 Jahren. Die Garantie gewährt immer der jeweilige Hersteller, nicht die THE COURT GmbH. Welche Bedingungen gelten, prüfen wir für dein Projekt mit dem Hersteller.'],
    ['frage' => 'Was passt besser, festes Fundament oder mobile Plattform?', 'antwort' => 'Das hängt vor allem von deinem Standort und der Laufzeit deines Miet- oder Pachtvertrags ab. Das feste Fundament ist eine Betonplatte mit Streifenfundament für langfristige Standorte. Die mobile Plattform kommt ohne Beton aus und lässt sich ab- und wieder aufbauen, ideal für Zwischennutzungen. Beide liegen preislich in einem ähnlichen Rahmen, als Richtwert rund 35.000 €. Wie ein festes Fundament entsteht, zeigt der <a href="/referenzen#r-scheck">Aufbau im Scheck Club München</a>.'],
    ['frage' => 'Wie viel Platz braucht eine Padelhalle?', 'antwort' => 'Eine Polycarbonat-Halle braucht für einen Court 12 × 21 m, also 252 m², für vier Courts 26 × 50 m. Die gedämmte ThermoRoof-Halle braucht für einen Court 13 × 27 m und für vier Courts 28 × 51 m. Breite, Länge und Höhe sind flexibel, beide Hallen sind erweiterbar. Die Preise starten bei 280 €/m² netto. Mehr zu Hallen liest du unter <a href="/halle">Padel Halle</a>.'],
    ['frage' => 'Kann ich meinen Court im eigenen Design gestalten?', 'antwort' => 'Ja, dein Court lässt sich an deine Marke anpassen. Stahl und Details gibt es in jeder RAL-Farbe, den Kunstrasen in vielen Farben, zum Beispiel Blau, Grün, Terracotta oder Petrol. Logos sind auf Netz, Netzkante, Türen und Netzpfosten möglich. Dazu wählst du Lichtmasten, Lichttemperatur und zusätzliche LEDs. Alles stimmen wir mit dem Hersteller ab.'],
];
tc_page_start([
    'path' => '/courts',
    'title' => 'Padel-Courts, Padelhallen & Fundamente · Padelbee',
    'description' => 'Padel-Courts in drei Varianten von fünf Herstellern, Fundamente und Hallen ab 280 €/m² netto. Wir vergleichen Preis, Lieferzeit und Garantie für dich.',
    'breadcrumb' => ['Courts' => '/courts'],
    'page_type' => 'CollectionPage',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_item_list('Padel-Court-Systeme', $courtProducts),
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $courtsFaq), '/courts'),
    ],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Courts</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padel-Courts · Hallen · Fundamente</span>Dein Court.<br>Unsere <span class="kw">Expertise.</span></h1>
      <p class="lead">Wir planen <a href="/padel-court-bauen">Padel-Courts</a>, Fundamente und <a href="/halle">Hallen</a> mit fünf international etablierten Court-Herstellern. Gemeinsam mit dir prüfen wir Standort, Budget und Nutzung und empfehlen den Court, der technisch, wirtschaftlich und qualitativ passt.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Court anfragen</a><a class="btn ghost" href="#c-systeme">Court-Systeme ansehen</a></div>
    </div>
    <figure class="courtfig courtphoto"><img src="/media/courts/anlage_luftbild.jpg" alt="Luftaufnahme einer Anlage mit fünf Padel-Courts neben Tennisplätzen"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b data-count="5">5</b><span>Court-Hersteller</span></div>
      <div><b><small>bis zu</small> 15</b><span>Jahre Garantie<em class="st-sub">lt. Hersteller</em></span></div>
      <div><b data-count="3">3</b><span>Court-Varianten</span></div>
      <div><b>27 T€</b><span>ab, pro Court netto<em class="st-sub">Stand 11/2026</em></span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="c-systeme">
  <div class="inner">
    <p class="label" data-type>Court-Systeme</p>
    <h2 class="reveal">Drei Varianten. Eine <span class="hl">Entscheidung.</span></h2>
    <p class="lead">Die Varianten unterscheiden sich in Optik, Transparenz und Konstruktion von Glas und Stahl. Jedes Modell gibt es als Double- und als Single-Court. Die Wahl ist auch eine strategische Positionierung deiner Anlage.</p>
    <div class="cards c3">
      <article class="card variant reveal"><figure class="vimg"><img src="/media/courts/standard.jpg" alt="Standard-Court Rendering" loading="lazy"></figure><div class="elev"><svg viewBox="0 0 260 100" data-var="std"></svg></div><div class="k">Einstieg</div><h3 data-type>Standard</h3><p>Die klassische, wirtschaftliche Lösung. Zusätzliche Streben zwischen den Glaselementen machen die Konstruktion besonders stabil. Ideal, wenn dir Preis-Leistung und Robustheit wichtig sind.</p><span class="tier"><a href="/standard-court">Preis-Leistung</a></span></article>
      <article class="card variant reveal"><figure class="vimg"><img src="/media/courts/panorama.jpg" alt="Panorama-Court Rendering" loading="lazy"></figure><div class="elev"><svg viewBox="0 0 260 100" data-var="pan"></svg></div><div class="k">Premium</div><h3 data-type>Panorama</h3><p>Deutlich weniger sichtbare Streben, größere Glasflächen und eine offenere Anmutung. Bessere Sicht für Zuschauer und ein hochwertiger Gesamteindruck.</p><span class="tier"><a href="/panorama-court">Design &amp; Offenheit</a></span></article>
      <article class="card variant reveal"><figure class="vimg"><img src="/media/courts/full.jpg" alt="Full-Panorama-Court Rendering" loading="lazy"></figure><div class="elev"><svg viewBox="0 0 260 100" data-var="full"></svg></div><div class="k">Topklasse</div><h3 data-type>Full-Panorama</h3><p>Nahezu durchgehende Glasflächen und eine minimale Stahlstruktur. Repräsentativ, mit klarem Show-Court-Charakter, vor allem für Indoor-Clubs und TV-Übertragungen.</p><span class="tier">Show-Court · Indoor</span></article>
    </div>
    <details class="pmore c-more"><summary>Mehr Details</summary><ul><li>Kunstrasen in nahezu allen Farben, farblich angepasste Stahlkonstruktion</li><li>Zusätzliche Türen, Fangnetze und Branding-Optionen projektabhängig umsetzbar</li><li>Details und eventuelle Mehrkosten stimmen wir im weiteren Planungsprozess individuell mit dir ab</li></ul></details>
  </div>
</section>

<section class="band dark grid-bg" id="c-favoriten">
  <div class="inner">
    <p class="label" data-type>Unsere Favoriten</p>
    <h2 class="reveal">Outdoor und Indoor. Unsere <span class="kw">Favoriten.</span></h2>
    <p class="lead">Wir beraten unabhängig von einem einzelnen Hersteller. Aus vielen gebauten Projekten haben sich trotzdem klare Favoriten herauskristallisiert, zwei für draußen und einer für die Halle.</p>
    <div class="favs f3">
      <article class="fav reveal"><figure><img src="/media/courts/pc_lv.jpg" alt="Panorama-Court von Padel Concept im Aufbau" loading="lazy"></figure><div class="favbody"><div class="k">Favorit Outdoor</div><h3 data-type>Padel Concept</h3><p>Vorrätige Courts und Ersatzteile für kurze Lieferzeiten, eigene Montageteams und Beratung auf Deutsch. Statik für Windlasten bis 144 km/h (lt. Hersteller).</p></div></article>
      <article class="fav reveal"><figure><img src="/media/courts/pf_ortigia.jpg" alt="Padel Factory Panorama-Court am Meer, Ortigia, Sizilien" loading="lazy"></figure><div class="favbody"><div class="k">Favorit Outdoor</div><h3 data-type>Padel Factory</h3><p>Feuerverzinkter und zusätzlich pulverbeschichteter Stahl, verstärkte Statik für Wind- und Schneelasten und 15 Jahre Herstellergarantie auf die Konstruktion (lt. Hersteller). Gemacht für Wetter, Jahr für Jahr.</p></div></article>
      <article class="fav reveal"><figure><img src="/media/courts/cp_indoor.jpg" alt="Padelhalle mit mehreren Courts von 100% Padel" loading="lazy"></figure><div class="favbody"><div class="k">Favorit Indoor</div><h3 data-type>100% Padel</h3><p>Laut Hersteller Turnierausrüster der Premier Padel Tour, Mondo-Supercourt-Rasen und ein fest stationiertes Montageteam in Deutschland. Schlüsselfertige Hallen-Courts mit Profi-Charakter.</p></div></article>
    </div>
    <p class="fine-note" style="margin-top:20px">Die Bilder zeigen Herstellerreferenzen, keine Projekte von Padelbee.</p>
  </div>
</section>

<section class="band" id="c-hersteller">
  <div class="inner">
    <p class="label" data-type>Court-Partner</p>
    <h2 class="reveal">Fünf Hersteller. <span class="hl">Ein</span> Ansprechpartner.</h2>
    <p class="lead">Jeder Hersteller hat eigene Stärken. Wir kennen alle aus der Praxis und vergleichen für dich Qualität, Lieferzeit, Herstellergarantie und Preis.</p>
    <div class="makers">
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="padelconcept" data-h="54"></div></div><div class="origin">Lettland · Riga</div><p>Von einem deutschen Unternehmer geführt. Vorrätige Courts und Ersatzteile für kurze Lieferzeiten, eigene Montageteams, Beratung auf Deutsch. Direct from factory to your court.</p><div class="models-list">Standard Club · Panorama · Full Panorama</div><div class="facts"><span>Windlast 144 km/h (lt. Hersteller)</span><span>Mondo · Edelgrass</span><span>Schnelle Lieferung</span></div><details class="pmore"><summary>Mehr Details</summary><ul><li>Verzinkte Stahlstrukturen mit hochwertiger Pulverbeschichtung</li><li>Montageteams mit mehr als fünf Jahren Erfahrung im Courtbau</li><li>Ausschließlich europäische Markenrasen</li><li>Beratung und Wartung auf Deutsch, Englisch oder Lettisch</li></ul></details></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="100padel" data-h="54"></div></div><div class="origin">Frankreich · Fabrik in Valencia</div><p>Familienunternehmen unter Leitung von Padel-Profi Jérémy Scatena. Laut Hersteller Ausrüster mehrerer Premier-Padel-Turniere, fest stationiertes Montageteam in Deutschland, schlüsselfertig von der Bodenplatte bis zur Montage.</p><div class="models-list">Klassisch · Panorama · Full Panorama</div><div class="facts"><span>Mondo Supercourt</span><span>Montage in DE</span></div><details class="pmore"><summary>Mehr Details</summary><ul><li>Jérémy Scatena, ehemals Nr. 67 der Premier-Padel-Rangliste und mehrfacher französischer Meister</li><li>Ausrüster u. a. in Bordeaux, Brüssel und beim P2 in Deutschland (lt. Hersteller)</li><li>Verzinkte Stahlkonstruktion (nicht feuerverzinkt), 2 Jahre Gewährleistung</li><li>Mondo-Kunstrasen fibrilliert, monofil oder als Supercourt XN, dem sandfreien Rasen von Premier Padel</li></ul></details></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="padelfactory" data-h="44"></div></div><div class="origin">Italien · Padel Factory</div><p>Feuerverzinkt und zusätzlich pulverbeschichtet, verstärkte Konstruktionen für anspruchsvolle Statik. Courts und Hallensystem aus einer Hand.</p><div class="models-list"><a href="/standard-court">Smash</a> · <a href="/panorama-court">Wing</a> · <a href="/premier-court">Premier Extreme</a></div><div class="facts"><span>15 J. Herstellergarantie (lt. Hersteller)</span><span>Mobile Plattform</span><span>Hallensystem</span></div><details class="pmore"><summary>Mehr Details</summary><ul><li>Über 20 Jahre Erfahrung, 1.000+ Projekte in ganz Europa (lt. Hersteller)</li><li>Produktion vollständig in Italien, CE-zertifizierte Courts</li><li>Individuelle Anpassung bei Materialien, Farben und Komponenten</li></ul></details></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="padelgalis" data-h="50"></div></div><div class="origin">Spanien · The Player's Court</div><p>Laut Hersteller offizieller Court-Partner der Premier Padel Tour und der Federación Española de Pádel. Hohe Individualisierung bei LED, Kunstrasen, Glas und Stahl.</p><div class="models-list">Mundial 90/160 · M360 · Atlas · Wilson 90/160</div><div class="galis"><div><b>20+</b><span>Jahre</span></div><div><b>15.000</b><span>m² Fertigung</span></div><div><b>1.000</b><span>Courts p. a.</span></div><div><b>85</b><span>Länder</span></div><div><b>100+</b><span>Profiturniere</span></div></div><p class="mk-note">Kennzahlen lt. Hersteller</p></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="mejorset" data-h="50"></div></div><div class="origin">Spanien · Premium Padel Courts</div><p>Premium-Courts aus Spanien für Clubs, die Wert auf Design und Turnierniveau legen. Wir binden MejorSet ein, wenn das Projekt es verlangt.</p><div class="facts"><span>Premium</span><span>Turnierniveau</span></div></article>
      <article class="maker dk reveal" style="background:var(--petrol);color:var(--white);border-color:var(--petrol)"><div class="origin" style="color:var(--petrol-200);margin-top:0">Unabhängig beraten</div><h3 style="font-size:32px;margin-top:10px;color:var(--yellow)">Der passende Court für dein Projekt</h3><p style="color:var(--petrol-200)">Wir sind nicht an einen einzelnen Hersteller gebunden. Du bekommst einen Vergleich auf Basis deines Standorts, deines Budgets und deines Nutzungskonzepts.</p><a class="btn" href="#kontakt" style="margin-top:20px">Vergleich anfragen</a></article>
    </div>
  </div>
</section>

<section class="band grid-bg" style="background-color:var(--grey-050)" id="c-marke">
  <div class="inner">
    <p class="label" data-type>Individuelle Gestaltung</p>
    <h2 class="reveal">Dein Court ist Teil deiner <span class="hl">Marke.</span></h2>
    <p class="lead">Ein Padel-Court ist heute weit mehr als eine Sportfläche, er prägt die Wahrnehmung deiner gesamten Anlage. Wähle aus, was zu deiner Anlage passt. Wir stimmen alles mit dem Hersteller ab.</p>
    <div class="gest">
      <article class="gbox reveal"><div class="k">Farbe &amp; Kunstrasen</div><p>Klassisch in Blau, ebenso in Rot oder Grün. Auch Kombinationen zwischen Spielfeld und Auslaufbereichen sind möglich und schaffen eine klare visuelle Differenzierung, passend zu deinem Corporate Design.</p><ul class="chips"><li>Court in RAL-Farbe</li><li>Details in RAL-Farbe</li><li class="w">Kunstrasen in Blau, Grün, Rot, Schwarz, Anthrazit, Terracotta, Violett, Pink, Petrol u. v. m.</li><li class="w">Kunstrasen vom Hersteller oder Mondo Premium Turf</li></ul></article>
      <article class="gbox reveal"><div class="k">Branding</div><p>Logos lassen sich integrieren, Glasflächen individualisieren und Sponsoren sichtbar einbinden. So entsteht eine professionelle Präsentationsfläche mit Wiedererkennungswert.</p><ul class="chips"><li>Netz mit Logo</li><li>Netzkante mit Logo</li><li class="w">Schaumstoffprotektoren mit Logo für Türen und Netzpfosten</li></ul></article>
      <article class="gbox reveal"><div class="k">Licht</div><p>Individuell abgestimmte Beleuchtungskonzepte für deine Anlage.</p><ul class="chips"><li class="w">Lichtmasten gerade, in C- oder Z-Form</li><li>Lichttemperatur nach Wunsch</li><li>Zusätzliche LEDs</li></ul></article>
      <article class="gbox reveal"><div class="k">Bauliche Anpassung</div><p>Zusätzliche Türen, spezielle Zugangslösungen und auch architektonische Besonderheiten bei Indoor- und Outdoor-Anlagen berücksichtigen wir.</p><ul class="chips"><li>Indoor oder Outdoor</li><li>Windlastzone 1 bis 4</li><li>Vogelschutzverglasung</li></ul></article>
    </div>
    <p class="m-quote reveal">Nahezu alle Elemente sind gestaltbar. Entscheidend ist nicht, was technisch möglich ist, sondern was <span class="hl">strategisch sinnvoll</span> ist.</p>
  </div>
</section>

<section class="band" id="c-fundament">
  <div class="inner">
    <p class="label" data-type>Fundament</p>
    <h2 class="reveal">Das richtige <span class="hl">Fundament.</span></h2>
    <p class="lead">Ob feste Betonplatte oder mobile, rückbaubare Plattform, hängt vom Standort und von der Laufzeit deines Mietvertrags ab. Beide Varianten liegen preislich in einem ähnlichen Rahmen.</p>
    <div class="vs fd">
      <article class="card reveal"><figure class="cimg"><img src="/media/courts/cp_outdoor1.jpg" alt="Court auf festem Fundament im Bau" loading="lazy"></figure><h3><span data-type>Festes Fundament</span> <small>Langfristiger Standort</small></h3><p>Dauerhaft gegossene Betonplatte mit Streifenfundament (Standard 40 × 80 cm, angepasst an den Boden, Tiefgründung unter Frostschutztiefe). Maximale Standfestigkeit, ausgelegt auf viele Jahre Betrieb. Spielfläche aus Drainbeton, Sickerasphalt oder elastischer Tragschicht.</p><div class="fd-why"><b>Ideal, wenn</b> du strategisch über viele Jahre planst. In der Regel die wirtschaftlichste und stabilste Lösung.</div><p class="fd-link">So sieht das beim <a href="/referenzen#r-scheck">Aufbau im Scheck Club München</a> aus.</p></article>
      <article class="card reveal"><figure class="cimg"><img src="/media/courts/pf_wpc.jpg" alt="Padel Factory Wing Court auf mobiler WPC-Plattform" loading="lazy"></figure><h3><span data-type>Mobile Plattform</span> <small>Befristeter Standort</small></h3><p>Modulare Unterkonstruktion ohne Betonfundament. Rückbaubar und versetzbar, ideal bei kürzeren Mietverträgen und Zwischennutzung. Mobile Fundamente und Courts lassen sich oft über Leasing finanzieren. In vielen Förderprogrammen derzeit nicht förderfähig, im Einzelfall prüfen.</p><div class="fd-why"><b>Ideal, wenn</b> du flexibel bleiben willst. Die gesamte Anlage lässt sich bei Bedarf versetzen. Das reduziert dein Investitionsrisiko, und mit Leasing wird deine Liquidität geschont.</div>
        <table class="plat fd-plat"><thead><tr><th>Hersteller</th><th>Garantie lt. Hersteller</th><th>Belag</th></tr></thead><tbody><tr><td>Padel Factory</td><td>15 Jahre</td><td>WPC-Paneele, robuste Konstruktion</td></tr><tr><td>Padel Galis / Flexipadel</td><td>5 Jahre</td><td>Keramikplatten</td></tr><tr><td>Padel Concept</td><td>2 Jahre</td><td>Keramikplatten</td></tr></tbody></table></article>
    </div>
    <div class="fd-cost reveal">
      <div><span>Richtwert Fundament</span><b>ca. 35.000 €</b><p>je nach Standort, Boden und baulichen Anforderungen, für beide Varianten.</p></div>
      <div><span>Elastische Tragschicht</span><b>+2.000 bis 5.000 €</b><p>pro Court. Streifenfundament und Unterbau baut ein lokales Bauunternehmen, die letzten ca. 5 cm entstehen als Gummi-Split-Mischung, z. B. von Polytan. Sie ist komplett eben, gelenkschonend und wasserdurchlässig. Ein Pluspunkt auch in der Außendarstellung deines Clubs.</p></div>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="c-hallen">
  <div class="inner">
    <p class="label" data-type>Hallensysteme</p>
    <h2 class="reveal">Moderne <span class="kw">Hallen.</span></h2>
    <p class="lead">Wir setzen auf das Gesamtsystem von Padel Factory, damit Courts und Halle technisch sauber aufeinander abgestimmt sind. Für andere Anforderungen arbeiten wir mit weiteren Hallenbauern wie Haltec, DS Stahl und Okatent. Mehr dazu findest du auf unserer Seite zur <a href="/halle">Padel Halle</a>.</p>
    <div class="hallimgs one">
      <figure class="reveal"><img src="/media/courts/dshs.jpg" alt="Hallenkonzept mit Glasfront, Rendering" loading="lazy"><figcaption>Hallenkonzept · Rendering</figcaption></figure>
    </div>
    <div class="partnerimgs"><figure class="reveal"><img src="/media/courts/haltec_industriehalle.webp" alt="Stahlhalle von Haltec mit Vordach und Fensterbändern" loading="lazy"><figcaption>Stahlhalle</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_firstlichtband.webp" alt="Firstlichtband in einer Haltec-Stahlhalle, Innenansicht" loading="lazy"><figcaption>Firstlichtband</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_fassade.webp" alt="Fassade einer Haltec-Halle mit Fensterband" loading="lazy"><figcaption>Fensterband</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_sektionaltor.webp" alt="Haltec-Mehrzweckhalle mit verglastem Sektionaltor" loading="lazy"><figcaption>Sektionaltor</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_stahlhalle.webp" alt="Gedämmte Haltec-Stahlhalle mit Bürotrakt" loading="lazy"><figcaption>Gedämmte Halle</figcaption></figure></div>
    <p class="partnernote">Fotos von unserem Hallenpartner <a href="https://www.haltec.de" target="_blank" rel="noopener">Haltec</a></p>
    <div class="halls">
      <article class="card reveal"><div class="k">Einstieg</div><h3 data-type>Polycarbonat</h3><p>8 mm Exolon, offen oder vollständig geschlossen. Beliebig erweiterbar.</p><ul><li><b>1 Court</b> 12 × 21 m · 252 m² · 9,42 m hoch</li><li><b>2 Courts</b> 25 × 26 m · 666 m²</li><li><b>3 Courts</b> 26 × 36 m · 932 m²</li><li><b>4 Courts</b> 26 × 50 m · 1.290 m²</li></ul></article>
      <article class="card reveal"><div class="k">Premium</div><h3 data-type>ThermoRoof</h3><p>+40 mm Isolierung, beheizbar und optimal für den Ganzjahresbetrieb.</p><ul><li><b>1 Court</b> 13 × 27 m · 354 m² · 9,42 m</li><li><b>4 Courts</b> 28 × 51 m · 1.412 m² · 9,42 m</li><li>Beliebig erweiterbar</li></ul></article>
      <article class="card reveal" style="border-top-color:var(--yellow)"><div class="k">Kennzahlen</div><h3 data-type>ab 280 €/m²</h3><p>netto, Breite, Länge und Höhe flexibel.</p><ul><li>Hohe Tragfähigkeit für Schnee- und Windlasten</li><li>Verschiebbare Seitenwände oder Fenster</li><li>PV-Anlage auf dem Dach integrierbar</li><li>Seitliche Schiebepaneele zur Belüftung</li></ul></article>
    </div>
  </div>
</section>

<section class="band" id="c-galerie">
  <div class="inner">
    <p class="label" data-type>Herstellerreferenzen</p>
    <h2 class="reveal">Courts, die <span class="hl">gespielt</span> werden.</h2>
    <p class="lead">Projekte unserer Hersteller, keine Projekte von Padelbee. Unsere eigenen Projekte findest du unter <a href="/referenzen">Referenzen</a>.</p>
    <div class="gallery">
      <figure class="g-wide reveal"><img src="/media/courts/pf_milano.jpg" alt="Padel Factory Premier Court am Castello Sforzesco, Mailand" loading="lazy"><figcaption>Padel Factory · Premier · Mailand · Herstellerreferenz</figcaption></figure>
      <figure class="reveal"><img src="/media/courts/pf_montaner.jpg" alt="Padel Factory Wing Court, Frankreich" loading="lazy"><figcaption>Padel Factory · Wing · Frankreich · Herstellerreferenz</figcaption></figure>
      <figure class="reveal"><img src="/media/courts/pc_lv.jpg" alt="Panorama-Court von Padel Concept im Aufbau" loading="lazy"><figcaption>Padel Concept · Montage · Herstellerreferenz</figcaption></figure>
      <figure class="g-wide reveal"><img src="/media/courts/halle.jpg" alt="Polycarbonat-Halle mit zwei Courts, Luftansicht" loading="lazy"><figcaption>Hallensystem · Polycarbonat</figcaption></figure>
    </div>
  </div>
</section>

<section class="band grid-bg" id="c-faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zu <span class="hl">Padel-Courts.</span></h2>
    <div class="faq-list">
<?php foreach ($courtsFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Let's build <span class="kw">your court.</span></h2>
    <p class="lead" style="margin:18px auto 0">Gemeinsam entwickeln wir eine Lösung, die funktional überzeugt und deine Anlage klar und unverwechselbar positioniert. Sichere dir jetzt dein unverbindliches Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Padelcourt']; $tcFormButton = 'Beratungsgespräch anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
