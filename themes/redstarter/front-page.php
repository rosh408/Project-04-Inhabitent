<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="home-hero">
			<img class="home-hero-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logos/full-logo.svg' ?>">
		</div>

		<!-- Product Terms and Icons-->
		<section class="front-page-products">
			<h2>Shop Stuff</h2>
			<?php
			$terms = get_terms(
				array(
					'taxonomy' => 'product-type',
					'hide_empty' => 0
				)
			);
			?>
			<ul class="product-terms">
				<?php
				foreach ($terms as $term) :
					?>
					<li class="product-term">
						<img src="<?php echo get_template_directory_uri() .
										'/assets/images/product-type-icons/' .
										$term->slug . '.svg'
									?>" />
						<p><?php echo $term->description; ?></p>
						<p>
							<a href="<?php echo get_term_link($term); ?>">
								<?php echo $term->name; ?> Stuff
							</a>
						</p>
					</li>
				<?php
			endforeach;
			?>
			</ul> <!-- end of .product-terms-->
		</section>

		<!-- Journal Section -->
		<section class="inhabitent-journal">
			<h2>Inhabitent Jornal</h2>
			<!-- loop with get posts -->
			<?php
			$args = array('post_type' => 'post', 'posts_per_page' => 3);
			$journal_posts = get_posts($args); // returns an array of posts
			?>
			<div class="journal-container">
				<ul class="journal-post-content">
					<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
						<li class="journal-post-item">
							<a class="post-thumbnail" href="<?php echo get_the_permalink(); ?>">
								<img src="<?php the_post_thumbnail('large'); ?>
						    	</a>
						    <div class=" journal-post-text">
								<p class="date-comment"> <?php echo get_the_date(); ?> | <?php echo get_comments_number(); ?> Comments </p>
								<h3><?php the_title(); ?></h3>
								<a class=" read-more" href="<?php echo get_the_permalink(); ?> "> Read Entry</a>
							</div>
						</li>
			<?php endforeach;
		wp_reset_postdata(); ?>
			</ul>
</div>
</section>

<section class="latest-adventures">
</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>