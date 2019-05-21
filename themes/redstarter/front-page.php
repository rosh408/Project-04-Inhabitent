<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-hero"></section>
			<section class="front-page-products"></section>
			<section class="inhabitent-journal"></section>
			<section class="latest-adventures"></section>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
