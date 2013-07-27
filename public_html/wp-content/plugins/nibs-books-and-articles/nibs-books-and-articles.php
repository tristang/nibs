<?php
/*
Plugin Name: Nibs Books and Articles
*/

include_once( 'core/admin-views.php' );
include_once( 'core/models.php' );

// Register data types
add_action( 'init', 'nibs_register_taxonomies' );
add_action( 'init', 'nibs_register_post_types' );

// Set up post type options
add_action( 'admin_init', 'nibs_register_post_types_admin' );

// Register menus
add_action( 'admin_menu', 'nibs_register_menu' );

?>