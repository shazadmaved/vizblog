<?php

function bestthemeframework_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}
add_action( 'customize_register', 'bestthemeframework_customize_register' );

/**
 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
 * Used with blogname and blogdescription.
 */
function bestthemeframework_customize_preview_js() {
	wp_enqueue_script( 'bestthemeframework-customizer', get_template_directory_uri() . '/admin/js/theme-customizer.js', array( 'customize-preview' ), '20120523', true );
}
add_action( 'customize_preview_init', 'bestthemeframework_customize_preview_js' );


?>