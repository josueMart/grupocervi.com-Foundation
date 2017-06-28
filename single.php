<?php get_header(); ?>
<div class="row fondo-blanco" align="center">
	<h4 class="single-info-title">
  <span class="icon-info single-info-span"></span>  Información </h4>
</div>
<div class="row single-row fondo-blanco">
	 <?php       
      if(have_posts()) :
      while(have_posts()) :
    ?> 
         
          <?php 
            the_post();
          ?>
            <div class="column small-12  medium-6 large-3" align="center">
              <?php the_post_thumbnail(); ?>

              <img src="<?php echo the_field('imagen_marca'); ?>" alt="" class="img-single-marca">
              <div class="galeria">
                 <p>Más Imágenes</p>
              <?php 
                   $gal= get_field("id_galeria");

                  if ( function_exists( 'envira_gallery' ) ) { envira_gallery( $gal ); }

              ?>
            
              </div>
            </div>
            <div class="column small-12  medium-6 large-9 single-content">
              <article>
              <h4 class="single-title"><?php the_title(); ?></h4>
              <p class="single-theContent"><?php the_content(); ?></p>
            </article>
            <div class="row" align="center">
			<a class="button" >Contáctanos</a>
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