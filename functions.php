<?php
/**
 * flathop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flathop
 */

if ( ! function_exists( 'flathop_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function flathop_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on flathop, use a find and replace
	 * to change 'flathop' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'flathop', get_template_directory() . '/languages' );

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
	add_image_size( 'city', 336, 294, array( 'center', 'center' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'flathop' ),
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
	add_theme_support( 'custom-background', apply_filters( 'flathop_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'flathop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function flathop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'flathop_content_width', 640 );
}
add_action( 'after_setup_theme', 'flathop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flathop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'flathop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'flathop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'flathop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function flathop_scripts() {
	wp_enqueue_style( 'flathop-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700&amp;subset=latin-ext' );

	// wp_enqueue_style( 'flathop-jqueryui-style', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );

	wp_enqueue_style( 'flathop-bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style( 'flathop-animate-css', get_stylesheet_directory_uri() . '/css/animate.css');
	
	wp_enqueue_style( 'flathop-jcf-css', get_stylesheet_directory_uri() . '/css/jcf.css');

	wp_enqueue_style( 'flathop-style', get_stylesheet_uri() );

	wp_enqueue_script( 'flathop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'flathop-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '', true );

	// wp_enqueue_script( 'flathop-jqueryui-js', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js' );

	wp_enqueue_script( 'flathop-jcf-js', get_template_directory_uri() . '/js/jcf.js', array('jquery'), '', true );

	wp_enqueue_script( 'flathop-jcf-file-js', get_template_directory_uri() . '/js/jcf.file.js', array('jquery'), '', true );

	wp_enqueue_script( 'flathop-jcf-radio-js', get_template_directory_uri() . '/js/jcf.radio.js', array('jquery'), '', true );

	wp_enqueue_script( 'flathop-jcf-range-js', get_template_directory_uri() . '/js/jcf.range.js', array('jquery'), '', true );

	wp_enqueue_script( 'flathop-jcf-select-js', get_template_directory_uri() . '/js/jcf.select.js', array('jquery'), '', true );

	wp_enqueue_script( 'flathop-jcf-number-js', get_template_directory_uri() . '/js/jcf.number.js', array('jquery'), '', true );

	wp_enqueue_script( 'flathop-jcf-scrollable-js', get_template_directory_uri() . '/js/jcf.scrollable.js', array('jquery'), '', true );


	wp_enqueue_script( 'flathop-counerup-waypoint', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), '', true );

	wp_enqueue_script( 'flathop-counerup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '', true );

	wp_enqueue_script( 'flathop-design', get_template_directory_uri() . '/js/design.js', array(), '', true );

	wp_enqueue_script( 'flathop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'flathop_scripts' );

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

/**
 * ACF Options
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

ini_set("include_path", '/home/unigueri/php:' . ini_get("include_path") );