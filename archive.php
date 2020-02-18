<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickseven
 */

get_header();

  if ( have_posts() ) : ?>

    <div class="grid breadcrumbs-wrapper">
      <nav class="breadcrumbs">
        <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SoaPatrick</a></span>
        <?php if( is_tag() ) : ?>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tags/">Tags</a></span>
        <?php else : ?>
          <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/storage/">Storage</a></span>
        <?php endif; ?>
        <span class="breadcrumbs__item--last"><?php the_archive_title();?></span>
      </nav>
    </div>

    <header class="grid page__header">
      <?php the_archive_title( '<h1 class="title-large">', '</h1>' ); ?>
      <hr>
    </header>

    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content', 'list' );

    endwhile;

    soapatrickseven_posts_navigation();

  endif;

get_footer();
