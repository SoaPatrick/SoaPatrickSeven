<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package soapatrickseven
 */

/**
 * add classes to next and previous Posts
 *
 */
add_filter('next_posts_link_attributes', 'soapatrickseven_next_posts_link_class');
add_filter('previous_posts_link_attributes', 'soapatrickseven_previous_posts_link_class');
function soapatrickseven_next_posts_link_class() {
    return 'class="btn post-navigation__previous"';
}
function soapatrickseven_previous_posts_link_class() {
  return 'class="btn post-navigation__next"';
}

/**
 * add classes to next and previous Post
 *
 */
add_filter('next_post_link', 'soapatrickseven_next_post_link_class');
add_filter('previous_post_link', 'soapatrickseven_previous_post_link_class');
function soapatrickseven_next_post_link_class($format){
  $format = str_replace('href=', 'class="btn post-navigation__next" href=', $format);
  return $format;
}
function soapatrickseven_previous_post_link_class($format) {
  $format = str_replace('href=', 'class="btn post-navigation__previous" href=', $format);
  return $format;
}

/**
 * Replace Youtube Videos with Preview Image instead
 * of embeded iFrame, play video on click
 *
 */
function oapatrickseven_youtube_embeded($content){
	//youtube.com\^(?!href=)
	if (preg_match_all('#(?<!href\=\")https\:\/\/www.youtube.com\/watch\?([\\\&\;\=\w\d]+|)v\=[\w\d]{11}+([\\\&\;\=\w\d]+|)(?!\"\>)#', $content, $youtube_match)) {
		foreach ($youtube_match[0] as $youtube_url) {
			parse_str( parse_url( wp_specialchars_decode( $youtube_url ), PHP_URL_QUERY ), $youtube_video );
			if (isset($youtube_video['v'])){
				$content = str_replace($youtube_url, '<div class="youtube-wrapper"><div class="youtube-wrapper__video" data-id="'.$youtube_video['v'].'"></div></div>', $content);
			}
		}
	}
	//youtu.be
	if (preg_match_all('#(?<!href\=\")https\:\/\/youtu.be/([\\\&\;\=\w\d]+|)(?!\"\>)#', $content, $youtube_match)){
		foreach ($youtube_match[0] as $youtube_url) {
			$youtube_video = str_replace('https://youtu.be/', '', $youtube_url);
			if (isset($youtube_video)){
				$content = str_replace($youtube_url, '<div class="youtube-wrapper"><div class="youtube-wrapper__video" data-id="'.$youtube_video.'"></div></div>', $content);
			}
		}
	}
	return $content;
}
add_filter('the_content', 'oapatrickseven_youtube_embeded',1);


/**
 * Remove archive title prefixes.
 *
 */
function soapatrickseven_archive_title( $title ) {
	// Remove any HTML, words, digits, and spaces before the title.
	return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
}
add_filter( 'get_the_archive_title', 'soapatrickseven_archive_title' );
