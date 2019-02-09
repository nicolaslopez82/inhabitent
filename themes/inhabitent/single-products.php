<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div class="content-to-center">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single-product' ); ?>

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>

<?php get_footer(); ?>
