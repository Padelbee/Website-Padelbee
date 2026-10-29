<?php
/**
 * Kontaktformular im neuen Design (Bereich #kontakt der Startseite).
 * Postet an /m-senden.php mit denselben Feldnamen wie das bisherige Formular:
 * interesse, website (Honeypot), unternehmen_organisation, city, name, email, tel, text,
 * datenschutz (Pflicht-Checkbox) und cf-turnstile-response (setzt das Turnstile-Widget).
 * Fehler kommen von m-senden.php per Redirect auf /?error=spam|ratelimit|mail|captcha.
 */
$tcErrors = [
    'spam' => 'Spam erkannt. Bitte versuche es erneut.',
    'ratelimit' => 'Zu viele Anfragen. Bitte warte eine Stunde.',
    'mail' => 'Fehler beim Senden. Bitte versuche es erneut.',
    'captcha' => 'Die Sicherheitsprüfung ist fehlgeschlagen. Bitte lade die Seite neu und versuche es erneut.',
];
$tcError = (string) ($_GET['error'] ?? '');
// Werte entsprechen exakt den bisherigen Formularwerten (Auswertung in m-senden.php / Orgame).
$tcInterests = [
    'Erstscreening' => 'Erstscreening',
    'Padel Court bauen - Bauplanung, Platzbau & Baubegleitung' => 'Court bauen und Baubegleitung',
    'Maßgeschneidertes Betreiberkonzept' => 'Betreiberkonzept',
    'Padelbee Powerplay' => 'Powerplay®',
    'Angebotsvergleich' => 'Angebotsvergleich',
    'Automatenlösungen' => 'Automatenlösungen',
    'Padelcourt' => 'Padel-Court',
    'Pickleball' => 'Pickleball',
    'Tennisplatzbau' => 'Tennisplatzbau',
    'Hallenlösungen' => 'Hallenlösungen',
];
?>
    <div class="kform" id="anfrage">
      <h3>Projekt anfragen</h3>
      <p class="kf-intro">Erzähl uns kurz, was du vorhast. Wir melden uns innerhalb von 24 Stunden bei dir.</p>
<?php if ($tcError !== '' && isset($tcErrors[$tcError])): ?>
      <div class="kf-alert" role="alert"><strong>Fehler:</strong> <?= tc_h($tcErrors[$tcError]) ?></div>
<?php endif; ?>
      <form action="/m-senden.php" method="POST" id="kontakt-formular">
        <fieldset>
          <legend>Wofür interessierst du dich? (optional)</legend>
          <div class="kf-chips">
<?php foreach ($tcInterests as $value => $label): ?>
            <label><input type="checkbox" class="kf-int" value="<?= tc_h($value) ?>"><?= tc_h($label) ?></label>
<?php endforeach; ?>
          </div>
        </fieldset>
        <input type="hidden" name="interesse" id="interesse" value="">
        <!-- Honeypot-Spam-Schutz (unsichtbar für Menschen) -->
        <input type="text" name="website" class="kf-hp" tabindex="-1" autocomplete="off" aria-hidden="true">
        <div class="kf-grid">
          <select id="organisation" name="unternehmen_organisation" aria-label="Unternehmen oder Organisation">
            <option value="" disabled selected>Unternehmen/Organisation wählen</option>
            <option value="Verein/Club">Verein/Club</option>
            <option value="Gewerbliche Anlage">Gewerbliche Anlage</option>
            <option value="Gemeinde">Gemeinde</option>
            <option value="Hotel/Tourismus">Hotel/Tourismus</option>
            <option value="Freizeitpark">Freizeitpark</option>
            <option value="Sonstiges">Sonstiges</option>
          </select>
          <input type="text" id="standort" name="city" placeholder="Standort" autocomplete="address-level2">
          <input class="wide" type="text" id="name" name="name" placeholder="Vorname, Nachname*" required autocomplete="name">
          <input type="email" id="email" name="email" placeholder="E-Mail-Adresse*" required autocomplete="email">
          <input type="tel" id="tel" name="tel" placeholder="Telefonnummer*" pattern="^[\+]?[(]?[0-9]{1,4}[)]?[-\s\./0-9]*$" minlength="7" title="Telefonnummer, z. B. +49 123 456789 oder 0123 456789" required autocomplete="tel">
          <textarea class="wide" id="nachricht" name="text" rows="3" placeholder="Nachricht (optional)"></textarea>
        </div>
        <p class="kf-note" style="margin-top:18px">Deine persönlichen Daten werden ausschließlich zur Bearbeitung deiner Anfrage verarbeitet und hierzu ggf. an unsere Kooperationspartner weitergegeben.</p>
        <label class="kf-check"><input type="checkbox" id="datenschutz" value="1" required><span>Ich habe die <a href="/datenschutz" target="_blank" rel="noopener">DSGVO-Hinweise (Datenschutzerklärung)</a> von Padelbee gelesen und bin damit einverstanden, dass meine Daten zur Bearbeitung meiner Anfrage an Kooperationspartner von Padelbee weitergegeben werden dürfen.</span></label>
        <!-- Cloudflare Turnstile (Bot-Schutz), wird per kontakt-form.js explizit gerendert -->
        <div style="margin-top:18px">
          <div id="turnstile-widget" data-sitekey="<?= htmlspecialchars(getenv('TURNSTILE_SITEKEY') ?: '0x4AAAAAAE_wbhBGQmqWFZoe') ?>" data-action="contact" data-language="de"></div>
          <p id="turnstile-hint" class="kf-hint" style="display:none">Bitte warte einen Moment, bis die Sicherheitsprüfung abgeschlossen ist, und sende dann erneut.</p>
        </div>
        <div class="kf-actions"><button type="submit" class="btn" id="send2">Anfrage jetzt senden</button></div>
      </form>
    </div>
