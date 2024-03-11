<?php
/* The core of your wordpress theme where you can add your logical functionalities into the functions.php so the theme will first run through this file and it and it it runs through its logics and then it builds up your theme. */
/**
 * VisionSpot functions and definations.
 */

/*
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');
*/

// Display thumbnail is the post list on the wp dashboard -> for fancy features.
add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Thumbs');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
    if($column_name === 'riv_post_thumbs'){
        echo the_post_thumbnail( 'featured-thumbnail' );
    }
}

if ( ! function_exists( 'visionspot_setup' ) ) {
    /**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
    function visionspot_setup() {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Crafty Press, use a find and replace
		 * to change 'visionspot' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'visionspot', get_template_directory() . '/languages' );

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

        // Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'visionspot_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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

        // Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

        /**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', [
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		] );

         /**
		 * Add Support for Custom Page Header
		 */
		add_theme_support( 'custom-header', array(
			'flex-width'	=> true,
			'width'			=> 1600,
			'flex-height'	=> true,
			'height'		=> 450,
			'default-image' => '',
		) );

        /**
		 * Add Post Type Support
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

        // This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'visionspot' ),
            'footer' => esc_html__( 'Footer Menu', 'visionspot' ),
            //'header_action' => esc_html__( 'Header Action', 'visionspot' ),
		) );

		add_filter( 'show_admin_bar', '__return_false' );
    }
}
add_action( 'after_setup_theme', 'visionspot_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function visionspot_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'visionspot_content_width', 1170 );
}
add_action( 'after_setup_theme', 'visionspot_content_width', 0 );


/**
 * Register Sidebar widget area.
 *
 * @since 1.0.0
 */
function visionspot_sidebar_widgets_init() {
	// Default Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'visionspot' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'visionspot' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'visionspot_sidebar_widgets_init' );

function visionspot_public_scripts() {
    // Link to css styles:
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css', [], wp_rand(), 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], wp_rand(), 'all' );
    
    // Link to js scripts:
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], wp_rand(), true );
}
add_action( 'wp_enqueue_scripts', 'visionspot_public_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function visionspot_admin_scripts() {

}
add_action( 'admin_enqueue_scripts', 'visionspot_admin_scripts' );