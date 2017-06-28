<?php //Template Name: Promociones 
get_header();
?>

   <div class="row" align="center" id="promo-title">
       <h2>¡No te pierdas nuestras promociones!</h2>
   </div>
   <div class="row fondo-blanco">
<!--PROMOCIONES -->

      <?php 
      $args = array('cat' => 104);
      $category_posts = new WP_Query($args);
      if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
    ?> 

      <div class="column large-3 medium-4 small-12 column-promo">
      <?php 
            $category_posts->the_post();
          ?>
         <div class="row promociones-img-promo" >
        <?php the_post_thumbnail(); ?>
       </div>
       <div class="row promociones-fam-promo">
         <p><?php the_title(); ?></p>
       </div>
        <div class="row promociones-marca-promo">
         <p><?php echo the_field("marca"); ?></p>
       </div>
        <div class="row promociones-modelo-promo">
         <p><?php echo the_field("modelo"); ?></p>
       </div>
        <div class="row promociones-precio-promo">
         <p><?php echo the_field("precio") ?></p>
       </div>
        <div class="row promociones-extract-promo">
         <p><?php the_excerpt(); ?></p>
       </div>
       <div class="row promociones-terminos-promo">
         <p>
           *Precios sujetos a cambio sin previo aviso. <br>
           *Precio Neto <?php echo the_field("moneda") ?> 
         </p>
       </div>
       <div class="row promociones-btn-promo" align="center">
          <a href="<?php the_permalink(); ?>" class="button">Más Información</a>
         
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
   </div>   
<?php get_footer(); ?>


