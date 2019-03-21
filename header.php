<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- Facebook tagging -->
		<meta property="fb:app_id" content=""/>
		<meta property="og:type"   content="website" />
		<meta property="og:url"    content="<?php bloginfo('url')?>" />
		<meta property="og:title"  content="<?php bloginfo('name')?>"/>
		<meta property="og:image"  content="" />
		<meta property="og:description"  content="<?php bloginfo('description')?>"/>
		<!-- End of facebook tagging -->
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description')?>">
		<meta name="keywords" content="">
		<!--meta name="robots" content="INDEX,FOLLOW" NO SEO/-->
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/generals.css">
		<title><?php bloginfo('name')?></title>
		<?php wp_head(); ?>
	</head>
	<body id="JaponSite">
	<section id="section-header-banner" class="rocknsidebanner" style="background-image:url('https://via.placeholder.com/1280x350')">
  </section>
		<header id="header" class="sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<a class="navbar-brand" href="#">Navbar</a>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
							<li class="nav-item active">
								<a class="nav-link" href="#">Cursos <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Instituto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Noticias</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Galería</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contacto</a>
							</li>
						</ul>
					</div>
				</div>	
			</nav>
		</header>
