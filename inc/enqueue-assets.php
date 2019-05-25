<?php 

  function agency_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'fa', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css' );
    wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
    wp_enqueue_style( 'kaushan-script', 'https://fonts.googleapis.com/css?family=Kaushan+Script' );
    wp_enqueue_style( 'droid-serif', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' );
    wp_enqueue_style( 'roboto-slab', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' );
    wp_enqueue_style( 'agency', get_template_directory_uri() . '/css/agency.min.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery3', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), 1, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), 1, true );
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), 1, true );
    wp_enqueue_script( 'validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), 1, true );
    wp_enqueue_script( 'contact-me', get_template_directory_uri() . '/js/contact_me.js', array(), 1, true );
    wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.min.js', array(), 1, true );
  }
  add_action('wp_enqueue_scripts', 'agency_scripts');