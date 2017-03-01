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
    <header class="site-header">
      <div class="row main-header">
        <div class="column small-2">
          <?php theme_logo(); ?>
       </div>
       
       <div class="column small-10">
         <nav class="main-navigation">
            <?php wp_nav_menu(

                     array(

                      'theme_location' => 'top-menu',
                      'container' => false,
                      'container_id' => '',
                      'container_class' => '',
                      'menu_class' => 'top-nav nav-right',
                      'echo' => true,
                      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'depth' => 10,
                      'walker' => new fluent_themes_custom_walker_nav_menu
                      // 'link_before'    => '<span><i class="icon icon-home icon-price-tags">',
                      // 'link_after'     =>  '</span></i>',
                      )

            ) 
            ?>

        </nav>
          
       </div>
      </div>
    </header>

   

      