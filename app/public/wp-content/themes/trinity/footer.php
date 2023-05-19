<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Trinity
 * @since Trinity 1.0
 */

?>

		</div>

	</main>

	<footer role="contentinfo" class="footer">

		<div class="wrap footer__wrap">

			<div class="emblem" aria-label="Home">

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-current="page" data-current="true" class="emblem__link">

					<img src="/assets/img/emblem.png" srcset="/assets/img/emblem.png, /assets/img/emblem@2x.png 2x" width="40" height="47" alt="<?php bloginfo( 'name' ); ?>" class="emblem__image" />

				</a>

			</div>

			<p class="copyright">&copy; <?php echo date_i18n( _x( 'Y', 'copyright date format', 'trinity' ) ); ?> <?php bloginfo( 'name' ); ?>, LLC. All Rights Reserved.</p>

		</div>

	</footer>

	<?php wp_footer(); ?>

	<script src="/assets/js/scripts.js" defer></script>

</body>

</html>
