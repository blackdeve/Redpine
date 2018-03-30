<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_title(); ?> | <?php echo get_bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/font-awesome/css/font-awesome.css">
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/material-design-icons/material-icons.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/fonts/icomoon/icomoon.css">
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/animate/animate.css">
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/owl-carousel/owl.carousel.css">
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/owl-carousel/owl.theme.css">
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendors/fancybox/jquery.fancybox.css">
	<link media="all" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/vendors/revolution/css/settings.css">
</head>
<body class="default-page">
	<!-- main wrapper -->
	<div id="wrapper">
		<div class="page-wrapper">
			<!-- main header -->
			<header id="header">
				<div class="container-fluid">
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo get_home_url(); ?>">
							<img class="normal" src="<?php bloginfo('template_directory'); ?>/img/logos/logo.png" alt="<?php echo get_bloginfo('name'); ?>">
							<img class="gray-logo" src="<?php bloginfo('template_directory'); ?>/img/logos/logo.png" alt="<?php echo get_bloginfo('name'); ?>">
						</a>
					</div>
					<!-- main navigation -->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle nav-opener" data-toggle="collapse" data-target="#nav">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- main menu items and drop for mobile -->
						<div class="collapse navbar-collapse" id="nav">
							<!-- main navbar -->
							<ul class="nav navbar-nav">
								<li><a href="/dev/">Home</a></li>
								<!-- <li><a href="#">About Us</a></li> -->
								<!-- <li><a href="#">The Lodge</a></li> -->
								<li><a href="rates-booking/">Rates &amp; Booking</a></li>
								<li><a href="trophy-gallery/">Trophy Gallery</a></li>
								<li><a href="contact/">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</header>