<?php
/**
 * Custom post type Factory
 *
 * @link https://generatewp.com/post-type/
 *
 * @package soapatrickseven
 */

function soapatrickseven_add_cpt_factory() {

  $labels = array(
    'name'                  => _x( 'Factory', 'Post Type General Name', 'soapatrickseven' ),
    'singular_name'         => _x( 'Factory', 'Post Type Singular Name', 'soapatrickseven' ),
    'menu_name'             => __( 'Factory', 'soapatrickseven' ),
    'name_admin_bar'        => __( 'Factory Item', 'soapatrickseven' ),
    'view_items'            => __( 'View Factory', 'soapatrickseven' ),
    'view_item'             => __( 'View Factory Item', 'soapatrickseven' ),
    'search_items'          => __( 'Search Factory', 'soapatrickseven' ),
  );
  $args = array(
    'label'                 => __( 'Factory', 'soapatrickseven' ),
    'description'           => __( 'Factory Items', 'soapatrickseven' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
    'taxonomies'            => array( 'factory_tags' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-art',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    "rewrite"               => array( "slug" => "factory", "with_front" => false ),
    'capability_type'       => 'post',
    'show_in_rest'          => true,
  );
  register_post_type( 'factory', $args );

}
add_action( 'init', 'soapatrickseven_add_cpt_factory', 0 );
