<?php
/**
 * Custom taxonomy Factory Tag
 *
 * @link https://generatewp.com/taxonomy/
 *
 * @package soapatrickseven
 */

function soapatrickseven_add_tax_factory_tags() {

  $labels = [
    'name'                       => _x( 'Factory Tag', 'Taxonomy General Name', 'soapatrickseven' ),
    'singular_name'              => _x( 'Factory Tag', 'Taxonomy Singular Name', 'soapatrickseven' ),
    'menu_name'                  => __( 'Factory Tag', 'soapatrickseven' ),
    'all_items'                  => __( 'All Factory Tags', 'soapatrickseven' ),
    'parent_item'                => __( 'Parent Factory Tag', 'soapatrickseven' ),
    'parent_item_colon'          => __( 'Parent Factory Tag:', 'soapatrickseven' ),
    'new_item_name'              => __( 'New Factory Tag Name', 'soapatrickseven' ),
    'add_new_item'               => __( 'Add New Factory Tag', 'soapatrickseven' ),
    'edit_item'                  => __( 'Edit Factory Tag', 'soapatrickseven' ),
    'update_item'                => __( 'Update Factory Tag', 'soapatrickseven' ),
    'view_item'                  => __( 'View Factory Tag', 'soapatrickseven' ),
    'separate_items_with_commas' => __( 'Separate Factory Tags with commas', 'soapatrickseven' ),
    'add_or_remove_items'        => __( 'Add or remove Factory Tags', 'soapatrickseven' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'soapatrickseven' ),
    'popular_items'              => __( 'Popular Factory Tags', 'soapatrickseven' ),
    'search_items'               => __( 'Search Factory Tags', 'soapatrickseven' ),
    'not_found'                  => __( 'Not Found', 'soapatrickseven' ),
    'no_terms'                   => __( 'No Factory Tags', 'soapatrickseven' ),
    'items_list'                 => __( 'Factory Tags list', 'soapatrickseven' ),
    'items_list_navigation'      => __( 'Factory Tags list navigation', 'soapatrickseven' ),
  ];
  $args = [
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
    "rewrite"                     => array( 'slug' => 'factory-tag', 'with_front' => false, ),
    'show_in_rest'               => true,
    'publicly_queryable'         => true,
  ];
  register_taxonomy( "factory_tags", [ "factory" ], $args );

}
add_action( 'init', 'soapatrickseven_add_tax_factory_tags' );
