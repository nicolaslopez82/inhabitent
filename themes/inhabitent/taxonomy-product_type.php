<?php
/**
 * The template type taxonomy.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

            <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

            <header class = "entry-header taxonomy-heading">
                <h1><?php echo $term->name; ?></h1>
                <p><?php echo $term->description; ?></p>
            </header>

            <session class="products-list">

                <?php
                    $args = array(
                        'post_type' => 'Products',
                        'posts_per_page' => -1,
                        'orderby'=> 'title',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array (
                                'taxonomy' => 'product_type',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            )
                        ),
                    );
                    $products = new WP_Query( $args );
                ?>

                <?php if ( have_posts() ) : ?>

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                            get_template_part( 'template-parts/content', 'product-small' );
                        ?>

                    <?php endwhile; ?>

                <?php else : ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>

            </session>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
