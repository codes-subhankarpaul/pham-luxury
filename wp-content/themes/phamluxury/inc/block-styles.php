<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since phamluxury 1.0
	 *
	 * @return void
	 */
	function phamluxury_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'phamluxury-columns-overlap',
				'label' => esc_html__( 'Overlap', 'phamluxury' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'phamluxury-border',
				'label' => esc_html__( 'Borders', 'phamluxury' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'phamluxury-border',
				'label' => esc_html__( 'Borders', 'phamluxury' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'phamluxury-border',
				'label' => esc_html__( 'Borders', 'phamluxury' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'phamluxury-image-frame',
				'label' => esc_html__( 'Frame', 'phamluxury' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'phamluxury-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'phamluxury' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'phamluxury-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'phamluxury' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'phamluxury-border',
				'label' => esc_html__( 'Borders', 'phamluxury' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'phamluxury-separator-thick',
				'label' => esc_html__( 'Thick', 'phamluxury' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'phamluxury-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'phamluxury' ),
			)
		);
	}
	add_action( 'init', 'phamluxury_register_block_styles' );
}
