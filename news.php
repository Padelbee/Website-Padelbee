<?php
require __DIR__ . '/inc/tc/layout.php';
// DEV-1155: News im neuen Design. Inhalt: aktuelle LinkedIn-Beiträge von Padelbee.
// DEV-1667: Hero-Text nach Martins Events-Seite (the-court.com/events). Was /news künftig zeigen soll, klärt Martin (Fragenliste).
// DEV-1667: Statt des SociableKit-Widgets (iframe, fremdes Design, für Google unsichtbar) eigene Karten im Seitendesign.
// Quelle bleibt derselbe Feed (SociableKit-Embed 25653061), serverseitig geladen und 1 Stunde zwischengespeichert.
// Fällt der Feed aus, bleibt der Button zu LinkedIn stehen.
const NEWS_FEED_URL = 'https://data.accentapi.com/feed/25653061.json';
const NEWS_LINKEDIN_URL = 'https://www.linkedin.com/company/padelbee/';

function news_posts(int $limit = 6): array
{
    $cache = sys_get_temp_dir() . '/padelbee-news-feed.json';
    $json = null;
    if (is_file($cache) && filemtime($cache) > time() - 3600) {
        $json = @file_get_contents($cache);
    } else {
        $ctx = stream_context_create(['http' => ['timeout' => 4, 'header' => "User-Agent: padelbee.de\r\n"]]);
        $fresh = @file_get_contents(NEWS_FEED_URL, false, $ctx);
        if ($fresh !== false && json_decode($fresh, true) !== null) {
            @file_put_contents($cache, $fresh);
            $json = $fresh;
        } elseif (is_file($cache)) {
            $json = @file_get_contents($cache);
        }
    }
    $data = $json ? json_decode($json, true) : null;
    $out = [];
    foreach (($data['posts'] ?? []) as $p) {
        if ((string) ($p['reposted'] ?? '0') === '1' || empty($p['post_url'])) {
            continue;
        }
        $text = news_clean((string) ($p['raw_text'] ?? ''));
        if ($text === '') {
            continue;
        }
        $lines = array_values(array_filter(array_map('trim', preg_split('/\n+/', $text))));
        $title = $lines[0] ?? '';
        $rest = '';
        foreach (array_slice($lines, 1) as $l) {
            // Zeilen, die durch entfernte Emojis ohne Satzzeichen enden, mit Punkt abschließen
            $rest .= $l . (preg_match('/[.!?:,;…]$/u', $l) ? ' ' : '. ');
        }
        $rest = trim($rest);
        $out[] = [
            'title' => news_cut($title, 90),
            'text' => news_cut($rest, 170),
            'date' => news_month((string) ($p['post_date_time'] ?? '')),
            'img' => (string) ($p['thumbnail_url'] ?? ''),
            'url' => (string) $p['post_url'],
        ];
        if (count($out) >= $limit) {
            break;
        }
    }
    return $out;
}

function news_clean(string $t): string
{
    $t = preg_replace('~https?://\S+~u', '', $t);
    $t = preg_replace('~(^|\s)#[\p{L}\p{N}_]+~u', '$1', $t);
    $t = preg_replace('~[\x{1F000}-\x{1FAFF}\x{2600}-\x{27BF}\x{2190}-\x{21FF}\x{FE0F}\x{200D}]~u', '', $t);
    $t = str_replace([' – ', ' — ', '–', '—'], [', ', ', ', '-', '-'], $t);
    $t = preg_replace('/[ \t]+/u', ' ', $t);
    return trim($t);
}

function news_cut(string $t, int $max): string
{
    if (mb_strlen($t) <= $max) {
        return $t;
    }
    $cut = mb_substr($t, 0, $max);
    $cut = preg_replace('/\s+\S*$/u', '', $cut);
    return rtrim($cut, " ,;:.") . ' …';
}

function news_month(string $dt): string
{
    $m = ['', 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
    $ts = strtotime($dt);
    return $ts ? $m[(int) date('n', $ts)] . ' ' . date('Y', $ts) : '';
}

$posts = news_posts(6);

tc_page_start([
    'path' => '/news',
    'title' => 'Padelbee News: Aktuelles aus der Padel-Welt',
    'description' => 'Padelbee News: Aktuelles von uns, unseren Padel-Projekten und aus der Padel-Welt. Die neuesten Beiträge von Padelbee auf LinkedIn im Überblick.',
    'breadcrumb' => ['News' => '/news'],
    'page_type' => 'CollectionPage',
    'extra_head' => '<link rel="stylesheet" href="/media/tc/p-news.css?v=' . TC_ASSET_VERSION . '">',
    'extra_scripts' => '<script src="/media/tc/kontakt-form.js?v=' . TC_ASSET_VERSION . '"></script>' . "\n" . '<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>',
]);
?>
<section class="band dark grid-bg c-hero hero-1col">
  <div class="inner">
    <p class="crumb"><a href="/">Start</a> &nbsp;/&nbsp; News</p>
    <h1><span class="label h1-kicker" style="color:var(--white)" data-type>Padelbee News</span>Aktuelles von uns und aus der <span class="kw">Padel-Welt.</span></h1>
    <p class="lead">Hier zeigen wir neue Projekte und Events, von der Rafa Nadal Padel Tour bis zu den großen Messen. Wir bringen Padel dorthin, wo Spieler, Vereine und Betreiber&nbsp;zusammenkommen.</p>
    <a class="more-link" href="/referenzen">Fertige Anlagen ansehen</a>
  </div>
</section>

<section class="band grid-bg" id="news-feed">
  <div class="inner">
    <p class="label" data-type>LinkedIn</p>
    <h2 class="reveal">Neueste <span class="hl">Beiträge.</span></h2>
<?php if ($posts): ?>
    <div class="refs news-grid">
<?php foreach ($posts as $n): ?>
      <a class="ref news-card" href="<?= tc_h($n['url']) ?>" target="_blank" rel="noopener">
        <figure>
<?php if ($n['img'] !== ''): ?>
          <img class="nbg" src="<?= tc_h($n['img']) ?>" alt="" aria-hidden="true" loading="lazy">
          <img class="nfg" src="<?= tc_h($n['img']) ?>" alt="<?= tc_h($n['title']) ?>" loading="lazy">
<?php else: ?>
          <div class="noimg court-ph"><span>Padelbee</span></div>
<?php endif; ?>
<?php if ($n['date'] !== ''): ?>          <span class="badge"><?= tc_h($n['date']) ?></span>
<?php endif; ?>
        </figure>
        <div class="rb">
          <h3 data-type><?= tc_h($n['title']) ?></h3>
<?php if ($n['text'] !== ''): ?>          <p><?= tc_h($n['text']) ?></p>
<?php endif; ?>
          <span class="more-link">Auf LinkedIn weiterlesen</span>
        </div>
      </a>
<?php endforeach; ?>
    </div>
<?php endif; ?>
    <div class="news-all"><a class="btn" href="<?= NEWS_LINKEDIN_URL ?>" target="_blank" rel="noopener">Alle Beiträge auf LinkedIn</a></div>
  </div>
</section>

<section class="band dark grid-bg end" id="kontakt">
  <div class="inner">
    <h2>Ready. <span class="kw">Play.</span></h2>
    <p class="lead" style="margin:18px auto 0">Du willst mit deinem Projekt die nächste Meldung sein? Sprich mit uns über deine Anlage.</p>
    <div class="people" style="grid-template-columns:repeat(2,minmax(0,1fr))">
      <div class="person"><div class="k">Projektanfrage</div><b>Martin Gaffal</b><div class="mail"><a href="mailto:martin.gaffal@padelbee.de">martin.gaffal@padelbee.de</a></div></div>
      <div class="person"><div class="k">Projektmanagement</div><b>Stefan Möbius</b><div class="mail"><a href="mailto:stefan.moebius@padelbee.de">stefan.moebius@padelbee.de</a></div></div>
    </div>
<?php $tcFormButton = 'Projekt anfragen'; include __DIR__ . '/inc/tc/kontakt-form-toggle.php'; ?>
  </div>
</section>
<?php tc_page_end();
