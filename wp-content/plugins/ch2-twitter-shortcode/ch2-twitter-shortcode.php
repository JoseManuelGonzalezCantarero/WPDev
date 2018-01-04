<?php
/*
Plugin Name: Chapter 2 - Twitter Shortcode
Plugin URI:
Description:
Version: 1.0
Author: Manu
Author URI:
License: GPLv2
 */
add_shortcode( 'tl', 'ch2ts_twitter_link_shortcode' );

function ch2ts_twitter_link_shortcode( $atts ) {
	$output = '<a href="https://twitter.com/ylefebvre">';
	$output .= 'Twitter Feed</a>';
	return $output;
}
