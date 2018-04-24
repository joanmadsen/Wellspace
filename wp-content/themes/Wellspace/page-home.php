<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col content">
            <h1 class="main-heading">Wellspace Utah</h1>
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
