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


/**
* add classes to next and previous Posts
*/
add_filter('next_posts_link_attributes', 'soapatrickseven_next_posts_link_class');
add_filter('previous_posts_link_attributes', 'soapatrickseven_previous_posts_link_class');
function soapatrickseven_next_posts_link_class() {
    return 'class="btn post-navigation__previous"';
}
function soapatrickseven_previous_posts_link_class() {
  return 'class="btn post-navigation__next"';
}

/**
 * add classes to next and previous Post
 */
add_filter('next_post_link', 'soapatrickseven_next_post_link_class');
add_filter('previous_post_link', 'soapatrickseven_previous_post_link_class');
function soapatrickseven_next_post_link_class($format){
  $format = str_replace('href=', 'class="btn post-navigation__next" href=', $format);
  return $format;
}
function soapatrickseven_previous_post_link_class($format) {
  $format = str_replace('href=', 'class="btn post-navigation__previous" href=', $format);
  return $format;
}

/**
* Remove the many post classes which are not needed
*/
function soapatrickseven_remove_postclasses($classes, $class, $post_id) {
  $classes = array_diff( $classes, array(
      'hentry',
      'post-' . $post_id,
      'type-' . get_post_type($post_id),
      'status-' . get_post_status($post_id),
  ) );
  return $classes;
}
add_filter('post_class', 'soapatrickseven_remove_postclasses', 10, 3);
