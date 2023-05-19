<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Trinity
 * @since Trinity 1.0
 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<a href="#main" class="skip-link screen-reader-only"><?php esc_html_e( 'Skip to main content.', 'trinity' ); ?></a>

	<header role="banner" id="header" class="header">

		<div class="wrap header__wrap">

			<div class="logo" aria-label="Home">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-current="page" data-current="true" class="logo__link">

					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png" srcset="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.png, <?php bloginfo( 'template_directory' ); ?>/assets/img/logo@2x.png 2x" width="215" height="50" alt="<?php bloginfo( 'name' ); ?>" class="logo__image" />

				</a>

			</div>

			<p class="call-us">Give us a call! <a href="tel:1-866-535-8807" class="call-us__link">866-535-8807</a></p>

		</div>

	</header>

	<main role="main" id="main" class="main">

		<div class="wrap main__wrap">
