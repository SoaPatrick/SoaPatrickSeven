<?php
/**
 * Custom taxonomy Post Projects
 *
 * @link https://generatewp.com/taxonomy/
 *
 * @package soapatrickseven
 */

function soapatrickseven_add_tax_projects() {

	$labels = [
		'name'                       => _x( 'Project', 'Taxonomy General Name', 'soapatrickseven' ),
		'singular_name'              => _x( 'Project', 'Taxonomy Singular Name', 'soapatrickseven' ),
		'menu_name'                  => __( 'Projects', 'soapatrickseven' ),
		'all_items'                  => __( 'All Projects', 'soapatrickseven' ),
		'parent_item'                => __( 'Parent Project', 'soapatrickseven' ),
		'parent_item_colon'          => __( 'Parent Project:', 'soapatrickseven' ),
		'new_item_name'              => __( 'New Project Name', 'soapatrickseven' ),
		'add_new_item'               => __( 'Add New Project', 'soapatrickseven' ),
		'edit_item'                  => __( 'Edit Project', 'soapatrickseven' ),
		'update_item'                => __( 'Update Project', 'soapatrickseven' ),
		'view_item'                  => __( 'View Project', 'soapatrickseven' ),
		'separate_items_with_commas' => __( 'Separate Projects with commas', 'soapatrickseven' ),
		'add_or_remove_items'        => __( 'Add or remove Projects', 'soapatrickseven' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'soapatrickseven' ),
		'popular_items'              => __( 'Popular Projects', 'soapatrickseven' ),
		'search_items'               => __( 'Search Projects', 'soapatrickseven' ),
		'not_found'                  => __( 'Not Found', 'soapatrickseven' ),
		'no_terms'                   => __( 'No Projects', 'soapatrickseven' ),
		'items_list'                 => __( 'Projects list', 'soapatrickseven' ),
		'items_list_navigation'      => __( 'Projects list navigation', 'soapatrickseven' ),
	];
	$args = [
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
		"rewrite"                     => array( 'slug' => 'projects', 'with_front' => false, ),
    'show_in_rest'               => true,
    'publicly_queryable'         => false,
	];
  register_taxonomy( "projects", [ "post" ], $args );

}
add_action( 'init', 'soapatrickseven_add_tax_projects' );
