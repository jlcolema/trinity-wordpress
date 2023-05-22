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
 * 03. Advanced Custom Fields
 * 04. Disable and/or Remove Default Features
 * 05. Register Service Worker
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

		// Step Image
		add_image_size( 'step-image-small', 424, 139, true );
		add_image_size( 'step-image-large', 848, 278, true );

		// Company Logo
		add_image_size( 'company-logo-small', 186, 97, true );
		add_image_size( 'company-logo-large', 372, 194, true );

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

function trinity_scripts_and_styles() {

	// Use the standard stylesheet.
	// Structure: wp_queue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' );
	// wp_enqueue_style( 'trinity-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), wp_get_theme()->get( 'Version' ) );

	// Scripts
	// Structure: wp_enqueue_script( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, bool $in_footer = false );
	// TODO: Add `defer` after URL, for example /assets/js/scripts.js" defer>
	// wp_enqueue_script( 'trinity-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), wp_get_theme()->get( 'Version' ), true );

}
add_action( 'wp_enqueue_scripts', 'trinity_scripts_and_styles' );

/**
 * 03. Advanced Custom Fields
 *
 * A description of the section.
 *
 * @since Trinity 1.0
 *
 * @return void
 */

if ( function_exists( 'acf_add_options_page' ) ) {

	// Register a Globals menu item.
	acf_add_options_page( array(
		'page_title' => 'Globals',
		'menu_title' => 'Globals',
		'menu_slug'	 => 'globals',
		'capability' => 'edit_posts',
		'redirect'	 => true
	));

	// Register a submenu item within Globals for About.
	acf_add_options_sub_page( array(
		'page_title'  => 'About',
		'menu_title'  => 'About',
		'parent_slug' => 'globals'
	));

	// Register a submenu item within Globals for Contact Information.
	acf_add_options_sub_page( array(
		'page_title'  => 'Contact Information',
		'menu_title'  => 'Contact Information',
		'parent_slug' => 'globals'
	));

	// Register a submenu item within Globals for Footer.
	acf_add_options_sub_page( array(
		'page_title'  => 'Footer',
		'menu_title'  => 'Footer',
		'parent_slug' => 'globals'
	));

}

/**
 * 04. Disable and/or Remove Default Features
 *
 * Notes...
 *
 * @since Trinity 1.0
 *
 * @return void
 */

// Dequeue Styles
function trinity_dequeue_styles() {

	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('classic-theme-styles');
	wp_dequeue_style('global-styles');

	wp_dequeue_script('wp-polyfill');

}
add_action( 'wp_enqueue_scripts', 'trinity_dequeue_styles', 100);

// Deregister Features
function trinity_deregister_features() {
	wp_deregister_script( 'wp-embed' );
	wp_deregister_script( 'wp-polyfill' );
	wp_deregister_script( 'regenerator-runtime' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );

	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
	remove_action( 'wp_head', 'wp_resource_hints', 2 );
}
add_action( 'init', 'trinity_deregister_features' );

/**
 * 05. Register Service Worker
 *
 * Notes...
 *
 * @since Trinity 1.0
 *
 * @return void
 */
