<?php
// Kopie als inc/admin-config.php anlegen (nicht committen). Hash erzeugen mit:
// php -r 'echo password_hash("DEIN-PASSWORT", PASSWORD_DEFAULT), "\n";'
// Produktion: statt dieser Datei die Umgebungsvariable PADELBEE_ADMIN_HASH setzen (K8s-Secret).
return ['hash' => ''];
