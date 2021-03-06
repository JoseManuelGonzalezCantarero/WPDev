<?php
/*
Plugin Name: Chapter 2 - Twitter Embed
Plugin URI:
Description:
Version: 1.0
Author: Manu
Author URI:
License: GPLv2
 */
add_shortcode( 'twitterfeed', 'ch2te_twitter_embed_shortcode' );

function ch2te_twitter_embed_shortcode( $atts ) {
	extract( shortcode_atts( [ 'user_name' => 'ylefebvre' ], $atts ) );

	if ( ! empty( $user_name ) ) {
		$output = '<a class="twitter-timeline" href="';
		$output .= esc_url( 'https://twitter.com/' . $user_name );
		$output .= '">Tweets by ' . esc_html( $user_name );
		$output .= '</a><script async ';
		$output .= 'src="//platform.twitter.com/widgets.js"';
		$output .= ' charset="utf-8"></script>';
	} else {
		$output = '';
	}

	return $output;
}
