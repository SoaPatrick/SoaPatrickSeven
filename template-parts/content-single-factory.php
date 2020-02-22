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
</article>
