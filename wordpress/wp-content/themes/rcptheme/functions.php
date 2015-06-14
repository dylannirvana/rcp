<?php
/**
 * rcptheme functions and definitions
 *
 * @package rcptheme
 */

if ( ! function_exists( 'rcptheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function rcptheme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on rcpTheme, use a find and replace
	 * to change 'rcptheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'rcptheme', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'rcptheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'rcptheme_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // rcptheme_setup
add_action( 'after_setup_theme', 'rcptheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rcptheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rcptheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'rcptheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function rcptheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rcptheme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'rcptheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rcptheme_scripts() {

// STYLES =============
	// // Bootstrap CSS CDN
	wp_enqueue_style( 'bootstrapcss', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' );
	// // Font Awesome
	wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	// style.css - my styles
	wp_enqueue_style( 'rcptheme-style', get_stylesheet_uri() );

// SCRIPTS ============
	// TYPEKIT 
 	wp_enqueue_script( 'typekit', '//use.typekit.net/pct7efk.js'); 

 	function typekit_script() {
 		if ( wp_script_is( 'typekit', 'done' )) {
 			echo '<script type="text/javascript">try{Typekit.load();}catch(e){}</script>';
 		}
 	};
 	// END TYPEKIT

	// jQuery CDN
	wp_enqueue_script( 'rcptheme-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array() );
	// // Bootstrap JavaScript CDN
	wp_enqueue_script( 'rcptheme-bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('rcptheme-jquery') );
	// script.js - my scripts
	wp_enqueue_script( 'rcptheme-script', get_template_directory_uri() . '/js/script.js', array() );

	// wp_enqueue_script( 'rcptheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	// wp_enqueue_script( 'rcptheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rcptheme_scripts' );

function remove_dashboard_meta() {
        // remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        // remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        // remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        // remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        // remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
        remove_meta_box( 'dashboard_pages', 'dashboard', 'side' );
}
add_action( 'admin_init', 'remove_dashboard_meta' );

// Add custom logo
function custom_login_logo() {
  echo '<style type="text/css">
    h1 { background-image:url('.get_bloginfo('stylesheet_directory').'/images/logo/full_rcp_logo.png) !important; }
    </style>';
}
add_action('login_head', 'custom_login_logo');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
