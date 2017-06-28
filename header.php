<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
<!--   <script
  src="https://code.jquery.com/jquery-migrate-3.0.0.js"
  integrity="sha256-lsVOB+3Yhm6He5MkTO3Bw/Xw4NXK7wYYTi1Y+M/2PrM="
  crossorigin="anonymous"></script> -->

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>



    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php bloginfo(title); ?></title>
    <?php wp_head(); ?>

 <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" /> -->
 


  </head>
  <body>
    <header class="site-header">
    <div class="row menu_bar">
        <a href="#" class="bt-menu"><span class="icon-menu "></span>Menu | Grupo Cervi </a>
    </div>
     
      <div class="row main-header">
        <div class="column large-2 medium-3 small-12 logo-desktop">
          <img src="http://localhost/wp-content/uploads/2017/06/grupo_cervi.jpg" alt="">
       </div>
       <div class="column large-10  medium-9 small-12">
         <nav class="menu_gral">
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
                      )
            ) 
            ?>
        </nav>         
       </div>
      </div>
       
    </header>


   

      