<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Debut
 * @since 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 9]>
<html id="unsupported" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9)  ]>
<html <?php language_attributes(); ?>>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		
		<?php
		/**
		 * Small width navigation - only on screens 480px wide or smaller
		 */
		?>
		<nav role="navigation" class="site-navigation small-navigation">
			<h1 class="assistive-text"><?php esc_html_e( 'Menu', 'debut' ); ?></h1>
			<div class="assistive-text skip-link"><a href="#content"><?php esc_html_e( 'Skip to content', 'debut' ); ?></a></div>
			<button class="menu-button">Menu</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

		<?php if ( class_exists( 'Sitepress', false ) ) echo debut_lang_switcher(); ?>

		<?php if ( get_theme_mod( 'debut_logo' ) ) : ?>
			<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'debut_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
			</div>
		<?php else : ?>
			<hgroup class="identity">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
		<?php endif; ?>
		
		<?php get_sidebar( 'header' ); ?>

	</header><!-- #masthead .site-header -->
	
	<nav role="navigation" class="site-navigation main-navigation">
		<h1 class="assistive-text"><?php esc_html_e( 'Menu', 'debut' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#content"><?php esc_html_e( 'Skip to content', 'debut' ); ?></a></div>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav>

	<div id="main">