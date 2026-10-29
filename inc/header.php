<?php
require_once __DIR__ . '/i18n.php';

$telblock = '<a href="tel:004915118175125" class="tel">+49 (0)151 18175125 </a>';

$formaktiv = false;

// SEO Variablen - von jeder Seite überschrieben oder aus Übersetzung bei $page_id
if (isset($page_id)) {
    $title = $title ?? t($page_id . '_title');
    $meta_description = $meta_description ?? t($page_id . '_meta_description');
    $meta_keywords = $meta_keywords ?? t($page_id . '_meta_keywords');
}
$meta_description = $meta_description ?? t('meta_default_description');
$meta_keywords = $meta_keywords ?? t('meta_default_keywords');
$meta_robots = $meta_robots ?? 'index, follow';
$og_image = $og_image ?? 'https://www.padelbee.de/images/padelbee-Logo.png';
$canonical_url = $canonical_url ?? 'https://www.padelbee.de' . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Aktuelle URL für Open Graph
$current_url = 'https://www.padelbee.de' . $_SERVER['REQUEST_URI'];

$og_locale = ($lang === 'en') ? 'en_GB' : 'de_DE';
$lang_switcher_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';

/*if (!$_SERVER['HTTPS']){
  header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); 
  //echo "<pre>"; print_r($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); echo "</pre>";
}*/
?><!doctype html>
<html lang="<?= $lang ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Padelbee <?=$title?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
    <meta name="author" content="THE COURT GmbH">
    <meta name="robots" content="<?= htmlspecialchars($meta_robots) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta property="og:title" content="Padelbee <?= htmlspecialchars($title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>">
    <meta property="og:locale" content="<?= $og_locale ?>">
    <meta property="og:site_name" content="Padelbee">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta name="twitter:title" content="Padelbee <?= htmlspecialchars($title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>">
    
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;700;800&display=swap" rel="stylesheet">
	<link href="css/style.css?v=6" rel="stylesheet">


	
	<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
	<link rel="manifest" href="/images/site.webmanifest">
	<link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EDT6G30T20"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-EDT6G30T20');
	</script>

	<script src="https://cloud.ccm19.de/app.js?apiKey=1a9603ffb3b304e1b2fae2a806846cbacf3795537350db7e&amp;domain=69118fc1086bc66c5c03daf2" referrerpolicy="origin"></script>

  </head>
  <body>



	<!-- Content Header -->
	<header class="d-flex fixed-top">
		<div class="container" id="header">
			<nav class="navbar navbar-expand-lg navbar-dark">	
				<div class="logoblock">
					<a href="/" class="">
						<img src="images/padelbee-Logo.png" class="logo img-fluid" alt="Padelbee Logo">
					</a>
				</div>
			
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
        
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav nav-pills mr-auto" >
						<li class="nav-item"><a href="<?php if($title != '') echo '/'; ?>#home" class="nav-link"><?= t('nav_360') ?></a></li>
						
						<li class="nav-item dropdown"><a href="<?php if($title != '') echo '/'; ?>#leistungen" class="nav-link dropdown-toggle"><?= t('nav_leistungen') ?></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" id="sn21" href="/standortanalyse"><?= t('nav_erstscreening') ?></a>
							<a class="dropdown-item" id="sn22" href="/padel-court-bauen"><?= t('nav_platzbau') ?></a>
							<a class="dropdown-item" id="sn22b" href="/sportplatzbau"><?= t('nav_sportplatzbau') ?></a>
							<a class="dropdown-item" id="sn23"  href="/betreiberkonzept"><?= t('nav_betreiberkonzept') ?></a>
							<a class="dropdown-item" id="sn24" href="/powerplay"><?= t('nav_powerplay') ?></a>
						</div>
						</li>

						<li class="nav-item dropdown"><a href="<?php if($title != '') echo '/'; ?>#produkte" class="nav-link dropdown-toggle"><?= t('nav_produkte') ?></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" id="sn32" href="/automatenloesungen"><?= t('nav_automatenloesungen') ?></a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/halle"><?= t('nav_halle') ?></a>
							<a class="dropdown-item" href="/standard-court"><?= t('nav_standard_court') ?></a>
							<a class="dropdown-item" href="/panorama-court"><?= t('nav_panorama_court') ?></a>
							<a class="dropdown-item" href="/hybrid-court"><?= t('nav_hybrid_court') ?></a>
							<a class="dropdown-item" href="/premier-court"><?= t('nav_premier_court') ?></a>
							</div>
						</li>
						
						<li class="nav-item"><a href="<?php if($title != '') echo '/'; ?>#expertise" class="nav-link"><?= t('nav_expertise') ?></a></li>	
						<li class="nav-item"><a href="/team" class="nav-link"><?= t('nav_team') ?></a></li>	
						<li class="nav-item"><a href="/partner" class="nav-link"><?= t('nav_partner') ?></a></li>	
						<li class="nav-item"><a href="/news" class="nav-link"><?= t('nav_news') ?></a></li>
						<li class="nav-item dropdown lang-dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?= $lang === 'de' ? t('nav_lang_de') : t('nav_lang_en') ?>">
								<span class="lang-flag"><?= $lang === 'de' ? '🇩🇪' : '🇬🇧' ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item<?= $lang === 'de' ? ' active' : '' ?>" href="<?= htmlspecialchars($lang_switcher_path) ?>?lang=de"><span class="lang-flag">🇩🇪</span> <?= t('nav_lang_de') ?></a>
								<a class="dropdown-item<?= $lang === 'en' ? ' active' : '' ?>" href="<?= htmlspecialchars($lang_switcher_path) ?>?lang=en"><span class="lang-flag">🇬🇧</span> <?= t('nav_lang_en') ?></a>
							</div>
						</li>
					</ul>
					<a href="/#kontakt" class="btn btn-kontakt"><?= t('nav_contact') ?></a>
				</div>
			
			</nav>
		
		</div>
	</header>