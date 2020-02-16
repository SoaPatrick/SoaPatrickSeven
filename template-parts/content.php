<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickseven
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<header class="grid post__header">
    <?php the_title( '<h1 class="title-large">', '</h1>' ); ?>

    <div class="post__meta">
      <?php
      soapatrickseven_posted_on();
      soapatrickseven_tags();
      ?>
    </div>
	</header>

	<div class="grid post__content">
		<?php the_content(); ?>
	</div>
</article>
