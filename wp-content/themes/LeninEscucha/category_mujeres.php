
<?php /* Template Name: cat_mujeres */  ?>


	 <div class="main">

	 	<div class="header">
	 		<?php get_header(); ?>
	 	</div>



		<!-- section -->
		 <div class="propuestasRecibidas">


			<h1><?php _e( 'Propuestas para tema Mujeres', 'html5blank' ); ?></h1>

			<?php get_template_part('loops/mujeres'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
		<!-- /section -->
	</div>


	

	<div style="clear: both; height: 250px;"></div>
	<?php get_template_part("contenidos/footer_center"); ?>

	<div class="footer">
		<?php get_footer(); ?>
	</div>
	