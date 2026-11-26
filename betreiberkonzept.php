<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt nach Firmenpräsentation 2026 (F2, F3, F4, F5, F6), Automaten-Präsentation (A6 Smart Access & Light Control)
// und Martins neuestem Claude-Entwurf (Leistungen, Joint Venture mit dem Motions Racket Club, Blog-Ratgeber zur Finanzierung).
// DEV-1775: Joint-Venture-Details und Vereins-FAQ auf /motions-racket-club umgezogen, Events ausführlich auf /events. Hier nur Anriss mit Link.
$leistungen = [
    ['Digitalisierung & Automatisierung', 'Betreiberkonzept & Digitalisierung', 'Buchung, Zugang, Licht und Automaten greifen ineinander. Auf Wunsch unterstützen wir dich auch nach der Eröffnung.', '#b-digital', 'Zur Digitalisierung'],
    ['Sport Management', 'Marketing & Community-Aufbau', 'Wir übernehmen Markenaufbau, Sponsoring, Community-Wachstum und kommerzielles Management für Clubs und Betreiber.', null, null],
    ['Zusatzeinnahmen', 'Zugang zu Sponsoren', 'Logos und gestaltete Glasflächen machen deinen Court zur Präsentationsfläche mit Wiedererkennungswert, für Zusatzeinnahmen durch&nbsp;Sponsoren.', '/courts#c-marke', 'Gestaltung der Courts'],
    ['Ausbildung & Training', 'Academy & Coaching', 'Wir bieten strukturierte Trainingsprogramme, Betreiber-Coaching und&nbsp;Unternehmensberatung.', null, null],
    ['Management & Formate', 'Turnier & Event', 'Wir planen Turniere und Events professionell und führen sie durch.', '/events/', 'Zu den Events'],
    ['Verleih & Verkauf', 'Automatenlösungen', 'Zusatzeinnahmen mit Schlägerverleih, Bällen, Snacks und Getränken, rund um die Uhr und ohne Personal.', '/automatenloesungen', 'Zu den Automaten'],
];
$bkFaq = [
    ['frage' => 'Wie finanziere ich meine Padelanlage?', 'antwort' => 'Du musst nicht sofort sechsstellig investieren. Drei Wege stehen dir offen, nämlich Kauf, Leasing oder Joint Venture. Beim Kauf investierst du einmal und dir gehört alles. Beim Leasing fließen die Raten aus dem laufenden Betrieb und deine Liquidität bleibt erhalten. Beim Joint Venture stellt ein Verein die Fläche, das Joint Venture baut, finanziert und betreibt. Steuerliche und bilanzielle Fragen klärst du bitte immer mit deinem Steuerberater.'],
    ['frage' => 'Kann mein Club bei einem Event dabei sein?', 'antwort' => 'Ja, sprich uns gern an, wenn dein Club bei einem unserer Events dabei sein will. Ob Turnier, Messe oder ein eigenes Format auf deiner Anlage, wir prüfen gemeinsam, was zu deinem Club passt. Schreib uns dafür über das Kontaktformular und erzähl uns kurz von deiner Anlage.'],
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
        tc_schema_faq($bkFaq, '/betreiberkonzept'),
    ],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Betreiberkonzept</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Betreiberkonzept · Padel-Anlagen betreiben</span>Bauen. Betreiben. <span class="kw">Padelbee.</span></h1>
      <p class="lead">Mit einem nachhaltigen Betreiberkonzept startet Padel an deinem Standort schnell und bleibt erfolgreich. Mit über 20 Jahren Erfahrung in Betrieb und Marketing begleiten wir dich nach <a href="/standortanalyse">Standortanalyse</a> und <a href="/padel-court-bauen">Bau</a> bis in den laufenden&nbsp;Betrieb.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Betreiberkonzept anfragen</a><a class="btn ghost" href="#b-leistungen">Leistungen ansehen</a></div>
    </div>
    <figure class="courtfig courtphoto"><img src="/media/uploads/a5b1ead76ff421ef2585a90d24bed755.jpg" alt="Padel-Halle im Scheck Club Unterföhring, Blick von der Galerie auf die Courts"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats r-stats">
      <div><b data-count="20" data-pre="+">+20</b><span>Jahre Racketsports<em class="st-sub">Betrieb von Sportanlagen</em></span></div>
      <div><b data-count="12">12</b><span>Padel-Courts<em class="st-sub">Referenzanlage Scheck Club, eine der größten Deutschlands</em></span></div>
      <div><b data-count="14" data-pre="+">+14</b><span>Jahre Padel-Erfahrung<em class="st-sub">in Planung, Fundament- und Platzbau und Betrieb</em></span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="b-leistungen">
  <div class="inner">
    <p class="label" data-type>Betrieb</p>
    <h2 class="reveal">Unser <span class="hl">Leistungsspektrum.</span></h2>
    <p class="lead">Ein Ansprechpartner für jede Phase.</p>
    <div class="cards c3">
<?php foreach ($leistungen as $l): ?>
      <article class="card reveal"><div class="k"><?= tc_h($l[0]) ?></div><h3 data-type><?= $l[1] ?></h3><p><?= $l[2] ?></p><?php if ($l[3]): ?><a class="btn ghost-d" href="<?= $l[3] ?>" style="margin-top:20px"><?= $l[4] ?></a><?php endif; ?></article>
<?php endforeach; ?>
    </div>
    <div class="b-franchise reveal"><div class="k">Auf Wunsch</div><h3 data-type>Franchise</h3><p>Wer eine starke Marke will, bekommt ein erprobtes Clubkonzept unter der Marke The Court, an vielen Standorten.</p></div>
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
        <p>Das Flutlicht brennt, aber keiner spielt. Oder Spieler stehen vor verschlossener Tür, weil niemand aufschließt. Smart Access &amp; Light Control verknüpft Licht und Zugang direkt mit dem Buchungssystem. Wer gebucht hat, kommt rein. Das Licht geht zur gebuchten Zeit an und danach wieder aus.</p>
        <ul class="b-tick"><li>Keine Schlüsselübergabe, kein Personal vor Ort</li><li>Strom nur, wenn gespielt wird</li><li>Volle Kontrolle über Zugang und Auslastung</li><li>Inklusive Installationsanleitung für Elektriker</li></ul>
        <p class="b-once"><b>2.000 €</b> einmalig, dazu 49 bis 129 € im Monat je nach Anzahl der Courts</p>
        <p class="b-note">Relais und elektrische Schlösser sind nicht im Angebot enthalten. Alle Preise netto. <a class="more-link" href="/automatenloesungen#a-smart">Preisstaffel ansehen</a></p>
      </article>
      <div class="b-partners">
        <p class="label" data-type>Digital-Partner</p>
        <div class="logos">
          <div class="lg" role="img" aria-label="Playtomic"><span class="t">Buchung</span><div class="m" data-logo="playtomic" data-h="40"></div></div>
          <div class="lg" role="img" aria-label="Sportogo"><span class="t">Verleih</span><div class="m" data-logo="sportogo" data-h="40"></div></div>
          <div class="lg" role="img" aria-label="Pure Vending"><span class="t">Automaten</span><div class="m" data-logo="purevending" data-h="40"></div></div>
          <div class="lg" role="img" aria-label="Zuply"><span class="t">Vending</span><div class="m" data-logo="zuply" data-h="40"></div></div>
          <div class="lg lg-wide" role="img" aria-label="Levendo Global"><span class="t">Digital</span><div class="m" data-logo="levendo" data-h="32"></div></div>
        </div>
        <p class="b-note"><a href="/partner">Alle Partner ansehen</a></p>
      </div>
    </div>
  </div>
</section>

<section class="band" id="b-netzwerk" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>Academy, Events &amp; Coaching</p>
    <h2 class="reveal">Turniere, Training und <span class="hl">Events.</span></h2>
    <p class="lead">Wir bringen Padel dorthin, wo Spieler, Vereine und Betreiber zusammenkommen.</p>
    <div class="cards c3 b-events">
      <article class="card reveal"><div class="k">Turnierserie</div><h3 data-type>Rafa Nadal Padel Tour 2026</h3><p>Die Tour macht 2026 an drei Standorten in Deutschland Station, in München im <a href="/referenzen#r-scheck">Scheck Club</a>, in Düsseldorf bei Mitte Padel und in Berlin bei Padel Ludwigsfelde.</p></article>
      <article class="card reveal"><div class="k">Format</div><h3 data-type>Best-of-Three-Challenge</h3><p>Im Rapid-Format gewinnt, wer zuerst 2 Punkte holt. Gespielt wird im K.&#8209;o.&#8209;System, das Gewinnerteam bekommt 1.000&nbsp;€ Preisgeld.</p></article>
      <article class="card reveal"><div class="k">Messen</div><h3 data-type>f.re.e und Active Connected</h3><p>Gemeinsam mit der MPM GmbH und Sports Connected bringen wir Racketsport auf die f.re.e München vom 10. bis 14.&nbsp;Februar&nbsp;2027. Auf der Active Connected leiten wir den Bereich Racketsports.</p></article>
    </div>
    <div class="logos">
      <div class="lg" role="img" aria-label="Rafa Nadal Academy"><span class="t">Academy</span><div class="m" data-logo="rna" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Patricio Travel"><span class="t">Travel</span><div class="m" data-logo="patricio" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Padel World Summit"><span class="t">Summit</span><div class="m" data-logo="pws" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Active Connected"><span class="t">Messe</span><div class="m" data-logo="activeconnected" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Scheck Club"><span class="t">Referenzclub</span><div class="m" data-logo="scheck" data-h="52"></div></div>
      <div class="lg" role="img" aria-label="Sports Tech Nation"><span class="t">Messe</span><div class="m" data-logo="stn" data-h="40"></div></div>
    </div>
    <div class="b-eventcta reveal"><div><h3 data-type>Dein Club beim nächsten Event?</h3><a class="more-link" href="/events/">Alle Events ansehen</a></div><a class="btn" href="#kontakt">Event anfragen</a></div>
  </div>
</section>

<section class="band grid-bg" id="b-finanzierung">
  <div class="inner">
    <p class="label" data-type>Finanzierung &amp; Joint Venture</p>
    <h2 class="reveal">Drei Wege zur Anlage. Einer kostet dich <span class="hl">0 €.</span></h2>
    <p class="lead">Nicht jeder Verein und nicht jeder Betreiber will sofort sechsstellig investieren. Mit bankfähigem Business Case, Fördermitteln, Investoren und mindspringpadel als Finanzierungspartner finden wir das passende&nbsp;Modell.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Modell 1</div><h3 data-type>Kauf</h3><p>Du investierst einmal und dir gehört alles. Der Klassiker für Betreiber mit Kapital und langfristigem Plan.</p></article>
      <article class="card reveal"><div class="k">Modell 2</div><h3 data-type>Leasing</h3><p>Gerade bei mobilen Plattformen und Automaten eine starke Option. Die Raten fließen aus dem laufenden Betrieb, die Liquidität bleibt.</p></article>
      <article class="card dk reveal"><div class="k">Modell 3</div><h3 data-type>Joint Venture</h3><p>Mit dem Motions Racket Club stellt dein Verein nur die Fläche, bekommt Pacht und investiert 0&nbsp;€.</p></article>
    </div>
    <p class="lead b-choose">Welcher Weg passt, hängt von deinen Zielen ab. Willst du die volle Kontrolle oder planbare Einnahmen ohne Investitionsrisiko? Wir rechnen beide Seiten mit dir durch.</p>
    <div class="b-jv reveal">
      <div class="b-jv-logos"><div class="lg" role="img" aria-label="Motions Racket Club"><span class="t">Joint Venture</span><div class="m" data-logo="mrc" data-h="34"></div></div><div class="lg" role="img" aria-label="mindspringpadel"><span class="t">Finanzierung</span><div class="m" data-logo="mindspring" data-h="34"></div></div></div>
      <div class="b-jv-body">
        <h3 data-type>Padel im Tennisverein</h3>
        <p>Wir entwickeln, der Motions Racket Club betreibt.</p>
        <div class="facts vm-facts"><span>0 € Investition</span><span>Pacht pro Platz</span><span>30 % Mitgliederrabatt</span><span>24 h früher buchen</span></div>
        <a class="btn ghost-d" href="/motions-racket-club/" style="margin-top:20px">Zum Joint Venture</a>
      </div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="b-faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zu Betrieb und <span class="hl">Finanzierung.</span></h2>
    <div class="faq-list">
<?php foreach ($bkFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= tc_h($f['antwort']) ?></p></details>
<?php endforeach; ?>
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
