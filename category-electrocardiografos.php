<?php get_header(); ?>
<div class="row menu_bar_categoria">
  <a href="#" class="bt-menu-categoria"><span class="icon-books "></span>Categorías | Equipo médico </a>
</div>
 <div class="row fondo-blanco">

  <div class="column large-2 sidebar" id="menu-equipos">
  <nav class="menu_categoria">
        <?php wp_nav_menu(
             array(

                  'theme_location' => 'equipos-menu',
                  'container' => false,
                  'container_id' => '',
                  'container_class' => '',
                  'menu_class' => '',
                  'echo' => true,
                  'items_wrap' => '<ul id="%1$s" class="%2$s menu vertical">%3$s</ul>',
                  'depth' => 0,
//                
              )
        ) 
        ?> 
  </nav>       
  </div>
  <div class="column large-10 medium-12 small-12"> 
  <?php 
        $args = array('cat' => 90, 'post_per_page' =>10);
        $category_posts = new WP_Query($args);

        if($category_posts->have_posts()) :
          while($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>
  <div class="row catalog-detalles-equipo">
    <div class="column large-3 medium-6 small-6 img-detail-parts">
          <?php the_post_thumbnail(); ?>
    </div>
     <div class="column large-3 medium-6 small-6 catalog-detail-parts" align="center">
      <article>
        <img src="<?php echo the_field('imagen_marca'); ?>" alt="">
        <p class="marca"><?php echo the_field('modelo'); ?></p>
          <p><?php the_title(); ?></p>

          <p><?php echo the_field('marca'); ?></p>
          
          <p><?php echo the_field('precio'); ?></p>
        </article>
    </div>
     <div class="column large-6 medium-12 small-12 catalog-detail-gral" align="center">
     <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="button">Más información</a> 
    </div>

  </div>
    
    <?php 
        endwhile;
        else :
      ?>
       <div class="column large-12" align="center">
                            <h4 class="single-info-title"><span class="icon-info single-info-span"></span> Lo sentimos, de momento no contamos con productos en esta categoría.</h4>
             </div>
      <?php 
        endif;
        wp_reset_postdata();
      ?>      

       
  </div>  
    
</div>
 <?php get_footer() ?>

