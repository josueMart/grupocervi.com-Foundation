<?php 
// Template Name: Partes y Accesorios
 ?>
 <?php get_header(); ?>
 
		
<div class="row">
	<div class="column large-2 column-brand-title">

	<h4 class="brand-title">Marcas disponibles <span class="icon-sphere"></span></h4>
	</div>

	<!-- Menu de partes********************** -->
	<div class="column large-10" align="center">

		 <div class="menu">
		 	
		 		<?php
		 		$args = array(
					  'taxonomy' => 'PartsCategory',
					  'show_option_none' => __('No Menu Items.'),
					  'echo' => 1,
					  'depth' => 2,
					  'wrap_class' => 'product-categories',
					  'level_class' => 'pattern_garment_type',
					  'parent_title_format' => '<h5>%s</h5>',
					  'current_class' => 'selected'
					);
					custom_list_categories( $args );
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

				woocommerce_content();
 			?> 			
 		</div>
 	</div>
 	</div>

 <?php get_footer() ?>

