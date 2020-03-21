<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package soapatrickseven
 */

get_header();

  if ( have_posts() ) : ?>

    <header class="grid">
		  <h1 class="title-large">
        <?php printf( esc_html__( 'Search: %s', 'soapatrickseven' ), get_search_query() ); ?>
      </h1>
      <hr>
    </header>

    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'partials/content/content', 'list' );
    endwhile;

    soapatrickseven_posts_navigation();

  else :

    get_template_part( 'partials/content/content', 'none' );

  endif;

get_footer();
