<?php 
//Template Name: Contacto
 ?>

 <?php get_header(); ?>
 	<div class="row">
 		imagen
 	</div>
 	<div class="row">
 	
 		<h2> Con mucho gusto atenderemos tus dudas, solicitiudes de información y/o cotizaciones.</h2>
 	</div>
 	<div class="row">
 		<form action="enviar.php" method="post"> 			
 				<div class="column medium-6">
 					<input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
 					<input type="email" name="email" placeholder="Ingresa tu email" required>
 					<input type="tel" name="telefono" placeholder="Ingresa tu telefono" required>
 					<input type="text" name="asunto" placeholder="Ingresa el asunto" required>
 					<label>
 						Detalle del asunto.
 						<textarea name="mensaje" placeholder="None" required></textarea>
 					</label>
 					<input type="submit" class="button expanded"> Enviar </button>
 					
 				</div>
 				<div class="column medium-6"> Imagen</div>
 			
 			
 		</form>
 	</div>

 <?php get_footer(); ?>