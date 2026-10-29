# Padelbee-Website (padelbee.de)

Lies zuerst `ANLEITUNG.md`. Kurzfassung für Claude Code:
- Repo Padelbee/Website-Padelbee (öffentlich!). Arbeite nur auf dem Zweig `staging`, nie auf `main` (Martins Entwurf, GitHub Pages). Kein Force-Push. Keine Passwörter, Schlüssel oder Zugangsdaten committen.
- Seiten: PHP-Dateien im Hauptordner mit `tc_page_start()` / `tc_page_end()` aus `inc/tc/layout.php`; Vorbild `courts.php`.
- Jede Seite: eigener Title und Meta-Description, genau eine `<h1>`, JSON-LD über `inc/tc/schema.php`, URLs der alten Seite nie ändern.
- Tracking (GA4, CCM19, HubSpot) kommt aus dem Layout und bleibt drin.
- Nach Änderungen an `media/tc/*`: `TC_ASSET_VERSION` in `inc/tc/layout.php` hochzählen.
- Vor jedem Abschluss: `python3 tests/seo_check.py --base http://localhost` ohne FAIL für die geänderten Seiten.
- Beti arbeitet im Terminal: Dateien direkt ändern, danach git add (nur eigene Dateien), commit mit Ticketnummer (DEV-11xx), push auf staging. Erkläre ihr kurz, was du tust.
- Nicht ändern: `m-senden.php`, `.htaccess`, `inc/tc/schema.php`, `Dockerfile`.
- Ansprache auf der Website: du.
