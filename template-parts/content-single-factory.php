<?php
/**
 * Template part for displaying single factory item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatricksix
 */

?>

<article id="factory-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>

  <div class="grid breadcrumbs-wrapper">
    <nav class="breadcrumbs">
      <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'SoaPatrick', 'soapatrickseven' ) ?></a></span>
      <span class="breadcrumbs__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/factory/"><?php esc_html_e( 'Factory', 'soapatrickseven' ) ?></a></span>
      <span class="breadcrumbs__item--last"><?php the_title() ?></span>
    </nav>
  </div>

	<header class="grid article__header">
    <?php the_title( '<h1 class="title-large">', '</h1>' ); ?>

    <div class="article__meta">
      <?php
        soapatrickseven_posted_on();
        soapatrickseven_tags();
      ?>
    </div>
  </header>

	<div class="grid article__content">
		<?php the_content(); ?>
	</div>


  <?php
    $term = get_field('project');
    if( $term ):
      $args = array(
      'post_type'   => 'post',
      'tax_query'   => array(
          array(
          'taxonomy'  => 'projects',
          'field'     => 'term_id',
          'terms'     => $term
          )
        )
      );
      $projects = new WP_Query( $args );
      if( $projects->have_posts() ) :
        ?>
          <section class="related related--post">
            <div class="related__items related--post__items">
              <?php
                while( $projects->have_posts() ) : $projects->the_post();
                  get_template_part( 'template-parts/content', 'list' );
                endwhile;
              ?>
            </div>
          </section>
        <?php
        wp_reset_postdata();
      endif;
    endif;
  ?>

</article>
