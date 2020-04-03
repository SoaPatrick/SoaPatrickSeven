<?php
/**
 * Enqueue scripts and styles.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 *
 * @package soapatrickseven
 */

function soapatrickseven_scripts() {
  wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style( 'soapatrickseven-style', get_stylesheet_uri() );
  wp_enqueue_script( 'soapatrickseven-scripts', get_template_directory_uri() . '/assets/js/scripts.js', '','' , true );
}
add_action( 'wp_enqueue_scripts', 'soapatrickseven_scripts' );


// Remove Emojiscript
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Deregister Embed script
 */
function soapatrickseven_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'soapatrickseven_deregister_scripts' );
