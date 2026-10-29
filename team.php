<?php
$page_id = 'team';
include 'inc/header.php';
?>

<main id="main">

    <div class="bg-court">
        <div class="container" id="team">
            <div class="row pt-6">
                <div class="col-12 pb-5">
                    <h1><?= t('team_h1') ?></h1>
                    <h3><?= t('team_h3') ?></h3>
                    <div>
                        <p><?= t('team_p1') ?></p>
                        <p><?= t('team_p2') ?></p>
                    </div>
                </div>
            </div>
            <div class="row team-grid">
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/martin.png" alt="MARTIN GAFFAL">
                        <div class="marker">MARTIN GAFFAL</div>
                        <p class="person-affil"><?= t('team_affil_martin') ?></p>
                        <h5><?= t('team_role_ceo') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/stefan.png" alt="STEFAN MÖBIUS">
                        <div class="marker">STEFAN MÖBIUS</div>
                        <p class="person-affil"><?= t('team_affil_stefan') ?></p>
                        <h5><?= t('team_role_cofounder') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/oliver.png" alt="OLIVER SCHECK-POTURICEK">
                        <div class="marker">OLIVER SCHECK-POTURICEK</div>
                        <p class="person-affil"><?= t('team_affil_oliver') ?></p>
                        <h5><?= t('team_role_expert') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/gerrit.png" alt="GERRIT MOLINEUS">
                        <div class="marker">GERRIT MOLINEUS</div>
                        <p class="person-affil"><?= t('team_affil_gerrit') ?></p>
                        <h5><?= t('team_role_architect') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/angelique.png" alt="ANGÉLÍQUE WILLNER">
                        <div class="marker">ANGÉLÍQUE WILLNER</div>
                        <p class="person-affil"><?= t('team_affil_angelique') ?></p>
                        <h5><?= t('team_role_pp') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/christian.jpg?v=3" alt="CHRISTIAN BONK">
                        <div class="marker">CHRISTIAN BONK</div>
                        <p class="person-affil"><?= t('team_affil_christian') ?></p>
                        <h5><?= t('team_role_christian') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/florian.webp?v=2" alt="FLORIAN VON STUCKRAD">
                        <div class="marker">FLORIAN VON STUCKRAD</div>
                        <p class="person-affil"><?= t('team_affil_florian') ?></p>
                        <h5><?= t('team_role_florian') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/philipp.jpg?v=2" alt="PHILIPP KAMP">
                        <div class="marker">PHILIPP KAMP</div>
                        <p class="person-affil"><?= t('team_affil_philipp') ?></p>
                        <h5><?= t('team_role_philipp') ?></h5>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="person">
                        <img src="images/team/SEBASTIEN.png" alt="SEBASTIEN COLLINET">
                        <div class="marker">SEBASTIEN COLLINET</div>
                        <p class="person-affil"><?= t('team_affil_sebastien') ?></p>
                        <h5><?= t('team_role_nrw') ?></h5>
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