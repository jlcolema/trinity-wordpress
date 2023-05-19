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

	// Use the standard stylesheet.
	wp_enqueue_style( 'trinity-style', get_template_directory_uri() . '/assets/css/styles.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'trinity_scripts' );
