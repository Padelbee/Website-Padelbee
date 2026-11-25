<?php
/**
 * DEV-1667: Inhalte, die Padelbee selbst pflegt (Projekte = /referenzen, Blog = /blog).
 *
 * Martins Wunsch: "Wichtig ist, dass wir die Bereiche Projekte und Blog selbst managen und Content hochladen können."
 *
 * Speicher: Ordner aus der Umgebungsvariable PADELBEE_DATA_DIR (Produktion: dauerhaftes Volume),
 * sonst ./data im Webroot (lokal; geschützt durch data/.htaccess). Solange dort noch keine Datei liegt,
 * gelten die Startdaten aus dem Repo (inc/tc/referenzen-data.json, inc/tc/blog-data.json).
 *
 * Anmeldung: Passwort-Hash (password_hash) aus PADELBEE_ADMIN_HASH oder inc/admin-config.php (nicht im Repo).
 */

const CS_COLLECTIONS = [
    'projekte' => 'referenzen-data.json',
    'blog' => 'blog-data.json',
];
const CS_MAX_UPLOAD = 15 * 1024 * 1024;
const CS_IMAGE_TYPES = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];

function cs_dir(): string
{
    $dir = getenv('PADELBEE_DATA_DIR') ?: dirname(__DIR__, 2) . '/data';
    return rtrim($dir, '/');
}

function cs_ensure_dirs(): void
{
    $dir = cs_dir();
    foreach ([$dir, $dir . '/uploads'] as $d) {
        if (!is_dir($d)) {
            @mkdir($d, 0775, true);
        }
    }
    // Schutz, falls der Ordner im Webroot liegt (lokal). Root-.htaccess bleibt unverändert.
    if (!is_file($dir . '/.htaccess')) {
        @file_put_contents($dir . '/.htaccess', "Require all denied\n");
    }
}

function cs_load(string $coll): array
{
    if (!isset(CS_COLLECTIONS[$coll])) {
        return [];
    }
    $file = cs_dir() . '/' . $coll . '.json';
    $src = is_file($file) ? $file : __DIR__ . '/' . CS_COLLECTIONS[$coll];
    $data = json_decode((string) @file_get_contents($src), true);
    return is_array($data) ? array_values($data) : [];
}

function cs_save(string $coll, array $items): bool
{
    if (!isset(CS_COLLECTIONS[$coll])) {
        return false;
    }
    cs_ensure_dirs();
    $file = cs_dir() . '/' . $coll . '.json';
    $tmp = $file . '.' . bin2hex(random_bytes(4)) . '.tmp';
    $json = json_encode(array_values($items), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    if ($json === false || @file_put_contents($tmp, $json, LOCK_EX) === false) {
        return false;
    }
    return @rename($tmp, $file);
}

function cs_new_id(): string
{
    $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $id = '';
    for ($i = 0; $i < 20; $i++) {
        $id .= $chars[random_int(0, 35)];
    }
    return $id;
}

/** Bild-URL für eine hochgeladene Datei (Asset-ID = Dateiname ohne Endung). */
function cs_asset_url(string $id): ?string
{
    if (!preg_match('/^[a-z0-9]{20,40}$/', $id)) {
        return null;
    }
    foreach (CS_IMAGE_TYPES as $ext) {
        if (is_file(cs_dir() . '/uploads/' . $id . '.' . $ext)) {
            return '/bild.php?id=' . $id;
        }
    }
    return null;
}

/** Ergänzt fehlende Bild-URLs ({id} ohne url) in Titelbild und Bildergalerie. */
function cs_enrich(array $doc): array
{
    $fix = function ($img) {
        if (is_array($img) && empty($img['url']) && !empty($img['id'])) {
            $u = cs_asset_url((string) $img['id']);
            if ($u) {
                $img['url'] = $u;
            }
        }
        return $img;
    };
    if (isset($doc['cover'])) {
        $doc['cover'] = $doc['cover'] ? $fix($doc['cover']) : null;
    }
    if (isset($doc['bilder']) && is_array($doc['bilder'])) {
        $doc['bilder'] = array_values(array_map($fix, $doc['bilder']));
    }
    return $doc;
}

/* ---------- Anmeldung ---------- */

function cs_admin_hash(): string
{
    $hash = (string) (getenv('PADELBEE_ADMIN_HASH') ?: '');
    if ($hash === '' && is_file(dirname(__DIR__) . '/admin-config.php')) {
        $cfg = include dirname(__DIR__) . '/admin-config.php';
        $hash = is_array($cfg) ? (string) ($cfg['hash'] ?? '') : '';
    }
    return $hash;
}

function cs_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) {
        return;
    }
    $https = (($_SERVER['HTTPS'] ?? '') === 'on') || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
    session_name('pb_admin');
    session_set_cookie_params(['lifetime' => 0, 'path' => '/', 'secure' => $https, 'httponly' => true, 'samesite' => 'Strict']);
    session_start();
}

/** Prüft nur, ob ein Anmelde-Cookie existiert, ohne für normale Besucher eine Sitzung zu starten. */
function cs_is_admin(): bool
{
    if (empty($_COOKIE['pb_admin'])) {
        return false;
    }
    cs_session();
    return !empty($_SESSION['pb_admin']) && ($_SESSION['pb_admin_until'] ?? 0) > time();
}

function cs_csrf(): string
{
    cs_session();
    if (empty($_SESSION['pb_csrf'])) {
        $_SESSION['pb_csrf'] = bin2hex(random_bytes(24));
    }
    return $_SESSION['pb_csrf'];
}

function cs_check_csrf(string $token): bool
{
    cs_session();
    return !empty($_SESSION['pb_csrf']) && hash_equals($_SESSION['pb_csrf'], $token);
}

/** Einfache Sperre gegen Passwort-Raten: höchstens 5 Fehlversuche je IP in 15 Minuten. */
function cs_login_blocked(string $ip): bool
{
    $file = cs_dir() . '/login-attempts.json';
    $data = json_decode((string) @file_get_contents($file), true) ?: [];
    $key = hash('sha256', $ip);
    $recent = array_filter($data[$key] ?? [], fn($t) => $t > time() - 900);
    return count($recent) >= 5;
}

function cs_login_failed(string $ip): void
{
    cs_ensure_dirs();
    $file = cs_dir() . '/login-attempts.json';
    $data = json_decode((string) @file_get_contents($file), true) ?: [];
    $key = hash('sha256', $ip);
    $data[$key] = array_values(array_filter($data[$key] ?? [], fn($t) => $t > time() - 900));
    $data[$key][] = time();
    @file_put_contents($file, json_encode($data), LOCK_EX);
}

/** Script-Tags für die Bearbeitungsfunktionen (nur für angemeldete Nutzer). */
function cs_admin_scripts(): string
{
    if (!cs_is_admin()) {
        return '';
    }
    return '<script>window.PB_ADMIN={csrf:' . json_encode(cs_csrf()) . '};</script>' . "\n"
        . '<script src="/media/tc/verwaltung.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n";
}
