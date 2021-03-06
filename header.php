<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="UTF-8">
		<title>Caacup&eacute; WEB</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/icon-web.png">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">  
		<link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet"> 
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div class="contenedor">
		<!-- HEADER -->
		<header>
			<div class="logo-encabezado">
				<div class="container">
					<div class="row middle-xs between-xs">
						<div class="encabezado col-xs end-xs">
							<span>Seguinos en: </span>
							<span><a href="http://www.facebook.com/caacupeweb" class="icon-facebook-with-circle" target="_blank"></a></span>
							<span ><a href="http://www.twitter.com/caacupe_web" class=" icon-twitter-with-circle" target="_blank"></a></span>
						 	<span><a href="http://www.plus.google.com/" class="icon-google-plus3" target="_blank"></a></span>
						</div>
					</div>
				</div>
			</div>

			<div class="logo col-xs-4 center-xs start-xs" id="page-logo">
				<a href="http://www.caacupeweb.com" onclick="trackLink('http://www.caacupeweb.com', event);"><img src="<?php bloginfo('template_url'); ?>/images/imagen-logo.png" alt="CaacupeWeb"></a>
			</div>

			<!-- MENU -->
			<div class="menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 center-xs">
							<a href="#" class="mov-menu icon-menu2 end-xs" id="mov-menu">Menu</a>

							<?php 
								wp_nav_menu(
									array (
										'theme_location' => 'principal',
										'container' => 'nav',
										'container_class' => 'menu-items col-xs',
										'container_id' => 'nav-menu'
									)
								);
							?>

						</div>
					</div>
				</div>
			</div>
			<!-- FIN MENU -->

		</header>
		<!-- FIN HEADER -->