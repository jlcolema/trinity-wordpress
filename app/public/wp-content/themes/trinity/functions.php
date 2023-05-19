<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Trinity
 * @since Trinity 1.0
 *
 * Table of Contents:
 *
 * 01. General Setup
 * 02. Enqueue Scripts and Styles
 * 05. Register Menus
 * 06. Custom Logo
 * 07. WP Body Open
 * 08. Register Sidebars
 * 09. Enqueue Block Editor Assets
 * 10. Enqueue Classic Editor Styles
 * 11. Block Editor Settings
 * 12. Advanced Custom Fields
 *
 */

if ( ! function_exists( 'trinity_setup' ) ) {

	/**
	 * 01. General Setup
	 *
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Trinity 1.0
	 *
	 * @return void
	 */

	function trinity_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Trinity, use a find and replace
		 * to change 'trinity' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'trinity', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		// add_theme_support( 'post-thumbnails' );
		// set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'trinity' ),
				'footer'  => esc_html__( 'Secondary menu', 'trinity' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$editor_stylesheet_path = './assets/css/editor.css';

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

	}
}
add_action( 'after_setup_theme', 'trinity_setup' );

/**
 * 02. Enqueue Scripts and Styles
 *
 * Enqueue scripts and styles.
 *
 * @since Trinity 1.0
 *
 * @return void
 */

function trinity_scripts() {

	global $wp_scripts;

	// Use the standard stylesheet.
	wp_enqueue_style( 'trinity-style', get_template_directory_uri() . '/assets/css/styles.css', array(), wp_get_theme()->get( 'Version' ) );

	// RTL styles.
	wp_style_add_data( 'trinity-style', 'rtl', 'replace' );

	// Print styles.
	wp_enqueue_style( 'trinity-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

}
add_action( 'wp_enqueue_scripts', 'trinity_scripts' );

/**
 * Enqueue non-latin language styles.
 *
 * @since Trinity 1.0
 *
 * @return void
 */
function trinity_non_latin_languages() {
	$custom_css = trinity_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'trinity-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'trinity_non_latin_languages' );

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-trinity-customize.php';
new Trinity_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-trinity-dark-mode.php';
new Trinity_Dark_Mode();

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Trinity 1.0
 *
 * @return void
 */
function trinity_customize_preview_init() {
	wp_enqueue_script(
		'trinity-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'trinity-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'trinity-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'trinity_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Trinity 1.0
 *
 * @return void
 */
function trinity_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'trinity-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'trinity_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Trinity 1.0
 *
 * @return void
 */
function trinity_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Trinity 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'trinity_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Trinity 1.0
 *
 * @return void
 */
function trinity_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'trinity_add_ie_class' );

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'trinity' );
	}
endif;
