<?php //Template Name: Renta de equipo ?>

<?php get_header(); ?>
<div class="row fondo-blanco">
    <div class="column large-6 small-6" >
        <figure>
        <img src="http://localhost/wp-content/uploads/2017/04/medical_rentals.jpg" alt="">
    </figure>
    </div>
    
</div>
<div class="row fondo-blanco">
   	<div class="column large-10 small-10 entry-categories">
 		<div class="row">
				<?php 
 				$args = array('cat' => 103, 'post_per_page' =>10);
 				$category_posts = new WP_Query($args);

 				if($category_posts->have_posts()) :
 					while($category_posts->have_posts()) :
 						?>
 					<?php 

 						$category_posts->the_post();
 			 ?>
 			 <div class="column large-3 small-6">
	 			 <figure class="img-detail-parts">
	 			 	<?php the_post_thumbnail(); ?>
	 			 </figure> 	
 			 </div>
 			 <div class="column large-9 small-6 detail-parts">
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
<?php get_footer(); ?>