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
    get_template_part( 'template-partials/head/fontlicense');
    get_template_part( 'template-partials/head/favicon');
    get_template_part( 'template-partials/head/fontawesome');
    get_template_part( 'template-partials/head/theme-script');
  ?>
</head>

<body <?php body_class(); ?>>

  <?php
    get_template_part( 'template-partials/layout/settings');
    get_template_part( 'template-partials/layout/search');
    get_template_part( 'template-partials/layout/navigation');
  ?>

  <div class="site-wrapper">
    <?php
      if ( is_home() && !is_paged() ) :
        get_template_part( 'template-partials/layout/header', 'home');
      else :
        get_template_part( 'template-partials/layout/header', 'not_home');
      endif;
    ?>
    <div class="site-content">

