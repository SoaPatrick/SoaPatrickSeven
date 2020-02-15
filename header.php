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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <script>FontAwesomeConfig = { searchPseudoElements: true };</script>
  <script src="https://kit.fontawesome.com/89d3ae0c6b.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

  <div id="settings-window">
      <!--  TODO: Jira Task SP7-7 -->
  </div>


  <div id="search-collapse">
      <!--  TODO: Jira Task SP7-12 -->
  </div>

  <?php include get_template_directory() . '/layout-parts/navigation.php'; ?>

	<div class="site-wrapper">
	  <div class="site-content">
		  <main class="site-main">

