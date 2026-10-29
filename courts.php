<?php
require __DIR__ . '/inc/tc/layout.php';
$courts = [
    ['Standard-Court', 'Die klassische, wirtschaftliche Padel-Court-Lösung mit zusätzlichen Streben zwischen den Glaselementen: stabil, robust und mit gutem Preis-Leistungs-Verhältnis.', '/media/courts/standard.jpg'],
    ['Panorama-Court', 'Padel-Court mit deutlich weniger sichtbaren Streben, größeren Glasflächen und offener Anmutung für bessere Sicht und hochwertigen Gesamteindruck.', '/media/courts/panorama.jpg'],
    ['Full-Panorama-Court', 'Padel-Court mit nahezu durchgehenden Glasflächen und minimaler Stahlstruktur: repräsentativer Show-Court, vor allem für Indoor-Clubs.', '/media/courts/full.jpg'],
];
$courtProducts = array_map(
    fn($c) => tc_schema_product($c[0], $c[1], ['category' => 'Padel-Court', 'image' => $c[2], 'path' => '/courts', 'extra' => ['manufacturer' => ['@id' => TC_ORG_ID]]]),
    $courts
);
tc_page_start([
    'path' => '/courts',
    'title' => 'Padel-Courts & Hallen · Hersteller, Varianten, Preise · THE COURT',
    'description' => 'Standard, Panorama oder Full-Panorama: Padel-Courts von Padel Factory, 100% Padel, Padel Galis und mehr. Fundamente, Hallensysteme und herstellerneutrale Beratung.',
    'breadcrumb' => ['Courts' => '/courts'],
    'page_type' => 'CollectionPage',
    'schema' => [tc_schema_item_list('Padel-Court-Systeme', $courtProducts)],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Courts</p>
      <p class="label" style="color:var(--white)" data-type>Courts · Hallen · Fundamente</p>
      <h1>Dein Court.<br>Unsere <span class="kw">Expertise.</span></h1>
      <p class="lead">Wir arbeiten mit international etablierten Court-Herstellern. Gemeinsam mit dir prüfen wir Standort, Budget und Nutzung und empfehlen den Court, der technisch, wirtschaftlich und qualitativ passt.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="/#kontakt">Court anfragen</a><a class="btn ghost" href="#c-systeme">Court-Systeme ansehen</a></div>
    </div>
    <div class="courtfig" aria-hidden="true">
      <svg viewBox="-34 -24 268 448" id="courtTop">
        <rect class="turf" x="0" y="0" width="200" height="400" fill="#1F5C58"/>
        <path class="cl" pathLength="1" d="M0 0H200V400H0Z" style="animation-delay:.1s"/>
        <path class="cl" pathLength="1" d="M0 61H200M0 339H200" style="animation-delay:.6s"/>
        <path class="cl" pathLength="1" d="M100 61V339" style="animation-delay:.9s"/>
        <path class="cl" pathLength="1" d="M-6 200H206" style="animation-delay:1.1s;stroke-width:4"/>
        <path class="cl glass" pathLength="1" d="M0 80V0H200V80M0 320V400H200V320" style="animation-delay:.3s"/>
        <path class="cl mesh" pathLength="1" d="M0 80V320M200 80V320"/>
        <path class="ballpath" d="M48 372 Q120 250 150 132 Q160 96 130 40"/>
        <circle r="5" fill="#CCFF00" id="ball"><animateMotion dur="2.6s" repeatCount="indefinite" path="M48 372 Q120 250 150 132 Q160 96 130 40"/></circle>
        <text class="dims" x="100" y="-10" text-anchor="middle">10 M</text>
        <text class="dims" x="-14" y="200" text-anchor="middle" transform="rotate(-90 -14 200)">20 M</text>
        <text class="dims" x="214" y="44" text-anchor="start" transform="rotate(90 214 44)">GLAS</text>
        <text class="dims" x="214" y="186" text-anchor="start" transform="rotate(90 214 186)">GITTER</text>
      </svg>
    </div>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b data-count="5">5</b><span>Court-Hersteller</span></div>
      <div><b data-count="15">15</b><span>Jahre Garantie</span></div>
      <div><b data-count="3">3</b><span>Court-Varianten</span></div>
      <div><b>27 T€</b><span>ab, pro Court netto</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="c-systeme">
  <div class="inner">
    <p class="label">Court-Systeme</p>
    <h2 class="reveal">Drei Varianten. Eine <span class="hl">Entscheidung.</span></h2>
    <p class="lead">Die Varianten unterscheiden sich in Optik, Transparenz und Konstruktion von Glas und Stahl. Jedes Modell gibt es als Double- und als Single-Court. Die Wahl ist auch eine strategische Positionierung deiner Anlage.</p>
    <div class="cards c3">
      <article class="card variant reveal"><figure class="vimg"><img src="/media/courts/standard.jpg" alt="Standard-Court Rendering" loading="lazy"></figure><div class="elev"><svg viewBox="0 0 260 100" data-var="std"></svg></div><div class="k">Einstieg</div><h3>Standard</h3><p>Die klassische, wirtschaftliche Lösung. Zusätzliche Streben zwischen den Glaselementen machen die Konstruktion besonders stabil: ideal bei Fokus auf Preis-Leistung und Robustheit.</p><span class="tier">Preis-Leistung</span></article>
      <article class="card variant reveal"><figure class="vimg"><img src="/media/courts/panorama.jpg" alt="Panorama-Court Rendering" loading="lazy"></figure><div class="elev"><svg viewBox="0 0 260 100" data-var="pan"></svg></div><div class="k">Premium</div><h3>Panorama</h3><p>Deutlich weniger sichtbare Streben, größere Glasflächen und eine offenere Anmutung. Bessere Sicht für Zuschauer und ein hochwertiger Gesamteindruck.</p><span class="tier">Design &amp; Offenheit</span></article>
      <article class="card variant reveal"><figure class="vimg"><img src="/media/courts/full.jpg" alt="Full-Panorama-Court Rendering" loading="lazy"></figure><div class="elev"><svg viewBox="0 0 260 100" data-var="full"></svg></div><div class="k">Topklasse</div><h3>Full-Panorama</h3><p>Nahezu durchgehende Glasflächen und eine minimale Stahlstruktur. Repräsentativ, mit klarem Show-Court-Charakter, vor allem für Indoor-Clubs und TV-Übertragungen.</p><span class="tier">Show-Court · Indoor</span></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="c-favoriten">
  <div class="inner">
    <p class="label">Unsere Favoriten</p>
    <h2 class="reveal">Outdoor und Indoor. Je ein <span class="kw">Favorit.</span></h2>
    <p class="lead">Wir beraten herstellerneutral. Aus vielen gebauten Projekten haben sich trotzdem zwei klare Favoriten herauskristallisiert.</p>
    <div class="favs">
      <article class="fav reveal"><figure><img src="/media/courts/pf_ortigia.jpg" alt="Padel Factory Panorama-Court am Meer, Ortigia, Sizilien" loading="lazy"></figure><div class="favbody"><div class="k">Favorit Outdoor</div><h3>Padel Factory</h3><p>Feuerverzinkter und zusätzlich pulverbeschichteter Stahl, verstärkte Statik für Wind- und Schneelasten und 15 Jahre Garantie auf die Konstruktion. Gemacht für Wetter, Jahr für Jahr.</p></div></article>
      <article class="fav reveal"><figure><img src="/media/courts/cp_indoor.jpg" alt="Padelhalle mit mehreren Courts von 100% Padel" loading="lazy"></figure><div class="favbody"><div class="k">Favorit Indoor</div><h3>100% Padel</h3><p>Turnierausrüster der Premier Padel Tour, Mondo-Supercourt-Rasen und ein fest stationiertes Montageteam in Deutschland. Schlüsselfertige Hallen-Courts mit Profi-Charakter.</p></div></article>
    </div>
  </div>
</section>

<section class="band" id="c-hersteller">
  <div class="inner">
    <p class="label">Court-Partner</p>
    <h2 class="reveal">Fünf Hersteller. <span class="hl">Ein</span> Ansprechpartner.</h2>
    <p class="lead">Jeder Hersteller hat eigene Stärken. Wir kennen alle aus der Praxis und vergleichen für dich Qualität, Lieferzeit, Gewährleistung und Preis.</p>
    <div class="makers">
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="padelfactory" data-h="44"></div></div><div class="origin">Italien · 3B Padel</div><p>Feuerverzinkt und zusätzlich pulverbeschichtet, verstärkte Konstruktionen für anspruchsvolle Statik. Courts und Hallensystem aus einer Hand.</p><div class="models-list">Smash · Wing · Premier Extreme</div><div class="facts"><span>15 J. Gewährleistung</span><span>Mobile Plattform</span><span>Hallensystem</span></div></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="padelgalis" data-h="50"></div></div><div class="origin">Spanien · The Player's Court</div><p>Offizieller Court-Partner der Premier Padel Tour und der Federación Española de Pádel. Hohe Individualisierung bei LED, Kunstrasen, Glas und Stahl.</p><div class="models-list">Mundial 90/160 · M360 · Atlas · Wilson 90/160</div><div class="galis"><div><b>20+</b><span>Jahre</span></div><div><b>15.000</b><span>m² Fertigung</span></div><div><b>1.000</b><span>Courts p. a.</span></div><div><b>85</b><span>Länder</span></div><div><b>100+</b><span>Profiturniere</span></div></div></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="padelconcept" data-h="54"></div></div><div class="origin">Lettland · Riga</div><p>Von einem deutschen Unternehmer geführt. Vorrätige Courts und Ersatzteile für kurze Lieferzeiten, eigene Montageteams, Beratung auf Deutsch. Direct from factory to your court.</p><div class="models-list">Standard Club · Panorama · Full Panorama</div><div class="facts"><span>Windlast 144 km/h</span><span>Mondo · Edelgrass</span><span>Schnelle Lieferung</span></div></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="100padel" data-h="54"></div></div><div class="origin">Frankreich · Fabrik in Valencia</div><p>Familienunternehmen unter Leitung von Padel-Profi Jérémy Scatena. Ausrüster mehrerer Premier-Padel-Turniere, fest stationiertes Montageteam in Deutschland, schlüsselfertig von der Bodenplatte bis zur Montage.</p><div class="models-list">Klassisch · Panorama · Full Panorama</div><div class="facts"><span>Mondo Supercourt</span><span>Montage in DE</span></div></article>
      <article class="maker reveal"><div class="logo"><div class="m" data-logo="mejorset" data-h="50"></div></div><div class="origin">Spanien · Premium Padel Courts</div><p>Premium-Courts aus Spanien für Clubs, die Wert auf Design und Turnierniveau legen. Wir binden MejorSet ein, wenn das Projekt es verlangt.</p><div class="facts"><span>Premium</span><span>Turnierniveau</span></div></article>
      <article class="maker dk reveal" style="background:var(--petrol);color:var(--white);border-color:var(--petrol)"><div class="origin" style="color:var(--petrol-200);margin-top:0">Neutral beraten</div><h3 style="font-size:32px;margin-top:10px;color:var(--yellow)">Der passende Court für dein Projekt</h3><p style="color:var(--petrol-200)">Wir sind an keinen Hersteller gebunden. Du bekommst einen Vergleich auf Basis deines Standorts, deines Budgets und deines Nutzungskonzepts.</p><a class="btn" href="/#kontakt" style="margin-top:20px">Vergleich anfragen</a></article>
    </div>
  </div>
</section>

<section class="band grid-bg" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label">Individuelle Gestaltung</p>
    <h2 class="reveal">Dein Court ist Teil deiner <span class="hl">Marke.</span></h2>
    <div class="turfwrap">
      <div class="turfdemo">
        <svg viewBox="-10 -10 220 420" aria-label="Court in gewählter Kunstrasenfarbe" role="img"><rect class="turf" id="turfRect" x="0" y="0" width="200" height="400" fill="#1D4E89"/><path d="M0 0H200V400H0Z M0 61H200 M0 339H200 M100 61V339" fill="none" stroke="#fff" stroke-width="2"/><path d="M-6 200H206" stroke="#fff" stroke-width="4"/><path d="M0 80V0H200V80M0 320V400H200V320" fill="none" stroke="#CCFF00" stroke-width="5"/></svg>
        <div class="swatches" role="group" aria-label="Kunstrasenfarbe">
          <button class="sw" type="button" data-c="#1D4E89" aria-pressed="true"><i style="background:#1D4E89"></i>Blau</button>
          <button class="sw" type="button" data-c="#2E7D4F" aria-pressed="false"><i style="background:#2E7D4F"></i>Grün</button>
          <button class="sw" type="button" data-c="#A8432E" aria-pressed="false"><i style="background:#A8432E"></i>Rot</button>
          <button class="sw" type="button" data-c="#1F5C58" aria-pressed="false"><i style="background:#1F5C58"></i>Petrol</button>
        </div>
      </div>
      <div class="cards c3" style="margin-top:0;grid-template-columns:1fr">
        <article class="card"><div class="k">Kunstrasen</div><h3>Fibrilliert · Monofil · Supercourt XN</h3><p>Fibrilliert ist der bewährte Allrounder, Monofil hält intensiver Nutzung stand, Supercourt XN ist der sandfreie Profi-Rasen von Premier Padel. Farben: Blau, Grün, Rot, auch kombiniert mit den Auslaufzonen.</p></article>
        <article class="card"><div class="k">Branding</div><h3>Logos, Glas, Sponsoren</h3><p>Logos im Stahl, individualisierte Glasflächen und sichtbare Sponsoren machen den Court zur Präsentationsfläche mit Wiedererkennungswert.</p></article>
        <article class="card"><div class="k">Bauliche Anpassung</div><h3>Türen, Zugänge, Licht</h3><p>Zusätzliche Türen, spezielle Zugänge und abgestimmte Beleuchtung. Entscheidend ist nicht, was technisch möglich ist, sondern was strategisch sinnvoll ist.</p></article>
      </div>
    </div>
  </div>
</section>

<section class="band" id="c-fundament">
  <div class="inner">
    <p class="label">Fundament</p>
    <h2 class="reveal">Das richtige <span class="hl">Fundament.</span></h2>
    <p class="lead">Feste Betonplatte oder mobile, rückbaubare Plattform: Die Wahl hängt vom Standort und von der Laufzeit deines Mietvertrags ab. Beide Varianten liegen preislich in einem ähnlichen Rahmen.</p>
    <div class="vs">
      <article class="card reveal"><figure class="cimg"><img src="/media/courts/cp_outdoor1.jpg" alt="Court auf festem Fundament im Bau" loading="lazy"></figure><h3>Festes Fundament <small>Langfristiger Standort</small></h3><p>Dauerhaft gegossene Betonplatte mit Streifenfundament (Standard 40 × 80 cm, angepasst an den Boden, Tiefgründung unter Frostschutztiefe). Maximale Standfestigkeit, ausgelegt auf viele Jahre Betrieb. Spielfläche aus Drainbeton, Sickerasphalt oder elastischer Tragschicht.</p></article>
      <article class="card reveal"><figure class="cimg"><img src="/media/courts/pf_wpc.jpg" alt="Padel Factory Wing Court auf mobiler WPC-Plattform" loading="lazy"></figure><h3>Mobile Plattform <small>Befristeter Standort</small></h3><p>Modulare Unterkonstruktion ohne Betonfundament. Rückbaubar und versetzbar, ideal bei kürzeren Mietverträgen und Zwischennutzung. Mobile Fundamente und Courts lassen sich oft über Leasing finanzieren. Aktuell nicht förderfähig.</p></article>
    </div>
    <div class="bigfig">
      <div><span>Richtwert Fundament</span><b>ca. 35.000 €</b><p>je nach Standort, Boden und baulichen Anforderungen, für beide Varianten.</p></div>
      <div><span>Elastische Tragschicht</span><b>+2.000–5.000 €</b><p>pro Court. Gummi-Split-Mischung, z. B. von Polytan: komplett eben, gelenkschonend und wasserdurchlässig.</p></div>
    </div>
    <div class="tablewrap">
      <table class="plat">
        <thead><tr><th>Mobile Plattform</th><th>Gewährleistung</th><th>Belag der Plattform</th></tr></thead>
        <tbody>
          <tr><td>Padel Factory</td><td>15 Jahre</td><td>Robuste Konstruktion mit WPC-Paneelen</td></tr>
          <tr><td>Padel Galis / Flexipadel</td><td>5 Jahre</td><td>Keramikplatten</td></tr>
          <tr><td>Padel Concept</td><td>2 Jahre</td><td>Keramikplatten</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="c-hallen">
  <div class="inner">
    <p class="label">Hallensysteme</p>
    <h2 class="reveal">Moderne <span class="kw">Hallen.</span></h2>
    <p class="lead">Wir setzen auf das Gesamtsystem von Padel Factory: Courts und Halle technisch sauber abgestimmt. Für andere Anforderungen arbeiten wir mit weiteren Hallenbauern wie Haltec, DS Stahl und Okatent.</p>
    <div class="hallimgs">
      <figure class="reveal"><img src="/media/courts/dshs.jpg" alt="Hallenkonzept mit Glasfront, Rendering" loading="lazy"><figcaption>Hallenkonzept · Rendering</figcaption></figure>
      <figure class="reveal"><img src="/media/courts/mobil.jpg" alt="Court auf mobiler Plattform in der Halle, Rendering" loading="lazy"><figcaption>Indoor-Court auf mobiler Plattform</figcaption></figure>
    </div>
    <div class="halls">
      <article class="card reveal"><div class="k">Einstieg</div><h3>Polycarbonat</h3><p>8 mm Exolon, offen oder vollständig geschlossen. Beliebig erweiterbar.</p><ul><li><b>1 Court</b> 12 × 21 m · 252 m² · 9,42 m hoch</li><li><b>2 Courts</b> 25 × 26 m · 666 m²</li><li><b>3 Courts</b> 26 × 36 m · 932 m²</li><li><b>4 Courts</b> 26 × 50 m · 1.290 m²</li></ul></article>
      <article class="card reveal"><div class="k">Premium</div><h3>ThermoRoof</h3><p>+40 mm Isolierung, beheizbar und optimal für den Ganzjahresbetrieb.</p><ul><li><b>1 Court</b> 13 × 27 m · 354 m² · 9,42 m</li><li><b>4 Courts</b> 28 × 51 m · 1.412 m² · 9,42 m</li><li>Beliebig erweiterbar</li></ul></article>
      <article class="card reveal" style="border-top-color:var(--yellow)"><div class="k">Kennzahlen</div><h3>ab 250 €/m²</h3><p>netto, Breite, Länge und Höhe flexibel.</p><ul><li>Hohe Tragfähigkeit für Schnee- und Windlasten</li><li>Verschiebbare Seitenwände oder Fenster</li><li>PV-Anlage auf dem Dach integrierbar</li><li>Seitliche Schiebepaneele zur Belüftung</li></ul></article>
    </div>
  </div>
</section>

<section class="band" id="c-galerie">
  <div class="inner">
    <p class="label">Aus der Praxis</p>
    <h2 class="reveal">Courts, die <span class="hl">gespielt</span> werden.</h2>
    <div class="gallery">
      <figure class="g-wide reveal"><img src="/media/courts/pf_milano.jpg" alt="Padel Factory Premier Court am Castello Sforzesco, Mailand" loading="lazy"><figcaption>Padel Factory · Premier · Mailand</figcaption></figure>
      <figure class="reveal"><img src="/media/courts/pf_montaner.jpg" alt="Padel Factory Wing Court, Frankreich" loading="lazy"><figcaption>Padel Factory · Wing · Frankreich</figcaption></figure>
      <figure class="reveal"><img src="/media/courts/pc_lv.jpg" alt="Panorama-Court von Padel Concept im Aufbau" loading="lazy"><figcaption>Padel Concept · Montage</figcaption></figure>
      <figure class="g-wide reveal"><img src="/media/courts/halle.jpg" alt="Polycarbonat-Halle mit zwei Courts, Luftansicht" loading="lazy"><figcaption>Hallensystem · Polycarbonat</figcaption></figure>
    </div>
  </div>
</section>

<section class="band dark grid-bg">
  <div class="inner cta-band">
    <h2>Let's build <span class="kw">your court.</span></h2>
    <a class="btn" href="/#kontakt">Beratungsgespräch anfragen</a>
  </div>
</section>
<?php tc_page_end();
