# Padelbee-Relaunch: Anleitung für Beti

Ticket: **DEV-1086** in issuform (deine Unteraufgaben hängen daran). Neues Design „THE COURT by Padelbee“ von Martin Gaffal, Vorlage: https://padelbee.github.io/Website-Padelbee/

## Wo du arbeitest: im Terminal auf deinem Mac, mit Claude Code und dem devvibe-Plugin
Voraussetzung ist die Einrichtung aus der devvibe-claude-README (gh angemeldet, issuform-MCP, Plugin `devvibe`, HQ unter `~/local/devvibe/hq`). Dazu kommt die Einladung in die GitHub-Organisation **Padelbee**.

### Einmalig: Projektordner nach devvibe-Struktur anlegen
Kundenprojekte liegen immer unter `~/local/kunden/<kunde>/<repo>`. Für Padelbee also:
```bash
mkdir -p ~/local/kunden/padelbee
gh repo clone Padelbee/Website-Padelbee ~/local/kunden/padelbee/Website-Padelbee
cd ~/local/kunden/padelbee/Website-Padelbee
git switch staging                     # Arbeitszweig, nie main
git pull                               # vorher immer holen
cd ~/local/devvibe/hq && git pull      # HQ aktualisieren (Projekt padelbee-website ist dort eingetragen)
```
Genau dieser Pfad ist in `~/local/devvibe/hq/projects.md` hinterlegt. Startest du Claude in diesem Ordner, bekommt es automatisch den Projektstand aus HQ (`stand/padelbee-website.md`) und findet über issuform den Steckbrief von Padelbee.

### Jede Aufgabe
```bash
cd ~/local/kunden/padelbee/Website-Padelbee && git pull
claude
```
In Claude Code:
```
/plan DEV-1151          # übernimmt die Unteraufgabe, prüft Fakten, setzt sie auf "in Arbeit"
/implement DEV-1151     # baut die Seiten, prüft, committet und pusht auf staging
```
- Nach dem Push ist die Änderung nach etwa 20 Sekunden auf **https://padelbeedev.devvibe.io** zu sehen (Vorschau, nicht bei Google, Formular schickt nichts raus). Dort anschauen, auch die Handy-Ansicht.
- Passt etwas nicht, sag es Claude einfach in derselben Session.
- Am Ende setzt Claude die Unteraufgabe auf **in_review** mit einem kurzen Kommentar. Kein PR, kein Merge, kein Deploy, keine Mail an Kunden: das macht Matthias.
- Am Ende der Session schreibt Claude den Stand nach HQ (so steht es in den Regeln des Plugins).

### Regeln
- **Nur Zweig `staging`, nie `main`.** `main` gehört Martin (sein ursprünglicher Entwurf, daraus baut GitHub Pages).
- Das Repo ist **öffentlich**: keine Passwörter, Schlüssel oder Zugangsdaten in Dateien oder Commits.
- Vor jeder Arbeit `git pull`, nach jeder Arbeit `git push`.

### Notfall ohne Mac: VS Code im Browser
https://padelbeedev-code.devvibe.io (Passwort per Mail) hat ein Terminal mit Claude Code direkt im Webroot der Vorschau (dort `gh auth login`, `gh auth setup-git`, `claude`). Nicht gleichzeitig auf dem Mac und dort arbeiten, sonst gibt es Konflikte. Liegen dort uncommittete Änderungen, holt die Vorschau keine neuen Commits mehr.

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
Nach dem Push gegen die Vorschau:
```bash
python3 tests/seo_check.py --base https://padelbeedev.devvibe.io --skip-form
python3 tests/seo_check.py --base https://padelbeedev.devvibe.io --skip-form --only pages --only schema
```
Deine Seiten müssen ohne FAIL durchlaufen (Seiten, die noch niemand gebaut hat, dürfen noch FAIL sein). Zusätzlich im Browser anschauen: Desktop und Handy, Menü, Links, keine Fehler in der Konsole.

## Nicht anfassen
`m-senden.php`, `.htaccess`, `inc/tc/layout.php` (außer `TC_ASSET_VERSION`), `inc/tc/schema.php`, `Dockerfile`. Wenn du dort etwas brauchst: Matthias fragen.
