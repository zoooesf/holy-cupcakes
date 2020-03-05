<?php
/**
 * Holy Cupcakes Theme Customizer
 *
 * @package Holy_Cupcakes
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function holy_cupcakes_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'holy_cupcakes_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'holy_cupcakes_customize_partial_blogdescription',
		) );
	}

	// panels
		// For Dynamic Social Media 
	$wp_customize->add_panel( 'holy_cupcakes_social_media_panel', array(
		'title' => esc_html__( 'Social Media', 'holy_cupcakes' ),
		'capability' => 'edit_theme_options',
	) );

	// Sections
		// For Dynamic Social Media (facebook)
	$wp_customize->add_section( 'holy_cupcakes_facebook_section', array(
		'title' => esc_html__( 'Facebook', 'holy_cupcakes' ),
		'capability' => 'edit_theme_options',
		'panel' => 'holy_cupcakes_social_media_panel'
	) );
		// For Dynamic Social Media (instagram)
	$wp_customize->add_section( 'holy_cupcakes_instagram_section', array(
		'title' => esc_html__( 'Instagram', 'holy_cupcakes' ),
		'capability' => 'edit_theme_options',
		'panel' => 'holy_cupcakes_social_media_panel'
	) );

	// settings
		// For Dynamic Social Media (facebook)
	$wp_customize->add_setting( 'holy_cupcakes_facebook_url', array(
		'transport' => 'refresh',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
		// For Dynamic Social Media (instagram)
	$wp_customize->add_setting( 'holy_cupcakes_instagram_url', array(
		'transport' => 'refresh',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
	// controls
		// For Dynamic Social Media (facebook)
	$wp_customize->add_control( 'holy_cupcakes_facebook_url', array(
		'label' => esc_html__( 'URL', 'holy_cupcakes' ),
		'description' => esc_html__( 'Add URL to display Facebook icon/link', 'holy_cupcakes' ),
		'section' => 'holy_cupcakes_facebook_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'https://facebook.com', 'holy_cupcakes' )
		)
	) );
			// For Dynamic Social Media (instagram)
	$wp_customize->add_control( 'holy_cupcakes_instagram_url', array(
		'label' => esc_html__( 'URL', 'holy_cupcakes' ),
		'description' => esc_html__( 'Add URL to display Instagram icon/link', 'holy_cupcakes' ),
		'section' => 'holy_cupcakes_instagram_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__( 'https://instagram.com', 'holy_cupcakes' )
		)
	) );
}
add_action( 'customize_register', 'holy_cupcakes_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function holy_cupcakes_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function holy_cupcakes_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function holy_cupcakes_customize_preview_js() {
	wp_enqueue_script( 'holycupcakes-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'holy_cupcakes_customize_preview_js' );
