<?php
$page_id = 'angebotsvergleich';
include 'inc/header.php';
?>

<main id="main" class>

<div class="containe-fluid vergleich" id="intro">
	<div class="container">
	<img src="images/L-Angebotsvergleich-0.png" alt="Angebotsvergleich Bild" class="back">
		<img src="images/L-Angebotsvergleich.png" alt="Angebotsvergleic Sloganh" class="textimg sub">
		
	</div>
</div>

<div class="container-fluid bg-hellgrau" id="block2">
	<div class="container" >
		<div class="row pt-6 pb-5">
			<div class="col-12 pb-5">
						<h1><?= t('angebotsvergleich_h1') ?></h1>
						<h3><?= t('angebotsvergleich_h3') ?></h3>
			<p><?= t('angebotsvergleich_p1') ?></p>
			<p><?= t('angebotsvergleich_p2') ?></p>
			</div>
			<div class="col-12 pb-5">
				<h3><?= t('angebotsvergleich_vorteile_h3') ?></h3>
				<ul class="haken grau">
					<li><?= t('angebotsvergleich_li1') ?></li>
					<li><?= t('angebotsvergleich_li2') ?></li>
					<li><?= t('angebotsvergleich_li3') ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-weiss" id="">
	<div class="container" >
			<div class="row pt-6 pb-5">
				<div class="col-12 pb-5">
					<img src="images/tabelle.png" alt="Angebotsvergleich Tabelle" class="img-fluid">
					<div class="block bg-hellgrau text-center">
						<h3><?= t('angebotsvergleich_support_h3') ?></h3>
						<p><?= t('angebotsvergleich_support_p') ?></p>
						<a href="/angebotsvergleich#kontakt" class="btn"><?= t('nav_contact') ?></a>
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
</div>
<a id="kontakt" class="anchor2"></a>
<?php
$formaktiv = 5;
include 'inc/kontakt-form.php';
?>


</main>
<?php
include 'inc/footer.php';
?>