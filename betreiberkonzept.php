<?php
$page_id = 'betreiberkonzept';
include 'inc/header.php';
?>

<main id="main">

<div class="containe-fluid betreiber" id="intro">
	<div class="container">
	<img src="images/L-Betreiberkonzept-0.png" alt="Betreiberkonzept Slogan" class="back">
		<img src="images/L-Betreiberkonzept.png" alt="Betreiberkonzept Bild" class="textimg sub">
		
	</div>
</div>

<div class="container-fluid bg-rosa" id="block2">
	<div class="container" >
		<div class="row pt-6 pb-5">
			<div class="col-12 pb-5">
	  		<h1><?= t('betreiberkonzept_h1') ?></h1>
			<h3><?= t('betreiberkonzept_h3') ?></h3>
			<p><?= t('betreiberkonzept_intro') ?></p>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Betreiberkonzept-1.png" alt="Betreiberkonzept Schritt 1"> 
					<div class="text"><?= t('betreiberkonzept_box1') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Betreiberkonzept-2.png" alt="Betreiberkonzept Schritt 2"> 
					<div class="text"><?= t('betreiberkonzept_box2') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Betreiberkonzept-3.png" alt="Betreiberkonzept Schritt 3"> 
					<div class="text"><?= t('betreiberkonzept_box3') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Betreiberkonzept-4.png" alt="Betreiberkonzept Schritt 4"> 
					<div class="text"><?= t('betreiberkonzept_box4') ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-weiss" id="block3">
	<div class="container" >
		<div class="row pt-6 pb-5">
			<div class="col-12 pb-5">
			<h1><?= t('standortanalyse_weitere_h1') ?></h1>
			<h3><?= t('standortanalyse_weitere_h3') ?></h3>
			</div>
			<div class="col-lg-4">
				<div class="text-center spalte"> 
				<img src="images/1-Standortanalyse.png" alt="Standortanalyse Icon">
				<div class="text">
				<h3><?= t('betreiberkonzept_col1_title') ?></h3>
				<p><?= t('betreiberkonzept_col1_text') ?></p>
				</div>
				<a href="/standortanalyse " class="btn reiterbtn" rel="#tab-1"><?= t('index_mehr') ?></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="text-center spalte"> 
				<img src="images/2-Bauplanung.png" alt="Bauplanung Icon">
				<div class="text">
				<h3><?= t('betreiberkonzept_col2_title') ?></h3>
				<p><?= t('betreiberkonzept_col2_text') ?></p>
				</div>
				<a href="/padel-court-bauen " class="btn reiterbtn" rel="#tab-1"><?= t('index_mehr') ?></a>
				</div>
			</div>
		
			<div class="col-lg-4">
				<div class="text-center spalte"> 
				<img src="images/4-Powerplay.png" alt="PowerPlay Icon">
				<div class="text">
				<h3><?= t('betreiberkonzept_col3_title') ?></h3>
				<p><?= t('betreiberkonzept_col3_text') ?></p>
				</div>
				<a href="/powerplay" class="btn reiterbtn" rel="#tab-1"><?= t('index_mehr') ?></a>
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
