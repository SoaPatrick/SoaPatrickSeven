<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatrickseven
 */

?>

<section>
  <header class="grid">
    <h1 class="title-large">
      <?php
        if ( is_search() ) :
          esc_html_e( 'I found nothing!', 'soapatrickseven' );
        else :
          esc_html_e( 'Something went wrong!', 'soapatrickseven' );
        endif;
      ?>
    </h1>
    <hr>
  </header>

  <div class="grid">
    <?php
      if ( is_search() ) :
          echo '<p>' . __( 'Sorry, but I can&rsquo;t find what you&rsquo;re looking for. Please try again with other words.', 'soapatrickseven' ) . '</p>';
      else :
          echo '<p>' . __( 'It seems I can&rsquo;t find what you&rsquo;re looking for. Try finding it?', 'soapatrickseven' ) . '</p>';
      endif;
      get_search_form();
      the_widget( 'WP_Widget_Recent_Posts' );
    ?>
  </div>
</section>
