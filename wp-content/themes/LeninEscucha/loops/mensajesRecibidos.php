
<?php 

 

 

$temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=10&post_type=propuestas&category_name=mensajes'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

 

 

	 

	
  <!-- LOOP: Usual Post Template Stuff Here-->
  		<div class="mensajesBloqueA">

			<div class=tituloRespuestas>
				<h1><?php echo $value_nombre = (get_post_meta($post->ID, 'id_nombre', true)); ?> </h1> 
			</div>

			 

			<div class="descripcion">
					<div class="triangulo_mensaje_top"><img src="<?php echo get_template_directory_uri();?>/img/Pico-Azul.png"></div>
				   <?php echo $propuestasExtracto = propuestasExtracto ($post_id);  ?>

			</div>

		<div style="clear: both;"></div>	
		</div>
			





			<?php 
			$respuesta = get_post_meta($post->ID, 'id_descripcion_respuesta', true);
			if($respuesta  != '') {?>  
				


			<div class="RespuestaTema">

			<div class=tituloRespuestas>
				<h1><?php echo $value_nombre_respuesta = (get_post_meta($post->ID, 'id_nombre_respuesta', true)); ?> </h1> 
			</div>


					<div class="contenedor">
					<div class="triangulo_respuesta_top"><img src="<?php echo get_template_directory_uri();?>/img/Pico-Gris.png"></div>
					<div class="triangulo_mensaje"></div>
							<div class="respuesta">
							<?php echo $value_Desc_respuesta = (get_post_meta($post->ID, 'id_descripcion_respuesta', true)); ?>
							</div>
					</div>

			<div style="clear:both"></div>			
			</div>
			<div style="clear: both;"></div>	



			<?php } else{?>

			<div style="clear: both;"></div>	
				<?php }?>




<?php endwhile; ?>
 
  



	
	