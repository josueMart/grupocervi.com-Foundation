<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  
  </head>
  <body>
      <div class="row">
        <div class="column small-2">
          Logo
       </div>
       <div class="column small-10">
          <ul class="menu align-right">
            <li><?php wp_nav_menu( array('theme_location' => top-menu)) ?></li>
           
          </ul>
       </div>
      </div>

      