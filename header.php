<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo( 'title' ) ?></title>

  <?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class() ?>>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php 
          wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container' => 'ul',
            'menu_class' => 'navbar-nav text-uppercase ml-auto'
          ) ); 
        ?>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead" style="background-image: url('<?= get_theme_mod( 'hero-bg' ) ?>')">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?= get_theme_mod( 'hero-text-1', 'Welcome To Our Studio!' ); ?></div>
        <div class="intro-heading text-uppercase"><?= get_theme_mod( 'hero-text-2', "It's Nice To Meet You" ); ?></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><?= get_theme_mod( 'hero-btn-text', 'Tell Me More' ); ?></a>
      </div>
    </div>
  </header>
