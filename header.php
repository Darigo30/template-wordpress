<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<?php if (is_front_page() || is_home()): ?>
	<!-- header home -->
	<header class="header">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				 <a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>"><img class="logoclub" src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Logo Club de Fidelización"/>
			    </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			 
			    <ul class="navbar-nav d-flex justify-content-end w-100 my-2 my-lg-0">
			      <li class="nav-item nav-link">
			        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			      </li>
			  	</ul>
			  	<a class="navbar-brand d-none d-sm-none d-md-block" href="https://ams.asicom.cl/" target="_blank"><img class="log-mob-ams" src="<?php bloginfo('template_url'); ?>/images/logo-ams.png" alt="Logo AMS" /></a>
			  </div>
			</nav>
		</div>
	</header><!-- header -->
	<?php else: ?>
	<!-- header exito -->
	<header class="header-two">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>"><img class="logoclub" src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="Logo Club de Fidelización" /></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			
			    <ul class="navbar-nav d-flex justify-content-end w-100 my-2 my-lg-0">
			      <li class="nav-item nav-link">
			        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			      </li>
			  	</ul>
			  	<a class="navbar-brand d-none d-sm-none d-md-block" href="https://ams.asicom.cl/" target="_blank"><img class="log-mob-ams" src="<?php bloginfo('template_url'); ?>/images/logo-ams-n.png" alt="Logo Club de Fidelización" /></a>
			  </div>
			</nav>
		</div>
	</header>
	<?php endif; ?>
	<main class="main">


	