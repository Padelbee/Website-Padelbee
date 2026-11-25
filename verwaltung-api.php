<?php
/**
 * DEV-1667: Schnittstelle für die Selbstverwaltung von Projekten (/referenzen) und Blog (/blog).
 * Nur für angemeldete Nutzer (verwaltung.php), jede Änderung mit CSRF-Token im Header X-PB-CSRF.
 *
 * GET  ?coll=projekte|blog                      Liste (inkl. Entwürfe)
 * POST action=set     coll, id (leer = neu), doc (JSON)
 * POST action=delete  coll, id
 * POST action=upload  file (JPG, PNG, WebP, max. 15 MB)   -> {id, url}
 * POST action=asset-delete id
 */
require __DIR__ . '/inc/tc/content-store.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex');

function api_out(int $code, array $data): void
{
    http_response_code($code);
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

if (!cs_is_admin()) {
    api_out(401, ['error' => 'not_logged_in']);
}

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$coll = (string) ($_REQUEST['coll'] ?? '');

if ($method === 'GET') {
    if (!isset(CS_COLLECTIONS[$coll])) {
        api_out(400, ['error' => 'invalid_collection']);
    }
    api_out(200, ['docs' => array_map('cs_enrich', cs_load($coll))]);
}

if ($method !== 'POST' || !cs_check_csrf((string) ($_SERVER['HTTP_X_PB_CSRF'] ?? ''))) {
    api_out(403, ['error' => 'forbidden']);
}

$action = (string) ($_POST['action'] ?? '');

if ($action === 'upload') {
    $f = $_FILES['file'] ?? null;
    if (!$f || ($f['error'] ?? 1) !== UPLOAD_ERR_OK || !is_uploaded_file($f['tmp_name'])) {
        api_out(400, ['error' => 'upload_failed']);
    }
    if ($f['size'] > CS_MAX_UPLOAD) {
        api_out(413, ['error' => 'too_large']);
    }
    $info = @getimagesize($f['tmp_name']);
    $mime = $info['mime'] ?? '';
    if (!isset(CS_IMAGE_TYPES[$mime])) {
        api_out(415, ['error' => 'invalid_type']);
    }
    cs_ensure_dirs();
    $id = cs_new_id();
    $target = cs_dir() . '/uploads/' . $id . '.' . CS_IMAGE_TYPES[$mime];
    if (!@move_uploaded_file($f['tmp_name'], $target)) {
        api_out(500, ['error' => 'quota_or_state']);
    }
    @chmod($target, 0664);
    api_out(200, ['id' => $id, 'url' => '/bild.php?id=' . $id]);
}

if ($action === 'asset-delete') {
    $id = (string) ($_POST['id'] ?? '');
    if (preg_match('/^[a-z0-9]{20,40}$/', $id)) {
        foreach (CS_IMAGE_TYPES as $ext) {
            @unlink(cs_dir() . '/uploads/' . $id . '.' . $ext);
        }
    }
    api_out(200, ['ok' => true]);
}

if (!isset(CS_COLLECTIONS[$coll])) {
    api_out(400, ['error' => 'invalid_collection']);
}
$items = cs_load($coll);
$id = (string) ($_POST['id'] ?? '');
if ($id !== '' && !preg_match('/^[A-Za-z0-9_-]{1,40}$/', $id)) {
    api_out(400, ['error' => 'invalid_argument']);
}

if ($action === 'set') {
    $doc = json_decode((string) ($_POST['doc'] ?? ''), true);
    if (!is_array($doc)) {
        api_out(400, ['error' => 'invalid_argument']);
    }
    // Nur bekannte Felder speichern, Texte begrenzen
    $allowed = $coll === 'blog'
        ? ['titel', 'slug', 'kategorie', 'datum', 'autor', 'teaser', 'text', 'cover', 'cta', 'live', 'created', 'updated']
        : ['titel', 'ort', 'land', 'jahr', 'courts', 'zielgruppe', 'hersteller', 'kurz', 'text', 'kategorien', 'leistungen', 'bilder', 'live', 'created', 'updated'];
    $clean = [];
    foreach ($allowed as $k) {
        if (array_key_exists($k, $doc)) {
            $v = $doc[$k];
            if (is_string($v)) {
                $v = mb_substr(trim($v), 0, $k === 'text' ? 30000 : 300);
            }
            $clean[$k] = $v;
        }
    }
    if (trim((string) ($clean['titel'] ?? '')) === '') {
        api_out(400, ['error' => 'invalid_argument']);
    }
    if ($id === '') {
        $id = cs_new_id();
    }
    $clean['id'] = $id;
    // Bild-URLs nur intern zulassen (bestehende Bilder unter /media, neue über /bild.php)
    $okUrl = fn($u) => is_string($u) && preg_match('~^/(media/[A-Za-z0-9/_.-]+|bild\.php\?id=[a-z0-9]{20,40})$~', $u);
    $safeImg = function ($img) use ($okUrl) {
        if (!is_array($img)) {
            return null;
        }
        $out = ['id' => preg_replace('/[^A-Za-z0-9_-]/', '', (string) ($img['id'] ?? ''))];
        if (isset($img['alt'])) {
            $out['alt'] = mb_substr((string) $img['alt'], 0, 200);
        }
        if (!empty($img['url']) && $okUrl($img['url'])) {
            $out['url'] = $img['url'];
        }
        return $out;
    };
    if (array_key_exists('cover', $clean)) {
        $clean['cover'] = $clean['cover'] ? $safeImg($clean['cover']) : null;
    }
    if (isset($clean['bilder'])) {
        $clean['bilder'] = is_array($clean['bilder']) ? array_values(array_filter(array_map($safeImg, $clean['bilder']))) : [];
    }
    foreach (['kategorien', 'leistungen'] as $k) {
        if (isset($clean[$k])) {
            $clean[$k] = is_array($clean[$k]) ? array_values(array_map(fn($x) => mb_substr((string) $x, 0, 60), $clean[$k])) : [];
        }
    }
    if (isset($clean['cta']) && !is_array($clean['cta'])) {
        unset($clean['cta']);
    }
    $clean = cs_enrich($clean);
    $found = false;
    foreach ($items as $i => $it) {
        if ((string) ($it['id'] ?? '') === $id) {
            $items[$i] = $clean;
            $found = true;
            break;
        }
    }
    if (!$found) {
        $items[] = $clean;
    }
    if (!cs_save($coll, $items)) {
        api_out(500, ['error' => 'quota_or_state']);
    }
    api_out(200, ['id' => $id, 'doc' => $clean]);
}

if ($action === 'delete') {
    $items = array_values(array_filter($items, fn($it) => (string) ($it['id'] ?? '') !== $id));
    if (!cs_save($coll, $items)) {
        api_out(500, ['error' => 'quota_or_state']);
    }
    api_out(200, ['ok' => true]);
}

api_out(400, ['error' => 'invalid_action']);
