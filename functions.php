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
 * Enqueue scripts and styles.
 */
function sonia_choi_music_2017_scripts() {
	wp_enqueue_style( 'sonia-choi-music-2017-style', get_stylesheet_uri() );
	wp_enqueue_script( 'sonia-choi-music-2017-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'sonia-choi-music-2017-jquery-3-1-1', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'viewport', get_template_directory_uri() . '/js/jquery.viewportchecker.min.js', array( ), '1', true );

	wp_enqueue_script( 'tabs', get_template_directory_uri() . '/js/jquery.tabslet.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'tabs-init', get_template_directory_uri() . '/js/master.js', array( 'tabs' ), '1', true );
	wp_enqueue_script( 'sonia-choi-music-2017-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sonia_choi_music_2017_scripts' );



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
			'before_widget' => '<aside id="%1$s" class="widget %2$s fade-in">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );

	// Second Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Footer Sidebar 2', 'sonia-choi-music-2017' ),
			'id' => 'footer-sidebar-2',
			'description' => __( 'Appears in the footer area', 'sonia-choi-music-2017' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s fade-in">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
	) );

	// Third Footer Widget Area, located in the footer. Empty by default.
	register_sidebar( array(
			'name' => __( 'Footer Sidebar 3', 'sonia-choi-music-2017' ),
			'id' => 'footer-sidebar-3',
			'description' => __( 'Appears in the footer area', 'sonia-choi-music-2017' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s fade-in">',
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
 * Custom Footer #1,#2,#3,#4
 */

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

	    $s_url    = $instance['s_url'];
	    $sc_url 	=	$instance['sc_url'];
	    $a_url 		=	$instance['a_url'];
	    $tw_url  	=	$instance['tw_url'];
	    $yt_url 	=	$instance['yt_url'];
	    $email 		=	$instance['email'];

	    $widget_id = uniqid();

	   	//Display Sidebar
	   	echo $before_widget;

		if ( ! empty( $widget_title ) )
			echo $before_title . $widget_title . $after_title;
	    ?>
	        <div class="smb-<?php echo $widget_id; ?>">
						<nav>
						<ul>
	        	<?php if ( !empty($s_url) ): ?>
							<li>
	        		  <a class="spotify" title="Spotify" target="_blank" href="<?php echo esc_url($s_url) ?>">
							  	<i class="fa fa-spotify fa-2x" aria-hidden="true" style="color:#84BD00;"></i>
	        		  </a>
							</li>
	        	<?php endif; ?>

	        	<?php if ( !empty($sc_url) ): ?>
							<li>
	        		<a class="soundcloud" title="SoundCloud" target="_blank" href="<?php echo esc_url($sc_url); ?>">
								<i class="fa fa-soundcloud fa-2x" aria-hidden="true" style="color:#FF7700;"></i>
	        		</a>
							</li>
				<?php endif; ?>

	        	<?php if ( !empty($a_url) ): ?>
							<li>
	        		<a class="apple" title="Apple" target="_blank" href="<?php echo esc_url($a_url); ?>">
								<i class="fa fa-apple fa-2x" aria-hidden="true" style="color:#999999;"></i>
	        		</a>
							</li>
				<?php endif; ?>

	        	<?php if ( !empty($tw_url) ): ?>
							<li>
	        		<a class="twitter" title="Twitter" target="_blank" href="<?php echo esc_url($tw_url); ?>">
								<i class="fa fa-twitter fa-2x" aria-hidden="true" style="color:#0084B4;"></i>
	        		</a>
							</li>
				<?php endif; ?>

	        	<?php if ( !empty($yt_url) ): ?>
							<li>
	        		<a class="youtube" title="Youtube" target="_blank" href="<?php echo esc_url($yt_url); ?>">
								<i class="fa fa-youtube-play fa-2x" aria-hidden="true" style="color:#BB0000;"></i>
	        		</a>
							</li>
				<?php endif; ?>

	        	<?php if ( !empty($email) ): ?>
							<li>
	        		<a class="email" href="mailto:<?php echo $email ?>">
								<i class="fa fa-envelope fa-2x" aria-hidden="true" style="color:#553290;"></i>
	        		</a>
							</li>
				<?php endif; ?>
				</ul>
				</nav>


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
	    $instance['tw_url'] = esc_url_raw( $new_instance['tw_url'] );
	    $instance['yt_url'] = esc_url_raw( $new_instance['yt_url'] );
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
	        'tw_url' => '',
					'yt_url' => '',
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
	    	<label for="<?php echo $this->get_field_id( 'tw_url' ); ?>"><?php _e('Twitter', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'tw_url' ); ?>" name="<?php echo $this->get_field_name( 'tw_url' ); ?>" value="<?php echo $instance['tw_url']; ?>" placeholder="https://twitter.com/username" />
	    </p>
		<!-- Youtube -->
	    <p>
	    	<label for="<?php echo $this->get_field_id( 'yt_url' ); ?>"><?php _e('Youtube', 'smbuttons') ?></label><br>
	    	<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'yt_url' ); ?>" name="<?php echo $this->get_field_name( 'yt_url' ); ?>" value="<?php echo $instance['yt_url']; ?>" placeholder="https://www.youtube.com/user/username" />
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
 * add_action
 */

add_action( 'loop_start', 'before_single_post_content' );
function before_single_post_content() {
if ( is_singular( 'post') ) {
$cf = get_post_meta( get_the_ID(), 'custom_field_name', true );
if( ! empty( $cf ) ) {
echo '<div class="before-content">'. $cf .'</div>';
    }
  }
}




/**
 * Implement the Custom Meta box.
 */
require get_template_directory() . '/lib/cmb2-metaboxes-functions.php';

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
