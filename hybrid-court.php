<?php
// DEV-1667: Der Hybrid Court entfällt (Entscheidung Bietal, 24.11.2026; keine Inhalte in Martins Entwurf und Präsentationen).
// Dauerhafte Weiterleitung auf die Court-Übersicht, damit Besucher und Google-Ranking nicht ins Leere laufen.
header('Location: /courts', true, 301);
exit;
