<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt nach Firmenpräsentation 2026 (F2, F3, F4, F5, F6), Automaten-Präsentation (A6 Smart Access & Light Control)
// und Martins neuestem Claude-Entwurf (Leistungen, Joint Venture mit dem Motions Racket Club, Blog-Ratgeber zur Finanzierung).
$leistungen = [
    ['04', 'Betreiberkonzept & Digitalisierung', 'Buchung, Zugang, Licht und Automaten greifen ineinander. Auf Wunsch unterstützen wir dich auch nach der Eröffnung.', '#b-digital', 'Zur Digitalisierung'],
    ['05', 'Marketing & Community-Aufbau', 'Wir übernehmen Markenaufbau, Sponsoring, Community-Wachstum und kommerzielles Management für Clubs und Betreiber.', null, null],
    ['06', 'Zugang zu Sponsoren', 'Zusatzeinnahmen durch Sponsoren. Logos lassen sich integrieren und Glasflächen individualisieren, so entsteht eine professionelle Präsentationsfläche mit Wiedererkennungswert.', '/courts#c-marke', 'Gestaltung der Courts'],
    ['', 'Academy & Coaching', 'Wir bieten strukturierte Trainingsprogramme, Betreiber-Coaching und Unternehmensberatung.', null, null],
    ['', 'Turnier & Event', 'Wir planen Turniere und Events professionell und führen sie durch.', '#b-netzwerk', 'Zu den Partnern'],
    ['07', 'Automatenlösungen', 'Zusatzeinnahmen mit Schlägerverleih, Bällen, Snacks und Getränken, rund um die Uhr und ohne Personal.', '/automatenloesungen', 'Zu den Automaten'],
];
tc_page_start([
    'path' => '/betreiberkonzept',
    'title' => 'Betreiberkonzept für Padel-Anlagen · Padelbee',
    'description' => 'Betreiberkonzept für Padel-Anlagen: Digitalisierung, Marketing, Sponsoren, Academy, Events und Finanzierung. Über 20 Jahre Betriebserfahrung von Padelbee.',
    'breadcrumb' => ['Betreiberkonzept' => '/betreiberkonzept'],
    'og_image' => '/media/uploads/a5b1ead76ff421ef2585a90d24bed755.jpg',
    'extra_scripts' => '<link rel="stylesheet" href="/media/tc/p-betreiberkonzept.css?v=' . TC_ASSET_VERSION . '">' . "\n" . '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Betreiberkonzept für Padel-Anlagen',
            'Nachhaltige Betreiberkonzepte für Padel-Anlagen: Digitalisierung mit Buchung, Zugangskontrolle und Lichtsteuerung, Marketing und Community-Aufbau, Zugang zu Sponsoren, Academy und Coaching, Turniere und Events, Automatenlösungen und Finanzierung.',
            '/betreiberkonzept',
            ['serviceType' => 'Betreiberkonzept', 'image' => '/media/uploads/a5b1ead76ff421ef2585a90d24bed755.jpg']
        ),
    ],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Betreiberkonzept</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Betreiberkonzept · Padel-Anlagen betreiben</span>Bauen. Betreiben. <span class="kw">Padelbee.</span></h1>
      <p class="lead">Mit einem nachhaltigen Betreiberkonzept startet Padel an deinem Standort schnell und bleibt erfolgreich. Wir bringen über 20 Jahre Erfahrung im Betrieb von Sportanlagen und im Marketing für Racket Sports mit und begleiten dich nach der <a href="/standortanalyse">Standortanalyse</a> und dem <a href="/padel-court-bauen">Bau</a> bis in den laufenden Betrieb.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Betreiberkonzept anfragen</a><a class="btn ghost" href="#b-leistungen">Leistungen ansehen</a></div>
    </div>
    <figure class="courtfig courtphoto"><img src="/media/uploads/a5b1ead76ff421ef2585a90d24bed755.jpg" alt="Padel-Halle im Scheck Club Unterföhring, Blick von der Galerie auf die Courts"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b data-count="20" data-pre="+">+20</b><span>Jahre Racketsports<em class="st-sub">Betrieb von Sportanlagen</em></span></div>
      <div><b data-count="12">12</b><span>Padel-Courts<em class="st-sub">Referenzanlage Scheck Club</em></span></div>
      <div><b data-count="14" data-pre="+">+14</b><span>Jahre Padel-Erfahrung</span></div>
      <div><b data-count="30" data-plus>30+</b><span>Partner</span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="b-leistungen">
  <div class="inner">
    <p class="label" data-type>Betrieb</p>
    <h2 class="reveal">Unser <span class="hl">Leistungsspektrum.</span></h2>
    <p class="lead">Unsere Leistungen reichen von Betreiberkonzept, Marketing und Community-Aufbau über Sponsoren und Academy bis zu Events und Automaten. Für alles hast du einen Ansprechpartner.</p>
    <div class="cards c3">
<?php foreach ($leistungen as $l): ?>
      <article class="card reveal"><div class="k"><?= $l[0] !== '' ? 'Leistung ' . $l[0] : 'Leistungsspektrum' ?></div><h3 data-type><?= $l[1] ?></h3><p><?= $l[2] ?></p><?php if ($l[3]): ?><a class="btn ghost-d" href="<?= $l[3] ?>" style="margin-top:20px"><?= $l[4] ?></a><?php endif; ?></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="b-digital">
  <div class="inner">
    <p class="label" data-type>Digitalisierung</p>
    <h2 class="reveal">Buchung, Zugang und Licht <span class="kw">automatisch.</span></h2>
    <p class="lead">Unsere Digital-Partner sind mit vielen Buchungssystemen kompatibel.</p>
    <div class="b-digi">
      <article class="card b-smart reveal">
        <div class="k">Sportogo · Smart Solutions</div>
        <h3 data-type>Smart Access &amp; Light Control</h3>
        <p>Licht und Zugang laufen automatisch mit deinen Buchungen. Kein Licht brennt umsonst, niemand braucht einen Schlüssel.</p>
        <ul class="b-tick"><li>Automatische Lichtsteuerung, mit Buchungen verknüpft</li><li>Zugangskontrolle, mit Buchungs-App verknüpft</li><li>Inklusive Installationsanleitung für Elektriker</li></ul>
        <p class="b-once"><b>2.000 €</b> einmalig, netto</p>
        <div class="b-fees"><div><b>49 €</b><span>pro Monat<em>1 bis 4 Courts</em></span></div><div><b>89 €</b><span>pro Monat<em>5 bis 8 Courts</em></span></div><div><b>129 €</b><span>pro Monat<em>9 bis 12 Courts</em></span></div><div><b>13+</b><span>Courts<em>auf Anfrage</em></span></div></div>
        <p class="b-note">Für Licht- und Zutrittssteuerung sind Relais und elektrische Schlösser zu installieren, sie sind nicht im Angebot enthalten. Alle Preise netto. Mehr zu den Preisen und Automaten unter <a href="/automatenloesungen#a-smart">Automatenlösungen</a>.</p>
      </article>
      <div class="b-partners">
        <p class="label" data-type>Digital-Partner</p>
        <div class="logos">
          <div class="lg" role="img" aria-label="Playtomic"><span class="t">Buchung</span><div class="m" data-logo="playtomic" data-h="40"></div></div>
          <div class="lg" role="img" aria-label="Sportogo"><span class="t">Verleih</span><div class="m" data-logo="sportogo" data-h="40"></div></div>
          <div class="lg" role="img" aria-label="Pure Vending"><span class="t">Automaten</span><div class="m" data-logo="purevending" data-h="40"></div></div>
          <div class="lg" role="img" aria-label="Zuply"><span class="t">Vending</span><div class="m" data-logo="zuply" data-h="40"></div></div>
          <div class="lg lg-wide"><span class="t">Digital</span><div class="txt">Levendo<small>Global</small></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="band" id="b-netzwerk" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>Academy, Events &amp; Coaching</p>
    <h2 class="reveal">Turniere, Training und <span class="hl">Events.</span></h2>
    <p class="lead">Wir bringen Padel dorthin, wo Spieler, Vereine und Betreiber zusammenkommen. Dafür arbeiten wir mit starken Partnern aus Academy, Events und Coaching zusammen.</p>
    <div class="cards c3 b-events">
      <article class="card reveal"><div class="k">Turnierserie</div><h3 data-type>Rafa Nadal Padel Tour 2026</h3><p>Die Tour macht 2026 an drei Standorten in Deutschland Station, in München im Scheck Club, in Düsseldorf bei Mitte Padel und in Berlin bei Padel Ludwigsfelde.</p></article>
      <article class="card reveal"><div class="k">Format</div><h3 data-type>Best-of-Three-Challenge</h3><p>Das Team, das zuerst 2 Punkte holt, gewinnt das Match. Gespielt wird im einfachen K.-o.-System, das Gewinnerteam nimmt 1.000 € Preisgeld mit nach Hause.</p></article>
      <article class="card reveal"><div class="k">Messen</div><h3 data-type>f.re.e und Active Connected</h3><p>Gemeinsam mit der MPM GmbH und Sports Connected bringen wir Racketsport auf die f.re.e München vom 10. bis 14. Februar 2027. Auf der Active Connected leiten wir den Bereich Racketsports.</p></article>
    </div>
    <div class="logos">
      <div class="lg" role="img" aria-label="Rafa Nadal Academy"><span class="t">Academy</span><div class="m" data-logo="rna" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Patricio Travel"><span class="t">Travel</span><div class="m" data-logo="patricio" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Padel World Summit"><span class="t">Summit</span><div class="m" data-logo="pws" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Active Connected"><span class="t">Messe</span><div class="m" data-logo="activeconnected" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Scheck Club"><span class="t">Referenzclub</span><div class="m" data-logo="scheck" data-h="40"></div></div>
      <div class="lg"><span class="t">Events</span><div class="txt">Best of Three<small>Challenge</small></div></div>
      <div class="lg"><span class="t">Messe</span><div class="txt">Sports Tech<small>Nation 2026</small></div></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="b-finanzierung">
  <div class="inner">
    <p class="label" data-type>Finanzierung &amp; Joint Venture</p>
    <h2 class="reveal">Drei Wege zur Anlage. Einer kostet dich <span class="hl">0 €.</span></h2>
    <p class="lead">Nicht jeder Verein und nicht jeder Betreiber will sofort sechsstellig investieren. Musst du auch nicht. Kauf, Leasing oder Joint Venture, wir finden das Modell, das zu dir passt. Für die Finanzierung haben wir mindspringpadel an unserer Seite.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Modell 1</div><h3 data-type>Kauf</h3><p>Du investierst einmal und dir gehört alles. Der Klassiker für Betreiber mit Kapital und langfristigem Plan.</p></article>
      <article class="card reveal"><div class="k">Modell 2</div><h3 data-type>Leasing</h3><p>Gerade bei mobilen Plattformen und Automaten eine starke Option. Die Raten fließen aus dem laufenden Betrieb, die Liquidität bleibt.</p></article>
      <article class="card dk reveal"><div class="k">Modell 3</div><h3 data-type>Joint Venture</h3><p>Mit dem Motions Racket Club stellst du als Verein nur die Fläche. Bau, Finanzierung und Betrieb übernimmt das Joint Venture. Du bekommst Pacht und investierst 0 €.</p></article>
    </div>
    <div class="b-jv reveal">
      <div class="b-jv-logos"><div class="lg" role="img" aria-label="Motions Racket Club"><span class="t">Joint Venture</span><div class="m" data-logo="mrc" data-h="34"></div></div><div class="lg" role="img" aria-label="mindspringpadel"><span class="t">Finanzierung</span><div class="m" data-logo="mindspring" data-h="34"></div></div></div>
      <div class="b-jv-body">
        <h3 data-type>Padel im Tennisverein</h3>
        <p>Wir entwickeln, der Motions Racket Club betreibt. Dein Verein stellt die Fläche gegen Pacht, pflegt Außenfläche und Courts, stellt die Sanitärräume und trägt kein Investitionsrisiko. Deine Mitglieder bekommen 30 % Rabatt auf den Stundenpreis, an allen MRC-Standorten.</p>
        <div class="facts vm-facts"><span>0 € Investition</span><span>Pacht pro Platz</span><span>30 % Mitgliederrabatt</span><span>24 h früher buchen</span></div>
        <p class="b-jv-note">Steuerliche und bilanzielle Fragen klärst du bitte immer mit deinem Steuerberater.</p>
        <a class="btn ghost-d" href="#kontakt" style="margin-top:8px">Joint Venture anfragen</a>
      </div>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Padel startet schnell und bleibt <span class="kw">erfolgreich.</span></h2>
    <p class="lead" style="margin:18px auto 0">Wir entwickeln dein Betreiberkonzept 100 % kundenorientiert, von Digitalisierung und Marketing bis zu Events und Finanzierung. Sichere dir jetzt dein unverbindliches Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Maßgeschneidertes Betreiberkonzept']; $tcFormButton = 'Betreiberkonzept anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
