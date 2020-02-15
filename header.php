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
	<!--
	/**
	 * @license
	 * MyFonts Webfont Build ID 3694353, 2019-01-06T13:57:31-0500
	 *
	 * The fonts listed in this notice are subject to the End User License
	 * Agreement(s) entered into by the website owner. All other parties are
	 * explicitly restricted from using the Licensed Webfonts(s).
	 *
	 * You may obtain a valid license at the URLs below.
	 *
	 * Webfont: AmsiProNarw-Black by Stawix
	 * URL: https://www.myfonts.com/fonts/stawix/amsi-pro/narrow-black/
	 * Copyright: &#x00A9; 2012, 2013, 2014, 2015, 2016 by Stawix Ruecha &amp; Foundry. All
	 * rights reserved.
	 * Licensed pageviews: 10,000
	 *
	 *
	 * License: https://www.myfonts.com/viewlicense?type=web&buildid=3694353
	 *
	 * © 2019 MyFonts Inc
	*/

	-->
  <?php wp_head(); ?>
  <script>const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;const currentColor = localStorage.getItem('color') ? localStorage.getItem('color') : null;if(currentTheme){document.documentElement.setAttribute('data-theme', currentTheme);}if(currentColor){document.documentElement.setAttribute('data-color', currentColor);}</script>
  <script>FontAwesomeConfig = { searchPseudoElements: true };</script>
  <script src="https://kit.fontawesome.com/89d3ae0c6b.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

  <?php include get_template_directory() . '/layout-parts/settings.php'; ?>
  <?php include get_template_directory() . '/layout-parts/search.php'; ?>
  <?php include get_template_directory() . '/layout-parts/navigation.php'; ?>

	<div class="site-wrapper">
    <?php
    if ( is_home() && !is_paged() ) :
      include get_template_directory() . '/layout-parts/header--home.php';
    endif;
    ?>

	  <div class="site-content">
		  <main class="site-main">

