<!DOCTYPE html>

<html >
	<head>
    		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
		<title> <?php bloginfo('name')?> </title>
      <?php wp_head();?>  
	</head>
	<body >
		<div class="container-fluid" style="background-color: #ecf0f1;">
			<header class="page-header" >
				<div class="row">
					<h2 class="col-md-6" style="margin: auto;padding-bottom: 20px;"> <?php bloginfo('name')?>
           <small><?php bloginfo('description')?> </small>
				</h2>

          <nav class="col-md-4 nav-pills " id="main-nav" >
						<?php 
  							  wp_nav_menu( array(
  							    'menu'          =>  'main-nav',
  							    'menu_class'    =>  'navbar-nav list-inline nav-pills nav-justify',
                  	'items_wrap'      => '<ul id="%1$s" class="%2$s nav nav-pills ">%3$s</ul>',
                  
  							    ));
  							?>
					</nav>
					<div class="col-md-2">
						<button class="btn btn-lg" style="float: right;margin-right: 30px;">
						
				<?php wp_loginout("http://localhost/wordpress/wp-login/","Wyloguj"); ?>

						</button>
					</div>
				</div>
			</header></div>
    
    
    