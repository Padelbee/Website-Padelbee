<?php
$page_id = 'panorama-court';
include 'inc/header.php';
?>

<main id="main" class="standard-court-page">

    <div class="container-fluid standard-court-first-section standard-court-hero" id="block-panorama-court">
        <div class="container">
            <div class="row pt-6 pb-5 align-items-center">
                <div class="col-12 col-lg-6 order-2 order-lg-1 pb-4 pb-lg-0">
                    <h1><?= t('panorama-court_h1') ?></h1>
                    <h3><?= t('panorama-court_h3') ?></h3>
                    <p><?= t('panorama-court_intro') ?></p>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <img src="images/Panorama-Court%20/Panorama%20Court.png" alt="Panorama Court Modell Wing" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-hellgrau" id="block-panorama-court-features">
        <div class="container">
            <div class="row pt-6 pb-5">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="standard-court-box">
                        <h3 class="standard-court-box-title"><?= t('panorama-court_box1_title') ?></h3>
                        <p><?= t('panorama-court_box1_text') ?></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="standard-court-box">
                        <h3 class="standard-court-box-title"><?= t('panorama-court_box2_title') ?></h3>
                        <p><?= t('panorama-court_box2_text') ?></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="standard-court-box">
                        <h3 class="standard-court-box-title"><?= t('panorama-court_box3_title') ?></h3>
                        <p><?= t('panorama-court_box3_text') ?></p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="standard-court-box">
                        <h3 class="standard-court-box-title"><?= t('panorama-court_box4_title') ?></h3>
                        <p><?= t('panorama-court_box4_text') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid standard-court-big-block p-0" id="block-panorama-court-overlay">
        <div class="row no-gutters align-items-stretch">
            <div class="col-12 col-lg-7">
                <div class="standard-court-big-image">
                    <img src="images/Panorama-Court%20/Panorama%20Court%20-big.png" alt="Panorama Court Modell Wing" class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="standard-court-overlay">
                    <p class="standard-court-overlay-lead"><?= t('panorama-court_overlay_lead') ?></p>
                    <div class="standard-court-overlay-item">
                        <h4><?= t('panorama-court_box1_title') ?></h4>
                        <p><?= t('panorama-court_overlay_box1_text') ?></p>
                    </div>
                    <div class="standard-court-overlay-item">
                        <h4><?= t('panorama-court_box3_title') ?></h4>
                        <p><?= t('panorama-court_overlay_box2_text') ?></p>
                    </div>
                    <div class="standard-court-overlay-item">
                        <h4><?= t('panorama-court_box2_title') ?></h4>
                        <p><?= t('panorama-court_overlay_box3_text') ?></p>
                    </div>
                    <div class="standard-court-overlay-item">
                        <h4><?= t('panorama-court_box4_title') ?></h4>
                        <p><?= t('panorama-court_overlay_box4_text') ?></p>
                    </div>
                </div>
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
                <?php echo $telblock; ?><br>
                info@padelbee.de<br>
            </div>
            <div class="col-md-6"></div>
            <div class="col-12">
                <div class="trenner"><span><?= t('index_kontakt_oder') ?></span></div>
            </div>
        </div>
    </div>
    <a id="kontakt" class="anchor2"></a>
<?php
$formaktiv = 9;
include 'inc/kontakt-form.php';
?>

</main>
<?php
include 'inc/footer.php';
?>
