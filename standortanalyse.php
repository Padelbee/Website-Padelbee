<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt: Bauphasen 1 bis 3 (Firmenpräsentation 2026, Folie 15), Leistung 01 (Folie 6)
// und Martins Entwurf (the-court.com, Stand 23.11.2026: Leistungen, FAQ, Ratgeber).
$saFaq = [
    ['frage' => 'Wie starte ich mein Projekt?', 'antwort' => 'Du startest mit einem kostenlosen Erstgespräch. Darin sprechen wir über deinen Standort, dein Budget und dein Nutzungskonzept und klären, ob Padel dort passt. Danach rechnen wir deine Anlage durch und zeigen dir, welche Courts, welches Fundament und welche Finanzierung infrage kommen. Schreib uns einfach über das Kontaktformular oder per E-Mail.'],
    ['frage' => 'Wie läuft ein Padel-Projekt ab?', 'antwort' => 'Ein Padel-Projekt läuft bei uns in sieben Etappen, von Beratung und Finanzierung über Planung und Architektur, Bau und Digitalisierung bis zu Betrieb und auf Wunsch Franchise. Am Anfang prüfen wir Fläche, Zielgruppe und Potenzial deines Standorts. Danach klären wir Finanzierung und Genehmigung, bevor gebaut wird. Was in jeder Phase passiert, liest du unter <a href="/padel-court-bauen">Padel Court bauen</a>.'],
    ['frage' => 'Wie viele Padel-Courts passen auf einen Tennisplatz?', 'antwort' => 'Auf einen Tennisplatz passen bis zu zwei Padel-Courts. Ein Padel-Court braucht deutlich weniger Fläche als ein Tennisplatz. Aus einem ungenutzten Tennisplatz kann so eine kleine Padelanlage werden, ohne dass dein Verein neues Gelände braucht. Ob deine Plätze passen, prüfen wir vor Ort zusammen mit Baurecht, Lärmschutz und Licht.'],
];
tc_page_start([
    'path' => '/standortanalyse',
    'title' => 'Standortanalyse & Erstscreening für Padel · Padelbee',
    'description' => 'Standortanalyse und Erstscreening für deine Padel-Anlage: Quickcheck, Vermessung, Baurecht, Varianten und Kostenrahmen bis zur Go/No-Go-Empfehlung.',
    'breadcrumb' => ['Standortanalyse' => '/standortanalyse'],
    'og_image' => '/media/leistungen/standortanalyse-karte.png',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Standortanalyse & Erstscreening für Padel-Anlagen',
            'Standortanalyse und Erstscreening für geplante Padel-Anlagen: Standort-Quickcheck, Begehung, GPS-Vermessung und Drohnenbefliegung, planungsrechtliche Prüfung, Variantenplanung, 3D-Visualisierung, Kostenrahmen nach DIN 276, Business Case und Go/No-Go-Empfehlung.',
            '/standortanalyse',
            ['serviceType' => 'Standortanalyse', 'image' => '/media/leistungen/standortanalyse-karte.png']
        ),
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $saFaq), '/standortanalyse'),
    ],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Standortanalyse</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Standortanalyse · Erstscreening</span>Passt Padel zu deinem <span class="kw">Standort?</span></h1>
      <p class="lead">Mit der Standortanalyse prüfen wir im Erstscreening Fläche, Zielgruppe, Markt und Potenzial deines Standorts, bevor du Geld ausgibst. Am Ende steht eine Go/No-Go-Empfehlung, mit der du sicher entscheidest.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Erstscreening anfragen</a><a class="btn ghost" href="#s-ablauf">Ablauf ansehen</a></div>
    </div>
    <div class="sa-wrap"><svg class="sa-art" viewBox="0 0 400 400" role="img" aria-label="Stadtkarte mit gelber Stecknadel als Symbol für die Standortanalyse"><defs><radialGradient id="saFadeG" cx="50%" cy="56%" r="50%"><stop offset="0" stop-color="#fff"/><stop offset=".55" stop-color="#fff" stop-opacity=".85"/><stop offset="1" stop-color="#fff" stop-opacity="0"/></radialGradient><mask id="saFadeM"><rect width="400" height="400" fill="url(#saFadeG)"/></mask></defs><g mask="url(#saFadeM)" class="sa-map"><g transform="rotate(-14 200 200)"><line x1="-300" y1="-28" x2="700" y2="-28" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-28" y1="-300" x2="-28" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="10" x2="700" y2="10" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="10" y1="-300" x2="10" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="48" x2="700" y2="48" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="48" y1="-300" x2="48" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="86" x2="700" y2="86" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="86" y1="-300" x2="86" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="124" x2="700" y2="124" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="124" y1="-300" x2="124" y2="700" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="-300" y1="162" x2="700" y2="162" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="162" y1="-300" x2="162" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="200" x2="700" y2="200" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="200" y1="-300" x2="200" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="238" x2="700" y2="238" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="238" y1="-300" x2="238" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="276" x2="700" y2="276" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="276" y1="-300" x2="276" y2="700" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="-300" y1="314" x2="700" y2="314" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="314" y1="-300" x2="314" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="352" x2="700" y2="352" stroke="#2F7470" stroke-width="3" opacity="0.9"/><line x1="352" y1="-300" x2="352" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="390" x2="700" y2="390" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="390" y1="-300" x2="390" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="-300" y1="428" x2="700" y2="428" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/><line x1="428" y1="-300" x2="428" y2="700" stroke="#2F7470" stroke-width="1.2" opacity="0.55"/></g></g><circle cx="200" cy="236" r="96" fill="#A3C9C2" fill-opacity=".06" class="sa-map"/><circle cx="200" cy="236" r="96" fill="none" stroke="#A3C9C2" stroke-width="1.5" stroke-dasharray="4 9" opacity=".8" class="sa-zone"/><ellipse cx="200" cy="236" rx="14" ry="5" fill="#001A1A" opacity=".55" class="sa-shadow"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse"/><circle cx="200" cy="234" r="8" fill="none" stroke="#CCFF00" stroke-width="2" class="sa-pulse" style="animation-delay:1.2s"/><g class="sa-pin"><path d="M200 234 C200 234 162 188 162 158 A38 38 0 1 1 238 158 C238 188 200 234 200 234 Z" fill="#CCFF00"/><circle cx="200" cy="157" r="14" fill="#002424"/></g></svg></div>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b data-count="3">3</b><span>Phasen<em class="st-sub">von der Anfrage bis zum Konzept</em></span></div>
      <div><b>2D &amp; 3D</b><span>CAD und Visualisierung</span></div>
      <div><b>DIN 276</b><span>Kostenrahmen</span></div>
      <div><b>+14</b><span>Jahre Padel-Erfahrung<em class="st-sub">im Team</em></span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="s-ablauf">
  <div class="inner">
    <p class="label" data-type>Standortanalyse</p>
    <h2 class="reveal">Drei Phasen. Eine <span class="hl">Entscheidungs&shy;grundlage.</span></h2>
    <p class="lead">Am Anfang prüfen wir Fläche, Zielgruppe und Potenzial deines Standorts. Danach klären wir Finanzierung und Genehmigung, bevor gebaut wird.</p>
    <div class="cards c3">
      <article class="card reveal"><div class="k">Phase 01</div><h3 data-type>Erstkontakt &amp; Projektaufnahme</h3><p>Du stellst deine Anfrage, wir prüfen deinen Standort im Quickcheck und legen deine Projektziele fest.</p><ul class="chips"><li>Eingangsanfrage &amp; Standort-Quickcheck</li><li>Projektziele definieren</li><li>Erste Kostenschätzung</li><li>Termin für die Besichtigung</li></ul></article>
      <article class="card reveal"><div class="k">Phase 02</div><h3 data-type>Standortbesichtigung &amp; Geländeaufnahme</h3><p>Wir gehen den Standort gemeinsam mit dir ab und nehmen das Gelände genau auf.</p><ul class="chips"><li>Begehung mit dir</li><li>GPS-Vermessung &amp; Drohnenbefliegung</li><li>Infrastruktur-Erfassung</li><li>CAD-Übertrag (2D &amp; 3D)</li></ul></article>
      <article class="card reveal"><div class="k">Phase 03</div><h3 data-type>Grundlagenanalyse &amp; Konzeptentwicklung</h3><p>Wir prüfen, ob dein Vorhaben planungsrechtlich möglich ist, und entwickeln Varianten, die wir dir in 3D zeigen. Dafür arbeiten wir mit spezialisierten Architekturbüros, die effizient und schnell für ganz Deutschland planen.</p><ul class="chips"><li>Planungsrechtliche Prüfung (§34/§35 BauGB)</li><li>Technische Untersuchungen</li><li>Variantenplanung</li><li>3D-Visualisierung &amp; Kostenrahmen (DIN 276)</li></ul></article>
    </div>
    <p class="v-rule reveal"><span class="k">Für Tennisvereine</span>Auf einen Tennisplatz passen bis zu zwei Padel-Courts. Ob deine Plätze passen, prüfen wir vor Ort, zusammen mit Baurecht, Lärm und Licht. Worauf es dabei ankommt, liest du unter <a href="/padel-court-bauen#p-genehmigung">Padel Court bauen</a>.</p>
  </div>
</section>

<section class="band dark grid-bg" id="s-business">
  <div class="inner">
    <p class="label" data-type>Finanzielle Planung &amp; Business Case</p>
    <h2 class="reveal">Wer früh richtig plant, spart später <span class="kw">doppelt.</span></h2>
    <p class="lead">Zur Standortanalyse gehört die finanzielle Planung. Wir erstellen einen bankfähigen Business Case und rechnen dir vor, was deine Fläche bringen kann.</p>
    <div class="cards c3">
      <article class="card dk reveal"><div class="k">Leistung 01</div><h3 data-type>Business Case</h3><p>Ein bankfähiger Business Case zeigt dir, welche Courts, welches Fundament und welche Finanzierung für deine Anlage infrage kommen.</p></article>
      <article class="card dk reveal"><div class="k">Finanzierung</div><h3 data-type>Dein Modell</h3><p>Kauf, Leasing oder <a href="/betreiberkonzept#b-finanzierung">Joint Venture</a>. Wir finden das Modell, das zu dir passt, und prüfen Fördermittel und Investoren.</p></article>
      <article class="card dk reveal"><div class="k">Erste Zahlen</div><h3 data-type>Richtwerte</h3><p>Für die erste Kalkulation rechnen wir mit einem Court ab 27.000 € netto, einem Fundament von rund 35.000 € und einer Halle ab 280 €/m² netto.</p></article>
    </div>
    <p class="fav-note">Steuerliche und bilanzielle Fragen klärst du bitte immer mit deinem Steuerberater.</p>
    <p style="margin-top:28px"><a class="btn ghost" href="/padel-court-bauen#p-kosten">Kosten und Finanzierung im Detail</a></p>
  </div>
</section>

<section class="band" id="s-ergebnis">
  <div class="inner">
    <p class="label" data-type>Ergebnis</p>
    <h2 class="reveal">Am Ende steht deine <span class="hl">Go/No-Go-Empfehlung.</span></h2>
    <p class="lead">Du weißt, ob Padel an deinem Standort passt, was es nach DIN 276 kostet und welche Variante sich eignet. Danach geht es mit dem Bauantrag und der Genehmigung weiter.</p>
    <div class="teaser">
      <div><h3>Weiter mit <span>Phase 4 bis 7.</span></h3><p>Bauantrag, Freigabe, Ausschreibung und Bau deines Padel Courts.</p></div>
      <a class="btn" href="/padel-court-bauen">Padel Court bauen</a>
    </div>
    <p class="m-quote reveal">50 Projekte in 3 Ländern zeigen, dass mit dem richtigen Partner aus einer Idee eine Anlage wird, die <span class="hl">läuft.</span> Sieh dir unsere <a href="/referenzen">Referenzen</a> an.</p>
  </div>
</section>

<section class="band grid-bg" id="s-faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zur <span class="hl">Standortanalyse.</span></h2>
    <div class="faq-list">
<?php foreach ($saFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Wir prüfen deinen Standort, <span class="kw">bevor du Geld ausgibst.</span></h2>
    <p class="lead" style="margin:18px auto 0">Sichere dir jetzt dein unverbindliches Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Erstscreening']; $tcFormButton = 'Erstscreening anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
