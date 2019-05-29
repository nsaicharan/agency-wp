<?php

  function agency_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'hero-section', array(
      'title' => __( 'Hero Section', 'agency' )
    ) );

    $wp_customize->add_setting( 'hero-text-1', array(
      'default' => 'Welcome To Our Studio!'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero-text-1-controller', array(
      'label' => __('Text 1', 'agency' ),
      'section' => 'hero-section',
      'settings' => 'hero-text-1'
    ) ) );

    $wp_customize->add_setting( 'hero-text-2', array(
      'default' => __( "It's Nice To Meet You", 'agency' )
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero-text-2-controller', array(
      'label' => __( 'Text 2', 'agency' ),
      'section' => 'hero-section',
      'settings' => 'hero-text-2'
    ) ) );

    $wp_customize->add_setting( 'hero-btn-text', array(
      'default' => __( 'Tell Me More', 'agency' )
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero-btn-text-controller', array(
      'label' => __( 'Button Text', 'agency' ),
      'section' => 'hero-section',
      'settings' => 'hero-btn-text'
    ) ) );

    $wp_customize->add_setting( 'hero-bg' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero-bg-controller', array(
      'label' => __( 'Background Image', 'agency' ),
      'section' => 'hero-section',
      'settings' => 'hero-bg'
    ) ) );
  }
  
  add_action( 'customize_register', 'agency_customize_register' );