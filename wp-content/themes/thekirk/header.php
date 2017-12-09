<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1">
  <title>The Kirk | <?php the_title( ) ?></title>
  <link href='//fonts.googleapis.com/css?family=Oswald:400,300,600' rel='stylesheet' type='text/css'>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/screen.min.css">
  <?php wp_head() ?>
</head>
<body>

<div class="section header">
  <header id="header" class="header header--fixed hide-from-print" role="banner">
      <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="pull-left brand-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/thekirk_logo.png" alt=""></a>
        <?php wp_nav_menu( 
          array( 'theme_location' => 'main-menu',
                'container' => 'nav',
                'menu' => 'top',
                'menu_class' => 'pull-right',
                'sort_column' => 'menu_order, post_title' )
         ); ?>
        
        <!--<ul class="pull-right horizontal">
          <li><a href="#visit">Visit</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#worship">Worship</a></li>
          <li
            data-anchor-target="#community"
            data--200-center-bottom="opacity: 0.2;"
            data--200-center-top="opacity: 1;"
            data-200-center-bottom="opacity: 1;"
            data-200-center-top="opacity: 0.2;"
            ><a href="#community">Community</a></li>
          <li><a href="#loving-serving">Loving/Serving</a></li>
          <li><a href="#peace-park">Peace Park</a></li>
        </ul>-->
  </header>
</div>