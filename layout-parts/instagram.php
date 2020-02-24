<?php
/**
 * Layout part for displaying the instagram-feed
 *
 * @package soapatrickseven
 */

?>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<section class="site-content instagram-feed highlight">
  <div class="instagram-feed__container">
    <h1 class="title-large text-center"><i class="fab fa-instagram fa-fw"></i><?php esc_html_e( 'Instagram Feed', 'soapatrickseven' ) ?></h1>
    <p class="lead">
      <?php echo sprintf( __( 'If you have the time and feel like it, why don&rsquo;t you <a href="%s" target="_blank" rel="noopener">follow me</a> on Instagram?', 'soapatrickseven' ), 'https://www.instagram.com/SoaPatrick/' ); ?>
    </p>
    <?php simple_instagram(10); ?>
  </div>
</section>
<script>var flkty=new Flickity(".main-carousel",{setGallerySize:!0,pageDots:!1,resize:!0,groupCells:1});</script>
