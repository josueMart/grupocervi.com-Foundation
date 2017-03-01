<?php 
// Template Name: Partes y Accesorios
 ?>
 <?php get_header(); ?>
<div class="row" align="center">
	<div class="button-group">
		<a class="button">Oximetría</a>
		<a class="button">ECG</a>
		<a class="button">EKG</a>
		<a class="button">PANI</a>
		<a class="button">Temperatura</a>
		<a class="button">Celdas</a>
		<a class="button">Inhaloterapia</a>
		<a class="button">Lámparas</a>
		<a class="button">Consumibles</a>
	</div>
</div>
<div class="row">
 	<div class="column large-3">Silder Bar:
 	</div>
 	<div class="column large-9">
 		<div class="row"> 
 			<?php 
 				$args = array('cat' => 8, 'post_per_page' =>5);
 				$category_posts = new WP_Query($args);

 				if($category_posts->have_posts()) :
 					while($category_posts->have_posts()) :
 						?>
 					<?php 

 						$category_posts->the_post();
 			 ?>
 			 <article>
 			 	<h4><?php the_title(); ?></h4>
 			 	<p><?php the_excerpt(); ?></p>
 			 	
 			 </article>
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

