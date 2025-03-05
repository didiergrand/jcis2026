<?php
/**
 * JCIS Forum 2026 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JCIS_Forum_2026
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.3.5' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jcis_forum_2026_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on JCIS Forum 2026, use a find and replace
		* to change 'jcis-forum-2026' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'jcis-forum-2026', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'jcis-forum-2026' ),
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
			'jcis_forum_2026_custom_background_args',
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
add_action( 'after_setup_theme', 'jcis_forum_2026_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jcis_forum_2026_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jcis_forum_2026_content_width', 640 );
}
add_action( 'after_setup_theme', 'jcis_forum_2026_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jcis_forum_2026_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jcis-forum-2026' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'jcis-forum-2026' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'jcis-forum-2026' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'jcis-forum-2026' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( 
		array(
			'name'          => 'Navbar Widget Area',
			'id'            => 'navbar-widget',
			'description'   => 'Add widgets here to appear in your navigation bar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Prefooter Widgets Left', 'jcis-forum-2026' ),
			'id'            => 'prefooter-widgets-left',
			'description'   => esc_html__( 'Add widgets here for the left pre-footer column.', 'jcis-forum-2026' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Prefooter Widgets Right', 'jcis-forum-2026' ),
			'id'            => 'prefooter-widgets-right',
			'description'   => esc_html__( 'Add widgets here for the right pre-footer column.', 'jcis-forum-2026' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(array(
		'name'          => 'Prefooter Widgets Left (DE)',
		'id'            => 'prefooter-widgets-left-de',
		'description'   => 'Zone de widgets pour le prefooter gauche en allemand',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => 'Prefooter Widgets Right (DE)',
		'id'            => 'prefooter-widgets-right-de',
		'description'   => 'Zone de widgets pour le prefooter droit en allemand',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));
}
add_action( 'widgets_init', 'jcis_forum_2026_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jcis_forum_2026_scripts() {
	wp_enqueue_style( 'jcis-forum-2026-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'jcis-forum-2026-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jcis-forum-2026-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jcis_forum_2026_scripts' );

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


function custom_translate_read_more($more) {
    if (function_exists('pll_current_language')) {
        $lang = pll_current_language();
        
        if ($lang == 'fr') {
            return ' <a class="more-link" href="' . get_permalink() . '">En savoir plus</a>';
        } elseif ($lang == 'de') {
            return ' <a class="more-link" href="' . get_permalink() . '">Mehr lesen</a>';
        } else {
            return ' <a class="more-link" href="' . get_permalink() . '">Read More</a>';
        }
    }
    return $more;
}
add_filter('the_content_more_link', 'custom_translate_read_more');

function jcis_forum_2026_load_theme_textdomain() {
    load_theme_textdomain( 'jcis-forum-2026', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'jcis_forum_2026_load_theme_textdomain' );
