<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1775: Eigene Seite für das Joint Venture mit dem Motions Racket Club (Martins Mail vom 25.11.2026: "eigener Reiter").
// Inhalt nach Martins Entwurf (the-court.com/motions, Stand 23.11.2026). Der Joint-Venture-Block und die Vereins-FAQ
// sind von /betreiberkonzept hierher umgezogen, damit kein Satz doppelt steht. Die FAQ "Wie viele Padel-Courts passen
// auf einen Tennisplatz?" steht auf /standortanalyse und wird hier nicht wiederholt. Blog-Links auf eigene Artikel (#blog/<slug>).
$mrcFaq = [
    ['frage' => 'Was ist der Motions Racket Club?', 'antwort' => 'Der Motions Racket Club ist der Betreiber im Joint Venture mit Padelbee. Padelbee entwickelt das Projekt, der Motions Racket Club betreibt die Anlage. Gemeinsam bringen wir Padel auf das Gelände von Tennisvereinen. Die Anlage läuft unter der Marke „Motions Racket Club [Standort]“ mit Co-Branding deines Vereins. Mehr dazu im <a href="/blog#blog/padel-im-tennisverein-der-leitfaden-fuer-vereinsvorstaende">Leitfaden für Vereinsvorstände</a>.'],
    ['frage' => 'Was kostet das Joint Venture meinen Verein?', 'antwort' => 'Dein Verein investiert 0 € und trägt kein Investitionsrisiko. Bau, Finanzierung und Betrieb der Padel-Courts übernimmt das Joint Venture. Dein Verein stellt die Fläche zur Verfügung und kümmert sich um die Pflege von Außenflächen und Courts sowie um die Sanitärräume. Steuerliche und rechtliche Fragen klärst du bitte immer mit deinem Steuerberater.'],
    ['frage' => 'Wie viel Pacht bekommt mein Verein?', 'antwort' => 'Dein Verein bekommt eine ortsübliche Pacht pro Tennisplatz und Monat, langfristig vereinbart. Wie hoch sie genau ist, hängt von Standort und Fläche ab. Deshalb rechnen wir sie für deinen Verein individuell durch. Statt Pflegekosten für einen ungenutzten Platz hast du damit planbare Einnahmen. Mehr dazu in <a href="/blog#blog/freie-tennisplaetze-mach-pacht-daraus">Freie Tennisplätze? Mach Pacht daraus.</a>'],
    ['frage' => 'Was haben die Vereinsmitglieder davon?', 'antwort' => 'Deine Mitglieder bekommen 30 % Rabatt auf den Stundenpreis, an allen MRC-Standorten und nicht nur zu Hause. Sie können 24 Stunden früher buchen als alle anderen und erhalten Zugang zu Events, Training und Partnerrabatten. Das Joint Venture baut außerdem Angebote für Kinder und Einsteiger auf. Mehr dazu in <a href="/blog#blog/30-rabatt-was-deine-mitglieder-vom-motions-racket-club-haben">30 % Rabatt</a>.'],
    ['frage' => 'Wer übernimmt welche Aufgaben?', 'antwort' => 'Das Joint Venture übernimmt Bau, Finanzierung und Betrieb, Jugend- und Trainingsangebote, Turniere zu rabattierten Konditionen und die Marke. Dein Verein übernimmt die Fläche gegen Pacht, die Pflege von Außenflächen und Courts, die Sanitärräume und verankert Padel im Vereinsleben. So bleibt dein Verein Gastgeber, aber nicht Unternehmer. Mehr dazu in <a href="/blog#blog/wer-macht-was-im-joint-venture">Wer macht was im Joint Venture?</a>'],
];
tc_page_start([
    'path' => '/motions-racket-club',
    'title' => 'Padel im Tennisverein ohne Investition · Padelbee',
    'description' => 'Padel im Tennisverein mit 0 € Investition: Joint Venture von Padelbee und Motions Racket Club mit Pacht pro Platz, 30 % Mitgliederrabatt und Co-Branding.',
    'breadcrumb' => ['Motions Racket Club' => '/motions-racket-club'],
    'extra_head' => '<link rel="stylesheet" href="/media/tc/p-betreiberkonzept.css?v=' . TC_ASSET_VERSION . '">' . "\n" . '<link rel="stylesheet" href="/media/tc/p-events.css?v=' . TC_ASSET_VERSION . '">',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Joint Venture Padel im Tennisverein',
            'Joint Venture von Padelbee und Motions Racket Club: Padel-Courts auf dem Gelände von Tennisvereinen ohne eigene Investition, mit ortsüblicher Pacht pro Tennisplatz, 30 % Mitgliederrabatt und Co-Branding.',
            '/motions-racket-club',
            ['serviceType' => 'Joint Venture']
        ),
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $mrcFaq), '/motions-racket-club'),
    ],
]);
?>
<section class="band dark grid-bg c-hero mrc-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Motions Racket Club</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padel im Tennisverein · Padelbee × Motions Racket Club</span>Padel im Verein. <span class="kw">0&nbsp;€</span> Investition.</h1>
      <p class="lead">Padel für deinen Verein ohne eigene Investition, mit Pacht, Mitgliedervorteilen und neuem Leben auf der Anlage. Padelbee entwickelt, der Motions Racket Club&nbsp;betreibt.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Joint Venture anfragen</a><a class="btn ghost" href="#mrc-modell">Das Modell ansehen</a></div>
    </div>
    <div class="mrc-logo" role="img" aria-label="Motions Racket Club"><div class="m" data-logo="mrc" data-h="96"></div></div>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b>0 €</b><span>Investition<em class="st-sub">Kein Investitionsrisiko für den Verein</em></span></div>
      <div><b>Pacht</b><span>Pro Platz<em class="st-sub">Ortsüblich, pro Tennisplatz und Monat, langfristig</em></span></div>
      <div><b>30&nbsp;%</b><span>Mitgliederrabatt<em class="st-sub">Auf den Stundenpreis, an allen MRC-Standorten</em></span></div>
      <div><b>24&nbsp;h</b><span>Früher buchen<em class="st-sub">Plus Events, Training und Partnerrabatte</em></span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="mrc-modell">
  <div class="inner">
    <p class="label" data-type>Joint Venture</p>
    <h2 class="reveal">Dein Verein. Unser&nbsp;<span class="hl">Invest.</span></h2>
    <p class="lead">Das Joint Venture baut, finanziert und betreibt die Courts. Dein Verein stellt die Fläche und verankert Padel im&nbsp;Vereinsleben.</p>
    <div class="mrc-roles">
      <article class="card reveal"><div class="k">Das Joint Venture übernimmt</div><ul class="b-list"><li>Bau, Finanzierung und Betrieb</li><li>Jugend- und Trainingsangebote</li><li>Turniere zu rabattierten Konditionen</li><li>Marke „Motions Racket Club [Standort]“ mit Co-Branding</li></ul></article>
      <article class="card reveal"><div class="k">Dein Verein übernimmt</div><ul class="b-list"><li>Fläche gegen ortsübliche Pacht, pro Tennisplatz und Monat, langfristig</li><li>Pflege der Außenfläche und Courts</li><li>Sanitärräume</li><li>Padel im Vereinsleben verankern</li></ul></article>
    </div>
    <p style="margin-top:28px"><a class="more-link" href="/standortanalyse">Passen deine Plätze? Zur Standortanalyse</a></p>
  </div>
</section>

<section class="band grid-bg" id="mrc-faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zum Joint&nbsp;<span class="hl">Venture.</span></h2>
    <div class="faq-list">
<?php foreach ($mrcFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Interesse? Sprich uns&nbsp;<span class="kw">an.</span></h2>
    <p class="lead" style="margin:18px auto 0">Wir rechnen die Pacht für deinen Verein individuell durch, im unverbindlichen Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Allgemein</div><b>Padelbee</b><div class="mail"><a href="mailto:info@padelbee.de">info@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Maßgeschneidertes Betreiberkonzept']; $tcFormButton = 'Joint Venture anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
