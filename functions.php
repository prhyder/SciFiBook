<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on _s, use a find and replace
		* to change '_s' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', '_s' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'_s_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_s' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_s_widgets_init' );


/**
 * Remove editor from pages.
 */
function my_remove_editor_from_post_type() {
	remove_post_type_support( 'page', 'editor' );
}
add_action('init', 'my_remove_editor_from_post_type');

/**
 * Remove post type for non-admin.
 */
function remove_posts_menu() {
	$user = wp_get_current_user();
	if ($user->ID!=1) { // Is not admin
		remove_menu_page('edit.php');
	}
}
add_action('admin_menu', 'remove_posts_menu');


/**
 * Custom Fonts
 */
function enqueue_custom_fonts() {
	if (!is_admin()){
		// wp_register_style('Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
		// wp_enqueue_style('Montserrat');

		// wp_register_style('Orbitron', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&display=swap');
		// wp_enqueue_style('Orbitron');
	}
}
//add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	// Removing this style for now:
	//wp_enqueue_style( '_s-style', get_stylesheet_uri(), array(), _S_VERSION );   // alt shift downarrow
	wp_enqueue_style( '_s-main', get_template_directory_uri() . '/css/main.css');   // Change to main.min.css

	// AOS 
	wp_register_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
	wp_enqueue_style('AOS');
	wp_enqueue_script('aos-js', get_template_directory_uri() . '/js/aos.js', array(), _S_VERSION, true);


	//wp_style_add_data( '_s-style', 'rtl', 'replace' );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'site-js', get_template_directory_uri() . '/js/site.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

function load_javascript() {
	wp_enqueue_script('jquery');

	wp_register_script('bootstrap', get_template_directory_uri() . '/css/bootstrap/dist/js/bootstrap.min.js',
	'jquery', false, true);
	wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_javascript');



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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

 /* Custom Post Types */
 function hero_post_type() {
	$args = array (
		'labels' => array(
			'name' => 'Hero',
			'singular_name' => 'Hero'
		),
		'hierarchical' => true,   //true = pages
		'public' => true,
		'has_archive' => false,
		'publicly_queryable'  => false,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-format-aside',
		'supports' => array('title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => 'hero')
	);

	register_post_type('hero', $args);
 }
add_action('init', 'hero_post_type');

function homepage_section_post_type() {
	$args = array (
		'labels' => array(
			'name' => 'Homepage Sections',
			'singular_name' => 'Homepage Section',
			'add_new' => _x('Add New', 'section'),
			'add_new_item' => _('Add New Section'),
			'new_item' => __('New Section'),
		),
		// 'capabilities' => array(
		// 	'create_posts' => false, // Removes support for the "Add New" function ( use 'do_not_allow' instead of false for multisite set ups )
		//   ),
		'hierarchical' => true,   //true = pages
		'public' => true,
		'has_archive' => false,
		'publicly_queryable'  => false,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-images-alt2',
		//'supports' => array(),
		// 'supports' => array('title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => 'homepage-section'),
		'taxonomies' => array('homepage_section_taxonomy')
	);

	register_post_type('homepage_section', $args);
 }
add_action('init', 'homepage_section_post_type');


function homepage_section_taxonomy() {
	$args = array (
		'labels' => array(
			'name' => 'Sections Taxonomy',
			'singular_name' => 'Section Taxonomy'
		),
		'show_in_rest' => true,
		'public' => true,
		'hierarchical' => false    //true = can have a parent category. false = like a tag
	);

	register_taxonomy('sections', array('homepage_section'), $args);
}
add_action('init', 'homepage_section_taxonomy');

