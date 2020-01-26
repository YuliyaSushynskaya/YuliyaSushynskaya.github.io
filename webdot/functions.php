<?php
/**
 * webdot functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package webdot
 */

if ( ! function_exists( 'webdot_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webdot_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on webdot, use a find and replace
		 * to change 'webdot' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'webdot', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'webdot' ),
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
		add_theme_support( 'custom-background', apply_filters( 'webdot_custom_background_args', array(
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
add_action( 'after_setup_theme', 'webdot_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webdot_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'webdot_content_width', 640 );
}
add_action( 'after_setup_theme', 'webdot_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webdot_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'webdot' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'webdot' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'webdot_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function webdot_scripts() {

	wp_enqueue_style( 'webdot-style', get_stylesheet_uri() );


  wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() .  '/css/bootstrap.min.css', array( "webdot-style") );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri()  .  '/css/font-awesome.min.css',  array( "webdot-style") );
  wp_enqueue_style( 'animsition-min', get_template_directory_uri()  .  '/css/animsition.min.css',  array( "webdot-style") );
  wp_enqueue_style( 'owl.theme-style', get_template_directory_uri()  .  '/css/owl.theme.default.min.css', array("webdot-style") );
  wp_enqueue_style( 'owl.carousel-min', get_template_directory_uri()  .  '/css/owl.carousel.min.css', array("webdot-style") );

  wp_enqueue_style( 'jquery.fancybox-min', get_template_directory_uri() .  '/css/jquery.fancybox.min.css', array("webdot-style") );
  wp_enqueue_style( 'socicon', get_template_directory_uri()  .  '/css/socicon.css',  array("webdot-style") );
  wp_enqueue_style( 'ionicons', get_template_directory_uri()  .  '/css/ionicons.min.css', array( "webdot-style") );
  wp_enqueue_style( 'animate-min', get_template_directory_uri()  .  '/css/animate.min.css', array("webdot-style") );

 
  wp_enqueue_style( 'jquery.pagepiling', get_template_directory_uri()  .  '/css/jquery.pagepiling.css', array( "webdot-style") );
  wp_enqueue_style( 'style', get_template_directory_uri()  .  '/style.css', array( "webdot-style") );

  wp_enqueue_style( 'normalize', get_template_directory_uri()  .  '/css/normalize.css', array("webdot-style") );
  wp_enqueue_style( 'pater', get_template_directory_uri()  .  '/css/pater.css', array( "webdot-style") );
  wp_enqueue_style( 'demo', get_template_directory_uri()  .  '/css/demo.css', array( "webdot-style") );
   
  wp_enqueue_style( 'style1', get_template_directory_uri()  .  '/css/style.css', array( "webdot-style") );

 
     

	wp_enqueue_script( 'webdot-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'webdot-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

       
        wp_enqueue_script( 'jquery-2.1.1', get_template_directory_uri() . '/js/jquery-2.1.1.js', array("jquery"), '20151215');
        wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array("jquery"), '20151215');
        wp_enqueue_script( 'jquery.countdown-min', get_template_directory_uri() . '/js/jquery.countdown.min.js', array("jquery"), '20151215');

        wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array("jquery"), '', true);
        wp_enqueue_script( 'popper-min', get_template_directory_uri() . '/js/popper.min.js', array("jquery"), '', true);
        wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array("jquery"), '', true);

        wp_enqueue_script( 'animsition-min', get_template_directory_uri() . '/js/animsition.min.js', array("jquery"), '', true);
        wp_enqueue_script( 'owl.carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', array("jquery"), '', true);
        wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/js/wow.min.js', array("jquery"), '', true);
 
     
        wp_enqueue_script( 'slider-hero-plugin', get_template_directory_uri() . '/js/slider-hero-plugin.js', array("jquery"), '', true);
        wp_enqueue_script( 'slider-hero', get_template_directory_uri() . '/js/slider-hero.js', array("jquery"), '', true);
        wp_enqueue_script( 'contactform', get_template_directory_uri() . '/js/contactform.js', array("jquery"), '', true);

    
 
        wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array("jquery"), '', true);
        wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array("jquery"), '', true);
        wp_enqueue_script( 'anime-min', get_template_directory_uri() . '/js/anime.min.js', array("jquery"), '', true);
 
        wp_enqueue_script( 'jquery-viewport', get_template_directory_uri() . '/js/jquery.viewport.js', array("jquery"), '', true);
        wp_enqueue_script( 'scrollMonitor', get_template_directory_uri() . '/js/scrollMonitor.js', array("jquery"), '', true);
        wp_enqueue_script( 'jquery.pagepiling-min', get_template_directory_uri() . '/js/jquery.pagepiling.min.js', array("jquery"), '',  true);
       
        wp_enqueue_script( 'isotope.pkgd-min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array("jquery"), '', true);
        wp_enqueue_script( 'imagesloaded.pkgd-min', get_template_directory_uri() . '/js/anime.min.js', array("jquery"), '', true);
 
        wp_enqueue_script( 'TweenMax-min', get_template_directory_uri() . '/js/TweenMax.min.js', array("jquery"), '', true);
        wp_enqueue_script( 'ScrollMagic-min', get_template_directory_uri() . '/js/ScrollMagic.min.js', array("jquery"), '', true);
     
        wp_enqueue_script( 'animation.gsap-min', get_template_directory_uri() . '/js/animation.gsap.min.js', array("jquery"), '', true);
        wp_enqueue_script( 'jquery.fancybox-min', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array("jquery"), '', true);
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array("jquery"), '', true);
 
        wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array("jquery"), '', true);
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array("jquery"), '', true);
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array("jquery"), '', true);

}
add_action( 'wp_enqueue_scripts', 'webdot_scripts' );





/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * tgm plugin activation.
 */
require get_template_directory() . '/tgm/webdot.php';
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
if ( function_exists('remove_filter') ) {
    # Отключение фильтра функцией wptexturize в текстах постов и страниц
    remove_filter('the_content', 'wptexturize');
    # Отключение того-же фильтра в тайтлах
    remove_filter('the_title', 'wptexturize');
    # Отключение обработки комментов
    remove_filter('comment_text', 'wptexturize');
}

## Исполняемый PHP код в контенте записи WordPress.
## [exec]PHP_код[/exec]
##
## @version: 1.0
if( 'Исполняемый PHP код в контенте' ){

	add_filter( 'the_content', 'content_exec_php', 0 );

	function content_exec_php( $content ){
		return preg_replace_callback( '/\[exec( off)?\](.+?)\[\/exec\]/s', '_content_exec_php', $content );
	}

	function _content_exec_php( $matches ){

		if( ' off' === $matches[1] ){
			return "\n\n<".'pre>'. htmlspecialchars( $matches[2] ) .'</pre'.">\n\n";
		}
		else {
			eval( "ob_start(); {$matches[2]}; \$exec_php_out = ob_get_clean();" );
			return $exec_php_out;
		}

	}

}

function customscript_shortcode($atts, $text) {
   global $post;
   return get_post_meta($post->ID, $text, true);
}
add_shortcode('customscript','customscript_shortcode');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
) );
