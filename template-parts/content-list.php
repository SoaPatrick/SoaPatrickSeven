<?php
/**
 * Template part for displaying posts in list form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatricksix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post post--list grid' ); ?>>
	<div class="post--list__wrapper">
		<div class="post--list__icon<?php if (has_post_thumbnail()): echo ' post--list__icon--image'; endif; ?>">
			<?php
				$format = get_post_format();
				if ($format === 'quote') :
					echo '<i class="fal fa-quote-right"></i>';
				elseif ($format === 'link') :
					echo '<i class="fal fa-link"></i>';
				else :
					if (has_post_thumbnail()) :
						the_post_thumbnail( 'thumbnail' );
					else :
				    if (get_field( "font-awesome_icon" )) :
						  echo '<i class="' . get_field( "font-awesome_icon" ) . '"></i>';
						else :
							echo '<i class="fal fa-pencil"></i>';
						endif;
					endif;
				endif;
			?>
		</div>

    <header class="post__header post--list__header">
      <?php the_title( '<h1 class="title-list"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
    </header>
    <footer class="post__meta post--list__meta">
      <?php
        soapatrickseven_posted_on();
        soapatrickseven_tags();
      ?>
    </footer>

	</div>
</article>
