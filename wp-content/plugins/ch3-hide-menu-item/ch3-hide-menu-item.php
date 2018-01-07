<?php
/*
Plugin Name: Chapter 3 - Hide Menu Item
Plugin URI:
Description:
Version: 1.0
Author: Manu
Author URI:
License: GPLv2
 */
define( 'ch3hmi', 1 );

if ( is_admin() ) {
	require plugin_dir_path( __FILE__ ) .
	        'ch3-hide-menu-item-admin-functions.php';
}

function ch3hmi_hide_menu_item() {
	remove_menu_page( 'edit-comments.php' );
	remove_submenu_page( 'options-general.php', 'options-permalink.php' );
}
