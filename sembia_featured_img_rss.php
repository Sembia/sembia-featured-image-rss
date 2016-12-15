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
        $thumbnail_arr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
        $thumbnail = !empty($thumbnail_arr[0]) ? $thumbnail_arr[0] : '';
		echo("<image>{$thumbnail}</image>");
	endif;
}
