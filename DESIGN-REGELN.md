# Design- und Qualitätsregeln für Padelbee-Unterseiten

Abgeleitet aus der Abnahme von /team, /referenzen, /automatenloesungen und /courts mit Bietal (DEV-1667, 18. bis 24.11.2026).
Gilt für jede weitere Unterseite. Ziel: jede Seite ist beim ersten Zeigen schon abnahmereif.

## 1. Inhalt und Quellen

- **Reihenfolge der Quellen:** Martins neuester Claude-Entwurf (Repo Padelbee/the-court.com, vorher `git pull`), dann die Präsentationen (Firma, Courts, Automaten), dann die alte Seite nur für URLs und Suchbegriffe. Kein Text von der alten Seite.
- **Claude-Entwurf:** zuerst komplett einbauen. Danach jeden Teil auf Nutzen für den Besucher bewerten und Unnötiges mit Begründung vorschlagen. Entfernt wird erst nach Bietals Okay.
- **Folien:** nur übernehmen, was dem Besucher nützt (echte Kaufgründe, genommene Sorgen, harte Fakten). Weglassen: allgemeine Werbesätze, Dopplungen, zu Technisches. Was weggelassen wird, immer als Tabelle melden (✅ / ❌ + Grund).
- **Nichts erfinden:** Keine neue Zahl und keine neue Behauptung. Eigene Formulierungen mit ❌ markieren und begründen.
- **Neueste Quelle gewinnt** (Beispiele: 50 Projekte statt 10 + 30, Hallen ab 280 statt 250 €/m², Herstellergarantie statt Gewährleistung, „lt. Hersteller“).
- **Rechtliches:** Herstellerangaben mit „lt. Hersteller“ kennzeichnen. Rechtliche Hinweise nennen die echte Firma (THE COURT GmbH, nicht die Marke). Keine Steuer- und Bilanzversprechen. Keine privaten Handynummern ohne Okay.
- **Marke:** Auf padelbee.de heißt es „wir“ bzw. „Padelbee“, nicht „THE COURT bietet“. Martins Blog-Links gibt es hier nicht, sie werden auf eigene Seiten umgestellt.

## 2. Text und Textbild

- **Website-Text, keine Präsentation:** Folienfragmente ohne Verb werden ganze Sätze, aber kurz. Absätze haben 2 bis 4 Zeilen, ohne Füllwörter.
- **Keine Doppelpunkt-Konstruktionen** im Fließtext („X: Y“), auch wenn Martin sie hat. Kurze technische Angaben in Produktkarten („Gekühlt: …“) sind erlaubt.
- **Keine Gedankenstriche** (– —) im sichtbaren Text. Spannen als „1 bis 4“, „2.000 bis 5.000 €“.
- **Keine künstlichen Umbrüche** (`<br>`) im Fließtext. Zusammengehörige Sätze bleiben in einem Absatz.
- **Keine Hurenkinder:** Das erledigt `the-court.js` global (letzte zwei Wörter zusammen, kurze Bindestrich-Wörter wie Single‑Court ungetrennt). Bei Überschriften mit `<span>` am Ende `&nbsp;` vor den Span setzen.
- **Textbreite:** Leads sind ca. 860 px breit mit `text-wrap: pretty`, ohne Balance, damit rechts keine leere Fläche bleibt. `balance` nur für Überschriften und zentrierte CTA-Texte.
- **Ansprache:** du. Sprachliche Änderungen an schon abgenommenen Seiten vorher vorschlagen.

## 3. Seitenaufbau

- Das Designsystem bleibt (Farben, Typo, `band`/`dark`/`grid-bg`, Karten mit gelber Oberkante). Der Aufbau richtet sich aber nach dem Inhalt der Seite und wird nicht von anderen Seiten kopiert.
- **Wechsel hell/dunkel** zwischen den Sections, keine zwei gleichen Bänder hintereinander ohne Grund.
- **Hero:** Kicker-Label in der H1 (Suchbegriff), H1, Lead, 2 Buttons (primär „… anfragen“, ghost „… ansehen“), Bild oder Visual. Kennzahlen darunter.
- **Kennzahlen:** Zusätze („lt. Hersteller“, „Stand 11/2026“) als feine zweite Zeile (`.st-sub`), kein loses Kleingedrucktes darunter. „bis zu“ klein im Label-Stil. Auf dem Handy als 2×2-Raster, alle Zahlen auf einer Höhe.
- **Lange Listen nicht als Stichpunktwand:** Inhalte gruppieren, zum Beispiel als Kästen mit Kurztext und Options-Chips im gleichmäßigen 2-Spalten-Raster, lange Chips über die volle Breite. Optionen stehen direkt unter dem Text, die freie Fläche liegt unten.
- **„Mehr Details“ (aufklappbar)** nur für ergänzende Folienfakten in Karten. Kerninhalte gehören sichtbar auf die Seite. Starke Verkaufsargumente nie verstecken.
- **Zusammengehöriges zusammen:** Eine Tabelle, die nur zu einer Karte gehört, steht in dieser Karte. Kosten werden in einem gemeinsamen Kasten zusammengefasst.
- **Hinweise sichtbar** (zum Beispiel „Die Bilder zeigen Herstellerreferenzen …“) als Bildunterschrift mit gelbem Strich links, nicht als loser Kleintext.
- **Bildunterschriften:** Projekt in einer Zeile, Zusatz („Herstellerreferenz“, „Rendering“) als feine zweite Zeile, einheitlich bei allen Bildern.
- **Hover:** Karten auf hellem Grund bekommen einen petrol-200-Rand, nicht schwarz.

## 4. CTA und Kontakt

- **Jede Seite hat ihren eigenen Abschluss-CTA** aus Martins Formulierungen (Courts „Let's build your court.“, Team „Wir sind für dich da.“, Automaten und Start „Ready. Play.“).
- **Aufbau des Abschlusses:** Titel, dezenter Untertitel (grau, etwas größer als Fließtext), dann die Ansprechpartner-Kästen (Martin, Stefan, ggf. info@) mit E-Mail als schlichter Link ohne Kopieren-Button und ohne gelben Strich, darunter der Kasten „Projekt anfragen“ mit überzeugendem Untertitel („Lass dir deine Anlage durchrechnen, im kostenlosen Erstgespräch.“) und Button. Erst der Klick klappt das Formular auf (`inc/tc/kontakt-form-toggle.php`, `$tcFormButton`).
- **Nie zur Startseite springen.** Formular und Kontakt bleiben auf derselben Seite.
- Alle 3 Kästen sind gleich breit (760 px). Auf dem Handy stehen sie untereinander.
- **Zwischen-CTA** nach dem überzeugendsten Abschnitt (zum Beispiel Preise oder Finanzierung) als Button zum Formular.
- Formular-ID, Feldnamen, `action` und HubSpot nie ändern (DEV-1572). Auf der Vorschau nie absenden.

## 5. Animationen

- `data-type` (gelber Tipp-Cursor) auf jedes `p.label` und jeden Karten- und Produkt-`h3`. Bei Überschriften mit `<small>` nur den Titel in `<span data-type>` setzen, sonst springt die Zeile.
- Zähler mit `data-count`, Reveal auf Karten. Nach Änderungen an `media/tc/*` `TC_ASSET_VERSION` hochzählen.

## 6. SEO (nicht verhandelbar)

- URL der alten Seite bleibt. Title höchstens ca. 60 Zeichen, mit Suchbegriff und „· Padelbee“. Description 140 bis 160 Zeichen. Genau eine H1 mit Suchbegriff, Suchbegriff auch im ersten Absatz.
- JSON-LD über `inc/tc/schema.php` (Produkte mit Bild, FAQ mit `tc_schema_faq`). FAQ aus Martins Entwurf übernehmen.
- Interne Links im Fließtext auf passende eigene Seiten. Alle Bilder mit alt-Text. Inhalte nicht kürzen.

## 7. Prüfung vor dem Zeigen (Pflicht)

1. Automatischer Zeilenvergleich gegen Claude-Entwurf und passende Folien, inklusive Verkaufsargumente. Was fehlt, wird ergänzt oder begründet weggelassen.
2. Kein Text von der alten Seite (Vergleich gegen padelbee.de).
3. SEO-Check: Title, Description, H1, Canonical, JSON-LD, Links mit Status 200, alt-Texte.
4. Desktop 1280 px und 1180 bis 1360 px sowie Handy 390 px: Screenshots aller Sections ansehen. Kein Überlauf, keine Hurenkinder (`node tests/hurenkinder-check.mjs /pfad`), Zahlen bündig, Karten gleich hoch, keine leeren Flächen, kein loser Kleintext.
5. Konsole ohne Fehler, Formular klappt auf, Checkboxen füllen `interesse` (ohne Absenden).
6. Dann Bietal zeigen: Quelle je Abschnitt (Entwurf oder Folie), ❌ eigene Formulierungen mit Grund, Tabelle des Weggelassenen.
