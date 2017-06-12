<?php get_header(); ?>
 <div class="row">
 	<div class="column large-2" id="menu-cerviparts">
        <?php wp_nav_menu(
             array(

                  'theme_location' => 'partes-menu',
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
 	</div>
 	<div class="column large-10 entry-categories">
 		<div class="row">
				<?php 
 				$args = array('cat' => 7, 'post_per_page' =>10);
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
 			 <div class="column large-12" align="center">
                            <h4 class="single-info-title"><span class="icon-info single-info-span"></span> Lo sentimos, de momento no contamos con productos en esta categoría.</h4>
                        </div>
 			<?php 
 				endif;
 				wp_reset_postdata();
 			?> 			
 		</div>
 	</div>
</div>
<div class="row" id="partes-img" align="center">
    <figure>
        <img src="http://localhost/wp-content/uploads/2017/03/cervi_parts.jpg"  alt="" width="402">
    </figure>
</div>

 <?php get_footer() ?>