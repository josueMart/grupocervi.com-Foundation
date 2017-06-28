<?php get_header(); ?>
<div class="container">
  
<!-- FILA SLIDER-->

  <div class="row slide">

  </div>
  <!-- FIN FILA SLIDER-->
    
<!-- FILA INTERMEDIA-->
      <div class="row promo-row">

    <!-- the loop -->
    <?php 
      $args = array('cat' => 84);
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
              <a href="<?php the_permalink(); ?>" class="button">Más información</a>
            </article>
            </div>
            
          </div>
          <?php 
           endwhile;
            else :
          ?>
            <h4>No hay entradasi</h4>
        <?php 
         endif;
        wp_reset_postdata();
        ?>

    <!-- fin the loop -->      
  </div>
  <!-- FILA INTERMEDIA-->

   <div class="row acerca-row" align="center">
   <h4>Acerca de Grupo Cervi</h4>
   <p>Somos un corporativo ubicado en la ciudad de Aguascalientes Ags. México, dedicado a la Importación, venta, renta y servicio de equipos médicos, así como a la venta de sus partes, consumibles y refacciones. Contamos con mas de 15 años de experiencia en el equipamiento de hospitales a nivel nacional. <a href="#">Conoce nuestro catálogo de productos.</a></p>

   </div>
    <!-- BARRA DE OFERTAS -->
      
    <div class="row promotions-row">
   <!-- ARTICULOS -->

      <?php 
      $args = array('cat' => 10);
      $category_posts = new WP_Query($args);
      if($category_posts->have_posts()) :
      while($category_posts->have_posts()) :
    ?> 

      <div class="column large-3 medium-4 small-12 column-promo" align="center">
      <?php 
            $category_posts->the_post();
          ?>
         <div class="row img-promo" >
        <?php the_post_thumbnail(); ?>
       </div>
       <div class="row brand-detail">
          <div class="column large-6 " align="center">
               <div class="row fam-promo">
                 <p><?php the_title(); ?></p>
               </div>
               <div class="row marca-promo">
                  <p><?php echo the_field("marca"); ?></p>
               </div>
               <div class="row modelo-promo">
                 <p><?php echo the_field("modelo"); ?></p>
               </div>
       
           </div>
           <div class="column large-6 logo-marca" align="center">
              <img src=" <?php echo the_field("imagen_marca"); ?>" alt=""> 
          </div>


       </div>
        <div class="row precio-promo">
         <p><?php echo the_field("precio") ?></p>
       </div>
        <div class="row extract-promo">
         <p><?php the_excerpt(); ?></p>
       </div>
       <div class="row terminos-promo">
         <p>
           *Precios sujetos a cambio sin previo aviso. <br>
           *Precio Neto <?php echo the_field("moneda") ?> 
         </p>
       </div>
       <div class="row btn-promo" align="center">
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
  <!-- FIN BARRA DE OFERTAS --> 
</div>
<?php get_footer(); ?>
    
