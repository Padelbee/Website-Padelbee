<?php
require __DIR__ . '/inc/tc/layout.php';
$intro = 'Padelbee ist ein innovatives Start-up, das sich der Projektentwicklung von Padelanlagen verschrieben hat. Von der Standortanalyse, der Bauplanung, dem Platzbau und der Baubegleitung, einem maßgeschneiderten Betreiberkonzept bis hin zum Padelbee-Partnerschip mit dem vollen Marketing- und Business-Support für den laufenden &amp; nachhaltigen Padel-Erfolg. Padelbee bietet eine 360 Grad Lösung. Auftraggeber sind Vereine, gewerbliche Anlagen und oder Tourismusanbieter, Freizeitparks. Mit unserem Know-how und dem notwendigen Rundumblick bringen wir die Vorhaben unserer Kunden gewinnbringend voran.';
$introKurz = 'Padelbee ist ein innovatives Start-up, das sich der Projektentwicklung von Padelanlagen verschrieben hat.';
$introRest = trim(substr($intro, strlen($introKurz)));
$stelle = 'Zur Verstärkung unseres Teams suchen wir einen engagierten Werkstudenten (m/w/d) im Bereich Social Media, Marketing &amp; Sales.';
$bloecke = [
    ['Deine Aufgaben', [
        'Sales Assistance: Unterstützung im Vertrieb, beispielsweise bei der Kundenakquise und -betreuung sowie bei der Organisation von Events und Promotions.',
        'Marketing Support: Mitarbeit bei der Planung und Umsetzung von Marketingkampagnen, einschließlich Content-Erstellung und Performance-Analyse.',
        'Marktforschung: Durchführung von Recherchen zu Markttrends und Wettbewerbern im Sport- und Freizeitbereich.',
        'Social Media Management: Erstellung und Pflege von Inhalten für unsere Social-Media-Kanäle, um die Markenbekanntheit zu steigern und die Community zu erweitern',
    ]],
    ['Dein Profil', [
        'Eingeschriebener Student (m/w/d) im Bereich Sportwissenschaften, Marketing, Betriebswirtschaft oder einem verwandten Studiengang.',
        'Leidenschaft für Sport, idealerweise mit Interesse oder Erfahrung im Padel-Sport.',
        'Erste Erfahrungen im Social Media Management und Marketing sind von Vorteil.',
        'Kreativität, Kommunikationsstärke und eine selbstständige Arbeitsweise.',
        'Gute Deutsch- und Englischkenntnisse in Wort und Schrift.',
    ]],
    ['Wir bieten', [
        'Flexible Arbeitszeiten, die sich mit deinem Studium vereinbaren lassen.',
        'Mitarbeit in einem dynamischen und sportbegeisterten Team.',
        'Möglichkeit, eigene Ideen einzubringen und Verantwortung zu übernehmen.',
        'Einblicke in die Start-up-Welt und die Sportbranche.',
    ]],
];
$jobDesc = '<p>' . $intro . '</p><p>' . $stelle . '</p>';
foreach ($bloecke as $b) {
    $jobDesc .= '<p><strong>' . $b[0] . ':</strong></p><ul><li>' . implode('</li><li>', $b[1]) . '</li></ul>';
}
tc_page_start([
    'path' => '/jobs',
    'title' => 'Jobs bei Padelbee · Werkstudent Social Media, Marketing & Sales · THE COURT',
    'description' => 'Jobs bei Padelbee: Werde Teil des Padel-Booms! Aktuelle Stellenangebote, zum Beispiel Werkstudent (m/w/d) im Bereich Social Media, Marketing & Sales.',
    'breadcrumb' => ['Jobs' => '/jobs'],
    'schema' => [[
        '@type' => 'JobPosting',
        'title' => 'Werkstudent (m/w/d) Social Media, Marketing & Sales',
        'description' => html_entity_decode($jobDesc),
        'datePosted' => '2026-10-21',
        'employmentType' => 'PART_TIME',
        'hiringOrganization' => ['@id' => TC_ORG_ID],
        'jobLocation' => [
            '@type' => 'Place',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Münchner Str. 15',
                'postalCode' => '85774',
                'addressLocality' => 'Unterföhring',
                'addressRegion' => 'Bayern',
                'addressCountry' => 'DE',
            ],
        ],
        'url' => tc_url('/jobs'),
    ]],
]);
?>
<section class="band dark grid-bg a-hero">
  <div class="inner" style="padding-block:clamp(56px,8vw,110px)">
    <div>
      <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; Jobs</p>
      <p class="label" style="color:var(--white)" data-type>Jobs · Wir suchen Verstärkung</p>
      <h1>Mach mit bei <span class="kw">Padelbee.</span></h1>
      <p class="lead"><?= $introKurz ?></p>
    </div>
    <div class="jobs-art"><img src="/images/bienchen.png" alt="Drei Padelbee-Bienen als Symbol für das Team" width="467" height="452"></div>
  </div>
</section>

<section class="band grid-bg" id="j-stelle">
  <div class="inner">
    <p class="label">Über Padelbee</p>
    <p class="lead reveal" style="max-width:860px"><?= $introRest ?></p>
    <p class="label" style="margin-top:clamp(48px,6vw,80px)">Jobangebote</p>
    <h2 class="reveal">Werkstudent (m/w/d) Social Media, Marketing &amp; <span class="hl">Sales.</span></h2>
    <p class="lead"><?= $stelle ?></p>
    <div class="cards c3">
<?php foreach ($bloecke as $b): ?>
      <article class="card reveal"><div class="k">Werkstudent (m/w/d)</div><h3 data-type><?= $b[0] ?></h3><ul class="ticks"><?php foreach ($b[1] as $li): ?><li><?= $li ?></li><?php endforeach; ?></ul></article>
<?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band dark grid-bg" id="j-bewerbung">
  <div class="inner">
    <p class="label">Bewerbung</p>
    <h2 class="reveal">Bewirb dich <span class="kw">jetzt.</span></h2>
    <p class="lead">Wenn du Lust hast, Teil von Padelbee zu werden und den Padel-Sport in Deutschland mit uns voranzutreiben, freuen wir uns auf deine Bewerbung! Bitte sende deine Unterlagen (Anschreiben, Lebenslauf, relevante Zeugnisse) per E-Mail an: <a href="mailto:kontakt@padelbee.de" style="color:var(--yellow)">kontakt@padelbee.de</a></p>
    <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:34px"><a class="btn" href="mailto:kontakt@padelbee.de?subject=Bewerbung%20Werkstudent%20(m%2Fw%2Fd)">Jetzt bewerben</a><a class="btn ghost" href="/Padelbee-Stellenanzeige-Werkstudent.pdf" target="_blank" rel="noopener">Download PDF</a></div>
  </div>
</section>
<?php tc_page_end();
