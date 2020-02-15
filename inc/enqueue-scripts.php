<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package soapatrickseven
 */

function soapatrickseven_scripts() {
	wp_enqueue_style( 'soapatrickseven-style', get_stylesheet_uri() );
	wp_enqueue_script( 'soapatricksix-scripts', get_template_directory_uri() . '/js/scripts.js', '','' , true );
}
add_action( 'wp_enqueue_scripts', 'soapatrickseven_scripts' );


/**
 * Deregister Embed script
 */
function soapatrickseven_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'soapatrickseven_deregister_scripts' );
