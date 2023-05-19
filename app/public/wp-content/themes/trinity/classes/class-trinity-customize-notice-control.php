<?php
/**
 * Customize API: Trinity_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Trinity
 * @since Trinity 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Trinity 1.0
 *
 * @see WP_Customize_Control
 */
class Trinity_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Trinity 1.0
	 *
	 * @var string
	 */
	public $type = 'trinity-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Trinity 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'trinity' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/trinity/#dark-mode-support', 'trinity' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'trinity' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
