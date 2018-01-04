<?php
/*
Plugin Name: Chapter 2 - Email Page Link
Plugin URI:
Description:
Version: 1.0
Author: Manu
Author URI:
License: GPLv2
 */
add_filter( 'the_content', 'ch2epl_email_page_filter' );

function ch2epl_email_page_filter( $the_content ) {
	// build url to mail message icon downloaded from iconoarchive.com
	$mail_icon_url = plugins_url( 'mailicon.png', __FILE__ );

	// Set initial value of $new_content variable to previous content
	$new_content = $the_content;

	// Append image with mailto link after content, including the item title and
	// permanent URL
	$new_content .= '<div class="email_link">';
	$new_content .= '<a href="mailto:someone@somewhere.com?';
	$new_content .= 'subject=Check out this interesting article ';
	$new_content .= 'entitled ' . get_the_title();
	$new_content .= '&body=Hi!%0A%0AI thought you would enjoy ';
	$new_content .= 'this article entitled ';
	$new_content .= get_the_title() . '.%0A%0A' . get_permalink();
	$new_content .= '%0A%0AEnjoy!">';

	if ( ! empty( $mail_icon_url ) ) {
		$new_content .= '<img alt="Email icon"';
		$new_content .= ' src="';
		$new_content .= $mail_icon_url . '" /></a>';
	} else {
		$new_content .= 'Email link to this article';
	}
	$new_content .= '</div>';

	// Return filtered content for display on the site
	return $new_content;
}
