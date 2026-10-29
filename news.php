<?php
$page_id = 'news';
include 'inc/header.php';
?>

<main id="main">

    <div class="bg-court">
        <div class="container pt-6" id="news">
            <div class="row pt-6">
                <div class="col-12 pb-5">
                    <h1><?= t('news_h1') ?></h1>
                    <h3><?= t('news_h3') ?></h3>
                </div>
                <div class="col-12 pb-5">
                    <div class="sk-ww-linkedin-page-post" data-embed-id="25653061"></div>
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
            <div class="col-md-6 img-head">
                <img src="images/martin-kontakt.png" alt="Martin Gaffal"
                    class="img-fluid">
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
    <?php
    include 'inc/kontakt-form.php';
    ?>

</main>

<script src="https://widgets.sociablekit.com/linkedin-page-posts/widget.js" defer></script>

<?php
include 'inc/footer.php';
?>