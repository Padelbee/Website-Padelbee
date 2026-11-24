<?php
require __DIR__ . '/inc/tc/layout.php';
// Startseite nach Martins neuestem Claude-Entwurf (the-court.com, Stand 23.11.2026),
// ergänzt um Firmenpräsentation 2026 (F2, F4, F5, F6, F10). Kontakt-Abschluss unverändert (abgenommen).

// Leistungen laut Entwurf: [Name, Kurztext, Ziel, Linktext, Schema-Text|null, Schema-Pfad]
$svc = [
    ['Beratung', 'Erstscreening, Standort- und Marktanalyse, Go/No-Go-Empfehlung.', '/standortanalyse', 'Zur Standortanalyse', 'Passt Padel zu deinem Standort? Wir prüfen Fläche, Zielgruppe und Potenzial.'],
    ['Finanzierung', 'Bankfähiger Business Case, Leasing, Fördermittel und Investoren.', '/betreiberkonzept', 'Zur Business-Planung', 'Kauf, Leasing oder Joint Venture, wir finden das Modell, das zu dir passt.'],
    ['Planung &amp; Architektur', 'Konzept, 3D-Visualisierung, Bauantrag mit spezialisierten Architekturbüros.', '/padel-court-bauen', 'Zur Planung', 'Courts, Halle, Licht, Wege, Sanitär. Alles abgestimmt, alles genehmigungsfähig.'],
    ['Bau', 'Courts, Hallen und Fundamente schlüsselfertig, mit Ausschreibung und Bauleitung.', '/courts', 'Zu den Courts', 'Mit über 30 Partnern aus Planung, Court- und Hallenbau setzen wir um.'],
    ['Digitalisierung', 'Buchungssystem, Zugangskontrolle, Lichtsteuerung und Automaten.', '/automatenloesungen', 'Zu den Automaten', 'Buchung, Zugang, Licht und Automaten greifen ineinander.'],
    ['Betrieb', 'Betreiberkonzept, Marketing, Community-Aufbau und Sponsoring.', '/betreiberkonzept', 'Zum Betreiberkonzept', 'Auf Wunsch unterstützen wir auch nach der Eröffnung.'],
    ['Franchise', 'Ein erprobtes Clubkonzept unter der Marke The Court, an vielen Standorten.', '#kontakt', 'Franchise anfragen', null],
];
$svcNodes = [];
foreach ($svc as $s) {
    if ($s[4] === null) {
        continue;
    }
    $name = html_entity_decode($s[0], ENT_QUOTES, 'UTF-8');
    $svcNodes[] = tc_schema_service($name, $s[4], $s[2], ['extra' => ['@id' => tc_url('/') . '#service-' . strtolower(preg_replace('/[^a-z]/i', '', explode(' ', $name)[0]))]]);
}
$faq = [
    ['frage' => 'Was macht Padelbee?', 'antwort' => 'Padelbee ist ein Projektentwickler für Padel-, Pickleball- und Tennisanlagen in Deutschland, Österreich und der Schweiz. Wir begleiten dich von Beratung und Finanzierung über Planung und Bau bis zu Digitalisierung und Betrieb. Du hast einen Ansprechpartner für jede Phase. Für dein Projekt wählen wir aus über 30 Partnern aus Planung, Court- und Hallenbau, Digitalisierung und Equipment die passenden aus, mehr dazu unter <a href="/partner">Partner</a>.'],
    ['frage' => 'Was kostet eine Padelanlage?', 'antwort' => 'Für die erste Kalkulation brauchst du drei Zahlen. Ein Padel-Court kostet ab 27.000 € netto, das Fundament als Richtwert rund 35.000 € und eine Halle ab 280 €/m² netto. Dazu kommen Planung, Genehmigung, Licht und Digitalisierung. Den genauen Betrag bestimmen Standort, Variante und Ausstattung. Mehr dazu findest du bei den <a href="/courts">Courts</a> und bei der <a href="/halle">Padel-Halle</a>, den Ablauf unter <a href="/padel-court-bauen">Padel Court bauen</a>.'],
    ['frage' => 'Für wen baut ihr Padelanlagen?', 'antwort' => 'Wir bauen für Vereine, Hotels, Gewerbe und die öffentliche Hand. Das reicht vom Tennisverein, der ungenutzte Plätze in Padel-Courts umwandelt, bis zum kommerziellen Betreiber mit eigener Halle. Neben Padel planen wir auch Anlagen für Pickleball und Tennis. Unser Angebot richtet sich ausschließlich an Unternehmen, Vereine und die öffentliche Hand, nicht an Privatpersonen.'],
    ['frage' => 'Wie läuft ein Padel-Projekt ab?', 'antwort' => 'Ein Padel-Projekt läuft bei uns in sieben Etappen von Beratung und Finanzierung über Planung und Architektur, Bau und Digitalisierung bis zu Betrieb und auf Wunsch Franchise. Am Anfang prüfen wir Fläche, Zielgruppe und Potenzial deines Standorts. Danach klären wir Finanzierung und Genehmigung, bevor gebaut wird. Was in jeder Phase passiert, liest du unter <a href="/padel-court-bauen">Padel Court bauen</a>.'],
    ['frage' => 'In welchen Ländern seid ihr aktiv?', 'antwort' => 'Wir sind in Deutschland, Österreich und der Schweiz aktiv. Unsere 50 Projekte reichen von Garbsen bis Graz und werden aus Unterföhring bei München gesteuert. Dazu zählen Anlagen, die wir beraten, geplant oder gebaut haben, vom Tennisverein bis zum kommerziellen Betreiber. Alle Standorte siehst du auf der <a href="#projekte">Projektkarte</a> und in unseren <a href="/referenzen">Referenzen</a>.'],
    ['frage' => 'Kann mein Tennisverein Padel ohne eigene Investition bekommen?', 'antwort' => 'Ja, über das Joint Venture mit dem Motions Racket Club. Dein Verein stellt die Fläche und bekommt dafür Pacht. Bau, Finanzierung und Betrieb übernimmt das Joint Venture, für den Verein liegt die Investition bei 0 €. Deine Mitglieder spielen mit 30 % Rabatt. Wie das Modell für deinen Verein funktioniert, erklären wir dir im Erstgespräch.'],
    ['frage' => 'Wie starte ich mein Projekt?', 'antwort' => 'Du startest mit einem kostenlosen Erstgespräch. Darin sprechen wir über deinen Standort, dein Budget und dein Nutzungskonzept und klären, ob Padel dort passt. Danach rechnen wir deine Anlage durch und zeigen dir, welche Courts, welches Fundament und welche Finanzierung infrage kommen. Schreib uns einfach über das <a href="#kontakt">Kontaktformular</a> oder per E-Mail.'],
];
tc_page_start([
    'path' => '/',
    'title' => 'Padelanlage bauen von Planung bis Betrieb · Padelbee',
    'description' => 'Padelbee plant und baut Padel-, Pickleball- und Tennisanlagen in Deutschland, Österreich und der Schweiz. Beratung, Planung, Bau und Betrieb aus einer Hand.',
    'extra_head' => '<link rel="stylesheet" href="/media/tc/p-start.css?v=' . TC_ASSET_VERSION . '">',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => array_merge($svcNodes, [tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $faq), '/')]),
]);
?>
<section class="band dark grid-bg hero ht">
  <div class="inner">
    <div>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>&gt; Padelbee · Padelanlagen · Projektentwicklung</span>Wir bauen<br><span class="cycle" id="cycle">Padel.</span></h1>
      <p class="lead">Padelbee ist Projektentwickler für Padel-, Pickleball- und Tennisanlagen in Deutschland, Österreich und der Schweiz. Du bekommst Beratung, Finanzierung, Planung, Bau und Betrieb aus einer Hand.</p>
      <div class="ctas"><a class="btn" href="#kontakt">Projekt anfragen</a><a class="btn ghost" href="/referenzen">50 Projekte ansehen</a></div>
    </div>
  </div>
</section>
<section class="band dark grid-bg v-intro v-zoom" aria-label="Film: Die 360°-Plattform">
  <div class="inner">
    <figure>
      <video id="introVid" autoplay muted loop playsinline preload="metadata" poster="/media/intro.jpg" src="/media/intro.mp4" aria-label="Padelbee Film: Die 360°-Plattform"></video>
      <button type="button" class="snd" id="introSnd" aria-pressed="false" aria-label="Ton einschalten" title="Ton einschalten"><svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5 6 9H3v6h3l5 4V5z" fill="currentColor"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg></button>
    </figure>
  </div>
</section>
<script>(()=>{const v=document.getElementById('introVid'),b=document.getElementById('introSnd');if(!v||!b)return;const OFF='<svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5 6 9H3v6h3l5 4V5z" fill="currentColor"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>',ON='<svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5 6 9H3v6h3l5 4V5z" fill="currentColor"/><path d="M15.5 8.5a5 5 0 0 1 0 7"/><path d="M19 5a10 10 0 0 1 0 14"/></svg>';
if(matchMedia('(prefers-reduced-motion: reduce)').matches){v.removeAttribute('autoplay');v.pause();v.controls=true;}
b.addEventListener('click',()=>{v.muted=!v.muted;if(!v.muted)v.play();b.innerHTML=v.muted?OFF:ON;b.setAttribute('aria-label',v.muted?'Ton einschalten':'Ton ausschalten');b.title=b.getAttribute('aria-label');b.setAttribute('aria-pressed',String(!v.muted));});})();</script>
<script>(()=>{const s=document.querySelector('.v-zoom'),f=s&&s.querySelector('figure');if(!f)return;if(matchMedia('(prefers-reduced-motion: reduce)').matches){f.style.setProperty('--z',1);return;}
let t=0;const u=()=>{t=0;const r=s.getBoundingClientRect(),vh=innerHeight;const p=Math.min(1,Math.max(0,(vh-r.top)/(vh*.85)));f.style.setProperty('--z',p.toFixed(3));};
const q=()=>{if(!t)t=requestAnimationFrame(u);};addEventListener('scroll',q,{passive:true});addEventListener('resize',q);u();})();</script>
<section class="band dark grid-bg h-rest">
  <div class="inner">
    <p class="label" data-type>Offizieller Padel-Infrastrukturpartner des Bayerischen Tennis-Verbands</p>
    <div class="hero-media">
      <figure><picture><source type="image/webp" srcset="/media/home/hero_return-480.webp 480w, /media/home/hero_return.webp 668w" sizes="(max-width: 860px) 100vw, 50vw"><img fetchpriority="high" width="668" height="1000" src="/media/home/hero_return.jpg" alt="Spieler beim Return am Netz, Ball im Fokus"></picture></figure>
      <figure><picture><source type="image/webp" srcset="/media/home/hero_netz-480.webp 480w, /media/home/hero_netz.webp 666w" sizes="(max-width: 860px) 100vw, 50vw"><img loading="lazy" width="666" height="1000" src="/media/home/hero_netz.jpg" alt="Spieler springt am Netz, Aufnahme von oben"></picture></figure>
      <figure><picture><source type="image/webp" srcset="/media/home/hero_ball-480.webp 480w, /media/home/hero_ball.webp 666w" sizes="(max-width: 860px) 100vw, 50vw"><img loading="lazy" width="666" height="1000" src="/media/home/hero_ball.jpg" alt="Gelber Ball vor dunklem Court, Blick über die Schulter des Spielers"></picture></figure>
      <figure><picture><source type="image/webp" srcset="/media/home/hero_halle-480.webp 480w, /media/home/hero_halle.webp 666w" sizes="(max-width: 860px) 100vw, 50vw"><img loading="lazy" width="666" height="1000" src="/media/home/hero_halle.jpg" alt="Bälle auf dem Hallendach über den Courts"></picture></figure>
      <div class="ring" aria-hidden="true">
        <svg viewBox="0 0 400 400">
          <g class="rot"><circle cx="200" cy="200" r="168" fill="none" stroke="rgba(255,255,255,.22)" stroke-width="1.5" stroke-dasharray="3 11"/></g>
          <circle class="draw" cx="200" cy="200" r="188" fill="none" stroke="#CCFF00" stroke-width="4" transform="rotate(-90 200 200)"/>
          <g class="rot" style="animation-duration:9s;animation-direction:reverse"><circle cx="200" cy="12" r="7" fill="#CCFF00"/></g>
        </svg>
        <div class="num"><b>360°</b><small>DIE RACKET-SPORT-PLATTFORM</small></div>
      </div>
    </div>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="stats">
      <div><b data-count="50">50</b><span>Projekte</span></div>
      <div><b data-count="3">3</b><span>Länder</span></div>
      <div><b data-count="14" data-pre="+">+14</b><span>Jahre Padel-Erfahrung im Team</span></div>
      <div><b data-count="30" data-plus>30+</b><span>Partner</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="leistungen">
  <div class="inner">
    <p class="label" data-type>Leistungen</p>
    <h2 class="reveal">Die <span class="hl">360°</span>-Plattform.</h2>
    <p class="lead">Ein Ansprechpartner für jede Phase, von der <a href="/standortanalyse">Standort- und Potenzialanalyse</a> über Planung und <a href="/padel-court-bauen">Bau</a> bis zum nachhaltigen <a href="/betreiberkonzept">Betreiberkonzept</a>.</p>
    <div class="cards c4" id="leistungen-karten">
<?php foreach ($svc as $s): ?>
      <article class="card svc reveal"><div class="k">Leistung</div><h3 data-type><?= $s[0] ?></h3><p><?= $s[1] ?></p><a class="svc-more" href="<?= tc_h($s[2]) ?>"><?= tc_h($s[3]) ?></a></article>
<?php endforeach; ?>
      <article class="card svc dk reveal"><div class="k">Plattform</div><h3 data-type>360°</h3><p>Alles aus einer Hand, von der Idee bis zum laufenden Betrieb.</p><a class="svc-more" href="#kontakt">Projekt anfragen</a></article>
    </div>
    <div class="claim3 reveal" role="list" aria-label="100 % kompetent, 100 % flexibel, 100 % kundenorientiert"><div role="listitem"><b>100&nbsp;%</b><span>kompetent</span></div><div role="listitem"><b>100&nbsp;%</b><span>flexibel</span></div><div role="listitem"><b>100&nbsp;%</b><span>kunden&shy;orientiert</span></div></div>
    <div class="teaser"><div><h3 data-type>Courts, Hallen &amp; <span>Fundamente.</span></h3><p>Fünf Hersteller, drei Court-Varianten, unsere Favoriten für Outdoor und Indoor. Dazu <a href="/halle">Hallen</a> ab 280 €/m² netto.</p></div><a class="btn" href="/courts">Zu den Courts</a>
      <div class="vtiles">
        <a class="vt" href="/standard-court"><span class="k">Einstieg</span><b>Standard Court</b><span class="s">Preis-Leistung</span></a>
        <a class="vt" href="/panorama-court"><span class="k">Premium</span><b>Panorama Court</b><span class="s">Design &amp; Offenheit</span></a>
        <a class="vt" href="/courts#c-systeme"><span class="k">Topklasse</span><b>Full Panorama Court</b><span class="s">Show-Court · Indoor</span></a>
      </div>
    </div>
    <div class="teaser"><div><h3 data-type>Verleih- &amp; Verkaufs<span>automaten.</span></h3><p>Schlägerverleih, Bälle, Snacks und Getränke rund um die Uhr, ohne Personal.</p></div><a class="btn" href="/automatenloesungen">Zu den Automaten</a></div>
  </div>
</section>

<section class="band dark grid-bg" id="spektrum">
  <div class="inner">
    <p class="label" data-type>Leistungsspektrum</p>
    <h2 class="reveal">Das Padelbee&nbsp;<span class="kw">Spektrum.</span></h2>
    <p class="lead">Wir entwickeln Padel- und Racketsportprojekte ganzheitlich, von der Machbarkeit bis zur Fertigstellung, und begleiten Betreiber auch danach.</p>
    <div class="cards c3">
      <article class="card svc reveal"><div class="k">01 · Padel &amp; Racketsports</div><h3 data-type>Projektentwicklung</h3><p>Netzwerk für ganzheitliche Planung und Entwicklung von Padel- und Racketsportprojekten, von der Machbarkeit bis zur Fertigstellung.</p><a class="svc-more" href="/standortanalyse">Zur Standortanalyse</a></article>
      <article class="card svc reveal"><div class="k">02 · Projektrealisierung</div><h3 data-type>Partnernetzwerk</h3><p>Erprobtes Netzwerk aus Baufirmen, Lieferanten und Spezialisten für eine sichere und termingerechte Umsetzung.</p><a class="svc-more" href="/partner">Zu den Partnern</a></article>
      <article class="card svc reveal"><div class="k">03 · Beratung · Courts · Hallen · Digital</div><h3 data-type>360°-Plattform</h3><p>Vollständige Ökosystem-Lösung für Strategie, Hallenbau, Courtausstattung, Digitalisierung und Automatisierung.</p><a class="svc-more" href="/courts">Zu den Courts</a></article>
      <article class="card svc reveal"><div class="k">04 · Ausbildung &amp; Training</div><h3 data-type>Academy &amp; Coaching</h3><p>Strukturierte Trainingsprogramme, Betreiber-Coaching und Unternehmensberatung.</p><a class="svc-more" href="/betreiberkonzept#b-leistungen">Zum Betreiberkonzept</a></article>
      <article class="card svc reveal"><div class="k">05 · Management &amp; Formate</div><h3 data-type>Turnier &amp; Event</h3><p>Professionelle Planung und Durchführung von Turnieren und Events.</p><a class="svc-more" href="/betreiberkonzept#b-netzwerk">Zu den Events</a></article>
      <article class="card svc reveal"><div class="k">06 · Sport Management</div><h3 data-type>Vermarktung</h3><p>Markenaufbau, Sponsoring, Community-Wachstum und kommerzielles Management für Clubs und Betreiber.</p><a class="svc-more" href="/betreiberkonzept#b-leistungen">Zum Betreiberkonzept</a></article>
    </div>
  </div>
</section>

<section class="band grid-bg" id="phasen" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>Unsere Leistungen</p>
    <h2 class="reveal">In jeder Phase deines <span class="hl">Padel&#8209;Projekts.</span></h2>
    <p class="lead">Von der ersten Rechnung bis zum laufenden Betrieb begleiten wir dich mit sieben Leistungen. Zu jeder führt ein Link mit allen Details.</p>
    <div class="ph-grid ph-compact">
      <article class="ph reveal"><p class="label n" data-type>01</p><h3 data-type>Finanzielle Planung &amp; Business Case</h3><p>Wir erstellen einen bankfähigen Business Case und prüfen Fördermittel und Investoren.</p><ul class="chips"><li>Court ab 27.000 € netto</li><li>Fundament rund 35.000 €</li><li>Halle ab 280 €/m²</li><li>Kauf, Leasing oder Joint Venture</li></ul><a class="ph-more" href="/standortanalyse">Zur Standortanalyse</a></article>
      <article class="ph reveal"><p class="label n" data-type>02</p><h3 data-type>Planung &amp; Bau von Padel- und Sportanlagen</h3><p>Von der Standortbesichtigung bis zur Eröffnung, mit spezialisierten Architekturbüros.</p><ul class="chips"><li>GPS-Vermessung &amp; Drohne</li><li>Prüfung nach §34/§35 BauGB</li><li>3D-Visualisierung</li><li>Kostenrahmen nach DIN 276</li></ul><a class="ph-more" href="/padel-court-bauen">Zu Padel Court bauen</a></article>
      <article class="ph reveal"><p class="label n" data-type>03</p><h3 data-type>Court-Bau &amp; Ausschreibung</h3><p>Fünf Hersteller, drei Varianten. Wir vergleichen Qualität, Lieferzeit, Herstellergarantie und Preis.</p><ul class="chips"><li>Standard</li><li>Panorama</li><li>Full-Panorama</li><li>Festes Fundament oder mobile Plattform</li></ul><a class="ph-more" href="/courts">Zu den Courts</a></article>
      <article class="ph reveal"><p class="label n" data-type>04</p><h3 data-type>Betreiberkonzept &amp; Digitalisierung</h3><p>Über 20 Jahre Erfahrung im Betrieb von Sportanlagen. Buchung, Zugang, Licht und Automaten greifen ineinander.</p><ul class="chips"><li>Buchung mit Playtomic</li><li>Smart Access &amp; Light Control</li><li>Unterstützung nach der Eröffnung</li></ul><a class="ph-more" href="/betreiberkonzept">Zum Betreiberkonzept</a></article>
      <article class="ph reveal"><p class="label n" data-type>05</p><h3 data-type>Marketing &amp; Community-Aufbau</h3><p>Wir bauen mit dir Marke und Community auf, mit Trainingsprogrammen, Turnieren und Events.</p><ul class="chips"><li>Academy &amp; Coaching</li><li>Rafa Nadal Padel Tour 2026</li><li>Turniere &amp; Events</li></ul><a class="ph-more" href="/betreiberkonzept#b-netzwerk">Zu den Events</a></article>
      <article class="ph reveal"><p class="label n" data-type>06</p><h3 data-type>Zugang zu Sponsoren für Zusatzeinnahmen</h3><p>Logos auf Netz, Netzkante, Türen und Glasflächen machen deinen Court zur Präsentationsfläche.</p><ul class="chips"><li>Branding</li><li>Sponsoring</li><li>Zusatzeinnahmen</li></ul><a class="ph-more" href="/courts#c-marke">Zur Gestaltung</a></article>
      <article class="ph reveal"><p class="label n" data-type>07</p><h3 data-type>Automatenlösungen für Zusatzeinnahmen</h3><p>Schlägerverleih, Bälle, Snacks und Getränke rund um die Uhr, bargeldlos und ohne Personal.</p><ul class="chips"><li>Leasing ab 109 € im Monat</li><li>Mietkauf ab 104 € im Monat</li><li>Kompatibel mit vielen Buchungssystemen</li></ul><a class="ph-more" href="/automatenloesungen">Zu den Automaten</a></article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="expertise">
  <div class="inner">
    <p class="label" data-type>Know-how &amp; Kompetenzen</p>
    <h2 class="reveal">Die Padelbee&nbsp;<span class="kw">Expertise.</span></h2>
    <p class="lead">Hinter jedem Projekt steht Erfahrung aus Planung, Fundamentbau, Platzbau und Betrieb. Lern das <a href="/team">Padelbee Team</a> kennen, das sie für dein Projekt einbringt.</p>
    <div class="cards c3">
      <article class="card xp reveal"><b class="xp-n" data-count="14" data-pre="+">+14</b><h3 data-type>Jahre Padel-Erfahrung</h3><p>In Planung, Fundamentbau, Platzbau und erfolgreichem Betrieb.</p></article>
      <article class="card xp reveal"><b class="xp-n" data-count="12">12</b><h3 data-type>Padel-Courts</h3><p>Auf unserer Referenzanlage Scheck Club, eine der größten Deutschlands.</p></article>
      <article class="card xp reveal"><b class="xp-n" data-count="20" data-pre="+">+20</b><h3 data-type>Jahre Racketsports</h3><p>Erfahrung im Betrieb von Sportanlagen und Marketing für Racket Sports.</p></article>
      <article class="card xp reveal"><b class="xp-n w">mehrere</b><h3 data-type>Architekturbüros</h3><p>Spezialisierte Partner für ganz Deutschland, effizient und schnell.</p></article>
      <article class="card xp reveal"><b class="xp-n" data-count="30" data-plus>30+</b><h3 data-type>Partnernetzwerk</h3><p>Starkes Netzwerk aus Fachfirmen und Lieferanten im Bau und für den Betrieb.</p></article>
      <article class="card xp reveal"><b class="xp-n">101 %</b><h3 data-type>Engagiert</h3><p>Damit Padel an deinem Standort schnell startet und erfolgreich bleibt.</p></article>
    </div>
  </div>
</section>

<section class="band proj" id="projekte">
  <div class="inner">
    <p class="label" data-type>Projekte 2026</p>
    <h2 class="reveal">Grenzenlos <span class="hl">unterwegs.</span></h2>
    <p class="lead">50 Projekte von Garbsen bis Graz. Jeder Punkt ist eine Anlage, die wir beraten, geplant oder gebaut haben, gesteuert aus Unterföhring bei München.</p>
    <div class="wrap">
      <div class="mapbox" id="mapbox">
        <svg id="map" viewBox="0 0 1000 1100" role="img" aria-label="Karte mit 50 Projektstandorten in Deutschland und Österreich">
          <g id="countries"></g><g id="trails"></g><g id="pins"></g>
          <g id="hq"></g>
        </svg>
      </div>
      <div class="panel">
        <p class="label" data-type>Projekte</p>
        <div class="counter"><span class="hl" id="count">50</span></div>
        <div class="city" id="city">Unterföhring</div>
        <div class="sub" id="sub">Scheck Club · Headquarter</div>
        <ul class="regions" id="regions"></ul>
        <button class="btn replay" id="replay" type="button">Animation neu starten</button>
        <a class="btn" href="/referenzen" style="margin-top:12px">Referenzen ansehen</a>
      </div>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="zielgruppen">
  <div class="inner">
    <p class="label" data-type>Für wen wir bauen</p>
    <h2 class="reveal">Moderne Racketsportanlagen für <span class="kw">Padel, Pickleball &amp; Tennis.</span></h2>
    <p class="lead">Padelbee und The Court beraten, entwickeln und bauen für Vereine, Hotels, Gewerbe und die öffentliche Hand. Egal, wer du bist, wir finden das passende Konzept.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Vereine</div><h3 data-type>Tennisvereine</h3><p>Padel als zweites Standbein bringt mehr Mitglieder und mehr Auslastung.</p></article>
      <article class="card reveal"><div class="k">Vereine</div><h3 data-type>Sportvereine</h3><p>Neue Sparten mit wenig Fläche und schneller Amortisation.</p></article>
      <article class="card reveal"><div class="k">Hotellerie · Gewerbe</div><h3 data-type>Hotels &amp; kommerzielle Betreiber</h3><p>Beratung und Bau von Anlagen für Hotels, Resorts und private Betreiber.</p></article>
      <article class="card reveal"><div class="k">Golf</div><h3 data-type>Golfclubs</h3><p>Racketsport als Ergänzung für Mitglieder und Gäste.</p></article>
      <article class="card reveal"><div class="k">Öffentlich</div><h3 data-type>Kommunen</h3><p>Sportinfrastruktur für Bürgerinnen und Bürger, inklusive Fördermittel.</p></article>
      <article class="card reveal"><div class="k">Tourismus</div><h3 data-type>Tourismusverbände</h3><p>Padel und Pickleball als Attraktion für Regionen und Gäste.</p></article>
    </div>
  </div>
</section>

<section class="band" id="partner">
  <div class="inner">
    <p class="label" data-type>Partnernetzwerk</p>
    <h2 class="reveal">Stark im&nbsp;<span class="hl">Netzwerk.</span></h2>
    <p class="lead">30+ Partner aus Planung, Bau, Courtbau, Hallenbau, Digitalisierung, Equipment und Events. Für dein Projekt wählen wir die passenden aus.</p>
    <div id="pgroups"></div>
    <p style="margin-top:40px"><a class="btn" href="/partner">Alle Partner ansehen</a></p>
  </div>
</section>

<section class="band dark" id="film">
  <div class="inner">
    <p class="label" data-type>Film</p>
    <h2 class="reveal">Sehen statt&nbsp;<span class="kw">lesen.</span></h2>
    <div class="films one">
      <div class="film"><video controls muted playsinline preload="none" poster="/media/projekte.jpg" src="/media/projekte.mp4" aria-label="Film: 50 Projekte, 3 Länder"></video><h3 data-type>50 Projekte, 3 Länder</h3><p>Unsere Projekte auf der Karte · 45 s</p></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zu deiner&nbsp;<span class="hl">Padelanlage.</span></h2>
    <div class="faq-list">
<?php foreach ($faq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <div class="logos2"><img src="/media/tc/logo-padelbee.svg" alt="Padelbee"><span class="bar"></span><img src="/media/tc/logo-thecourt.svg" alt="The Court"></div>
    <h2>Ready. <span class="kw">Play.</span></h2>
    <p class="label" style="margin-top:22px" data-type>Padel · Pickleball · Tennis</p>
    <div class="people">
      <div class="person"><div class="k">Dein Projekt</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
      <div class="person"><div class="k">Allgemein</div><b>The Court GmbH</b><div class="mail"><a href="mailto:info@padelbee.de">info@padelbee.de</a></div></div>
    </div>
<?php include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
    <div class="addr">Scheck Club · Münchner Str. 15 · 85774 Unterföhring</div>
    <div class="urls">padelbee.de</div>
  </div>
</section>
<?php tc_page_end();
