<?php

/**
 * Hide ACF from menu
 */
add_filter('acf/settings/show_admin', '__return_false');

function milo_olive_scripts() {

	// Theme style
	wp_enqueue_style( 'main-css', get_stylesheet_uri(), '', '20200924.03' );

	// Main js
	wp_enqueue_script('milo_olive', get_template_directory_uri() .'/assets/js/milo-olive.js', ['jquery'], '20190807', true);

	// Slick CSS
	wp_enqueue_style('slick-css', get_template_directory_uri() .'/assets/css/vendor/slick.css');

	// Slick JS
	wp_enqueue_script('slick-js', get_template_directory_uri() .'/assets/js/vendor/slick.min.js', ['jquery'], '', true);

	// What Input
	wp_enqueue_script('input-js', get_template_directory_uri() .'/assets/js/vendor/what-input.min.js', '', '', true);

	// Magnific
	if ( ! is_admin() ) {
	wp_enqueue_style( 'magnific-popup.css', get_template_directory_uri() . '/assets/css/vendor/magnific-popup.css' );
	}

	// MyFonts
	if ( ! is_admin() ) {
	wp_enqueue_style( 'MyFontsWebfontsKit.css', get_template_directory_uri() . '/assets/css/vendor/MyFontsWebfontsKit.css' );
	}

	// magnific
	if ( ! is_admin() ) {
	wp_enqueue_script(
	'magnific',
	get_template_directory_uri() .'/assets/js/vendor/jquery.magnific-popup.min.js',
	array('jquery'),
	'',
	true
	);
	}

}

add_action('wp_enqueue_scripts', 'milo_olive_scripts');

if ( ! function_exists( 'milo_olive_setup' ) ):
	function milo_olive_setup() {

		// Make theme available for translation.
		// Translations can be filed in the /languages/ directory.
		load_theme_textdomain( 'milo_olive', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add featured image support
		add_theme_support( 'post-thumbnails' );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );

		// Enable support for editable menus via Appearance > Menus
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'milo_olive' ),
		) );

	}
endif; // milo_olive_setup
add_action( 'after_setup_theme', 'milo_olive_setup' );

// images aren't uploaded as links
function milo_olive_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'milo_olive_imagelink_setup', 10);

// Register sidebars
function milo_olive_widgets_init() {
	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4><span>',
		'after_title' => '</span></h4>',
	) );

}
add_action( 'widgets_init', 'milo_olive_widgets_init' );
