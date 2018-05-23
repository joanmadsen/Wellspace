<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col content">
			<h1 class="main-heading" style="margin-bottom: 15px;">Recent Posts by Wellspace Utah</h1>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php if (have_posts()) : ?>
						<?php if (is_home() && !is_front_page()) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>
						<?php
						while (have_posts()) : the_post();
							get_template_part('template-parts/content', get_post_format());
						endwhile;
						the_posts_pagination([
								'prev_text'          => __('Previous page', 'twentysixteen'),
								'next_text'          => __('Next page', 'twentysixteen'),
								'before_page_number' => '<span class="meta-nav screen-reader-text">'.__('Page', 'twentysixteen').' </span>',
						]);
					else :
						get_template_part('template-parts/content', 'none');
					endif;
					?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

