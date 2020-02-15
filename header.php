<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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

  <?php wp_head(); ?>
  <script>const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;const currentColor = localStorage.getItem('color') ? localStorage.getItem('color') : null;if(currentTheme){document.documentElement.setAttribute('data-theme', currentTheme);}if(currentColor){document.documentElement.setAttribute('data-color', currentColor);}</script>
  <script>FontAwesomeConfig = { searchPseudoElements: true };</script>
  <script src="https://kit.fontawesome.com/89d3ae0c6b.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

  <?php include get_template_directory() . '/layout-parts/settings.php'; ?>

  <div id="search-collapse">
      <!--  TODO: Jira Task SP7-12 -->
  </div>

  <?php include get_template_directory() . '/layout-parts/navigation.php'; ?>

	<div class="site-wrapper">
	  <div class="site-content">
		  <main class="site-main">

