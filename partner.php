<?php
$page_id = 'partner';
include 'inc/header.php';

$favicon_base = 'https://www.google.com/s2/favicons?domain=';

$partner_kategorien = [
    t('partner_cat_court') => [
        ['domain' => '3bpadel.com', 'url' => 'https://www.3bpadel.com', 'name' => '3B Padel'],
        ['domain' => 'padelconcept.eu', 'url' => 'https://www.padelconcept.eu', 'name' => 'Padel Concept'],
        ['domain' => 'mejorset.com', 'url' => 'https://www.mejorset.com', 'name' => 'Mejor Set'],
        ['domain' => 'padelgalis.com', 'url' => 'https://www.padelgalis.com', 'name' => 'Padel Galis'],
        ['domain' => 'greenset.com', 'url' => 'https://www.greenset.com', 'name' => 'Greenset'],
    ],
    t('partner_cat_tennis') => [
        ['domain' => 'reboundace.de', 'url' => 'https://www.reboundace.de', 'name' => 'Rebound Ace'],
    ],
    t('partner_cat_halle') => [
        ['domain' => '3bpadel.com', 'url' => 'https://www.3bpadel.com/de/feldabdeckungen/', 'name' => '3B Padel Feldabdeckungen'],
    ],
    t('partner_cat_automaten') => [
        ['domain' => 'sportogo.at', 'url' => 'https://www.sportogo.at', 'name' => 'Sportogo'],
        ['domain' => 'vendingsport.com', 'url' => 'https://www.vendingsport.com', 'name' => 'Vending Sport'],
    ],
    t('partner_cat_finanzierung') => [
        ['domain' => 'mindspringpadel.com', 'url' => 'https://www.mindspringpadel.com', 'name' => 'Mindspring Padel'],
        ['domain' => 'grenke.de', 'url' => 'https://www.grenke.de', 'name' => 'Grenke'],
    ],
    t('partner_cat_racket') => [
        ['domain' => 'wilson.com', 'url' => 'https://www.wilson.com', 'name' => 'Wilson'],
        ['domain' => 'babolat.com', 'url' => 'https://www.babolat.com', 'name' => 'Babolat'],
        ['domain' => 'bullpadel.com', 'url' => 'https://www.bullpadel.com', 'name' => 'Bullpadel'],
    ],
];
?>

<main id="main">

    <div class="bg-court">
        <div class="container pt-6" id="partner">
            <div class="row pt-6">
                <div class="col-12 pb-5">
                    <h1><?= t('partner_h1') ?></h1>
                    <h3><?= t('partner_h3') ?></h3>
                </div>
                <!-- Bauplanung & Baubegleitung -->
                <div class="col-12 partner-category">
                    <h2 class="partner-category-title"><?= t('partner_cat_bauplanung') ?></h2>
                    <div class="row partner-grid">
                        <div class="col-12 partner-card-wrap">
                            <a href="https://thecourt.dev/" target="_blank" rel="noopener noreferrer" class="partner-card partner-card-featured">
                                <span class="court-wordmark court-wordmark-featured" aria-label="thecourt.dev">thecourt<span class="court-wordmark-dot">.</span>dev</span>
                                <span class="partner-name partner-name-featured"><?= t('partner_thecourt_desc') ?></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Partner Projektentwicklung & Kompetenz -->
                <div class="col-12 partner-category">
                    <h2 class="partner-category-title"><?= t('partner_cat_projektentwicklung') ?></h2>
                    <div class="row partner-grid">
                        <div class="col-6 col-md-4 col-lg-2 partner-card-wrap">
                            <a href="https://mpm-ag.de/" target="_blank" rel="noopener noreferrer" class="partner-card">
                                <span class="partner-brand-logo-wrap">
                                    <img src="https://spcdn.shortpixel.ai/spio/ret_img,q_cdnize,to_auto,s_webp:avif/mpm-ag.de/wp-content/themes/mpm-theme/images/image003-23.png" alt="MPM AG" class="partner-brand-logo" loading="lazy" decoding="async">
                                </span>
                                <span class="partner-name">MPM AG</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2 partner-card-wrap">
                            <a href="https://scheckclub.de/" target="_blank" rel="noopener noreferrer" class="partner-card">
                                <span class="partner-brand-logo-wrap">
                                    <img src="https://spcdn.shortpixel.ai/spio/ret_img,q_cdnize,to_auto,s_webp:avif/mpm-ag.de/wp-content/uploads/2025/10/image002-34.png" alt="Scheck Club" class="partner-brand-logo" loading="lazy" decoding="async">
                                </span>
                                <span class="partner-name">Scheck Club</span>
                            </a>
                        </div>
                    </div>
                </div>

                <?php foreach ($partner_kategorien as $kategorie => $partner): ?>
                <div class="col-12 partner-category">
                    <h2 class="partner-category-title"><?= htmlspecialchars($kategorie) ?></h2>
                    <div class="row partner-grid">
                        <?php foreach ($partner as $p): 
                            $favicon = $favicon_base . urlencode($p['domain']) . '&sz=64';
                        ?>
                        <div class="col-6 col-md-4 col-lg-2 partner-card-wrap">
                            <a href="<?= htmlspecialchars($p['url']) ?>" target="_blank" rel="noopener noreferrer" class="partner-card">
                                <img src="<?= htmlspecialchars($favicon) ?>" alt="" class="partner-favicon" width="48" height="48" loading="lazy">
                                <span class="partner-name"><?= htmlspecialchars($p['name']) ?></span>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-6">
            <div class="col-12 pb-5">
                <h2><?= t('index_ready_title') ?></h2>
                <h3><?= t('index_ready_subtitle') ?></h3>
            </div>
            <div class="col-md-6">
                <h3><?= t('index_kontakt_direkt') ?></h3>
                <?php echo $telblock; ?><br />
                info@padelbee.de<br />
            </div>
            <div class="col-md-6 img-head">
                <img src="images/martin-kontakt.png" alt="<?= htmlspecialchars(t('index_martin_title') . ', ' . t('index_martin_role')) ?>" class="img-fluid">
                <div class="gelb">
                    <h3><?= t('index_martin_title') ?></h3>
                    <p><?= t('index_martin_role') ?></p>
                </div>
            </div>
            <div class="col-12">
                <div class="trenner"><span><?= t('index_kontakt_oder') ?></span></div>
            </div>
        </div>
    </div>
    <a id="kontakt" class="anchor2"></a>
    <?php include 'inc/kontakt-form.php'; ?>

</main>

<?php include 'inc/footer.php'; ?>
