<?php
$page_id = 'halle';
include 'inc/header.php';
?>

<main id="main" class="halle-page">

    <div class="container-fluid halle-first-section halle-block-dark" id="block-ueberdachung">
        <div class="container">
            <div class="row pt-6 pb-5 align-items-center">
                <div class="col-12 col-lg-5 order-2 order-lg-1 pb-4 pb-lg-0">
                    <h1 class="halle-section-title"><?= t('halle_section1_h1') ?></h1>
                    <p class="halle-section-lead"><?= t('halle_section1_lead') ?></p>
                    <p class="halle-section-subtitle"><?= t('halle_section1_subtitle') ?></p>
                </div>
                <div class="col-12 col-lg-7 order-1 order-lg-2">
                    <div class="halle-ueberdachung-stack">
                        <figure class="halle-ueberdachung-item halle-stack-1">
                            <div class="halle-ueberdachung-img-wrap">
                                <img src="images/halle/1.png" alt="<?= htmlspecialchars(t('halle_fig_grundriss')) ?>" class="img-fluid">
                            </div>
                            <figcaption><?= t('halle_fig_grundriss') ?></figcaption>
                        </figure>
                        <figure class="halle-ueberdachung-item halle-stack-2">
                            <div class="halle-ueberdachung-img-wrap">
                                <img src="images/halle/2.png" alt="<?= htmlspecialchars(t('halle_fig_schnitt1')) ?>" class="img-fluid">
                            </div>
                            <figcaption><?= t('halle_fig_schnitt1') ?></figcaption>
                        </figure>
                        <figure class="halle-ueberdachung-item halle-stack-3">
                            <div class="halle-ueberdachung-img-wrap">
                                <img src="images/halle/3.png" alt="<?= htmlspecialchars(t('halle_fig_schnitt2')) ?>" class="img-fluid">
                            </div>
                            <figcaption><?= t('halle_fig_schnitt2') ?></figcaption>
                        </figure>
                        <figure class="halle-ueberdachung-item halle-stack-4">
                            <div class="halle-ueberdachung-img-wrap">
                                <img src="images/halle/4.jpg" alt="<?= htmlspecialchars(t('halle_fig_axonometrie')) ?>" class="img-fluid">
                            </div>
                            <figcaption><?= t('halle_fig_axonometrie') ?></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-weiss" id="block-konstruktion">
        <div class="container">
            <div class="row pt-6 pb-4">
                <div class="col-12">
                    <h1 class="halle-konstruktion-title"><?= t('halle_konstruktion_h1') ?></h1>
                    <p><?= t('halle_konstruktion_intro') ?></p>
                </div>
            </div>
            <div class="row align-items-center pb-5">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <h3 class="halle-konstruktion-sub"><?= t('halle_konstruktion_a_title') ?></h3>
                    <p><?= t('halle_konstruktion_a_p') ?></p>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="images/halle/a.png" alt="Stützen / Pfeiler" class="img-fluid">
                </div>
            </div>
            <div class="row align-items-center pb-5">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <img src="images/halle/b.jpg" alt="Verbindungs- / Kopplungsträger" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="halle-konstruktion-sub"><?= t('halle_konstruktion_b_title') ?></h3>
                    <p><?= t('halle_konstruktion_b_p') ?></p>
                </div>
            </div>
            <div class="row align-items-center pb-5">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <h3 class="halle-konstruktion-sub"><?= t('halle_konstruktion_c_title') ?></h3>
                    <p><?= t('halle_konstruktion_c_p') ?></p>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="images/halle/c1.jpg" alt="Bogenbinder / Hauptträger" class="img-fluid">
                </div>
            </div>
            <div class="row pt-2 pb-5">
                <div class="col-12">
                    <p><?= t('halle_konstruktion_pv') ?></p>
                    <p><?= t('halle_konstruktion_ce') ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-hellgrau" id="block-beispiele">
        <div class="container">
            <div class="row pt-6 pb-5">
                <div class="col-12 pb-4">
                    <h2><?= t('halle_beispiele_h2') ?></h2>
                </div>
                <div class="col-sm-6 col-md-4 pb-4">
                    <img src="images/halle/beispiel1.png" alt="Projektbeispiel 1" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-4 pb-4">
                    <img src="images/halle/beispiel2.png" alt="Projektbeispiel 2" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-4 pb-4">
                    <img src="images/halle/beispiel3.png" alt="Projektbeispiel 3" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-4 pb-4">
                    <img src="images/halle/beispiel4.png" alt="Projektbeispiel 4" class="img-fluid">
                </div>
                <div class="col-sm-6 col-md-4 pb-4">
                    <img src="images/halle/beispiel5.jpg" alt="Projektbeispiel 5" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-weiss" id="block-produkte">
        <div class="container">
            <div class="row pt-6 pb-5">
                <div class="col-12 pb-4">
                    <h2><?= t('halle_produkte_h2') ?></h2>
                </div>

                <div class="col-sm-6 col-md-4 pb-5 produkt">
                    <img src="images/halle/produkt1.png" alt="<?= htmlspecialchars(t('halle_produkt1_title')) ?>" class="img-fluid">
                    <h3><?= t('halle_produkt1_title') ?></h3>
                    <p><?= t('halle_produkt1_desc') ?></p>
                </div>

                <div class="col-sm-6 col-md-4 pb-5 produkt">
                    <img src="images/halle/produkt2.png" alt="<?= htmlspecialchars(t('halle_produkt2_title')) ?>" class="img-fluid">
                    <h3><?= t('halle_produkt2_title') ?></h3>
                    <p><?= t('halle_produkt2_desc') ?></p>
                </div>

                <div class="col-sm-6 col-md-4 pb-5 produkt">
                    <img src="images/halle/produkt3.png" alt="<?= htmlspecialchars(t('halle_produkt3_title')) ?>" class="img-fluid">
                    <h3><?= t('halle_produkt3_title') ?></h3>
                    <p><?= t('halle_produkt3_desc') ?></p>
                </div>

                <div class="col-sm-6 col-md-4 pb-5 produkt">
                    <img src="images/halle/produkt4.png" alt="<?= htmlspecialchars(t('halle_produkt4_title')) ?>" class="img-fluid">
                    <h3><?= t('halle_produkt4_title') ?></h3>
                    <p><?= t('halle_produkt4_desc') ?></p>
                </div>

                <div class="col-sm-6 col-md-4 pb-5 produkt">
                    <img src="images/halle/produkt5.png" alt="<?= htmlspecialchars(t('halle_produkt5_title')) ?>" class="img-fluid">
                    <h3><?= t('halle_produkt5_title') ?></h3>
                    <p><?= t('halle_produkt5_desc') ?></p>
                </div>

                <div class="col-sm-6 col-md-4 pb-5 produkt">
                    <img src="images/halle/produkt6.png" alt="<?= htmlspecialchars(t('halle_produkt6_title')) ?>" class="img-fluid">
                    <h3><?= t('halle_produkt6_title') ?></h3>
                    <p><?= t('halle_produkt6_desc') ?></p>
                </div>

                <div class="col-sm-6 col-md-4 pb-5 produkt">
                    <img src="images/halle/produkt7.png" alt="<?= htmlspecialchars(t('halle_produkt7_title')) ?>" class="img-fluid">
                    <h3><?= t('halle_produkt7_title') ?></h3>
                    <p><?= t('halle_produkt7_desc') ?></p>
                </div>

                <div class="col-12 pb-4 pt-4">
                    <div class="block bg-hellgrau text-center">
                        <h3><?= t('halle_anfragen_h3') ?></h3>
                        <a href="/halle#kontakt" class="btn"><?= t('nav_contact') ?></a>
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
$formaktiv = 7;
include 'inc/kontakt-form.php';
?>

</main>
<?php
include 'inc/footer.php';
?>