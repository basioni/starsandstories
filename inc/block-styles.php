<?php
/**
 * Block Styles
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @return void
	 */
	function stars_and_stories_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'starsandstories-columns-overlap',
				'label' => esc_html__( 'Overlap', 'starsandstories' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'starsandstories-border',
				'label' => esc_html__( 'Borders', 'starsandstories' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'starsandstories-border',
				'label' => esc_html__( 'Borders', 'starsandstories' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'starsandstories-border',
				'label' => esc_html__( 'Borders', 'starsandstories' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'starsandstories-image-frame',
				'label' => esc_html__( 'Frame', 'starsandstories' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'starsandstories-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'starsandstories' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'starsandstories-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'starsandstories' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'starsandstories-border',
				'label' => esc_html__( 'Borders', 'starsandstories' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'starsandstories-separator-thick',
				'label' => esc_html__( 'Thick', 'starsandstories' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'starsandstories-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'starsandstories' ),
			)
		);
	}
	add_action( 'init', 'stars_and_stories_register_block_styles' );
}
