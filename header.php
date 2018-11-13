<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cmuter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Roboto|Lora" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cmuter' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-block">
		<div class="site-branding">
			<?php the_custom_logo(); if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; $cmuter_description = get_bloginfo( 'description', 'display' ); if ( $cmuter_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $cmuter_description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<!-- BEGIN FULL SCREEN NAV -->
		<button class="toggle-overlay"><i class="fa fa-bars"></i></button>
		<div class="cmuter-nav">
			<div class="outer-close toggle-overlay"><a class="close"><span></span></a></div>
		
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cmuter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->		
		</div>
		
		</div><!-- .header-block -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">