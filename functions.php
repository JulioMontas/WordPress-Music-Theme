<?php
/**
 * Sonia Choi Music functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sonia_Choi_Music
 */

if ( ! function_exists( 'sonia_choi_music_2017_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sonia_choi_music_2017_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sonia Choi Music, use a find and replace
	 * to change 'sonia-choi-music-2017' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sonia-choi-music-2017', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'sonia-choi-music-2017' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.

	// add_theme_support( 'custom-background', apply_filters( 'sonia_choi_music_2017_custom_background_args', array(
	// 	'default-image' => '%1$s/images/background.jpg',
	// 	'default-color' => 'ffffff',
	// ) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'sonia_choi_music_2017_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sonia_choi_music_2017_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sonia_choi_music_2017_content_width', 640 );
}
add_action( 'after_setup_theme', 'sonia_choi_music_2017_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sonia_choi_music_2017_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sonia-choi-music-2017' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sonia-choi-music-2017' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// First footer widget area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Footer Sidebar 1', 'sonia-choi-music-2017' ),
			'id' => 'footer-sidebar-1',
			'description' => __( 'Appears in the footer area', 'sonia-choi-music-2017' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );

	// Second Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Footer Sidebar 2', 'sonia-choi-music-2017' ),
			'id' => 'footer-sidebar-2',
			'description' => __( 'Appears in the footer area', 'sonia-choi-music-2017' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );

	// Third Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Footer Sidebar 3', 'sonia-choi-music-2017' ),
			'id' => 'footer-sidebar-3',
			'description' => __( 'Appears in the footer area', 'sonia-choi-music-2017' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );

	// Fourth Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Footer Sidebar 4', 'sonia-choi-music-2017' ),
			'id' => 'footer-sidebar-4',
			'description' => __( 'Appears in the footer area', 'sonia-choi-music-2017' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );


}
add_action( 'widgets_init', 'sonia_choi_music_2017_widgets_init' );













/**
 * Enqueue scripts and styles.
 */
function sonia_choi_music_2017_scripts() {
	wp_enqueue_style( 'sonia-choi-music-2017-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sonia-choi-music-2017-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	// wp_enqueue_script( 'sonia-choi-music-2017-jquery-3-1-1', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20151215', true );
	// wp_enqueue_script( 'sonia-choi-music-2017-three-js', get_template_directory_uri() . '/js/three.min.js', array(), '20151215', true );
	// wp_enqueue_script( 'sonia-choi-music-2017-master', get_template_directory_uri() . '/js/master.js', array(), '20151215', true );
	wp_enqueue_script( 'sonia-choi-music-2017-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sonia_choi_music_2017_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';