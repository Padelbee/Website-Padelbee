<?php
/**
 * Cloudflare Turnstile – Konfiguration für lokale Entwicklung.
 *
 * In Produktion kommen die Werte aus den Umgebungsvariablen TURNSTILE_SECRET und
 * TURNSTILE_HOSTNAMES (K8s-Secret padelbee-turnstile, siehe k8s/padelbee.yaml).
 * Diese Datei nur lokal nach inc/turnstile-config.php kopieren; sie ist gitignored
 * und wird im Docker-Image entfernt.
 */

return [
    // Secret Key des Widgets (Cloudflare Dashboard → Turnstile → Widget → Secret Key)
    'secret' => 'IHR_TURNSTILE_SECRET',

    // Erlaubte Hostnames, auf denen das Widget gelöst wurde (siteverify "hostname").
    // localhost/127.0.0.1 NUR lokal, niemals in Produktion.
    'hostnames' => ['localhost', '127.0.0.1'],
];
