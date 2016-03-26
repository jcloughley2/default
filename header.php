<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,700,300,400italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="ft-utility"><a id="employee-portal-link" href="#">Employee Portal</a><a id="contact-us-link" href="#">Contact Us</a>
<button id="menu-toggle" class="c-hamburger c-hamburger--htx">
  <span>toggle menu</span>
</button>
</div>
<section id="branding">
<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>


<svg class="mountain-range" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 480 78" style="enable-background:new 0 0 480 78;" xml:space="preserve">
<polygon points="0,78 55.5,55 80,66.5 103,46 112.5,46 140,22 179,57.5 201.5,50 208,34 236,37.5 281,0 300.5,17 319,7 335.5,30 
	346,22.5 384.5,58.5 396,51 426.5,68.5 480,78 "/>
</svg>

</section>
<nav id="menu" role="navigation">
<div id="search">
<?php get_search_form(); ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">