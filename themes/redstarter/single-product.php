<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()) : ?>

			<?php if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="product-image">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('large'); ?>
						<?php endif; ?>
					</div><!-- .entry-header -->

					<div class="product-content">
						<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
						<p class="product-price"><?php echo "$", CFS()->get('product_price'); ?></p>
						<div class="product-descrip"><?php the_content(); ?></div>
						<div class="social-buttons">
							<button><i class="fab fa-facebook-f"></i>&nbsp Like</button>
							<button><i class="fab fa-twitter"></i>&nbsp Tweet</button>
							<button><i class="fab fa-pinterest"></i>&nbsp Pin</button>
						</div>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php red_starter_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part('template-parts/content', 'none'); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>