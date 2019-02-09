<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

function nicolaslopez82_inhabitent_products_body_classes( $classes ) {
    $classes[] = 'products';
	return $classes;
}
add_filter( 'body_class', 'nicolaslopez82_inhabitent_products_body_classes' );


get_header(); ?>

	<div class="content-to-center">
		<!-- <header id="primary" class="content-area"> -->
			<main id="main" class="site-main" role="main">

				<header class="types">
					<h2>Shop Stuff</h2>

					<?php
						$query_args = array(
							'taxonomy' => 'product_type',
							'hide_empty' => false
						);
						$product_types = get_terms( $query_args );
					?>

					<?php if ( !empty( $product_types ) ) : ?>
					<ul class="shop-stuff">

        	<?php foreach ( $product_types as $product_type ): ?>
						<li class="<?php "product-type-".$product_type->slug ?>">
							<p> <a href=" <?php echo get_term_link( $product_type ); ?> " class="btn"><?php echo $product_type->name; ?></a> </p>
						</li>
					<?php endforeach; ?>

					</ul>
					<?php endif; ?>
				</header>

				<session class="products-list">
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
		<!--</div> #primary -->
	</div>

<?php get_footer(); ?>
