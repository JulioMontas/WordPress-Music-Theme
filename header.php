<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sonia_Choi_Music
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/slider.css">
<link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/animate.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- <div id ="stardusBackground"></div> -->

	<video poster="http://s3.amazonaws.com/soniachoi/content/uploads/2017/02/27215950/stardust-bg-1920-x-1080.jpg" id="bgvid" playsinline autoplay muted loop>
		<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
  	<!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
  	<source src="<?php bloginfo('template_url')?>/assets/videos/360Background.mp4" type="video/mp4">
	</video>

	<div class="bottomMenu">I fade in when you scroll past 2,300 Pixels</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sonia-choi-music-2017' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

    <!-- Custome Logo  -->
		<div class="site-logo">
			<a href="<?php echo esc_url ( home_url('/') ); ?>" rel="home">
				<?php if (has_custom_logo() ){
					the_custom_logo();
				}?>
			</a>
		</div><!-- .site-logo -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'sonia-choi-music-2017' ); ?></button>
			<?php wp_nav_menu(
				array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
