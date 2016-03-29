<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jj-australia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="http://demandware.edgesuite.net/aagb_prd/on/demandware.static/-/Sites-DK-Library/default/dw695a8257/jack-jones/images/favicon/favicon.ico" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="js/navigation.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'jj-australia' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<section class="navigation-container">
			<button class="menu-toggle nav-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="navicon"></div>
			</button>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<a class="site-logo" href="#">
				<img src="http://cdn.jackjonesracing.com/wp-content/uploads/2016/03/header-logo.png" width="146" height="14" alt="">
			</a>
		</section>
	</header><!-- #masthead -->
	
	<div class="site-cover">
	</div>

	<div id="content" class="site-content">
