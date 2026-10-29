<?php
$page_id = 'padel-court-bauen';
include 'inc/header.php';
?>

<main id="main" class>

    <div class="container-fluid planung" id="intro">
        <div class="container">
            <img src="images/L-Bauplanung-0.png" alt="Padel Court bauen - Bauplanung Slogan" class="back">
            <img src="images/L-Bauplanung.png" alt="Padel Court bauen - Bauplanung Bild" class="textimg sub">

        </div>
    </div>

    <div class="container-fluid bg-grau" id="block2">
        <div class="container">
            <div class="row pt-6 pb-5">
                <div class="col-12 pb-5">
                    <h1><?= t('padel-court-bauen_h1') ?></h1>
                    <h3><?= t('padel-court-bauen_h3') ?></h3>
                    <p><?= t('padel-court-bauen_intro') ?></p>
                </div>
                <div class="col-12 pb-4">
                    <div class="white-box">
                        <img src="images/L-Bauplanung-1.png" alt="Padel Court bauen Schritt 1">
                        <div class="text"><?= t('padel-court-bauen_box1') ?></div>
                    </div>
                </div>
                <div class="col-12 pb-4">
                    <div class="white-box">
                        <img src="images/L-Bauplanung-2.png" alt="Padel Court bauen Schritt 2">
                        <div class="text"><?= t('padel-court-bauen_box2') ?></div>
                    </div>
                </div>
                <div class="col-12 pb-4">
                    <div class="white-box">
                        <img src="images/L-Bauplanung-3.png" alt="Padel Court bauen Schritt 3">
                        <div class="text"><?= t('padel-court-bauen_box3') ?></div>
                    </div>
                </div>
                <div class="col-12 pb-4">
                    <div class="white-box">
                        <img src="images/L-Bauplanung-4.png" alt="Padel Court bauen Schritt 4">
                        <div class="text"><?= t('padel-court-bauen_box4') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-cort2" id="block21">
        <div class="container">
            <img src="images/leistugen-baustelle.png" alt="Padel Court bauen - Baustelle Leistungen"
                class="img-kachel gross">
            <img src="images/leistugen-baustelle-mi.png" alt="Padel Court bauen - Baustelle Leistungen"
                class="img-kachel klein">
        </div>
    </div>
    </div>

    <div class="container-fluid bg-weiss" id="block3">
        <div class="container">
            <div class="row pt-6 pb-5">
                <div class="col-12 pb-5">
                    <h1><?= t('standortanalyse_weitere_h1') ?></h1>
                    <h3><?= t('standortanalyse_weitere_h3') ?></h3>
                </div>
                <div class="col-lg-4">
                    <div class="text-center spalte">
                        <img src="images/1-Standortanalyse.png" alt="Standortanalyse Icon">
                        <div class="text">
                            <h3><?= t('standortanalyse_col1_title') ?></h3>
                            <p><?= t('standortanalyse_col1_text') ?></p>
                        </div>
                        <a href="/standortanalyse " class="btn reiterbtn" rel="#tab-1"><?= t('index_mehr') ?></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center spalte">
                        <img src="images/3-Betreiberkonzept.png" alt="Betreiberkonzept Icon">
                        <div class="text">
                            <h3><?= t('standortanalyse_col2_title') ?></h3>
                            <p><?= t('standortanalyse_col2_text') ?></p>
                        </div>
                        <a href="/betreiberkonzept " class="btn reiterbtn" rel="#tab-1"><?= t('index_mehr') ?></a>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="text-center spalte">
                        <img src="images/4-Powerplay.png" alt="PowerPlay Icon">
                        <div class="text">
                            <h3><?= t('standortanalyse_col3_title') ?></h3>
                            <p><?= t('standortanalyse_col3_text') ?></p>
                        </div>
                        <a href="/powerplay" class="btn reiterbtn" rel="#tab-1"><?= t('index_mehr') ?></a>
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
                <?php echo $telblock; ?><br />
                info@padelbee.de<br />

            </div>
            <div class="col-md-6">
            </div>
            <div class="col-12">
                <div class="trenner"><span><?= t('index_kontakt_oder') ?></span></div>
            </div>
        </div>
    </div>
    <?php
	include 'inc/kontakt-form.php';
	?>


</main>
<?php
include 'inc/footer.php';
?>