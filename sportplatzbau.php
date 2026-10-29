<?php
$page_id = 'sportplatzbau';
include 'inc/header.php';
?>

<main id="main" class="sportplatzbau-page">

	<div class="container-fluid sportplatzbau-intro" id="intro">
		<div class="container">
			<div class="row align-items-center pt-6 pb-5">
				<div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
					<div class="anlagen-intro-img">
						<img src="images/anlagen/image008.png" alt="Padel- und Sportanlage" class="img-fluid sportplatzbau-anim">
						<img src="images/anlagen/image0031.png" alt="Padelanlage Planung" class="img-fluid sportplatzbau-anim d-none d-md-block">
					</div>
				</div>
				<div class="col-lg-6 order-lg-1">
					<h1><?= t('sportplatzbau_h1') ?></h1>
					<h3><?= t('sportplatzbau_h3') ?></h3>
					<p><?= t('sportplatzbau_intro1') ?></p>
					<p><?= t('sportplatzbau_intro2') ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-grau" id="leistungsschritte">
		<div class="container">
			<div class="row pt-6 pb-2">
				<div class="col-12 pb-4">
					<h2><?= t('sportplatzbau_steps_h2') ?></h2>
					<h3><?= t('sportplatzbau_steps_h3') ?></h3>
				</div>
			</div>

			<div class="leistungsschritte-timeline">
				<?php for ($step = 1; $step <= 7; $step++): ?>
				<div class="leistungsschritt" data-step="<?= $step ?>">
					<div class="leistungsschritt-num"><?= $step ?></div>
					<div class="leistungsschritt-content">
						<h3><?= t('sportplatzbau_step' . $step . '_title') ?></h3>
						<p class="leistungsschritt-teaser"><?= t('sportplatzbau_step' . $step . '_teaser') ?></p>
						<ul class="haken">
							<?php foreach (explode("\n", t('sportplatzbau_step' . $step . '_li')) as $li): ?><li><?= htmlspecialchars(trim($li)) ?></li><?php endforeach; ?>
						</ul>
					</div>
				</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-weiss" id="ergebnis">
		<div class="container">
			<div class="row pt-6 pb-5 align-items-center">
				<div class="col-lg-5 mb-4 mb-lg-0">
					<img src="images/anlagen/image00423.png" alt="Fertige Padel-Anlage" class="img-fluid sportplatzbau-anim">
				</div>
				<div class="col-lg-7">
					<h2><?= t('sportplatzbau_ergebnis_h2') ?></h2>
					<p class="lead"><?= t('sportplatzbau_ergebnis_lead') ?></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-hellgrau" id="partner">
		<div class="container">
			<div class="row pt-6 pb-5">
				<div class="col-12 pb-4">
					<h2><?= t('sportplatzbau_partner_h2') ?></h2>
				</div>
				<div class="col-md-6 mb-4">
					<div class="partner-box">
						<img src="images/partner/gabriel.png" alt="Gabriel Partners Real Estate" class="partner-logo">
						<h3><?= t('sportplatzbau_partner1_name') ?></h3>
						<p><?= t('sportplatzbau_partner1_role') ?></p>
						<p class="partner-company"><?= t('sportplatzbau_partner1_company') ?></p>
					</div>
				</div>
				<div class="col-md-6 mb-4">
					<a href="https://thecourt.dev/" target="_blank" rel="noopener noreferrer" class="partner-box partner-box-court">
						<span class="court-wordmark court-wordmark-box" aria-label="thecourt.dev">thecourt<span class="court-wordmark-dot">.</span>dev</span>
					</a>
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
				<img src="images/martin-kontakt.png" alt="<?= htmlspecialchars(t('index_martin_title') . ', ' . t('index_martin_role')) ?>" class="img-fluid">
				<div class="gelb"><h3><?= t('index_martin_title') ?></h3>
				<p><?= t('index_martin_role') ?></p></div>
			</div>
			<div class="col-12">
				<div class="trenner"><span><?= t('index_kontakt_oder') ?></span></div>
			</div>
		</div>
	</div>
	<?php include 'inc/kontakt-form.php'; ?>

</main>
<?php include 'inc/footer.php'; ?>
