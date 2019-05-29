<?php

  require 'inc/enqueue-assets.php';
  require 'inc/customizer.php';

  /**
   * Navigation Menu
   */
  function agency_register_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu' ) );
  }
  add_action( 'after_setup_theme', 'agency_register_menu' );