<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="header-front-page">
			<div class="home-hero">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/full-logo.svg">
			</div>
		</section>
		<section class="front-page-products"></section>

		<section class="inhabitent-journal">
			<h2>Inhabitent Jornal</h2>
			<!-- loop with get posts -->
			<?php
			$args = array('post_type' => 'post', 'posts_per_page' => 3);
			$journal_posts = get_posts($args); // returns an array of posts
			?>
			<ul class="journal-post-content">
				<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
					<li class="journal-post-item">
						<a class="post-thumbnail" href="<?php echo get_the_permalink(); ?>"><img src="<?php the_post_thumbnail('large'); ?></a>
						    			<h3><?php the_title(); ?></h3>
									<p> <?php echo get_the_date(); ?> | <?php echo get_comments_number(); ?> Comments </p>
									<a class=" read-more" href="<?php echo get_the_permalink(); ?> "> Read Entry</a>
					</li>
				<?php endforeach;
			wp_reset_postdata(); ?>
			</ul>
		</section>

		<section class="latest-adventures">
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>