<?php
/**
 * energy_bigrez functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package energy_bigrez
 */

if ( ! function_exists( 'energy_bigrez_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function energy_bigrez_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on energy_bigrez, use a find and replace
		 * to change 'energy_bigrez' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'energy_bigrez', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'energy_bigrez' ),
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
		add_theme_support( 'custom-background', apply_filters( 'energy_bigrez_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'energy_bigrez_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function energy_bigrez_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'energy_bigrez_content_width', 640 );
}
add_action( 'after_setup_theme', 'energy_bigrez_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function energy_bigrez_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'energy_bigrez' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'energy_bigrez' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'energy_bigrez_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function energy_bigrez_scripts() {
	wp_enqueue_style( 'energy_bigrez-style', get_stylesheet_uri() );
	wp_enqueue_style( 'animate', get_template_directory_uri() .  '/assest/css/animate.css', array(),'1.0.0', 'all' );
	wp_enqueue_style( 'icomoon', get_template_directory_uri() .  '/assest/css/icomoon.css', array(),'1.0.0', 'all' );
	wp_enqueue_style( 'simple-line', get_template_directory_uri() .  '/assest/css/simple-line-icons.css', array(),'1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .  '/assest/css/bootstrap.css', array(),'1.0.0', 'all' );
	wp_enqueue_style( 'superfish', get_template_directory_uri() .  '/assest/css/superfish.css', array(),'1.0.0', 'all' );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() .  '/assest/css/flexslider.css', array(),'1.0.0', 'all' );

	wp_register_script( 'modernizr', get_template_directory_uri() . '/assest/js/modernizr-2.6.2.min.js', array( 'jquery' ), '3.0.0', false );
	wp_enqueue_script( 'modernizr' );

	wp_register_script( 'jquery', get_template_directory_uri() . '/assest/js/jquery.min.js', array( 'jquery' ), '3.0.0', true );

	wp_register_script( 'main', get_template_directory_uri() . '/assest/js/main.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'main' );

	wp_register_script( 'easing', get_template_directory_uri() . '/assest/js/jquery.easing.1.3.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'easing' );

	wp_register_script( 'bootstrap', get_template_directory_uri() . '/assest/js/bootstrap.min.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'bootstrap' );

	wp_register_script( 'waypoints', get_template_directory_uri() . '/assest/js/jquery.waypoints.min.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'waypoints' );

	wp_register_script( 'hoverIntent', get_template_directory_uri() . '/assest/js/hoverIntent.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'hoverIntent' );

	wp_register_script( 'stellar', get_template_directory_uri() . '/assest/js/jquery.stellar.min.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'stellar' );

	wp_register_script( 'superfish', get_template_directory_uri() . '/assest/js/superfish.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'superfish' );

	wp_register_script( 'flexslider', get_template_directory_uri() . '/assest/js/jquery.flexslider-min.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'flexslider' );

	wp_register_script( 'countTo', get_template_directory_uri() . '/assest/js/jquery.countTo.js', array( 'jquery' ), '3.0.0', true );
	wp_enqueue_script( 'countTo' );

	// wp_enqueue_script( 'energy_bigrez-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	//
	// wp_enqueue_script( 'energy_bigrez-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'energy_bigrez_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
