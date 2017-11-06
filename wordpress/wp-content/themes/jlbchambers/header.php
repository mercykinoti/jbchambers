<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,900,300">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<?php wp_head();?>
</head>
<body>
<hr>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
	      <a class="navbar-brand" href="index.html"><img style="width:160px;margin-top:0px" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid"><p style="font-size: 13px; color: #0c9b87">We make the best for you</p></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      
	      <?php
			wp_nav_menu( array(
		    'theme_location'	=> 'primary',
		    'depth'				=> 2,
			'container'			=> 'div',
			'container_class'	=> 'collapse navbar-collapse',
			'container_id'		=> 'bs-example-navbar-collapse-1',
			'menu_class'		=> 'navbar-nav mr-auto',
		    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
		    'walker'			=> new WP_Bootstrap_Navwalker())
			);
			?>
		
    	</nav>
    	
	</div>
	<hr>
	<div class="wrapper" id="wrapper">