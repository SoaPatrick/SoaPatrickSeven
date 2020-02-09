<?php
/**
 * Custom ACF Fields
 *
 * @link https://www.advancedcustomfields.com/resources/
 *
 * @package soapatrickseven
 */


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_font-awesome-icon',
		'title' => 'Font-Awesome Icon',
		'fields' => array (
			array (
				'key' => 'field_56ed1244cce42',
				'label' => 'Font-Awesome Icon',
				'name' => 'font-awesome_icon',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_change-log',
		'title' => 'Change Log',
		'fields' => array (
			array (
				'key' => 'field_5ad8c6dfbfa48',
				'label' => 'Changelog Type',
				'name' => 'changelog_type',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'fal fa-plus-circle' => 'Added',
					'fal fa-minus-circle' => 'Removed',
					'fal fa-wrench' => 'Changed',
					'fal fa-bug' => 'Fixed',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'log',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
