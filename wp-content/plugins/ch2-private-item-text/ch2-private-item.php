<?php
/*
Plugin Name: Chapter 2 - Private Item Text
Plugin URI:
Description:
Version: 1.0
Author: Manu
Author URI:
License: GPLv2
 */
add_shortcode( 'private', 'ch2pit_private_shortcode' );

function ch2pit_private_shortcode( $atts, $content = null ) {
	if ( is_user_logged_in() ) {
		return '<div class="private">' . $content . '</div>';
	} else {
		$output = '<div class="register">';
		$output .= 'You need to become a member to access';
		$output .= 'this content.</div>';

		return $output;
	}

}
