<?php
/**
 * SFHerbalist Theme Customizer
 *
 * @package SFHerbalist
 * @since SFHerbalist 1.2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since SFHerbalist 1.2
 */
function SFHerbalist_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'SFHerbalist_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since SFHerbalist 1.2
 */
function SFHerbalist_customize_preview_js() {
	wp_enqueue_script( 'SFHerbalist_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130304', true );
}
add_action( 'customize_preview_init', 'SFHerbalist_customize_preview_js' );
