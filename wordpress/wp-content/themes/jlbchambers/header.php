<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
	      <a class="navbar-brand" href="index.html"><img style="width:160px;margin-top:0px" src="assets/images/logo.png" class="img-fluid"> </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
	          </li>
	          <?php wp_list_pages( '&title_li=' ); ?>
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="firm.php" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FIRM</a>
	            <div class="dropdown-menu" aria-labelledby="dropdown01">
	              <a class="dropdown-item" href="team.php">TEAM</a>
	            </div>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="team.php">TEAM</a>
	          </li>
	           <li class="nav-item">
	            <a class="nav-link" href="practice.php">PRACTICE AREAS</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="contact.php">CONTACT US</a>
	          </li>
	           <li class="nav-item">
	            <a class="nav-link" href="services.php">BOOK US</a>
	          </li>
	        </ul>
	      </div>
    	</nav>
    	
	</div>
	<hr>
	<div class="wrapper" id="wrapper">