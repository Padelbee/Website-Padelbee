# Padelbee-Relaunch: Anleitung für Beti

Ticket: **DEV-1086** in issuform (deine Unteraufgaben hängen daran). Neues Design „THE COURT by Padelbee“ von Martin Gaffal, Vorlage: https://padelbee.github.io/Website-Padelbee/

## Wo du arbeitest: alles im Terminal
- **Website (Dev):** https://padelbeedev.devvibe.io (nicht bei Google, Formular schickt nichts raus)
- **VS Code im Browser:** https://padelbeedev-code.devvibe.io (Passwort per Mail von Matthias). Dort öffnest du nur das **Terminal** (Menü ☰ → Terminal → Neues Terminal, oder Strg+ö). Gearbeitet wird diesmal komplett im Terminal mit Claude Code, nicht durch Klicken im Editor.
- Das Terminal startet im Projektordner `/var/www/html`. Das ist der Zweig `staging`, und genau das ist live auf padelbeedev zu sehen.
- **Nie auf `main` pushen**, `main` ist die Live-Seite padelbee.de.

### Ablauf
```bash
claude                      # beim ersten Mal: mit deinem Claude-Konto anmelden (Link öffnet sich im Browser)
```
In Claude Code sagst du, was du willst, z. B.: „Lies ANLEITUNG.md und baue Unteraufgabe DEV-1151: standortanalyse.php im neuen Design.“ Claude Code ändert die Dateien direkt im Webroot, du siehst das Ergebnis sofort nach dem Neuladen auf padelbeedev.devvibe.io.

Wenn eine Seite passt, im Terminal (oder Claude Code darum bitten):
```bash
python3 tests/seo_check.py --base http://localhost     # Prüfung, siehe unten
git status                                            # was hat sich geändert?
git add standortanalyse.php media/uploads/…           # nur deine Dateien
git commit -m "Standortanalyse im neuen Design (DEV-1151)"
git push                                              # sichert auf GitHub, Zweig staging
```
Solange im Webroot etwas Uncommittetes liegt, holt der Pod keine fremden Änderungen von GitHub. Also regelmäßig committen und pushen.

## Wie eine Seite gebaut ist
Jede Seite ist eine PHP-Datei im Hauptordner (z. B. `standortanalyse.php`). Die URL bleibt ohne `.php` (`/standortanalyse`), das regelt `.htaccess` schon. Vorbild: `courts.php` und `automatenloesungen.php`.

```php
<?php
require __DIR__ . '/inc/tc/layout.php';
tc_page_start([
    'path' => '/standortanalyse',                 // Pflicht, ohne Slash am Ende
    'title' => '…',                               // einmalig, 50–60 Zeichen
    'description' => '…',                         // 120–160 Zeichen
    'breadcrumb' => ['Standortanalyse' => '/standortanalyse'],
    'schema' => [tc_schema_service('Erstscreening & Standortanalyse', '…', '/standortanalyse')],
]);
?>
<section class="band">…genau EINE <h1> pro Seite…</section>
<?php tc_page_end();
```
- Header, Footer, Menü, Cookie-Banner und **Tracking (Google Analytics, CCM19, HubSpot)** kommen automatisch aus `inc/tc/layout.php`. Nicht in die Seite kopieren, nicht entfernen.
- Strukturierte Daten (JSON-LD) über die Funktionen in `inc/tc/schema.php`: `tc_schema_service`, `tc_schema_product`, `tc_schema_person`, `tc_schema_faq`, `tc_schema_item_list` u. a.
- CSS-Klassen aus `media/tc/the-court.css` (Design des Kunden) verwenden, eigene Ergänzungen in `media/tc/tc-extra.css`. Nach Änderungen an `media/tc/*` die Zahl `TC_ASSET_VERSION` in `inc/tc/layout.php` um eins erhöhen (sonst sehen Besucher die alte Datei).
- Bilder nach `media/uploads/` (WebP oder JPG, max. ca. 300 KB), immer mit `alt`-Text.
- Ansprache: **du** (wie im Kundendesign).

## SEO: das Wichtigste
Die alte Seite steht bei Google gut. Deshalb:
- Inhalte, Überschriften und Schlüsselwörter der alten Seite übernehmen (gerne neu formulieren, nichts Wichtiges weglassen). Die alten Seiten sind bis zum Livegang noch auf https://padelbee.de zu sehen, die Texte stehen außerdem in `lang/de.php` und in den alten PHP-Dateien (in `git show main:standortanalyse.php` usw.).
- Titel und H1 der alten Seite als Ausgangspunkt nehmen.
- URL nie ändern.

## Prüfen, bevor du eine Unteraufgabe abschließt
Im Terminal (die Website läuft im selben Pod unter `localhost`):
```bash
python3 tests/seo_check.py --base http://localhost
python3 tests/seo_check.py --base http://localhost --only pages --only schema   # nur Seiten und JSON-LD
```
Deine Seiten müssen ohne FAIL durchlaufen (Seiten, die noch niemand gebaut hat, dürfen noch FAIL sein). Zusätzlich im Browser anschauen: Desktop und Handy, Menü, Links, keine Fehler in der Konsole.

## Nicht anfassen
`m-senden.php`, `.htaccess`, `inc/tc/layout.php` (außer `TC_ASSET_VERSION`), `inc/tc/schema.php`, `k8s/`, `Dockerfile`. Wenn du dort etwas brauchst: Matthias fragen.
