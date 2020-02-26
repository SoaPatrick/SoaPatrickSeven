<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatrickseven
 */

?>

    </div>

    <?php
    if ( is_home() && !is_paged() ) :
      get_template_part( 'layout-parts/instagram');
    endif;
    ?>


    <footer class="site-footer<?php if ( is_page() || is_paged() || is_archive() ) : ?> highlight<?php endif; ?>">
			<p>
        <?php echo sprintf( __( 'Stuff from 2000 to %s by SoaPatrick<a href="%s">Seven</a>', 'soapatrickseven' ), date('Y'), esc_url( home_url( '/log' )) ); ?>
      </p>
	  </footer>

	</div>

<?php wp_footer(); ?>

</body>
</html>
