<?php
$page_id = 'powerplay';
include 'inc/header.php';
?>

<main id="main" class>

<div class="containe-fluid powerplay" id="intro">
	<div class="container">
	<img src="images/L-Powerplay-0.png" alt="PowerPlay Slogan" class="back">
		<img src="images/L-Powerplay.png" alt="PowerPlay Bild" class="textimg sub">
		
	</div>
</div>

<div class="container-fluid bg-gelb" id="block2">
	<div class="container" >
		<div class="row pt-6 pb-5">
			<div class="col-12 pb-5">
	  		<h1><?= t('powerplay_h1') ?></h1>
			<h3><?= t('powerplay_h3') ?></h3>
			<p><?= t('powerplay_intro') ?></p>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Powerplay-1.png" alt="PowerPlay Schritt 1"> 
					<div class="text"><?= t('powerplay_box1') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Powerplay-2.png" alt="PowerPlay Schritt 2"> 
					<div class="text"><?= t('powerplay_box2') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Powerplay-3.png" alt="PowerPlay Schritt 3"> 
					<div class="text"><?= t('powerplay_box3') ?></div>
				</div>
			</div>
			<div class="col-12 pb-4">
				<div class="white-box">
					<img src="images/L-Powerplay-4.png" alt="PowerPlay Schritt 4"> 
					<div class="text"><?= t('powerplay_box4') ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-weiss" id="block3">
	<div class="container" >
		<div class="row pt-6 pb-5 g-0">
		<div class="col-12 pb-5">
			<h2><?= t('powerplay_mix_h2') ?></h2>
		</div>

		<div class="col-lg-6">
			<img src="/images/Online-Booking.jpg" class="img-links img-fluid">
		</div>
		<div class="col-lg-6 h-center">
			<div class="wrap">
				<h3><?= t('powerplay_online_h3') ?></h3>
				<ul class="haken gelb">
					<?php foreach (explode("\n", t('powerplay_online_li')) as $li): ?><li><?= htmlspecialchars(trim($li)) ?></li><?php endforeach; ?>
				</ul>
			</div>
		</div>

		<div class="col-lg-6 h-center tausch1">
			<div class="wrap">
				<h3><?= t('powerplay_events_h3') ?></h3>
				<ul class="haken gelb">
					<?php foreach (explode("\n", t('powerplay_events_li')) as $li): ?><li><?= htmlspecialchars(trim($li)) ?></li><?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="col-lg-6  tausch2">
			<img src="/images/Events.jpg"class="img-rechts img-fluid">
		</div>

		<div class="col-lg-6">
			<img src="/images/Turniere-und-Trainings.jpg"class="img-links img-fluid">
		</div>
		<div class="col-lg-6 h-center">
			<div class="wrap">
				<h3><?= t('powerplay_turniere_h3') ?></h3>
				<ul class="haken gelb">
					<?php foreach (explode("\n", t('powerplay_turniere_li')) as $li): ?><li><?= htmlspecialchars(trim($li)) ?></li><?php endforeach; ?>
				</ul>
			</div>
		</div>

		
		<div class="col-lg-6 h-center tausch1">
			<div class="wrap">
				<h3><?= t('powerplay_marketing_h3') ?></h3>
				<ul class="haken gelb">
					<?php foreach (explode("\n", t('powerplay_marketing_li')) as $li): ?><li><?= htmlspecialchars(trim($li)) ?></li><?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="col-lg-6 tausch2">
			<img src="/images/Marketing-Werbung.jpg"class="img-rechts img-fluid">
		</div>

	</div>
</div>


<div class="container-fluid bg-hellgrau" id="block3">
	<div class="container" >
		<div class="row pt-6 pb-5 g-0">
			<div class="col-12 pb-5">
				<h2><?= t('powerplay_roundup_h2') ?></h2>
				<h3><?= t('powerplay_roundup_h3') ?></h3>
			</div>

			<div class="col-lg-6">
				<img src="/images/Coaching-und-Consulting.jpg" class="img-links img-fluid">
			</div>
			<div class="col-lg-6 h-center">
				<div class="wrap">
					<h3><?= t('powerplay_coaching_h3') ?></h3>
					<ul class="haken gelb">
						<?php foreach (explode("\n", t('powerplay_coaching_li')) as $li): ?><li><?= htmlspecialchars(trim($li)) ?></li><?php endforeach; ?>
					</ul>
				</div>
			</div>

			<div class="col-lg-6 h-center tausch1">
				<div class="wrap">
					<h3><?= t('powerplay_verkauf_h3') ?></h3>
					<ul class="haken gelb">
						<?php foreach (explode("\n", t('powerplay_verkauf_li')) as $li): ?><li><?= htmlspecialchars(trim($li)) ?></li><?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 tausch2">
				<img src="/images/Verkauf-und-Verleih.jpg"class="img-rechts img-fluid">
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
