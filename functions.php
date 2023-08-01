<?php
/**
 * WebFX Test Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WebFX_Test_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
    /**
     *
     */
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function webfx_test_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on WebFX Test Theme, use a find and replace
		* to change 'webfx-test-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'webfx-test-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    $defaults = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => false,
        'video-active-callback'  => 'is_front_page',
    );
    add_theme_support( 'custom-header', $defaults );

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
			'menu-1' => esc_html__( 'Primary', 'webfx-test-theme' ),
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
			'webfx_test_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'webfx_test_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webfx_test_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webfx_test_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'webfx_test_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webfx_test_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'webfx-test-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'webfx-test-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
}
add_action( 'widgets_init', 'webfx_test_theme_widgets_init' );

/**
 * @param string $file_path
 * @return string
 */
function webfx_test_get_asset(string $file_path): string
{
    return get_template_directory_uri() . '/assets/' . $file_path;
}

/**
 * Enqueue scripts and styles.
 */
function webfx_test_theme_scripts() {
	wp_enqueue_style( 'webfx-test-theme-bootstrap', webfx_test_get_asset('css/bootstrap.min.css'), array(), _S_VERSION );
    wp_enqueue_style( 'webfx-test-theme-icomoon', webfx_test_get_asset('css/icomoon.css'), array(), _S_VERSION );
    wp_enqueue_style( 'webfx-test-theme-owl-carousel', webfx_test_get_asset('css/owl.carousel.min.css'), array(), _S_VERSION );
    wp_enqueue_style( 'webfx-test-theme-owl-theme-default', webfx_test_get_asset('css/owl.theme.default.min.css'), array(), _S_VERSION );
    wp_enqueue_style( 'webfx-test-theme-style', webfx_test_get_asset('css/style.css'), array(), _S_VERSION );
    wp_enqueue_style( 'webfx-test-theme-responsive', webfx_test_get_asset('css/responsive.css'), array(), _S_VERSION );
	wp_style_add_data( 'webfx-test-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'webfx-test-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'webfx-test-theme-lib', webfx_test_get_asset('js/lib.min.js'), array('jquery'));
	wp_enqueue_script( 'webfx-test-theme-custom', webfx_test_get_asset('js/custom.js'), array('jquery'));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webfx_test_theme_scripts' );

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
 *
 */
function webfx_test_register_navwalker() {
    require get_template_directory() . '/inc/WebFxTestWalkerNavMenu.php';
}

add_action('after_setup_theme', 'webfx_test_register_navwalker');

require get_template_directory() . '/inc/WebFxTestPosttypes.php';

/**
 * Our custom post type function
 */
function webfx_test_create_posttype() {
    new WebFxTestPosttypes();
}

// Hooking up our function to theme setup
add_action( 'init', 'webfx_test_create_posttype' );

require get_template_directory() . '/inc/WebFxTestCustomizer.php';

$my_customizer = new WebFxTestCustomizer();
