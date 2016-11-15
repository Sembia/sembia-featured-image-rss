<?php
/**
 * @package sembia_featured_image_rss
 * @version 1.1
 */
/*
Plugin Name: [Sembia] RSS Featured Image
Plugin URI: https://github.com/Sembia/wp-featured-image-rss
Description: This plugin adds a <image> field to the default RSS feed.
Author: Sembia Studio
Version: 1.1
Author URI: http://sembia.studio
*/

add_action('rss2_item', 'feat_img_rss_node');

function feat_img_rss_node() {
	global $post;
	if(has_post_thumbnail($post->ID)):
		$thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		echo("<image>{$thumbnail}</image>");
	endif;
}
