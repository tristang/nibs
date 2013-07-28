<?php

function nibs_register_menu() {
  add_menu_page(
        'NIBS', // Page title
        'NIBS', // Menu item title
        'manage_options', // Permissions
        'nibs-admin-menu', // Menu item slug
        null
  );

  add_submenu_page(
      'nibs-admin-menu',
      'Book Authors',
      'Book Authors',
      'manage_options',
      'edit-tags.php?taxonomy=nibs-book-author'
  );

  add_submenu_page(
      'nibs-admin-menu',
      'Book Publishers',
      'Book Publishers',
      'manage_options',
      'edit-tags.php?taxonomy=nibs-book-publisher'
  );
}

?>