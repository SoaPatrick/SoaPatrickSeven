<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package soapatrickseven
 */

if ( ! function_exists( 'soapatrickseven_posted_on' ) ) :
	function soapatrickseven_posted_on() {
    $posted_icon = '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 64h-48V12c0-6.627-5.373-12-12-12h-8c-6.627 0-12 5.373-12 12v52H128V12c0-6.627-5.373-12-12-12h-8c-6.627 0-12 5.373-12 12v52H48C21.49 64 0 85.49 0 112v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zM48 96h352c8.822 0 16 7.178 16 16v48H32v-48c0-8.822 7.178-16 16-16zm352 384H48c-8.822 0-16-7.178-16-16V192h384v272c0 8.822-7.178 16-16 16z"></path></svg>';
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		$time_string = sprintf( $time_string, esc_attr( get_the_date( DATE_W3C ) ), esc_html( get_the_date() ) );
    $posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

		echo  '<div class="posted-on">' . $posted_icon, $posted_on .'</div>'; // WPCS: XSS OK.
	}
endif;



if ( ! function_exists( 'soapatrickseven_tags' ) ) :
	function soapatrickseven_tags() {
    $tag_icon = '<svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M625.941 293.823L421.823 497.941c-18.746 18.746-49.138 18.745-67.882 0l-1.775-1.775 22.627-22.627 1.775 1.775c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L391.431 36.686A15.895 15.895 0 0 0 380.117 32h-19.549l-32-32h51.549a48 48 0 0 1 33.941 14.059L625.94 225.941c18.746 18.745 18.746 49.137.001 67.882zM252.118 32H48c-8.822 0-16 7.178-16 16v204.118c0 4.274 1.664 8.292 4.686 11.314l211.882 211.882c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L263.431 36.686A15.895 15.895 0 0 0 252.118 32m0-32a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.746 18.746-49.138 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118V48C0 21.49 21.49 0 48 0h204.118zM144 124c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20m0-28c26.51 0 48 21.49 48 48s-21.49 48-48 48-48-21.49-48-48 21.49-48 48-48z"></path></svg>';

		if ( 'post' === get_post_type() ) {
			$tags_list = get_the_term_list( $post->ID , 'post_tag', '', ', ' );
    }

    if ( 'factory' === get_post_type() ) {
      $tags_list = get_the_term_list( $post->ID , 'factory_tags', '', ', ' );
    }

    if ( $tags_list ) {
      echo '<div class="tags">' . $tag_icon .'<span class="tags-links">' . $tags_list . '</span></div>';
    }
	}
endif;



if ( ! function_exists( 'soapatrickseven_post_navigation' ) ) :
	function soapatrickseven_post_navigation() {
    echo '<div class="grid"><nav class="post-navigation">';
    next_post_link( '%link', __( 'Next Post', 'soapatrickseven' ) );
    previous_post_link('%link', __( 'Previous Post', 'soapatrickseven' ) );
    echo '</nav></div>';
	}
endif;


if ( ! function_exists( 'soapatrickseven_posts_navigation' ) ) :
	function soapatrickseven_posts_navigation() {
    echo '<div class="grid"><nav class="post-navigation">';
    posts_nav_link( ' ', __( 'Next Posts', 'soapatrickseven' ), __( 'Previous Posts', 'soapatrickseven' ) );
    echo '</nav></div>';
	}
endif;
