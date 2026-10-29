<?php
/**
 * SMTP-Konfiguration für das Kontaktformular
 *
 * Kopieren Sie diese Datei nach inc/smtp-config.php und tragen Sie Ihre
 * SMTP-Zugangsdaten ein. inc/smtp-config.php wird nicht ins Repository übernommen.
 */

return [
    'host'   => 'prod-mta-06.swg-srv.net',
    'port'   => 2525,

    // Verschlüsselung: '' (keine), 'tls', 'ssl'
    'secure' => 'tls',

    'auth' => true,

    // Login (oft die E-Mail-Adresse des Postfachs)
    'username' => 'IHRE_EMAIL@domain.de',

    // SMTP-Passwort
    'password' => 'IHR_PASSWORT',

    // Absender (From) – sollte zum SMTP-Login passen
    'from_email' => 'info@padelbee.de',
];
