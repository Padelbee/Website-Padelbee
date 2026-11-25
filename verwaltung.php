<?php
/**
 * DEV-1667: Anmeldung für die Selbstverwaltung (Projekte auf /referenzen, Artikel auf /blog).
 * Nicht verlinkt, nicht in der Sitemap, noindex.
 */
require __DIR__ . '/inc/tc/layout.php';
require __DIR__ . '/inc/tc/content-store.php';

header('X-Robots-Tag: noindex, nofollow');
header('Cache-Control: no-store');

$fehler = '';
$hash = cs_admin_hash();
$ip = (string) ($_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['REMOTE_ADDR'] ?? '');

if (($_GET['abmelden'] ?? '') === '1') {
    cs_session();
    $_SESSION = [];
    session_destroy();
    setcookie('pb_admin', '', ['expires' => time() - 3600, 'path' => '/']);
    header('Location: /verwaltung.php');
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    cs_session();
    if (!cs_check_csrf((string) ($_POST['csrf'] ?? ''))) {
        $fehler = 'Die Sitzung ist abgelaufen. Bitte noch einmal versuchen.';
    } elseif ($hash === '') {
        $fehler = 'Die Anmeldung ist noch nicht eingerichtet.';
    } elseif (cs_login_blocked($ip)) {
        $fehler = 'Zu viele Versuche. Bitte in 15 Minuten erneut versuchen.';
    } elseif (password_verify((string) ($_POST['passwort'] ?? ''), $hash)) {
        session_regenerate_id(true);
        $_SESSION['pb_admin'] = true;
        $_SESSION['pb_admin_until'] = time() + 8 * 3600;
        $_SESSION['pb_csrf'] = bin2hex(random_bytes(24));
        header('Location: /verwaltung.php');
        exit;
    } else {
        cs_login_failed($ip);
        usleep(600000);
        $fehler = 'Das Passwort stimmt nicht.';
    }
}

$angemeldet = cs_is_admin();
$csrf = cs_csrf();

tc_page_start([
    'path' => '/verwaltung.php',
    'title' => 'Verwaltung · Padelbee',
    'description' => 'Anmeldung zur Verwaltung von Projekten und Blog.',
    'robots' => 'noindex,nofollow',
    'canonical' => false,
    'jsonld' => false,
]);
?>
<section class="band dark grid-bg c-hero hero-1col">
  <div class="inner">
    <h1><span class="label h1-kicker" style="color:var(--white)">Padelbee</span><span class="kw">Verwaltung.</span></h1>
<?php if ($angemeldet): ?>
    <p class="lead">Du bist angemeldet. Auf den beiden Seiten siehst du jetzt die Knöpfe zum Anlegen, Bearbeiten und Löschen sowie Entwürfe.</p>
    <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:32px">
      <a class="btn" href="/referenzen#r-liste">Projekte bearbeiten</a>
      <a class="btn" href="/blog#b-liste">Blog bearbeiten</a>
      <a class="btn ghost" href="/verwaltung.php?abmelden=1">Abmelden</a>
    </div>
<?php else: ?>
    <p class="lead">Hier meldest du dich an, um Projekte und Blog-Artikel anzulegen und zu bearbeiten.</p>
    <form method="post" action="/verwaltung.php" class="pb-login" style="margin-top:28px;max-width:420px">
      <input type="hidden" name="csrf" value="<?= tc_h($csrf) ?>">
      <label style="display:grid;gap:8px;font-weight:600;font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--white)">Passwort
        <input type="password" name="passwort" required autocomplete="current-password" style="font:inherit;font-size:16px;letter-spacing:0;text-transform:none;padding:12px 14px;border:1px solid var(--line-d);background:#fff;color:var(--ink)">
      </label>
<?php if ($fehler !== ''): ?>
      <p role="alert" style="margin:14px 0 0;color:var(--yellow)"><?= tc_h($fehler) ?></p>
<?php endif; ?>
      <button type="submit" class="btn" style="margin-top:20px">Anmelden</button>
    </form>
<?php endif; ?>
  </div>
</section>
<?php tc_page_end();
