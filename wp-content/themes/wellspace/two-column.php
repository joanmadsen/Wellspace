<?php /* Template Name: Two Column */ ?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8 content">
			<?php
			while (have_posts()) {
				the_post();
				the_content();
			}
			?>
		</div>
		<div class="col-sm-4 sidebar">
			<div class="profile">
				<h2>Testy McGee, Phd.</h2>
				<h3>Wellspace Utah</h3>
				<div class="photo"></div>
				<address>
					Wellspace Utah<br/>
					123 Test St.<br/>
					Salt Lake City, UT 84115
				</address>
				<nav class="contact">
					<a href="tel:1234567890">1234567890</a>
					<a href="mailto:testy@mcgee.com">testy@mcgee.com</a>
				</nav>
				<div class="psychology-today"></div>
			</div>
			<h2>Contact Us</h2>
			<div id="contact-container">
				<?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
