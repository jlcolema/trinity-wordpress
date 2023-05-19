<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Trinity
 * @since Trinity 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Trinity 1.0
	 *
	 * @return void
	 */
	function trinity_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'trinity-columns-overlap',
				'label' => esc_html__( 'Overlap', 'trinity' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'trinity-border',
				'label' => esc_html__( 'Borders', 'trinity' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'trinity-border',
				'label' => esc_html__( 'Borders', 'trinity' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'trinity-border',
				'label' => esc_html__( 'Borders', 'trinity' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'trinity-image-frame',
				'label' => esc_html__( 'Frame', 'trinity' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'trinity-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'trinity' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'trinity-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'trinity' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'trinity-border',
				'label' => esc_html__( 'Borders', 'trinity' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'trinity-separator-thick',
				'label' => esc_html__( 'Thick', 'trinity' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'trinity-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'trinity' ),
			)
		);
	}
	add_action( 'init', 'trinity_register_block_styles' );
}
