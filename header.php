<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700,300,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a name="top-destination"></a>
	<a href="#top-destination" class="page-scroller holding"></a>
	<div class="off-canvas">
		<nav id="mobile-menu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<div class="mobile-utility">
			<a class="utility-link employee-link" href="#">Employee Portal</a>
			<a class="utility-link contact-link" href="#">Contact Us</a>
		</div>
	</div>
<div id="wrapper" class="hfeed">
	<header id="header" role="banner" id="top-destination">
		<div class="utility">
			<div class="utility-inner">
			<a id="" class="utility-link employee-link" href="#">Employee Portal</a>
			<a id="" class="utility-link contact-link" href="#">Contact Us</a>
			<button id="menu-toggle" class="c-hamburger c-hamburger--htx">
  				<span>toggle menu</span>
			</button>
				</div>
		</div>
		<div class="header-branding">
			<div class="header-inner">
				<section id="branding">
					<div id="site-title"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1></div>
				</section>
				<nav id="desktop-menu" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
				<svg class="mountain-range" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	viewBox="0 0 480 78" style="enable-background:new 0 0 480 78;" xml:space="preserve">
	<polygon points="0,78 55.5,55 80,66.5 103,46 112.5,46 140,22 179,57.5 201.5,50 208,34 236,37.5 281,0 300.5,17 319,7 335.5,30 
	346,22.5 384.5,58.5 396,51 426.5,68.5 480,78 "/>
				</svg>

			</div>
		</div>
	</header>
<div id="container">