<?php /* Template Name: One Column */ ?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col content">
			<?php
			while (have_posts()) {
				the_post();
				the_content();
			}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
