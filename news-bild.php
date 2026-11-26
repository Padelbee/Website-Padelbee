<?php
// Liefert die Bilder der LinkedIn-Beiträge auf /news über unseren eigenen Server aus,
// damit der Browser der Besucher keine Verbindung zu sociablekit.com aufbaut (Datenschutz).
// Kein offener Proxy: Es werden nur Bild-URLs ausgeliefert, die im zwischengespeicherten Feed von news.php stehen.
$k = (string) ($_GET['k'] ?? '');
if (!preg_match('/^[a-f0-9]{16}$/', $k)) {
    http_response_code(404);
    exit;
}
$feed = sys_get_temp_dir() . '/padelbee-news-feed.json';
$data = is_file($feed) ? json_decode((string) @file_get_contents($feed), true) : null;
$url = '';
foreach (($data['posts'] ?? []) as $p) {
    $u = (string) ($p['thumbnail_url'] ?? '');
    if ($u !== '' && substr(sha1($u), 0, 16) === $k) {
        $url = $u;
        break;
    }
}
$host = (string) parse_url($url, PHP_URL_HOST);
if ($url === '' || parse_url($url, PHP_URL_SCHEME) !== 'https' || !preg_match('/(^|\.)sociablekit\.com$/', $host)) {
    http_response_code(404);
    exit;
}
$dir = sys_get_temp_dir() . '/padelbee-news-img';
if (!is_dir($dir)) {
    @mkdir($dir, 0775, true);
}
$file = $dir . '/' . $k;
if (!is_file($file) || filemtime($file) < time() - 7 * 86400) {
    $ctx = stream_context_create(['http' => ['timeout' => 6, 'header' => "User-Agent: padelbee.de\r\n"]]);
    $img = @file_get_contents($url, false, $ctx);
    if ($img === false || strlen($img) > 8 * 1024 * 1024) {
        if (!is_file($file)) {
            http_response_code(404);
            exit;
        }
    } else {
        @file_put_contents($file, $img);
    }
}
$info = @getimagesize($file);
$types = ['image/webp', 'image/jpeg', 'image/png', 'image/gif'];
if (!$info || !in_array($info['mime'], $types, true)) {
    http_response_code(404);
    exit;
}
header('Content-Type: ' . $info['mime']);
header('Cache-Control: public, max-age=86400');
header('X-Content-Type-Options: nosniff');
readfile($file);
