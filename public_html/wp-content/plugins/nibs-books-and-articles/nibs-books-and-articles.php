<?php
/*
Plugin Name: Nibs Books and Articles
*/

include_once( 'core/admin-views.php' );
include_once( 'core/models.php' );
include_once( 'core/custom-fields.php' );

// Register data types
add_action( 'init', 'nibs_register_taxonomies' );
add_action( 'init', 'nibs_register_post_types' );

// Register menus
add_action( 'admin_menu', 'nibs_register_menu' );

?>