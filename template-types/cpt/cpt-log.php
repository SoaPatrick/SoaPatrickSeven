<?php
/**
 * Custom post type Log
 *
 * @link https://generatewp.com/post-type/
 *
 * @package soapatrickseven
 */

function soapatrickseven_add_cpt_log() {

  $labels = array(
    'name'                  => _x( 'Logs', 'Post Type General Name', 'soapatrickseven' ),
    'singular_name'         => _x( 'Log', 'Post Type Singular Name', 'soapatrickseven' ),
    'menu_name'             => __( 'Logs', 'soapatrickseven' ),
    'name_admin_bar'        => __( 'Log', 'soapatrickseven' ),
    'archives'              => __( 'Log Archives', 'soapatrickseven' ),
    'attributes'            => __( 'Log Attributes', 'soapatrickseven' ),
    'parent_item_colon'     => __( 'Parent Log:', 'soapatrickseven' ),
    'all_items'             => __( 'All Logs', 'soapatrickseven' ),
    'add_new_item'          => __( 'Add New Log', 'soapatrickseven' ),
    'add_new'               => __( 'Add New', 'soapatrickseven' ),
    'new_item'              => __( 'New Log', 'soapatrickseven' ),
    'edit_item'             => __( 'Edit Log', 'soapatrickseven' ),
    'update_item'           => __( 'Update Log', 'soapatrickseven' ),
    'view_item'             => __( 'View Log', 'soapatrickseven' ),
    'view_items'            => __( 'View Logs', 'soapatrickseven' ),
    'search_items'          => __( 'Search Log', 'soapatrickseven' ),
    'not_found'             => __( 'Not found', 'soapatrickseven' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'soapatrickseven' ),
    'featured_image'        => __( 'Featured Image', 'soapatrickseven' ),
    'set_featured_image'    => __( 'Set featured image', 'soapatrickseven' ),
    'remove_featured_image' => __( 'Remove featured image', 'soapatrickseven' ),
    'use_featured_image'    => __( 'Use as featured image', 'soapatrickseven' ),
    'insert_into_item'      => __( 'Insert into Log', 'soapatrickseven' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Log', 'soapatrickseven' ),
    'items_list'            => __( 'Logs list', 'soapatrickseven' ),
    'items_list_navigation' => __( 'Logs list navigation', 'soapatrickseven' ),
    'filter_items_list'     => __( 'Filter Logs list', 'soapatrickseven' ),
  );
  $args = array(
    'label'                 => __( 'Logs', 'soapatrickseven' ),
    'description'           => __( 'Changelogs', 'soapatrickseven' ),
    'labels'                => $labels,
    'supports'              => array( 'title' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-hammer',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => true,
    'publicly_queryable'    => true,
    "rewrite"               => array( "slug" => "log", "with_front" => false ),
    'capability_type'       => 'post',
    'show_in_rest'          => false,
  );
  register_post_type( 'log', $args );

}
add_action( 'init', 'soapatrickseven_add_cpt_log', 0 );
