<?php
/*
Plugin Name: Chapter 3 - Multi-level menu
Plugin URI:
Description:
Version: 1.0
Author: Manu
Author URI:
License: GPLv2
 */
add_action( 'admin_menu', 'ch3mlm_admin_menu' );

function ch3mlm_admin_menu() {
	// Create top-level menu item
	add_menu_page( 'My Complex Plugin Configuration Page',
		'My Complex Plugin', 'manage_options', 'ch3mlm-main-menu',
		'ch3mlm_my_complex_main', plugins_url( 'myplugin.png', __FILE__ ) );

	// Create a sub-menu under the top-level menu
	add_submenu_page( 'ch3mlm-main-menu', 'My Complex Menu Sub-Config Page',
		'Sub-Config Page', 'manage_options', 'ch3mlm-sub-menu',
		'ch3mlm_my_complex_submenu' );

	global $submenu;
	$url = 'https://www.packtpub.com/books/info/packt/faq';
	$submenu['ch3mlm-main-menu'][] = [ 'FAQ', 'manage_options', $url ];
}
