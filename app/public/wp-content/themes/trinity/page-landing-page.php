<?php

/**
 * Template Name: Landing Page
 *
 * The template for displaying the landing page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Trinity
 * @since Trinity 1.0
 */

get_header();

?>

	<?php
		// Get the Over section.
		get_template_part( 'includes/overview' );
	?>

	<?php
		// Get the Together section.
		get_template_part( 'includes/together' );
	?>

	<?php
		// Get the Trusted section.
		get_template_part( 'includes/trusted' );
	?>

<?php get_footer(); ?>
