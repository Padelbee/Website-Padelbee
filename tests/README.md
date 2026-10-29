# Tests

SEO-Regressionstest (nur Python 3 Standardbibliothek). Lokal gegen den Dev-Container:

    docker build -t padelbee-dev . && docker run -d --rm -p 8091:80 --name padelbee-dev padelbee-dev
    python3 tests/seo_check.py                      # Standard: http://localhost:8091
    python3 tests/seo_check.py --only redirects     # Gruppen: errors, form, redirects, pages, schema, sitemap, links

Gegen die Live-Seite nur mit `--base https://padelbee.de --skip-form` (kein POST ans Kontaktformular).
Exit-Code 1, wenn eine Pruefung FAIL ist; WARN zaehlt nicht als Fehler.
