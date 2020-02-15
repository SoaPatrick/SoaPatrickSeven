<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickseven
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="grid entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				soapatrickseven_posted_on();
				soapatrickseven_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<div class="grid entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="grid entry-footer">
		<?php soapatrickseven_entry_footer(); ?>
	</footer>
</article>
