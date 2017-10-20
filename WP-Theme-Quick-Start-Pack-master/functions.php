<?php

/**
 * After setup themes executable functions.
 * 
 * @author 	Mahfuz Rahman
 * @since 	0.1.0
 */
add_action( 'after_setup_theme', 'wp_quick_start_pack_setup' );
if ( ! function_exists( 'wp_quick_start_pack_setup' ) ) :

	function wp_quick_start_pack_setup() {

		/*------------------------------------*/
		/* Theme Supports
		/*------------------------------------*/
		load_theme_textdomain( 'wp-quick-start-pack', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		add_theme_support( 'custom-background', apply_filters( 'wp_quick_start_pack_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		$GLOBALS['content_width'] = apply_filters( 'wp_quick_start_pack_content_width', 640 );

		/*------------------------------------*/
		/* Theme Menu
		/*------------------------------------*/
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wp-quick-start-pack' ),
		) );


	} // end of wp_quick_start_pack_setup
endif;




/**
 * Register widget area.
 *
 * @author Mahfuz Rahman
 * @since  0.1.0
 * @link https://mahfuzurrahman.me
 */
add_action( 'widgets_init', 'wp_quick_start_pack_widgets_init' );
function wp_quick_start_pack_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-quick-start-pack' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-quick-start-pack' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
} // end of wp_quick_start_pack_widgets_init

/**
 * Theme fonts rendering function
 * 
 * @since  0.1.0
 */
function wp_quick_start_pack_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	if ( 'off' !== _x( 'on', 'Roboto: on or off', 'wp-quick-start-pack' ) ) {
		$fonts[] = 'Roboto:300,300i,400,500,700,900';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}
	return $fonts_url;
}


/**
 * Defined files path constants
 * 
 * @since  0.1.0
 */
define( 'WP_QP_CSS_PATH', get_template_directory_uri() . '/assets/css/' );
define( 'WP_QP_JS_PATH', get_template_directory_uri() . '/assets/js/' );

/**
 * Enqueue scripts and styles.
 *
 * @author Mahfuz Rahman
 * @since  0.1.0
 * @link https://mahfuzurrahman.me
 */
add_action( 'wp_enqueue_scripts', 'wp_quick_start_pack_scripts' );
function wp_quick_start_pack_scripts() {

	/*---------------------------------------*/
	/* CSS Files
	/*---------------------------------------*/
	wp_enqueue_style(
		'google-font',
		wp_quick_start_pack_fonts_url()
	);

	wp_enqueue_style(
		'bootstrap',
		WP_QP_CSS_PATH . 'bootstrap.min.css',
		array(),
		'0.1.0',
		'all'
	);

	wp_enqueue_style(
		'wp-quick-start-pack-style',
		get_stylesheet_uri()
	);

	/*---------------------------------------*/
	/* JS Files
	/*---------------------------------------*/
	wp_enqueue_script(
		'bootstrap',
		WP_QP_JS_PATH . 'bootstrap.min.js',
		array( 'jquery' ),
		'0.1.0',
		true
	);

	wp_enqueue_script(
		'wp-quick-start-pack-navigation',
		WP_QP_JS_PATH . 'navigation.js',
		array( 'jquery' ),
		'0.1.0',
		true
	);

	wp_enqueue_script(
		'wp-quick-start-pack-skip-link-focus-fix',
		WP_QP_JS_PATH . 'skip-link-focus-fix.js',
		array( 'jquery' ),
		'0.1.0',
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

} // end of wp_quick_start_pack_scripts


/**
 * Load functions files from includes/inc folder.
 * 
 * @since  0.1.0
 */
foreach( glob( get_template_directory() . '/inc/*.php' ) as $file ) {
	require $file;
}
