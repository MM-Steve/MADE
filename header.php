<!doctype html>
<html <?php language_attributes(); ?> class="no-js">


	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>



			<!-- header -->
			<header class="header clear container-fluid" role="banner">
				
				<div class="row">
						<div class="col">
						
					
							<nav class="navbar navbar-expand-lg navbar-light bg-light">
								<a class="navbar-brand" href="#">
									<img src="<?php the_field('logo', 18); ?>" width="150px"  class="d-inline-block align-top" alt="">
								</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							  <span class="navbar-toggler-icon"></span>
							</button>
						  
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
							  <ul class="navbar-nav mr-auto">
								<li class="nav-item active">
								  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="#">Over Ons</a>
								</li>
								<li class="nav-item">
								  <a class="nav-link" href="#">Contact</a>
								</li>
							  </ul>
							  <form class="form-inline my-2 my-lg-0">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
							  </form>
							</div>
						</div>	
						</nav>
						
						</div>
				
					<div class="row">
						<div class="col">
							<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<h4><?php the_field('subtitel', 18); ?></h4>
							</div>
						</nav>
					</div>
						
						
						
				
			</header>
			<!-- /header -->
			
			<!--<div class="wrapper">-->
