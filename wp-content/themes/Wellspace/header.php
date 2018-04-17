<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<title>Wellspace Utah</title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
		<?php if (is_singular() && pings_open(get_queried_object())) : ?>
			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php endif; ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/fonts/font-awesome-4.7.0/css/font-awesome.min.css' ?>"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.min.css' ?>"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/main.css' ?>"/>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/theme.css' ?>"/>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<?php
			$items = [];
			if (has_nav_menu('primary')) {
				$items = wp_get_nav_menu_items('primary', [
						'menu_class' => 'primary-menu',
				]);
			}
			?>
			<?php if (is_array($items)) : ?>
				<nav id="site-navigation" class="nav-primary">
					<?php foreach ($items as $item) : ?>
						<?php if ($item->title == 'Privacy') continue; ?>
						<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
					<?php endforeach; ?>
				</nav>
			<?php endif; ?>
			<div class="container">
				<div class="row">
					<div class="col page-title">
						<a id="logo" href="<?php echo esc_url(home_url('/')); ?>">
							<h1>Wellspace</h1>
						</a>
						<h2>Comprehensive DBT & Therapy</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<nav class="contact">
							<a href="tel:1234567890">1234567890</a>
							<a href="mailto:testy@mcgee.com">testy@mcgee.com</a>
						</nav>
						<nav class="social">
							<a href="http://facebook.com" class="fa fa-facebook"></a>
							<a href="http://twitter.com" class="fa fa-twitter"></a>
							<a href="http://pinterest.com" class="fa fa-pinterest"></a>
						</nav>
					</div>
				</div>
			</div>
			<div class="hero"></div>
			<div class="cta">
				<span>Get in Touch</span>
				<button class="btn btn-primary">Contact</button>
			</div>
		</header>
