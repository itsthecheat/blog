<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo('title') ?></title>
  <link rel="stylesheet" href="">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="grey" points="0,100 100,0 100,100"/>
  </svg>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">YDKL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <?php
      wp_nav_menu(
        array(
          'theme_location'  => 'primary-menu',
          'depth'           => 2,
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'bs-example-navbar-collapse-1',
          'menu_class'      => 'nav navbar-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker())
      );
      ?>

    <span><?php get_search_form(); ?></span>
  </nav>

  <div id="site-header">
    <h1><?php bloginfo('title') ?></h1>
  </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8"  id="site-content">


