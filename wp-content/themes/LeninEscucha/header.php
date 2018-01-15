<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40078672-16', 'auto');
  ga('send', 'pageview');

</script>


		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=490227714445389";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<!-- wrapper -->
		 

			 <div class="header">

			 		 <div class="logo">
			 		 	<a href="<?php echo site_url();?>/home">
			 		 	<img src="<?php echo get_template_directory_uri(); ?>/img/home/logo.png">
			 		 	</a>
			 		 </div>


			 		 <div class="menu">
			 		 		<a href="<?php echo site_url();?>/escribeme/"><span>¡ESCRÍBEME!    </span> </a>
			 		 		<a href="<?php echo site_url();?>/mensajes-recibidos/"><span>MENSAJES RECIBIDOS</span></a>

			 		 </div>

			 
			 		



			 	<div style="clear: both"></div>

			 </div><!-- Header -->

			




