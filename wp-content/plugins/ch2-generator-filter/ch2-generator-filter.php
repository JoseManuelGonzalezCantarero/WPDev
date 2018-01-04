<?php
/*
Plugin Name: Chapter 2 - Generator Filter
Plugin URI:
Description:
Version: 1.0
Author: Manu
Author URI:
License: GPLv2
 */
add_filter( 'the_generator', 'ch2gf_generator_filter', 10, 2 );

function ch2gf_generator_filter( $html, $type ) {
	if ( $type == 'xhtml' ) {
		$html = preg_replace( '("WordPress.*?")',
			'"Manu"', $html );
	}

	return $html;
}
