<?php get_header(); ?>
<div class="row" align="center">
	<h4 class="single-info-title"><span class="icon-info single-info-span"></span>  Información </h4>
</div>
<div class="row">
	 <?php       
      if(have_posts()) :
      while(have_posts()) :
    ?> 
         
          <?php 
            the_post();
          ?>
            <div class="column small-12  medium-6 large-3">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="column small-12  medium-6 large-9 single-content">
              <article>
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
            </article>
            <div class="row" align="center">
			<a class="button" >Pide más información</a>
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