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
add_action( 'admin_menu', 'ch3hmi_hide_menu_item' );

function ch3hmi_hide_menu_item() {
	remove_menu_page('edit-comments.php');
	remove_submenu_page( 'options-general.php', 'options-permalink.php' );
}
