<?php
$page_id = 'standortanalyse';
include 'inc/header.php';
?>

<main id="main" class>

<div class="container-fluid standort" id="intro">
	<div class="container">
	<img src="images/pic_standortanalyse.png" alt="Standortanalyse" class="back">
		<img src="images/header_standortanalyse.png" alt="Standortanalyse" class="textimg sub">
		
	</div>
</div>

<div class="container-fluid bg-blau" id="block2">
	<div class="container" >
		<div class="row pt-6 pb-5">
			<div class="col-12 pb-5">
	  		<h1><?= t('standortanalyse_h1') ?></h1>
			<h3><?= t('standortanalyse_h3') ?></h3>
			<p><?= t('standortanalyse_intro') ?></p>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Standortanalyse-1.png" alt="Standort- & Marktanalyse"> 
					<div class="text"><?= t('standortanalyse_box1') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Standortanalyse-2.png" alt="Technische & bauliche Vorprüfung"> 
					<div class="text"><?= t('standortanalyse_box2') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Standortanalyse-3.png" alt="Wirtschaftlichkeitsanalyse"> 
					<div class="text"><?= t('standortanalyse_box3') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Standortanalyse-4.png" alt="Erste Konzeptvisualisierung"> 
					<div class="text"><?= t('standortanalyse_box4') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Standortanalyse-4.png" alt="Beratung & Entscheidungsvorlage"> 
					<div class="text"><?= t('standortanalyse_box5') ?></div>
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
				<img src="images/2-Bauplanung.png" alt="Bauplanung Icon">
				<div class="text">
				<h3><?= t('standortanalyse_col1_title') ?></h3>
				<p><?= t('standortanalyse_col1_text') ?></p>
				</div>
				<a href="/padel-court-bauen " class="btn reiterbtn" rel="#tab-1"><?= t('index_mehr') ?></a>
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
