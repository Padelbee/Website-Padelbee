<?php
/**
 * DEV-1667: Liefert Bilder aus, die über die Selbstverwaltung hochgeladen wurden (Projekte, Blog).
 * Aufruf: /bild.php?id=<Asset-ID>
 */
require __DIR__ . '/inc/tc/content-store.php';

$id = (string) ($_GET['id'] ?? '');
if (!preg_match('/^[a-z0-9]{20,40}$/', $id)) {
    http_response_code(404);
    exit;
}
foreach (CS_IMAGE_TYPES as $mime => $ext) {
    $file = cs_dir() . '/uploads/' . $id . '.' . $ext;
    if (is_file($file)) {
        header('Content-Type: ' . $mime);
        header('Content-Length: ' . filesize($file));
        header('Cache-Control: public, max-age=31536000, immutable');
        header('X-Content-Type-Options: nosniff');
        readfile($file);
        exit;
    }
}
http_response_code(404);
