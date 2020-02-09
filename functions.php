<?php
/**
 * soapatrickseven functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package soapatrickseven
 */

require get_template_directory() . '/inc/theme-setup.php';
require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/custom-taxonomies.php';
require get_template_directory() . '/inc/custom-acf-fields.php';

// Remove Emojiscript
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
