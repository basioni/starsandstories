<?php
/**
 * Customize API: Twenty_Twenty_One_Customize_Notice_Control class
 *
 */

/**
 * Customize Notice Control class.
 *
 * @see WP_Customize_Control
 */
class Stars_And_Stories_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'starsandstories' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/twenty-twenty-one/#dark-mode-support', 'starsandstories' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'starsandstories' ); ?>
			</a></p>
		</div>
		<?php
	}
}
