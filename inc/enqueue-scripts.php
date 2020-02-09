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

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'soapatrickseven_scripts' );


/**
 * Deregister Embed script
 */
function soapatrickseven_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'soapatrickseven_deregister_scripts' );
