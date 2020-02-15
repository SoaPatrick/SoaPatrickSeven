<?php
/**
 * Layout part for displaying the search
 *
 * @package soapatrickseven
 */

?>

<div id="search-collapse">
  <div class="container">
    <form class="search-form" action="<?php echo home_url( '/' ); ?>" method="get">
      <label class="grid" for="search-collapse--input">
        <input type="text" name="s" id="search-collapse--input" value="<?php the_search_query(); ?>" placeholder="<?php esc_html_e( 'Find Stuff...', 'soapatrickseven' ); ?>" aria-label="<?php esc_html_e( 'Find Stuff...', 'soapatrickseven' ); ?>"">
      </label>
    </form>
  </div>
</div>
