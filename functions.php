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













// Creating the widget
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget',

// Widget name will appear in UI
__('WPBeginner Widget', 'wpb_widget_domain'),

// Widget description
array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
);
}

// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
echo __( '', 'wpb_widget_domain' );
echo $args['after_widget'];
}

// Widget Backend
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_widget_domain' );
}
// Widget admin form
?>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
<input cols="80" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"/ >

<?php
}

// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );































class SocialMediaWidgetBTN extends WP_Widget {

	public function __construct() {
        parent::__construct(
            'social_media_widget_btn',
            __('Artist Social Media', 'smbuttons' ),
            array( 'description' => __( 'Display your social media icons.', 'smbuttons' ), )
        );
    }// end constructor

	function widget( $args, $instance ) {
		// Widget output
	    extract( $args );

	    /* Our variables from the widget settings. */
	    $widget_title = apply_filters('widget_title', $instance['title'] );

	    $s_url = $instance[ 's_url' ];

	    $sc_url 	=	$instance['sc_url'];
	    $a_url 		=	$instance['a_url'];
	    $t_url  	=	$instance['t_url'];
	    $y_url 		=	$instance['y_url'];
	    $email 		=	$instance['email'];

	    $widget_id = uniqid();

	   	//Display Sidebar
	   	echo $before_widget;

		if ( ! empty( $widget_title ) )
			echo $before_title . $widget_title . $after_title;
	    ?>
	        <div class="smb-<?php echo $widget_id; ?>">
	        	<?php if ( !empty($s_url) ): ?>
	        		<a class="spotify" title="Spotify" target="_blank" href="<?php echo esc_url($s_url) ?>">
	        			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 16 28"><path d="M15 0.2v4.1h-2.5c-1.9 0-2.3 0.9-2.3 2.3v3h4.6l-0.6 4.6h-4v11.9h-4.8v-11.9h-4v-4.6h4v-3.4c0-4 2.4-6.1 6-6.1 1.7 0 3.1 0.1 3.6 0.2z"/></svg>
	        		</a>
	        	<?php endif; ?>

	        	<?php if ( !empty($sc_url) ): ?>
	        		<a title="SoundCloud" target="_blank" href="<?php echo esc_url($sc_url); ?>">
	        			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 36 28"><path d="M22.5 14.3c0 6.5-4.4 11.2-11 11.2-6.3 0-11.5-5.1-11.5-11.5s5.1-11.5 11.5-11.5c3.1 0 5.7 1.1 7.7 3l-3.1 3c-0.8-0.8-2.3-1.8-4.6-1.8-3.9 0-7.1 3.2-7.1 7.2s3.2 7.2 7.1 7.2c4.5 0 6.2-3.3 6.5-4.9h-6.5v-3.9h10.8c0.1 0.6 0.2 1.2 0.2 1.9zM36 12.4v3.3h-3.3v3.3h-3.3v-3.3h-3.3v-3.3h3.3v-3.3h3.3v3.3h3.3z"/></svg>
	        		</a>
				<?php endif; ?>

	        	<?php if ( !empty($a_url) ): ?>
	        		<a title="Apple" target="_blank" href="<?php echo esc_url($a_url); ?>">
	        			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28"><path d="M5.5 9.8v15.5h-5.2v-15.5h5.2zM5.8 5c0 1.5-1.1 2.7-2.9 2.7v0h0c-1.7 0-2.8-1.2-2.8-2.7 0-1.5 1.2-2.7 2.9-2.7 1.8 0 2.9 1.2 2.9 2.7zM24 16.4v8.9h-5.1v-8.3c0-2.1-0.7-3.5-2.6-3.5-1.4 0-2.3 1-2.6 1.9-0.1 0.3-0.2 0.8-0.2 1.3v8.6h-5.1c0.1-14 0-15.5 0-15.5h5.1v2.3h0c0.7-1.1 1.9-2.6 4.7-2.6 3.4 0 5.9 2.2 5.9 7z"/></svg>
	        		</a>
				<?php endif; ?>

	        	<?php if ( !empty($t_url ) ): ?>
	        		<a title="Twitter" target="_blank" href="<?php echo esc_url($t_url ); ?>">
	        			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 26 28"><path d="M25.3 6.4c-0.7 1-1.5 1.9-2.5 2.6 0 0.2 0 0.4 0 0.7 0 6.7-5.1 14.4-14.4 14.4-2.9 0-5.5-0.8-7.7-2.3 0.4 0 0.8 0.1 1.2 0.1 2.4 0 4.5-0.8 6.3-2.2-2.2 0-4.1-1.5-4.7-3.5 0.3 0 0.6 0.1 1 0.1 0.5 0 0.9-0.1 1.3-0.2-2.3-0.5-4-2.5-4-5v-0.1c0.7 0.4 1.5 0.6 2.3 0.6-1.4-0.9-2.2-2.5-2.2-4.2 0-0.9 0.3-1.8 0.7-2.5 2.5 3.1 6.2 5.1 10.4 5.3-0.1-0.4-0.1-0.8-0.1-1.2 0-2.8 2.3-5 5-5 1.5 0 2.8 0.6 3.7 1.6 1.1-0.2 2.2-0.6 3.2-1.2-0.4 1.2-1.2 2.2-2.2 2.8 1-0.1 2-0.4 2.9-0.8z"/></svg>
	        		</a>
				<?php endif; ?>

	        	<?php if ( !empty($yt_url) ): ?>
	        		<a title="Youtube" target="_blank" href="<?php echo esc_url($yt_url); ?>">
	        			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 28"><path d="M15.2 19.4v3.3c0 0.7-0.2 1-0.6 1-0.2 0-0.5-0.1-0.7-0.3v-4.7c0.2-0.2 0.5-0.3 0.7-0.3 0.4 0 0.6 0.4 0.6 1zM20.5 19.5v0.7h-1.4v-0.7c0-0.7 0.2-1.1 0.7-1.1s0.7 0.4 0.7 1.1zM5.4 16h1.7v-1.5h-4.9v1.5h1.6v8.9h1.6v-8.9zM9.9 24.9h1.4v-7.7h-1.4v5.9c-0.3 0.4-0.6 0.7-0.9 0.7-0.2 0-0.3-0.1-0.3-0.3 0 0 0-0.2 0-0.5v-5.7h-1.4v6.1c0 0.5 0 0.9 0.1 1.1 0.1 0.4 0.5 0.6 0.9 0.6 0.5 0 1-0.3 1.6-1v0.8zM16.6 22.6v-3.1c0-0.7 0-1.2-0.1-1.5-0.2-0.6-0.6-0.9-1.1-0.9-0.5 0-1 0.3-1.5 0.8v-3.4h-1.4v10.4h1.4v-0.7c0.5 0.6 1 0.9 1.5 0.9 0.5 0 0.9-0.3 1.1-0.9 0.1-0.3 0.1-0.8 0.1-1.6zM21.8 22.5v-0.2h-1.4c0 0.6 0 0.9 0 1-0.1 0.4-0.3 0.6-0.6 0.6-0.5 0-0.7-0.4-0.7-1.1v-1.4h2.8v-1.6c0-0.8-0.1-1.4-0.4-1.8-0.4-0.5-1-0.8-1.7-0.8-0.7 0-1.3 0.3-1.7 0.8-0.3 0.4-0.4 1-0.4 1.8v2.7c0 0.8 0.2 1.4 0.5 1.8 0.4 0.5 1 0.8 1.7 0.8s1.3-0.3 1.7-0.8c0.2-0.2 0.3-0.5 0.3-0.8 0-0.1 0-0.5 0-0.9zM12.3 8.2v-3.3c0-0.7-0.2-1.1-0.7-1.1-0.5 0-0.7 0.4-0.7 1.1v3.3c0 0.7 0.2 1.1 0.7 1.1 0.5 0 0.7-0.4 0.7-1.1zM23.6 19.9c0 1.8 0 3.7-0.4 5.5-0.3 1.2-1.3 2.1-2.5 2.3-2.9 0.3-5.8 0.3-8.7 0.3s-5.8 0-8.7-0.3c-1.2-0.1-2.2-1-2.5-2.3-0.4-1.7-0.4-3.7-0.4-5.5v0c0-1.8 0-3.7 0.4-5.5 0.3-1.2 1.3-2.1 2.5-2.3 2.9-0.3 5.8-0.3 8.7-0.3s5.8 0 8.7 0.3c1.2 0.1 2.2 1 2.5 2.3 0.4 1.8 0.4 3.7 0.4 5.5zM8 0h1.6l-1.9 6.2v4.2h-1.6v-4.2c-0.1-0.8-0.5-1.9-1-3.3-0.3-1-0.7-2-1-2.9h1.7l1.1 4.1zM13.8 5.2v2.7c0 0.8-0.1 1.5-0.4 1.8-0.4 0.5-0.9 0.8-1.7 0.8-0.7 0-1.2-0.3-1.6-0.8-0.3-0.4-0.4-1-0.4-1.8v-2.7c0-0.8 0.1-1.4 0.4-1.8 0.4-0.5 0.9-0.8 1.6-0.8 0.7 0 1.3 0.3 1.7 0.8 0.3 0.4 0.4 1 0.4 1.8zM19 2.7v7.8h-1.4v-0.9c-0.6 0.7-1.1 1-1.6 1-0.5 0-0.8-0.2-0.9-0.6-0.1-0.2-0.1-0.6-0.1-1.2v-6.2h1.4v5.7c0 0.3 0 0.5 0 0.5 0 0.2 0.1 0.3 0.3 0.3 0.3 0 0.6-0.2 0.9-0.7v-6h1.4z"/></svg>
	        		</a>
				<?php endif; ?>

	        	<?php if ( !empty($email) ): ?>
	        		<a href="mailto:<?php echo $email ?>">
	        			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 28 28"><path d="M26 23.5v-12c-0.3 0.4-0.7 0.7-1.1 1-2.2 1.7-4.5 3.5-6.7 5.3-1.2 1-2.6 2.2-4.2 2.2h0c-1.6 0-3.1-1.2-4.2-2.2-2.2-1.8-4.4-3.6-6.7-5.3-0.4-0.3-0.7-0.7-1.1-1v12c0 0.3 0.2 0.5 0.5 0.5h23c0.3 0 0.5-0.2 0.5-0.5zM26 7.1c0-0.4 0.1-1.1-0.5-1.1h-23c-0.3 0-0.5 0.2-0.5 0.5 0 1.8 0.9 3.3 2.3 4.4 2.1 1.6 4.2 3.3 6.3 5 0.8 0.7 2.3 2.1 3.4 2.1h0c1.1 0 2.6-1.4 3.4-2.1 2.1-1.7 4.2-3.3 6.3-5 1-0.8 2.3-2.5 2.3-3.9zM28 6.5v17c0 1.4-1.1 2.5-2.5 2.5h-23c-1.4 0-2.5-1.1-2.5-2.5v-17c0-1.4 1.1-2.5 2.5-2.5h23c1.4 0 2.5 1.1 2.5 2.5z"/></svg>
	        		</a>
				<?php endif; ?>
	        </div>
	    <?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
	    $instance = $old_instance;

	    /* Strip tags for title and name to remove HTML (important for text inputs). */
	    $instance['title'] = strip_tags( $new_instance['title'] );
	    $instance['s_url'] = esc_url_raw( $new_instance['s_url'] );
	    $instance['sc_url'] = esc_url_raw( $new_instance['sc_url'] );
	    $instance['a_url'] = esc_url_raw( $new_instance['a_url'] );
	    $instance['t_url '] = esc_url_raw( $new_instance['t_url '] );
	    $instance['y_url'] = esc_url_raw( $new_instance['y_url'] );
	    $instance['email'] = sanitize_email( $new_instance['email'] );
	    return $instance;
	}

	function form( $instance ) {
		// Output admin widget options form
		/* Set up some default widget settings. */
	    $defaults = array(
	        'title'  => '',
	        's_url'  => '',
	        'sc_url' => '',
	        'a_url'  => '',
	        't_url ' => '',
	        'email'  => '',
	    );

	    $instance = wp_parse_args( (array) $instance, $defaults );
		?>
		<!-- Widget Title -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'smbuttons') ?></label>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
	    </p>
		<!-- Spotify -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 's_url' ); ?>"><?php _e('Spotify', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 's_url' ); ?>" name="<?php echo $this->get_field_name( 's_url' ); ?>" value="<?php echo $instance['s_url']; ?>" placeholder="https://open.spotify.com/artist/+artistid" />
	    </p>
		<!--  SoundCloud -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'sc_url' ); ?>"><?php _e('SoundCloud', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'sc_url' ); ?>" name="<?php echo $this->get_field_name( 'sc_url' ); ?>" value="<?php echo $instance['sc_url']; ?>" placeholder="https://soundcloud.com/+userid" />
	    </p>

		<!-- Apple -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'a_url' ); ?>"><?php _e('Apple', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'a_url' ); ?>" name="<?php echo $this->get_field_name( 'a_url' ); ?>" value="<?php echo $instance['a_url']; ?>" placeholder="https://itunes.apple.com/us/artist/korn/id466532" />
	    </p>

		<!-- Twitter -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 't_url' ); ?>"><?php _e('Twitter', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 't_url ' ); ?>" name="<?php echo $this->get_field_name( 't_url' ); ?>" value="<?php echo $instance['t_url ']; ?>" placeholder="https://twitter.com/username" />
	    </p>
		<!-- Youtube -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'yt_url' ); ?>"><?php _e('Youtube', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'yt_url' ); ?>" name="<?php echo $this->get_field_name( 'yt_url' ); ?>" value="<?php echo $instance['y_url']; ?>" placeholder="https://www.youtube.com/user/username" />
	    </p>
			<!-- Email-->
		    <p>
		    	<label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e('Email', 'smbuttons') ?></label><br>
		    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" value="<?php echo $instance['email']; ?>" placeholder="hello@gmail.com" />
		    </p>
	    <?php
	}
}

function social_media_widget_button() {
	register_widget( 'SocialMediaWidgetBTN' );
}

add_action( 'widgets_init', 'social_media_widget_button' );





























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
