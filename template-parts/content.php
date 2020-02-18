<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickseven
 */


$format = get_post_format();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
  <?php if ($format === 'quote' || $format === 'link' || $format === 'status') : ?>

		<header class="grid post__header">
			<div class="inner-wrapper inner-wrapper__<?php echo $format ?>">
				<?php
					if($format === 'status') :
			    	if (get_field( "font-awesome_icon" )) :
					   	echo '<i class="' . get_field( 'font-awesome_icon' ) . '"></i>';
						else :
							echo '<i class="fal fa-bullhorn"></i>';
						endif;
					endif;
					the_content();
		    ?>
			</div>
			<div class="post__meta">
        <?php
          soapatrickseven_posted_on();
          soapatrickseven_tags();
        ?>
			</div>
    </header>

  <?php else : ?>

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

  <?php endif; ?>
</article>
