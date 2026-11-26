<?php
// DEV-1774: Hybrid Court ist laut Martin (Mail vom 25.11.2026) nicht mehr im Angebot.
// Die Seite bleibt als dauerhafte Umleitung (301) auf die Court-Übersicht bestehen,
// damit Suchmaschinen und alte Links auf einer passenden Seite landen.
header('Location: https://' . $_SERVER['HTTP_HOST'] . '/courts', true, 301);
exit;
