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
    'name'                  => _x( 'Factories', 'Post Type General Name', 'soapatrickseven' ),
    'singular_name'         => _x( 'Factory', 'Post Type Singular Name', 'soapatrickseven' ),
    'menu_name'             => __( 'Factories', 'soapatrickseven' ),
    'name_admin_bar'        => __( 'Factory', 'soapatrickseven' ),
    'archives'              => __( 'Factory Archives', 'soapatrickseven' ),
    'attributes'            => __( 'Factory Attributes', 'soapatrickseven' ),
    'parent_item_colon'     => __( 'Parent Factory:', 'soapatrickseven' ),
    'all_items'             => __( 'All Factories', 'soapatrickseven' ),
    'add_new_item'          => __( 'Add New Factory', 'soapatrickseven' ),
    'add_new'               => __( 'Add New', 'soapatrickseven' ),
    'new_item'              => __( 'New Factory', 'soapatrickseven' ),
    'edit_item'             => __( 'Edit Factory', 'soapatrickseven' ),
    'update_item'           => __( 'Update Factory', 'soapatrickseven' ),
    'view_item'             => __( 'View Factory', 'soapatrickseven' ),
    'view_items'            => __( 'View Factories', 'soapatrickseven' ),
    'search_items'          => __( 'Search Factory', 'soapatrickseven' ),
    'not_found'             => __( 'Not found', 'soapatrickseven' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'soapatrickseven' ),
    'featured_image'        => __( 'Featured Image', 'soapatrickseven' ),
    'set_featured_image'    => __( 'Set featured image', 'soapatrickseven' ),
    'remove_featured_image' => __( 'Remove featured image', 'soapatrickseven' ),
    'use_featured_image'    => __( 'Use as featured image', 'soapatrickseven' ),
    'insert_into_item'      => __( 'Insert into Factory', 'soapatrickseven' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Factory', 'soapatrickseven' ),
    'items_list'            => __( 'Factories list', 'soapatrickseven' ),
    'items_list_navigation' => __( 'Factories list navigation', 'soapatrickseven' ),
    'filter_items_list'     => __( 'Filter Factories list', 'soapatrickseven' ),
  );
  $args = array(
    'label'                 => __( 'Factory', 'soapatrickseven' ),
    'description'           => __( 'Factories', 'soapatrickseven' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
    'taxonomies'            => array( 'factory_tags' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-art',
    'show_in_admin_bar'     => false,
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
