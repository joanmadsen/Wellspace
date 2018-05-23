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
		<div class="container">
			<div class="row">
				<div class="col content">
					Lorem ipsum dolor amet mlkshk snackwave ugh, kombucha vexillologist hexagon messenger bag kogi PBR&B lyft
					chambray pop-up. Tacos PBR&B brunch glossier, trust fund readymade tofu ugh cred plaid whatever etsy vaporware
					poke. Forage edison bulb single-origin coffee, plaid pug beard heirloom VHS direct trade disrupt
					intelligentsia. Mustache truffaut wayfarers literally forage. Listicle cloud bread jean shorts photo booth
					selvage kickstarter slow-carb flannel ethical woke snackwave la croix cardigan.
					Humblebrag chillwave hoodie, chia master cleanse iceland shoreditch. Gastropub keffiyeh readymade,
					williamsburg wayfarers venmo squid. Waistcoat ethical cloud bread swag affogato chambray, hashtag portland
					before they sold out cornhole. Normcore activated charcoal YOLO tattooed, truffaut next level enamel pin
					glossier stumptown freegan squid literally portland you probably haven't heard of them. Lyft fanny pack cray,
					everyday carry etsy synth asymmetrical pop-up migas.
					Mustache tattooed lomo asymmetrical gochujang, XOXO locavore pabst meggings health goth. Next level offal man
					braid iPhone echo park. Yr scenester DIY, aesthetic palo santo vegan blog health goth forage. Synth brunch
					sustainable cred unicorn. Yuccie ramps migas marfa organic kale chips bespoke shaman hot chicken. Stumptown
					raclette schlitz, health goth tousled unicorn swag. Synth blue bottle vape salvia, enamel pin master cleanse
					tilde farm-to-table.
					Vaporware you probably haven't heard of them chia, heirloom narwhal occupy neutra. Trust fund post-ironic
					affogato VHS palo santo. Actually artisan kale chips kickstarter twee unicorn. Activated charcoal scenester
					migas chia retro freegan authentic blog. Next level hammock craft beer gochujang hot chicken. Heirloom deep v
					skateboard humblebrag.
					Ennui farm-to-table shoreditch succulents pickled, put a bird on it keytar sustainable. Listicle hoodie marfa
					roof party mustache. Mixtape post-ironic glossier woke, tumeric hella pop-up pickled. Seitan narwhal 3 wolf
					moon, af forage cronut taiyaki gentrify tote bag vexillologist cloud bread kombucha craft beer. Skateboard
					unicorn aesthetic air plant meh, polaroid pickled echo park glossier 90's cred edison bulb butcher. Fashion
					axe cray yr, jean shorts woke coloring book raw denim lyft knausgaard live-edge roof party helvetica.
					Oh. You need a little dummy text for your mockup? How quaint.
					I bet you’re still using Bootstrap too…
				</div>
			</div>
		</div>
		<footer><div class="col-sm-3 derp"></div>
			<nav class="container">
				<a href="<?php echo get_permalink(get_page_by_title('privacy')); ?>">Privacy Policy</a>
			</nav>
		</footer>
	</body>
</html>