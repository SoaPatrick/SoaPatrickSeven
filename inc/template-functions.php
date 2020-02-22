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
 * Remove default image sizes from generating
 *
 */
function soapatrickseven_remove_default_image_sizes( $sizes ) {
  unset( $sizes[ 'medium_large' ]);
  unset( $sizes[ '1536x1536' ]);
  unset( $sizes[ '2048x2048' ]);

  return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'soapatrickseven_remove_default_image_sizes' );


/**
 * wrap all iframes within content with a div and class
 *
 */
function soapatrickseven_iframe_wrapper($content) {
	$pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
	preg_match_all($pattern, $content, $matches);

	foreach ($matches[0] as $match) {
		$wrappedframe = '<div class="responsive-container">' . $match . '</div>';
		$content = str_replace($match, $wrappedframe, $content);
	}

	return $content;
}
add_filter('the_content', 'soapatrickseven_iframe_wrapper');

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


/**
 * Adding simple page title to home page
 *
 */
function soapatrickseven_home_page_title( $title ) {
  if ( is_home() ):
    return get_bloginfo('name');
  endif;
}
add_filter( 'pre_get_document_title', 'soapatrickseven_home_page_title' );


/**
 * Adding noindex to specific pages that shouldn't be indexed
 *
 */
function soapatrickseven_add_robots_noindes($output) {
  if($paged > 1 || is_author() || is_tag() || is_date() || is_attachment() || is_singular('log') || is_post_type_archive('log') || is_tax('factory_tags') || is_page('storage') || is_page('tags')) {
    echo '<meta name="robots" content="noindex">';
  }
}
add_action('wp_head', 'soapatrickseven_add_robots_noindes', 1);


/**
 * Adding the Open Graph in the Language Attributes
 *
 */
function soapatrickseven_add_opengraph_doctype($output) {
	return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_action('wp_head', 'soapatrickseven_add_opengraph_doctype', 1);


/**
 * add Open Graph Meta Info
 *
 */
function soapatrickseven_add_opengraph_infos() {

	global $post;
	$default_image = get_template_directory_uri().'/favicon/android-chrome-512x512.png';

	// if page is not single
	if ( !is_singular() ) {
		echo '<meta name="description" content="' . get_bloginfo('description') . '"/>';
		echo '<meta property="og:type" content="article"/>';
		echo '<meta property="og:title" content="' . get_bloginfo('name') . '"/>';
		echo '<meta property="og:description" content="' . get_bloginfo('description') . '"/>';
		echo '<meta property="og:image" content="' . $default_image . '"/>';
		echo '<meta name="twitter:image" content="' . $default_image . '"/>';
		return;
	}

	// if post has excerpt or not
	if ($excerpt = $post->post_excerpt) {
    $excerpt = esc_html(strip_tags($post->post_excerpt));
	} else {
		$excerpt = esc_html(wp_trim_words($post->post_content,20));
	}

	// basic meta infos
	echo '<meta name="description" content="' . $excerpt . '"/>';
	echo '<meta property="og:type" content="article"/>';
	echo '<meta property="og:title" content="' . get_the_title() . '"/>';
	echo '<meta property="og:description" content="' . $excerpt . '"/>';
	echo '<meta property="og:url" content="' . get_permalink() . '"/>';
	echo '<meta property="og:site_name" content="' . get_bloginfo() . '"/>';

	// if post has featured image or not
	if ( !has_post_thumbnail($post->ID) ) {
		echo '<meta property="og:image" content="' . $default_image . '"/>';
	} else {
	$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
		echo '<meta property="og:image" content="' . esc_attr($thumbnail_src[0]) . '"/>';
	}

	echo '<meta name="twitter:title" content="' . get_the_title() . '"/>';
	echo '<meta name="twitter:card" content="summary" />';
	echo '<meta name="twitter:description" content="' . $excerpt . '" />';
	echo '<meta name="twitter:url" content="' . get_permalink() . '"/>';

	// if post has featured image or not
	if ( !has_post_thumbnail($post->ID) ) {
		echo '<meta name="twitter:image" content="' . $default_image . '"/>';
	} else {
		$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
		echo '<meta name="twitter:image" content="' . esc_attr($thumbnail_src[0]) . '"/>';
	}
}
add_action('wp_head', 'soapatrickseven_add_opengraph_infos', 1);
