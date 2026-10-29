<?php
$page_id = 'jobs';
include 'inc/header.php';
?>

<main id="main" class>

	<div class="container-fluid jobs" id="intro">
		<div class="container">
		<img src="images/head-jobs.png" alt="Jobs Bild"class="back">
			<img src="images/headline-jobs.png" alt="Jobs Slogan"  class="textimg sub">
			
		</div>
	</div>

	<div class="container-fluid bg-grau" id="block2">
		<div class="container" >
			<div class="row pt-6 pb-5">
				<div class="col-12 pb-5">
					<h1><?= t('jobs_h1') ?></h1>
					<h3><?= t('jobs_h3') ?></h3>
					<p><?= t('jobs_intro') ?></p>
				</div>
				<div class="col-12 pb-1">
					<h3><?= t('jobs_angebote') ?></h3>
				</div>
				<div class="col-12 pb-5">
					<a href="Padelbee-Stellenanzeige-Werkstudent.pdf" target="_blank" class="white-box">
						<img src="images/pdf-icon.png" alt="PDF Icon"> 
						<p class="text"><?= t('jobs_stelle_text') ?>
						<br /><span><?= t('jobs_download') ?></span>
						</p>
						
					</a>
				</div>
			</div>
			<div class="row pb-2">
				
				<div class="col-12 pb-5 back-bright">
					<p><?= t('jobs_apply_text') ?></p>
					<a href="mailto:kontakt@padelbee.de"><b>kontakt@padelbee.de</b></a>
				</div>
			</div>
				
			</div>
		</div>
	</div>


	<div class="container" >
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
