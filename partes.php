<?php 
// Template Name: Partes y Accesorios
 ?>
 <?php get_header(); ?>
 
        
<div class="row">
    <div class="column large-2 column-brand-title">

    <h4 class="brand-title">Marcas disponibles <span class="icon-sphere"></span></h4>
    </div>
    <div class="column large-10" align="center">

         <div class="menu">
            
            <?php wp_nav_menu(

                     array(

                      'theme_location' => 'partes-menu',
                      'container' => false,
                      'container_id' => '',
                      'container_class' => '',
                      'menu_class' => '',
                      'echo' => true,
                      'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
                      'depth' => 9,
                      'walker' => new fluent_themes_custom_walker_nav_menu
                   
                      )

            ) 
            ?>

         </div>

    </div>
    
</div>


<div class="row">
    <div class="column large-2 sidebar-marcas">
        
            <?php wp_nav_menu(

                             array(

                              'theme_location' => 'marcas-menu',
                              'container' => false,
                              'container_id' => '',
                              'container_class' => '',
                              'menu_class' => '',
                              'echo' => true,
                              'items_wrap' => '<ul id="%1$s" class="%2$s menu vertical menu-marcas">%3$s</ul>',
                              'depth' => 60,
                              'walker' => new fluent_themes_custom_walker_nav_menu
                           
                              )

                    ) 
                    ?>

    </div>  
            
    <div class="column large-10">
        <div class="row" id="partes-img" align="center">
            <figure>
                <img src="http://localhost/wp-content/uploads/2017/03/cervi_parts.jpg"  alt="" width="402">
            </figure>
        </div>
        <div class="row">
                <?php 
                $args = array('cat' => 10, 'post_per_page' =>10);
                $category_posts = new WP_Query($args);

                if($category_posts->have_posts()) :
                    while($category_posts->have_posts()) :
                        ?>
                    <?php 

                        $category_posts->the_post();
             ?>
             <div class="column large-3">
                 <figure class="img-detail-parts">
                    <?php the_post_thumbnail(); ?>
                 </figure>  
             </div>
             <div class="column large-9 detail-parts">
                <article>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button">Más información</a> 
                 </article>
             </div>
            
             <?php 
                endwhile;
                else :
            ?>
                <h4>No hay entradas</h4>
            <?php 
                endif;
                wp_reset_postdata();
            ?>          
        </div>
    </div>
    </div>

 <?php get_footer() ?>