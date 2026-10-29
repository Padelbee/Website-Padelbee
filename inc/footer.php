
<footer class="py-5">
	<div class="container" id="footer">
		<div class="row">

			<div class="col-md-3 col-6 mb-4 mb-md-0">
				<img src="images/padelbee-Logo.png" alt="Padelbee Logo" class="logo mb-3">
				<b>Padelbee</b><br />
				Münchner Str. 15<br />
				85774 Unterföhring<br />
				<?= t('footer_country') ?><br /><br />
				<?php echo $telblock; ?><br />
				<a href="mailto:info@padelbee.de">info@padelbee.de</a>
			</div>

			<div class="col-md-2 col-6 mb-4 mb-md-0">
				<h6 class="text-uppercase mb-3"><?= t('footer_leistungen') ?></h6>
				<ul class="list-unstyled footer-links">
					<li><a href="/standortanalyse"><?= t('nav_erstscreening') ?></a></li>
					<li><a href="/padel-court-bauen"><?= t('nav_platzbau') ?></a></li>
					<li><a href="/sportplatzbau"><?= t('nav_sportplatzbau') ?></a></li>
					<li><a href="/betreiberkonzept"><?= t('nav_betreiberkonzept') ?></a></li>
					<li><a href="/powerplay"><?= t('nav_powerplay') ?></a></li>
				</ul>
			</div>

			<div class="col-md-2 col-6 mb-4 mb-md-0">
				<h6 class="text-uppercase mb-3"><?= t('footer_produkte') ?></h6>
				<ul class="list-unstyled footer-links">
					<li><a href="/automatenloesungen"><?= t('nav_automatenloesungen') ?></a></li>
					<li><a href="/halle"><?= t('nav_halle') ?></a></li>
					<li><a href="/standard-court"><?= t('nav_standard_court') ?></a></li>
					<li><a href="/panorama-court"><?= t('nav_panorama_court') ?></a></li>
					<li><a href="/hybrid-court"><?= t('nav_hybrid_court') ?></a></li>
					<li><a href="/premier-court"><?= t('nav_premier_court') ?></a></li>
				</ul>
			</div>

			<div class="col-md-2 col-6 mb-4 mb-md-0">
				<h6 class="text-uppercase mb-3"><?= t('footer_unternehmen') ?></h6>
				<ul class="list-unstyled footer-links">
					<li><a href="/team"><?= t('nav_team') ?></a></li>
					<li><a href="/news"><?= t('nav_news') ?></a></li>
					<li><a href="/jobs"><?= t('nav_jobs') ?></a></li>
				</ul>
			</div>

			<div class="col-md-3 col-12 mb-4 mb-md-0">
				<div style="background-color: #003a43; border-radius: 20px; padding: 15px 20px; margin-bottom: 15px;">
					<a href="https://www.btv.de" target="_blank" rel="noopener noreferrer" class="d-flex align-items-center flex-wrap" style="text-decoration: none;">
						<img src="images/logo-btv.svg" alt="Bayerischer Tennisverband Logo" class="img-fluid" style="max-width: 120px; margin-right: 15px; margin-bottom: 10px;">
						<div style="height: auto; display: block; flex: 1; min-width: 200px; color: #80969a; font-size: 0.75em; line-height: 1.4;">
							<strong><?= t('footer_btv_text') ?></strong>
						</div>
					</a>
				</div>
				<ul class="list-unstyled footer-links">
					<li><a href="/impressum"><?= t('footer_impressum') ?></a></li>
					<li><a href="/datenschutz"><?= t('footer_datenschutz') ?></a></li>
				</ul>
			</div>

		</div>
	</div>
</footer>

	<script src="/js/jquery-3.6.0.min.js"></script>
	<script src="/js/jquery.bxslider.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>

	</script>
	<script src="/js/script.js?v=2"></script>
	<!-- Cloudflare Turnstile (Bot-Schutz Kontaktformular) -->
	<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit&onload=onTurnstileLoad" async defer></script>

	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/49314061.js"></script>
	<!-- End of HubSpot Embed Code -->
  </body>
</html>