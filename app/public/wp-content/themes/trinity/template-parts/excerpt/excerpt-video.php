<?php
/**
 * Show the appropriate content for the Video post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Trinity
 * @since Trinity 1.0
 */

$content = get_the_content();

if ( has_block( 'core/video', $content ) ) {
	trinity_print_first_instance_of_block( 'core/video', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	trinity_print_first_instance_of_block( 'core/embed', $content );
} else {
	trinity_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
