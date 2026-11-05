<?php
/**
 * Kontaktbereich wie auf der Startseite (#kontakt) für Unterseiten.
 * Optional vorher $tcPreselect = ['Erstscreening'] setzen (Werte aus $tcInterests in kontakt-form.php).
 * Die Seite muss kontakt-form.js und Turnstile laden (extra_scripts wie in index.php).
 */
?>
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
<?php include __DIR__ . '/kontakt-form.php'; ?>
    <div class="addr">Scheck Club · Münchner Str. 15 · 85774 Unterföhring</div>
    <div class="urls">padelbee.de</div>
  </div>
</section>
