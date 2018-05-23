<?php get_header(); ?>
<?php
if (isset($_POST['email'])) {
	$to = 'lakdsflaskdj';
	$subject = 'some one says henlo';
	$body = $_POST['message'] . "\n" . $_POST['email'];

	wp_mail($to, $subject, $body);
}
?>
<div class="container">
	<div class="row">
		<div class="col content">
			<h1 class="main-heading">Contact Us</h1>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<?php
			while (have_posts()) {
				$test = 'hello';
				the_post();
				the_content();
			}
			?>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col">
			<div class="mapouter">
				<div class="gmap_canvas">
					<iframe width="1080" height="300" id="gmap_canvas"
									src="https://maps.google.com/maps?q=1516 s 1000 e Suite A, Salt Lake City UT 84105&t=&z=13&ie=UTF8&iwloc=&output=embed"
									frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div id="contact-container" class="col-md-6">
			<?php echo do_shortcode('[contact-form-7 id="40" title="Contact form 1"]'); ?>
		</div>
		<div class="col-md-6">
			<h6>Phone:</h6>
			<a href="tel:1234567890">1234567890</a>
			<br/>
			<br/>
			<h6>Email:</h6>
			<a href="mailto:testy@mcgee.com">testy@mcgee.com</a>
			<br/>
			<br/>
			<h6>Address:</h6>
			<address>
				1516 S 1000 E Suite A,<br/>
				Salt Lake City, UT 84105
			</address>
		</div>
	</div>
</div>
<?php get_footer(); ?>
