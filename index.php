<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickseven
 */

get_header();

  if ( have_posts() ) :

    $postCount = 0;
    while ( have_posts() ) : the_post();
      $postCount++;
      if ( $postCount == 2  && is_home() && !is_paged() ) :

        get_template_part( 'template-parts/content', 'factory_feed' );

      endif;

      get_template_part( 'template-parts/content-single', get_post_type() );

    endwhile;

    if (is_single()):
      soapatrickseven_post_navigation();
    else:
      soapatrickseven_posts_navigation();
    endif;

  else :

    get_template_part( 'template-parts/content', 'none' );

  endif;

get_footer();
