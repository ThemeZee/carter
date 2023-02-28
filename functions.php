<?php
/**
 * Carter functions and definitions
 *
 * @package Carter
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function carter_setup() {

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove Core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'carter_setup' );


/**
 * Enqueue scripts and styles.
 */
function carter_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'carter-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'carter_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function carter_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'carter-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'enqueue_block_editor_assets', 'carter_block_scripts' );


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function carter_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'carter_excerpt_length', 35 );
}
add_filter( 'excerpt_length', 'carter_excerpt_length' );


/**
 * Registers block pattern categories.
 *
 * @return void
 */
function carter_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'carter_hero'         => array( 'label' => __( 'Carter: Hero', 'carter' ) ),
		'carter_cta'          => array( 'label' => __( 'Carter: Call to Action', 'carter' ) ),
		'carter_features'     => array( 'label' => __( 'Carter: Features', 'carter' ) ),
		'carter_media_text'   => array( 'label' => __( 'Carter: Media Text', 'carter' ) ),
		'carter_portfolio'    => array( 'label' => __( 'Carter: Portfolio', 'carter' ) ),
		'carter_services'     => array( 'label' => __( 'Carter: Services', 'carter' ) ),
		'carter_testimonials' => array( 'label' => __( 'Carter: Testimonials', 'carter' ) ),
		'carter_team'         => array( 'label' => __( 'Carter: Team', 'carter' ) ),
		'carter_blog'         => array( 'label' => __( 'Carter: Blog Posts', 'carter' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'carter_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'carter_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function carter_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style(
		'core/navigation',
		array(
			'name'         => 'main-navigation',
			'label'        => esc_html__( 'Main Navigation', 'carter' ),
			'style_handle' => 'carter-stylesheet',
		)
	);

	// Register Primary Hover block style.
	register_block_style(
		'core/social-links',
		array(
			'name'         => 'primary-hover',
			'label'        => esc_html__( 'Primary Hover', 'carter' ),
			'style_handle' => 'carter-stylesheet',
		)
	);
}
add_action( 'init', 'carter_register_block_styles', 9 );
