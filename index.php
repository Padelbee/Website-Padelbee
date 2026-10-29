<?php
require __DIR__ . '/inc/tc/layout.php';
tc_page_start([
    'path' => '/',
    'title' => 'THE COURT by Padelbee · Padel-, Pickleball- & Tennisanlagen planen und bauen',
    'description' => 'Projektentwickler und 360°-Plattform für Padel, Pickleball und Tennis: Beratung, Finanzierung, Planung, Bau, Digitalisierung und Betrieb in Deutschland, Österreich und der Schweiz.',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
]);
?>
<section class="band dark grid-bg hero">
  <div class="inner">
    <div>
      <div class="topline"><span>Padel · Style · Culture</span></div>
      <p class="label" style="color:var(--white)" data-type>&gt; Racket Sports · Projektentwicklung</p>
      <h1>Wir bauen<br><span class="cycle" id="cycle">Padel.</span></h1>
      <p class="lead">Projektentwickler und 360°-Plattform für Padel, Pickleball und Tennis. Du bekommst alles aus einer Hand: Beratung, Finanzierung, Planung, Bau und Betrieb.</p>
      <p class="label" style="margin-top:22px">Offizieller Padel-Infrastrukturpartner des Bayerischen Tennis-Verbands</p>
      <div class="dach" data-type>Deutschland <span>·</span> Österreich <span>·</span> Schweiz</div>
      <div class="ctas"><a class="btn" href="#kontakt">Projekt anfragen</a><a class="btn ghost" href="#projekte">50 Projekte ansehen</a></div>
    </div>
    <div class="ring" aria-hidden="true">
      <svg viewBox="0 0 400 400">
        <g class="rot"><circle cx="200" cy="200" r="168" fill="none" stroke="rgba(255,255,255,.22)" stroke-width="1.5" stroke-dasharray="3 11"/></g>
        <circle class="draw" cx="200" cy="200" r="188" fill="none" stroke="#CCFF00" stroke-width="4" transform="rotate(-90 200 200)"/>
        <g class="rot" style="animation-duration:9s;animation-direction:reverse"><circle cx="200" cy="12" r="7" fill="#CCFF00"/></g>
      </svg>
      <div class="num"><b>360°</b><small>DIE RACKET-SPORT-PLATTFORM</small></div>
    </div>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="stats">
      <div><b data-count="50">50</b><span>Projekte</span></div>
      <div><b data-count="3">3</b><span>Länder</span></div>
      <div><b data-count="14" data-pre="+">+14</b><span>Jahre Padel-Erfahrung</span></div>
      <div><b data-count="30" data-plus>30+</b><span>Partner</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="leistungen">
  <div class="inner">
    <p class="label">Leistungen</p>
    <h2 class="reveal">Die <span class="hl">360°</span>-Plattform.</h2>
    <p class="lead">Ein Ansprechpartner für jede Phase. Du bekommst Beratung, Finanzierung, Planung, Bau, Digitalisierung, Betrieb und Franchise aus einer Hand.</p>
    <div class="cards c4" id="svc"></div>
    <p class="claim">100 % kompetent · 100 % flexibel · 100 % kundenorientiert</p>
    <div class="teaser"><div><h3>Courts, Hallen &amp; <span>Fundamente.</span></h3><p>Fünf Hersteller, drei Court-Varianten, unsere Favoriten für Outdoor und Indoor.</p></div><a class="btn" href="/courts">Zu den Courts</a></div>
    <div class="teaser"><div><h3>Verleih- &amp; Verkaufs<span>automaten.</span></h3><p>Schlägerverleih, Bälle, Snacks und Getränke: rund um die Uhr, ohne Personal.</p></div><a class="btn" href="/automatenloesungen">Zu den Automaten</a></div>
  </div>
</section>

<section class="band proj" id="projekte">
  <div class="inner">
    <p class="label">Projekte 2026</p>
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
        <p class="label">Projekte</p>
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
    <p class="label">Für wen wir bauen</p>
    <h2 class="reveal">Moderne Racketsportanlagen für <span class="kw">Padel, Pickleball &amp; Tennis.</span></h2>
    <p class="lead">Padelbee und The Court beraten, entwickeln und bauen für Vereine, Hotels, Gewerbe und die öffentliche Hand. Egal, wer du bist: Wir finden das passende Konzept.</p>
    <div class="cards c3" id="tg"></div>
  </div>
</section>

<section class="band" id="partner">
  <div class="inner">
    <p class="label">Partnernetzwerk</p>
    <h2 class="reveal">Stark im <span class="hl">Netzwerk.</span></h2>
    <p class="lead">30+ Partner aus Planung, Bau, Courtbau, Hallenbau, Digitalisierung, Equipment und Events. Für dein Projekt wählen wir die passenden aus.</p>
    <div id="pgroups"></div>
  </div>
</section>

<section class="band dark" id="film">
  <div class="inner">
    <p class="label">Film</p>
    <h2 class="reveal">Sehen statt <span class="kw">lesen.</span></h2>
    <div class="films">
      <div class="film"><video controls muted playsinline preload="metadata" poster="/media/intro.jpg" src="/media/intro.mp4"></video><h3>Die 360°-Plattform</h3><p>Leistungen und Partnernetzwerk · 30 s</p></div>
      <div class="film"><video controls muted playsinline preload="metadata" poster="/media/projekte.jpg" src="/media/projekte.mp4"></video><h3>50 Projekte, 3 Länder</h3><p>Unsere Projekte auf der Karte · 45 s</p></div>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <div class="logos2"><img src="/media/tc/logo-padelbee.svg" alt="Padelbee"><span class="bar"></span><img src="/media/tc/logo-thecourt.svg" alt="The Court"></div>
    <h2>Ready. <span class="kw">Play.</span></h2>
    <p class="label" style="margin-top:22px">Padel · Pickleball · Tennis</p>
    <div class="people">
      <div class="person"><div class="k">Dein Projekt</div><b>Martin Gaffal</b><div class="mail"><code>martin.gaffal@padelbee.de</code><button class="copy" type="button">Kopieren</button></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><code>stefan.moebius@padelbee.de</code><button class="copy" type="button">Kopieren</button></div></div>
      <div class="person"><div class="k">Allgemein</div><b>The Court GmbH</b><div class="mail"><code>info@padelbee.de</code><button class="copy" type="button">Kopieren</button></div></div>
    </div>
<?php include __DIR__ . '/inc/tc/kontakt-form.php'; ?>
    <div class="addr">Scheck Club · Münchner Str. 15 · 85774 Unterföhring</div>
    <div class="urls">padelbee.de</div>
  </div>
</section>
<?php tc_page_end();
