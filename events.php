<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1775: Events nach Martins Entwurf (the-court.com/events, Stand 23.11.2026), Martins Mail vom 25.11.2026
// ("Die Events kannst Du wie hier übernehmen"). Fotos der Rafa Nadal Padel Tour aus dem Entwurf (media/events).
// Die FAQ "Kann mein Club bei einem Event dabei sein?" steht auf /betreiberkonzept und wird hier nicht wiederholt.
$evFaq = [
    ['frage' => 'Wo macht die Rafa Nadal Padel Tour 2026 Station?', 'antwort' => 'Die Rafa Nadal Padel Tour macht 2026 an drei Standorten in Deutschland Station, in München im Scheck Club, in Düsseldorf bei Mitte Padel und in Berlin bei Padel Ludwigsfelde. Bei jedem Tourstopp treffen sich Spieler, Vereine und Betreiber. Wenn du bei einem der Stopps dabei sein willst, schreib uns über das <a href="#kontakt">Kontaktformular</a>.'],
    ['frage' => 'Wie funktioniert die Best-of-Three-Challenge?', 'antwort' => 'Die Best-of-Three-Challenge ist ein Rapid-Format. Das Team, das zuerst 2 Punkte holt, gewinnt das Match. Gespielt wird im einfachen K.-o.-System, wer verliert, scheidet aus. So entstehen viele kurze, spannende Matches in kurzer Zeit. Das Gewinnerteam nimmt 1.000 € Preisgeld mit nach Hause.'],
    ['frage' => 'Wann ist die f.re.e 2027 in München?', 'antwort' => 'Die f.re.e München 2027 findet vom 10. bis 14. Februar 2027 auf der Messe München statt. Sie ist die große Publikumsmesse für Reisen und Freizeit. Gemeinsam mit der MPM GmbH und Sports Connected bringen wir dort Racketsport auf die Messe. Mehr dazu auf der <a href="https://free-muenchen.de" target="_blank" rel="noopener">offiziellen Website der f.re.e</a>.'],
    ['frage' => 'Was macht ihr auf der Active Connected?', 'antwort' => 'Auf der Active Connected leiten wir den Bereich Racketsports, in Kooperation mit der MPM GmbH und Sports Connected. Wie bei der f.re.e bringen wir Racketsport dorthin, wo Spieler, Vereine und Betreiber zusammenkommen. Der Termin für die nächste Ausgabe folgt, wir ergänzen ihn auf dieser Seite, sobald er feststeht.'],
];
tc_page_start([
    'path' => '/events',
    'title' => 'Padel-Events, Turniere & Messen · Padelbee',
    'description' => 'Padel-Events mit Padelbee: Rafa Nadal Padel Tour 2026 in München, Düsseldorf und Berlin, Best-of-Three-Challenge und Racketsport auf der f.re.e München.',
    'breadcrumb' => ['Events' => '/events'],
    'og_image' => '/media/events/rnpt_01.jpg',
    'extra_head' => '<link rel="stylesheet" href="/media/tc/p-events.css?v=' . TC_ASSET_VERSION . '">',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $evFaq), '/events'),
    ],
]);
?>
<section class="band dark grid-bg c-hero ev-hero">
  <div class="inner" style="grid-template-columns:1fr">
    <div style="max-width:860px">
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Events</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padel-Events · Turniere · Messen</span>Padel <span class="kw">erleben.</span></h1>
      <p class="lead">Padelbee bringt Padel dorthin, wo Spieler, Vereine und Betreiber zusammenkommen, von der Rafa Nadal Padel Tour bis zu den großen Messen.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#ev-tour">Rafa Nadal Padel Tour</a><a class="btn ghost" href="#ev-challenge">Best-of-Three-Challenge</a><a class="btn ghost" href="#ev-messen">Messen</a></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="ev-tour">
  <div class="inner">
    <p class="label" data-type>Turnierserie</p>
    <h2 class="reveal">Rafa Nadal Padel Tour&nbsp;<span class="hl">2026.</span></h2>
    <p class="lead">Die Tour macht 2026 an drei Standorten in Deutschland&nbsp;Station.</p>
    <div class="ev-stops">
      <article class="ev-stop reveal"><span class="k">Tourstopp 1</span><h3 data-type>München</h3><p><a href="/referenzen">Scheck Club</a></p></article>
      <article class="ev-stop reveal"><span class="k">Tourstopp 2</span><h3 data-type>Düsseldorf</h3><p>Mitte Padel</p></article>
      <article class="ev-stop reveal"><span class="k">Tourstopp 3</span><h3 data-type>Berlin</h3><p>Padel Ludwigsfelde</p></article>
    </div>
    <div class="ev-gal">
      <figure class="reveal wide"><picture><source type="image/webp" srcset="/media/events/rnpt_01-480.webp 480w, /media/events/rnpt_01-960.webp 960w, /media/events/rnpt_01.webp 1400w" sizes="(max-width: 860px) 100vw, 50vw"><img loading="lazy" width="1400" height="933" src="/media/events/rnpt_01.jpg" alt="Siegerehrung bei der Rafa Nadal Padel Tour vor der Tour-Wand"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_02-480.webp 480w, /media/events/rnpt_02.webp 934w" sizes="(max-width: 860px) 100vw, 50vw"><img width="934" height="1400" src="/media/events/rnpt_02.jpg" alt="Vier Spieler am Netz vor dem Match" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_03-480.webp 480w, /media/events/rnpt_03.webp 935w" sizes="(max-width: 860px) 100vw, 50vw"><img width="935" height="1400" src="/media/events/rnpt_03.jpg" alt="Spieler beim Return vor dem Tour-Banner, schwarz-weiß" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_04-480.webp 480w, /media/events/rnpt_04.webp 933w" sizes="(max-width: 860px) 100vw, 50vw"><img width="933" height="1400" src="/media/events/rnpt_04.jpg" alt="Orangefarbener Padelschläger, Detailaufnahme" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_05-480.webp 480w, /media/events/rnpt_05.webp 934w" sizes="(max-width: 860px) 100vw, 50vw"><img width="934" height="1400" src="/media/events/rnpt_05.jpg" alt="Spieler in Bewegung, schwarz-weiß" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_06-480.webp 480w, /media/events/rnpt_06.webp 933w" sizes="(max-width: 860px) 100vw, 50vw"><img width="933" height="1400" src="/media/events/rnpt_06.jpg" alt="Spieler beim Volley, schwarz-weiß" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_07-480.webp 480w, /media/events/rnpt_07.webp 934w" sizes="(max-width: 860px) 100vw, 50vw"><img width="934" height="1400" src="/media/events/rnpt_07.jpg" alt="DJ-Pult beim Tourstopp" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_08-480.webp 480w, /media/events/rnpt_08.webp 933w" sizes="(max-width: 860px) 100vw, 50vw"><img width="933" height="1400" src="/media/events/rnpt_08.jpg" alt="Match von oben bei Mitte Padel" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_09-480.webp 480w, /media/events/rnpt_09.webp 933w" sizes="(max-width: 860px) 100vw, 50vw"><img width="933" height="1400" src="/media/events/rnpt_09.jpg" alt="Bälle auf dem Hallendach bei Mitte Padel" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_10-480.webp 480w, /media/events/rnpt_10.webp 934w" sizes="(max-width: 860px) 100vw, 50vw"><img width="934" height="1400" src="/media/events/rnpt_10.jpg" alt="Spieler und Gäste in der Lounge" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_11-480.webp 480w, /media/events/rnpt_11.webp 934w" sizes="(max-width: 860px) 100vw, 50vw"><img width="934" height="1400" src="/media/events/rnpt_11.jpg" alt="Spielerin jubelt nach einem Punkt" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_12-480.webp 480w, /media/events/rnpt_12.webp 934w" sizes="(max-width: 860px) 100vw, 50vw"><img width="934" height="1400" src="/media/events/rnpt_12.jpg" alt="Spielerin und Partner feiern auf dem Court" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_13-480.webp 480w, /media/events/rnpt_13.webp 933w" sizes="(max-width: 860px) 100vw, 50vw"><img width="933" height="1400" src="/media/events/rnpt_13.jpg" alt="Gäste lachen am DJ-Pult" loading="lazy"></picture></figure>
      <figure class="reveal"><picture><source type="image/webp" srcset="/media/events/rnpt_14-480.webp 480w, /media/events/rnpt_14.webp 933w" sizes="(max-width: 860px) 100vw, 50vw"><img width="933" height="1400" src="/media/events/rnpt_14.jpg" alt="High five am Netz bei Padel Ludwigsfelde" loading="lazy"></picture></figure>
      
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="ev-challenge">
  <div class="inner">
    <p class="label" data-type>Format</p>
    <h2 class="reveal">Best-of-Three-<span class="kw">Challenge.</span></h2>
    <p class="lead">Im Rapid-Format hat das Team gewonnen, das zuerst 2 Punkte holt. Gespielt wird im einfachen&nbsp;K.&#8209;o.&#8209;System.</p>
    <div class="ev-facts">
      <div class="ev-fact reveal"><b>2 Punkte</b><span>Zum Sieg</span><p>Das Team, das zuerst 2 Punkte gewinnt, gewinnt das Match.</p></div>
      <div class="ev-fact reveal"><b>K.&#8209;o.</b><span>System</span><p>Wer verliert, scheidet aus.</p></div>
      <div class="ev-fact reveal"><b>1.000 €</b><span>Preisgeld</span><p>Das Gewinnerteam nimmt 1.000&nbsp;€ mit nach Hause.</p></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="ev-messen">
  <div class="inner">
    <p class="label" data-type>Messen</p>
    <h2 class="reveal">Racketsport auf der <span class="hl">Messe.</span></h2>
    <p class="lead">Gemeinsam mit der MPM GmbH und Sports Connected bringen wir Racketsport auf große&nbsp;Messen.</p>
    <div class="ev-fairs">
      <article class="ev-fair reveal"><div class="ev-date">10. bis 14. Februar 2027</div><h3 data-type>f.re.e München</h3><p>Die große Publikumsmesse für Reisen und Freizeit auf der Messe&nbsp;München.</p><a class="more-link" href="https://free-muenchen.de" target="_blank" rel="noopener">Zur Messe</a></article>
      <article class="ev-fair reveal"><div class="ev-date">Termin folgt</div><h3 data-type>Active Connected</h3><p>Auf der Active Connected leiten wir den Bereich&nbsp;Racketsports.</p></article>
    </div>
    <div class="logos ev-logos">
      <div class="lg" role="img" aria-label="Active Connected"><span class="t">Messe</span><div class="m" data-logo="activeconnected" data-h="40"></div></div>
      <div class="lg" role="img" aria-label="Best-of-Three Challenge"><span class="t">Events</span><div class="m" data-logo="b3" data-h="56"></div></div>
      <div class="lg" role="img" aria-label="Sports Tech Nation"><span class="t">Messe</span><div class="m" data-logo="stn" data-h="40"></div></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="ev-faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zu unseren <span class="hl">Events.</span></h2>
    <div class="faq-list">
<?php foreach ($evFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Dein Club beim nächsten <span class="kw">Event?</span></h2>
    <p class="lead" style="margin:18px auto 0">Ob Turnier, Messe oder ein eigenes Format auf deiner Anlage, sprich uns an.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = []; $tcFormButton = 'Event anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
