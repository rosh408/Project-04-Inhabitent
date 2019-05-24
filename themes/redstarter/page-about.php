<?php

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php add_filter(‘the_title’, function ($title) {
			return “”;
		}); ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/content', 'page'); ?>
			<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>