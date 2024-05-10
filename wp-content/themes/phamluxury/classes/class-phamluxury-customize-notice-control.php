<?php
/**
 * Customize API: phamluxury_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since phamluxury 1.0
 *
 * @see WP_Customize_Control
 */
class phamluxury_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since phamluxury 1.0
	 *
	 * @var string
	 */
	public $type = 'phamluxury-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since phamluxury 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'phamluxury' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/phamluxury/#dark-mode-support', 'phamluxury' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'phamluxury' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
