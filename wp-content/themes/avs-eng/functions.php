<?php
/**
 * avs-eng functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package avs-eng
 */

if ( ! function_exists( 'avs_eng_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function avs_eng_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on avs-eng, use a find and replace
		 * to change 'avs-eng' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'avs-eng', get_template_directory() . '/languages' );

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
			'header-nav' => esc_html__( 'Header menu', 'avs-eng' ),
			'footer-nav' => esc_html__( 'Footer menu', 'avs-eng' ),
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
		add_theme_support( 'custom-background', apply_filters( 'avs_eng_custom_background_args', array(
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
			'height'      => 95,
			'width'       => 95,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'avs_eng_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function avs_eng_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'avs_eng_content_width', 640 );
}
add_action( 'after_setup_theme', 'avs_eng_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function avs_eng_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'avs-eng' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'avs-eng' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'avs_eng_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function avs_eng_scripts() {
	wp_enqueue_style( 'avs-eng-style', get_stylesheet_uri() );
	wp_enqueue_style( 'avs-eng-globalstyle', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'avs-eng-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_script( 'avs-eng-google', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'avs-eng-vfile', get_template_directory_uri() . '/js/jquery-v1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'avs-eng-custom-file', get_template_directory_uri() . '/js/jquery.custom-file-input.js', array(), '20151215', true );
	wp_enqueue_script( 'avs-eng-slick', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'avs-eng-magnific-js', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'avs-eng-maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '20151215', true );
	wp_enqueue_script( 'avs-eng-recaptcha', '//www.google.com/recaptcha/api.js');
	wp_enqueue_script( 'avs-eng-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );
	wp_enqueue_script( 'avs-eng-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'avs-eng-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'avs_eng_scripts' );

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
/**
 * Load theme options.
 */
	require get_template_directory() . '/inc/theme-admin.php';

if (class_exists('WooCommerce')) {
	require_once(get_template_directory() . '/woo-c.php');
}