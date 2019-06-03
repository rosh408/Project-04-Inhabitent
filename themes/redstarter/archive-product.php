<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="container">
            <?php if (have_posts()) : ?>
                <header class="page-header">
                    <h2>Shop Stuff</h2>
                    <?php
                    $terms = get_terms(
                        array(
                            'taxonomy' => 'product-type',
                            'hide_empty' => 0,
                        )
                    );
                    ?>
                    <ul class="product-terms">
                        <?php
                        foreach ($terms as $term) :
                            ?>
                            <li class="product-term">
                                <p class="term-stuff">
                                    <a href="<?php echo get_term_link($term); ?>">
                                        <?php echo $term->name; ?>
                                    </a>
                                </p>
                            </li>
                        <?php
                    endforeach;
                    ?>
                    </ul> <!-- end of .product-terms-->
                </header><!-- .page-header -->

                <?php /* Start the Loop */ ?>
                <div class="product-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                <?php endif; ?>
                                <div class="product-info">
                                    <div class="product-title"><?php the_title(); ?>&nbsp;</div>
                                    <div class="product-price">&nbsp;<?php echo "$", CFS()->get('product_price'); ?></div>
                                </div>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->

                    <?php endwhile; ?>
                    <?php the_posts_navigation(); ?>
                </div><!-- .product-grid -->

            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>