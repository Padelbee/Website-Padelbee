<?php
/**
 * Orgame Lead-Intake – Konfiguration für lokale Entwicklung.
 *
 * In Produktion kommen die Werte aus den Umgebungsvariablen ORGAME_LEAD_INTAKE_URL und
 * ORGAME_LEAD_INTAKE_SECRET (K8s-Secret padelbee-orgame). Diese Datei nur lokal nach
 * inc/orgame-config.php kopieren; sie ist gitignored und wird im Docker-Image entfernt.
 */

return [
    'url'    => 'https://orga.mpm-ag.de/api/webhooks/lead-intake',
    'secret' => 'IHR_LEAD_INTAKE_SECRET',
];
