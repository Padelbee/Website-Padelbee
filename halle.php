<?php
require __DIR__ . '/inc/tc/layout.php';
// Inhalt nach Martins neuestem Claude-Entwurf (the-court.com/courts#c-hallen, Stand 23.11.2026),
// Firmenpräsentation 2026 Folie 12 und den Hallen-Ratgebern aus Martins Blog (Polycarbonat oder ThermoRoof, Padel im Winter).
$hallenFaq = [
    ['frage' => 'Wie viel Platz braucht eine Padelhalle?', 'antwort' => 'Eine Polycarbonat-Halle braucht für einen Court 12 × 21 m, also 252 m², für vier Courts 26 × 50 m. Die gedämmte ThermoRoof-Halle braucht für einen Court 13 × 27 m und für vier Courts 28 × 51 m. Breite, Länge und Höhe sind flexibel, beide Hallen sind erweiterbar. Die Preise starten bei 280 €/m² netto. Alle Maße im Überblick findest du im <a href="#h-systeme">Vergleich der beiden Hallensysteme</a>.'],
    ['frage' => 'Was kostet eine Padelhalle?', 'antwort' => 'Eine Padelhalle kostet ab 280 €/m² netto. Der Preis hängt vom System, Polycarbonat oder ThermoRoof, und von der Größe ab. Für die Gesamtkalkulation kommen der Court ab 27.000 € netto und das Fundament mit einem Richtwert von rund 35.000 € dazu. Mehr dazu liest du unter <a href="/courts">Padel-Courts</a> und beim <a href="/courts#c-fundament">Fundament</a>.'],
    ['frage' => 'Polycarbonat oder ThermoRoof, was passt zu mir?', 'antwort' => 'Polycarbonat ist der Einstieg, leicht, hell und günstig, mit 8 mm Exolon offen oder vollständig geschlossen. ThermoRoof ist die Premium-Lösung mit 40 mm Dämmung, beheizbar und gemacht für den Ganzjahresbetrieb. Beide Hallen haben flexible Maße, hohe Schnee- und Windlasten, seitliche Schiebewände zur Lüftung und lassen sich mit Photovoltaik auf dem Dach kombinieren.'],
    ['frage' => 'Lohnt sich eine Halle für Padel?', 'antwort' => 'Ein Outdoor-Court spielt die halbe Saison, eine Halle spielt das ganze Jahr. Mit Dach fällt kein Termin wegen Regen, Wind oder Schnee aus, und jede Stunde ist buchbar. Trainings, Kurse und Turniere lassen sich verlässlich planen. Du kannst mit einem oder zwei Courts starten, denn die Halle ist erweiterbar, wenn die Nachfrage steigt.'],
];
tc_page_start([
    'path' => '/halle',
    'title' => 'Padel Halle bauen · Polycarbonat & ThermoRoof · Padelbee',
    'description' => 'Padel Halle mit Polycarbonat oder ThermoRoof für 1 bis 4 Courts, ab 280 €/m² netto. Alle Maße im Vergleich, Hallensystem und Court aus einer Hand von Padelbee.',
    'breadcrumb' => ['Halle' => '/halle'],
    'og_image' => '/media/courts/halle.jpg',
    'extra_scripts' => '<link rel="stylesheet" href="/media/tc/p-halle.css?v=' . TC_ASSET_VERSION . '">' . "\n" . '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
    'schema' => [
        tc_schema_service(
            'Padel-Hallen',
            'Hallensysteme für Padel-Courts aus Polycarbonat (8 mm Exolon) und ThermoRoof (40 mm Isolierung) für 1 bis 4 Courts, ab 280 €/m² netto. Breite, Länge und Höhe flexibel, hohe Schnee- und Windlasten, Photovoltaik integrierbar.',
            '/halle',
            ['serviceType' => 'Hallenbau für Padel', 'image' => '/media/courts/halle.jpg']
        ),
        tc_schema_faq(array_map(fn($f) => ['frage' => $f['frage'], 'antwort' => strip_tags($f['antwort'])], $hallenFaq), '/halle'),
    ],
]);
?>
<section class="band dark grid-bg c-hero">
  <div class="inner">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Halle</p>
      <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padel Halle · Polycarbonat · ThermoRoof</span>Moderne <span class="kw">Hallen.</span></h1>
      <p class="lead">Für deine Padel Halle haben wir uns bewusst für das Gesamtsystem von Padel Factory entschieden, <a href="/courts">Courts</a> und Hallensystem aus einer Hand. Das garantiert technisch sauber abgestimmte, langlebige Gesamtkonzepte. Darüber hinaus haben wir weitere Partner für den Hallenbau und suchen für dich die richtige Lösung.</p>
      <div class="ctas" style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px"><a class="btn" href="#kontakt">Halle anfragen</a><a class="btn ghost" href="#h-systeme">Hallensysteme vergleichen</a></div>
    </div>
    <figure class="courtfig courtphoto"><img src="/media/courts/halle.jpg" alt="Polycarbonat-Halle mit zwei Courts, Luftansicht als Rendering"></figure>
  </div>
  <div class="inner" style="padding-block:0 40px">
    <div class="c-stats">
      <div><b><small>ab</small> 280 €</b><span>pro m² netto</span></div>
      <div><b data-count="2">2</b><span>Hallensysteme</span></div>
      <div><b>1 bis 4</b><span>Courts<em class="st-sub">Beispielmaße</em></span></div>
      <div><b>+40 mm</b><span>Isolierung<em class="st-sub">beim ThermoRoof</em></span></div>
    </div>
  </div>
</section>

<section class="band grid-bg" id="h-warum">
  <div class="inner">
    <p class="label" data-type>Padel im Winter</p>
    <h2 class="reveal">Eine Halle spielt das <span class="hl">ganze Jahr.</span></h2>
    <p class="lead">Ein Outdoor-Court spielt die halbe Saison. Im Sommer sind Outdoor-Courts voll, im November stehen sie leer. Genau dann suchen Spieler einen Platz und zahlen dafür.</p>
    <div class="gest">
      <article class="gbox reveal"><div class="k">Mehr Spielzeit</div><p>Mit Dach fällt kein Termin wegen Regen, Wind oder Schnee aus.</p><p>Jede Stunde ist buchbar.</p></article>
      <article class="gbox reveal"><div class="k">Mehr Planbarkeit</div><p>Trainings, Kurse und Turniere lassen sich verlässlich planen.</p><p>Das bindet Spieler an deinen Standort.</p></article>
      <article class="gbox reveal"><div class="k">Mehr Energie</div><p>Auf dem Hallendach ist Photovoltaik möglich.</p><p>Der Strom versorgt Licht, Heizung und <a href="/automatenloesungen">Automaten</a>.</p></article>
      <article class="gbox reveal"><div class="k">Wachsen nach Bedarf</div><p>Starte mit einem oder zwei Courts.</p><p>Die Halle ist erweiterbar, wenn die Nachfrage steigt.</p></article>
    </div>
  </div>
</section>

<section class="band" id="h-systeme" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>Hallensysteme</p>
    <h2 class="reveal">Zwei Systeme. Ein <span class="hl">Ziel.</span></h2>
    <p class="lead">Wer Padel ernst meint, braucht irgendwann ein Dach. Wir setzen auf zwei Hallensysteme für ein Ziel, spielen bei jedem Wetter.</p>
    <p class="lead">Die Maße sind Beispielmaße.</p>
    <div class="h-sys">
      <article class="card reveal">
        <div class="k">Einstieg</div>
        <h3 data-type>Polycarbonat</h3>
        <p>Leicht, hell und günstig. Die Überdachung besteht aus 8 mm Exolon und ist offen oder vollständig geschlossen möglich.</p>
        <div class="facts vm-facts"><span>8 mm Exolon</span><span>Offen oder geschlossen</span><span>9,42 m Höhe bei 1 Court</span></div>
        <table class="h-tab"><thead><tr><th>Courts</th><th>Maße</th><th>Fläche</th></tr></thead><tbody>
          <tr><td>1 Court</td><td>12 × 21 m</td><td>252 m²</td></tr>
          <tr><td>2 Courts</td><td>25 × 26 m</td><td>666 m²</td></tr>
          <tr><td>3 Courts</td><td>26 × 36 m</td><td>932 m²</td></tr>
          <tr><td>4 Courts</td><td>26 × 50 m</td><td>1.290 m²</td></tr>
        </tbody></table>
      </article>
      <article class="card reveal">
        <div class="k">Premium</div>
        <h3 data-type>ThermoRoof</h3>
        <p>Mit 40 mm Isolierung, beheizbar und optimal für den Ganzjahresbetrieb.</p>
        <div class="facts vm-facts"><span>+40 mm Isolierung</span><span>Beheizbar</span><span>9,42 m Höhe</span></div>
        <table class="h-tab"><thead><tr><th>Courts</th><th>Maße</th><th>Fläche</th></tr></thead><tbody>
          <tr><td>1 Court</td><td>13 × 27 m</td><td>354 m²</td></tr>
          <tr><td>4 Courts</td><td>28 × 51 m</td><td>1.412 m²</td></tr>
        </tbody></table>
      </article>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="h-technik">
  <div class="inner">
    <p class="label" data-type>Preise &amp; Technik</p>
    <h2 class="reveal">Preise &amp; <span class="kw">Technik.</span></h2>
    <div class="h-price reveal">
      <div><span>Hallen ab</span><b>280 €/m²</b><em>netto</em></div>
      <div><p>Der Preis hängt vom System und von der Größe deiner Halle ab.</p><p>Für die Gesamtkalkulation kommen der Court ab 27.000 € netto und das Fundament mit rund 35.000 € als Richtwert dazu. Beides findest du unter <a href="/courts">Padel-Courts</a>.</p><a class="btn" href="#kontakt">Hallenpreis anfragen</a></div>
    </div>
    <div class="cards c4">
      <article class="card reveal"><div class="k">Maße</div><h3 data-type>Flexibel</h3><p>Breite, Länge und Höhe sind flexibel. Beide Hallen sind beliebig erweiterbar.</p></article>
      <article class="card reveal"><div class="k">Statik</div><h3 data-type>Schnee und Wind</h3><p>Hohe Tragfähigkeit für Schnee- und Windlasten.</p></article>
      <article class="card reveal"><div class="k">Wände &amp; Luft</div><h3 data-type>Offen oder zu</h3><p>Verschiebbare Seitenwände oder Fensterelemente, seitliche Schiebepaneele für natürliche Belüftung.</p></article>
      <article class="card reveal"><div class="k">Klima &amp; Energie</div><h3 data-type>Heizung und PV</h3><p>Beheizbare Ausführungen sind möglich, eine PV-Anlage lässt sich auf dem Hallendach integrieren.</p></article>
    </div>
  </div>
</section>

<section class="band grid-bg" id="h-partner">
  <div class="inner">
    <p class="label" data-type>Hallenpartner</p>
    <h2 class="reveal">Eine Halle. Der <span class="hl">passende</span> Partner.</h2>
    <p class="lead">Unser Hauptsystem kommt von Padel Factory, Courts und Halle sind aufeinander abgestimmt. Für Sonderfälle arbeiten wir mit Haltec, DS Stahl und Okatent.</p>
    <div class="logos">
      <div class="lg" role="img" aria-label="Padel Factory"><span class="t">Gesamtsystem</span><div class="m" data-logo="padelfactory" data-h="48"></div></div>
      <div class="lg" role="img" aria-label="Haltec"><span class="t">Hallenbau</span><div class="m" data-logo="haltec" data-h="48"></div></div>
      <div class="lg" role="img" aria-label="DS Stahl"><span class="t">Hallenbau</span><div class="m" data-logo="dsstahl" data-h="48"></div></div>
      <div class="lg" role="img" aria-label="Okatent"><span class="t">Hallenbau</span><div class="m" data-logo="okatent" data-h="48"></div></div>
    </div>
    <div class="hallimgs one">
      <figure class="reveal"><img src="/media/courts/dshs.jpg" alt="Hallenkonzept mit Glasfront, Rendering" loading="lazy"><figcaption>Hallenkonzept · Rendering</figcaption></figure>
    </div>
    <div class="partnerimgs"><figure class="reveal"><img src="/media/courts/haltec_industriehalle.webp" alt="Stahlhalle von Haltec mit Vordach und Fensterbändern" loading="lazy"><figcaption>Stahlhalle</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_firstlichtband.webp" alt="Firstlichtband in einer Haltec-Stahlhalle, Innenansicht" loading="lazy"><figcaption>Firstlichtband</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_fassade.webp" alt="Fassade einer Haltec-Halle mit Fensterband" loading="lazy"><figcaption>Fensterband</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_sektionaltor.webp" alt="Haltec-Mehrzweckhalle mit verglastem Sektionaltor" loading="lazy"><figcaption>Sektionaltor</figcaption></figure><figure class="reveal"><img src="/media/courts/haltec_stahlhalle.webp" alt="Gedämmte Haltec-Stahlhalle mit Bürotrakt" loading="lazy"><figcaption>Gedämmte Halle</figcaption></figure></div>
    <p class="fav-note fav-note-l">Fotos von unserem Hallenpartner <a href="https://www.haltec.de" target="_blank" rel="noopener">Haltec</a>.</p>
    <p class="a-trust">Ein Beispiel aus unseren Projekten ist die Padelhalle mit vier Panorama Courts an der Sporthochschule Köln. Weitere Projekte findest du unter <a href="/referenzen">Referenzen</a>.</p>
  </div>
</section>

<section class="band grid-bg" id="h-faq" style="background-color:var(--grey-050)">
  <div class="inner">
    <p class="label" data-type>FAQ</p>
    <h2 class="reveal">Fragen zur <span class="hl">Padel Halle.</span></h2>
    <div class="faq-list">
<?php foreach ($hallenFaq as $f): ?>
      <details class="faq"><summary><h3><?= tc_h($f['frage']) ?></h3></summary><p><?= $f['antwort'] ?></p></details>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Welche Halle passt auf <span class="kw">deine Fläche?</span></h2>
    <p class="lead" style="margin:18px auto 0">Lass uns prüfen, welche Halle auf deine Fläche passt. Wir vergleichen Polycarbonat und ThermoRoof mit allen Maßen für dich. Sichere dir jetzt dein unverbindliches Beratungsgespräch.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcPreselect = ['Hallenlösungen']; $tcFormButton = 'Halle anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
