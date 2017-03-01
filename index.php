<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php echo do_shortcode("[R-slider id='2']"); ?>
  </div>
    <div class="row">

    <!-- the loop -->
    <?php 
      $args = array('cat' => 9);
      $category_posts = new WP_Query($args);
      if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
    ?> 
         <div class="column small-12  medium-4 large-4" align="center">
          <?php 
            $category_posts->the_post();
          ?>
            <div class="row">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="row">
              <article>
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
            </article>
            </div>
            
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

    <!-- fin the loop -->      
  </div>
<!-- BARRA DE OFERTAS -->
    <div class="row" align="center"><h4>Promociones</h4></div>
    <div class="row">
    <!-- the loop -->
    <?php 
      $args = array('cat' => 10);
      $category_posts = new WP_Query($args);
      if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
    ?> 
         <div class="column small-12  medium-3 large-3" align="center">
          <?php 
            $category_posts->the_post();
          ?>
            <div class="row">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="row"><article>              
              <h4><?php the_title(); ?></h4>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>">Mas información</a>
            </article></div>
            
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
    <!-- fin the loop -->      
  </div>
  <!-- FIN BARRA DE OFERTAS -->
   
</div>
<?php get_footer(); ?>
    
