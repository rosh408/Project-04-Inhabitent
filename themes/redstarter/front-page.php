<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<div class="home-hero">
			<img alt="inhabitent banner logo" class="home-hero-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logos/full-logo.svg' ?>">
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
						<img alt="product type icons" src="<?php echo get_template_directory_uri() .
																'/assets/images/product-type-icons/' .
																$term->slug . '.svg'
															?>" />
						<p class="term-description"><?php echo $term->description; ?></p>
						<p class="term-stuff">
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
			<h2>Inhabitent Journal</h2>
			<?php
			$args = array('post_type' => 'post', 'posts_per_page' => 3);
			$journal_posts = get_posts($args);
			?>
			<div class="journal-container">
				<ul class="journal-post-content">
					<?php foreach ($journal_posts as $post) : setup_postdata($post); ?>
						<article class="journal-post-item">
							<a class="post-thumbnail" href="<?php echo get_the_permalink(); ?>">
								<img alt="inhabitent journal photo" src="<?php the_post_thumbnail('large'); ?>
						    														</a>
						    													<div class=" journal-post-text">
								<p class="date-comment"> <?php echo get_the_date(); ?> | <?php echo get_comments_number(); ?> Comments </p>
								<h3><?php the_title(); ?></h3>
								<a class=" read-more" href="<?php echo get_the_permalink(); ?> "> Read Entry</a>
				</div>
				</article>
			<?php endforeach;
		wp_reset_postdata(); ?>
			</ul>
</div>
</section>

<section class="latest-adventures">
	<h2 class="section-title">Latest Adventures</h2>
	<ul>
		<article class="article-box1">
			<div class="article-photo">
				<div class="article-info">
					<h2>
						Getting Back to Nature in a Canoe
					</h2>
					<button>Read More</button>
				</div>
			</div>
		</article>
		<article class="article-box2">
			<div class="article-photo">
				<div class="article-info">
					<h2>
						A Night with friends at the beach
					</h2>
					<button>Read More</button>
				</div>
			</div>
		</article>
		<article class="article-box3">
			<div class="article-photo">
				<div class="article-info">
					<h2>
						Stargazing at the night
					</h2>
					<button>Read More</button>
				</div>
			</div>
		</article>
		<article class="article-box4">
			<div class="article-photo">
				<div class="article-info">
					<h2>

						Taking in the View at big mountain
					</h2>
					<button>Read More</button>
				</div>
			</div>
		</article>
	</ul>
	<div class="more-adventures">
		<a href="#">More Adventures</a>
	</div>
</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>