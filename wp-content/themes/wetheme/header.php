<?php 
$theme_opts = get_option('we_opts');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?php the_title(); ?></title>

    <?php
    wp_head(); ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <?php
        if($theme_opts['logo_type']==1): ?>
          <a class="navbar-brand" href="index.html"><?php bloginfo('name'); ?></a>
        <?php
        else: ?>
          <a class="navbar-brand" href="index.html"><img src="<?php echo $theme_opts['logo_img'] ?>"></a>
        <?php
        endif; ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <?php 
            wp_nav_menu(array(
                'theme_location'      => 'primary',
                'container'           => false,
                'menu_class'          => 'navbar-nav mr-auto'
                )
            );?>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul>
            <?php
            if(!empty($theme_opts['twitter'])): ?>
            <li><a href="https://twitter.com/<?php echo $theme_opts['twitter']; ?>"><i class="fab fa-twitter-square"></i></a></li>
            <?php
            endif; 
            if(!empty($theme_opts['facebook'])): ?>
              <li><a href="https://facebook.com/<?php echo $theme_opts['facebook']; ?>"><i class="fab fa-facebook-square"></i></a></li>
            <?php
            endif;
            if(!empty($theme_opts['youtube'])): ?>
              <li><a href="https://youtube.com/<?php echo $theme_opts['youtube']; ?>"><i class="fab fa-youtube-square"></i></a></li>
            <?php
            endif; ?>
          </ul>
        </div>
      </nav>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>