<?php get_header(); ?>
<div class="container">
  
<!-- FILA SLIDER-->

  <div class="row">
  <?php wd_slider(2); ?>
  </div>
  <!-- FIN FILA SLIDER-->
    
<!-- FILA INTERMEDIA-->
      <div class="row promo-row">

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
              <a href="<?php the_permalink(); ?>" class="button">Leer más.</a>
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
  <!-- FILA INTERMEDIA-->

   <div class="row acerca-row" align="center">
   <h4 class="title-index">Acerca de Grupo Cervi</h4>
   <p class="acerca-index">Somos un corporativo ubicado en la ciudad de Aguascalientes Ags. México, dedicado a la Importación, venta, renta y servicio de equipos médicos, así como a la venta de sus partes, consumibles y refacciones. Contamos con mas de 15 años de experiencia en el equipamiento de hospitales a nivel nacional. <a href="#">Conoce nuestro catálogo de productos.</a></p>

   </div>
    <!-- BARRA DE OFERTAS -->
    <div class="row promotions-row">
    <!-- the loop -->
    <?php 
      $args = array('cat' => 10);
      $category_posts = new WP_Query($args);
      if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
    ?> 
         <div class="column small-12  medium-3 large-3 promotions-column" align="center">
          <?php 
            $category_posts->the_post();
          ?>
            <div class="row">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="row"><article>              
              <h4 class="promotion-cost"><?php the_title(); ?></h4>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="button" >Mas información</a>
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
  <div class="column row btn-expand" align="center">
    <a class="button expanded">Catálogo de productos</a>  
  </div>
   
</div>
<?php get_footer(); ?>
    
