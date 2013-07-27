<?php

function nibs_register_taxonomies() {
    register_taxonomy(
      'nibs-book-author',
      null,
      array(
        'label' => __( 'Book Authors' ),
        'labels' => array(
            'name'              => _( 'Book Authors' ),
            'singular_name'     => _( 'Book Author' ),
            'search_items'      => __( 'Search Products' ),
            'all_items'         => __( 'All Products' ),
            'parent_item'       => __( 'Parent Book Author' ),
            'parent_item_colon' => __( 'Parent Book Author:' ),
            'edit_item'         => __( 'Edit Book Author' ),
            'update_item'       => __( 'Update Book Author' ),
            'add_new_item'      => __( 'Add New Book Author' ),
            'new_item_name'     => __( 'New Book Author Name' ),
            'menu_name'         => __( 'Book Author' ),                
      ),
      'rewrite' => null,
      //'show_ui' => false,
      'hierarchical' => true,
    )
  );

  register_taxonomy(
      'nibs-book-publisher',
      null,
      array(
        'label' => __( 'Book Publishers' ),
        'labels' => array(
            'name'              => _( 'Book Publishers' ),
            'singular_name'     => _( 'Book Publisher' ),
            'search_items'      => __( 'Search Products' ),
            'all_items'         => __( 'All Products' ),
            'parent_item'       => __( 'Parent Book Publisher' ),
            'parent_item_colon' => __( 'Parent Book Publisher:' ),
            'edit_item'         => __( 'Edit Book Publisher' ),
            'update_item'       => __( 'Update Book Publisher' ),
            'add_new_item'      => __( 'Add New Book Publisher' ),
            'new_item_name'     => __( 'New Book Publisher Name' ),
            'menu_name'         => __( 'Book Publisher' ),                
      ),
      'rewrite' => null,
      //'show_ui' => false,
      'hierarchical' => true,
    )
  );
}

function nibs_register_post_types() {

  register_post_type( 'nibs-book',
    array(
        'labels' => array(
            'name' => 'Books',
            'singular_name' => 'Book',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Book',
            'edit' => 'Edit',
            'edit_item' => 'Edit Book',
            'new_item' => 'New Book',
            'view' => 'View',
            'view_item' => 'View Book',
            'search_items' => 'Search Book Authors',
            'not_found' => 'No Book Authors found',
            'not_found_in_trash' => 'No Book Authors found in Trash',
            'parent_item_colon' => 'Parent Book'
        ),

        'public' => true,
        'menu_position' => 15,
        'show_in_menu' => 'nibs-admin-menu',
        'supports' => array( 'title', 'editor', 'thumbnail', ),
        'taxonomies' => array(
            'nibs-book-author',
            'nibs-book-publisher' ),
        'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
        'has_archive' => false,
        'hierarchical' => false,
    )
  );
}

?>