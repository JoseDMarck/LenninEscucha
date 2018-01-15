
<?php /* Template Name: cat_mensajes */  ?>


	 <div class="main">

	 	<div class="header">
	 		<?php get_header(); ?>
	 	</div>



		<!-- section -->
		 <div class="propuestasRecibidas">


			<h1><?php _e( 'Mensajes Recibidos', 'html5blank' ); ?></h1>

			<?php get_template_part('loops/mensajesRecibidos'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
		<!-- /section -->
	</div>


	


	<div style="clear: both; height: 250px;"></div>

	<div class="footer">
		<?php get_template_part('footerv2'); ?>
	</div>
	