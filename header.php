<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatrickseven
 */

?>

<!doctype html>
<html <?php language_attributes(); ?> data-color="pink" data-theme="dark">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <?php
  wp_head();
  get_template_part( 'head-parts/fontlicense');
  get_template_part( 'head-parts/favicon');
  get_template_part( 'head-parts/fontawesome');
  ?>
  <script>const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;const currentColor = localStorage.getItem('color') ? localStorage.getItem('color') : null;if(currentTheme){document.documentElement.setAttribute('data-theme', currentTheme);}if(currentColor){document.documentElement.setAttribute('data-color', currentColor);}</script>
</head>

<body <?php body_class(); ?>>

  <?php
  get_template_part( 'layout-parts/settings');
  get_template_part( 'layout-parts/search');
  get_template_part( 'layout-parts/navigation');
  ?>

	<div class="site-wrapper">
    <?php
    if ( is_home() && !is_paged() ) :
      get_template_part( 'layout-parts/header', 'home');
    else :
      get_template_part( 'layout-parts/header', 'not_home');
    endif;
    ?>
	  <div class="site-content">

