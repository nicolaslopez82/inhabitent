<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<aside class="thumbnail">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

	</aside>

	<session class="data">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="price">
			<span class="price"><?php echo CFS()->get('price'); ?></span>
		</div>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class="social-buttons">
			<a href="#" targer="_black" class="blank-btn"><i class="fab fa-facebook-f"></i>Like</a>
			<a href="#" targer="_black" class="blank-btn"><i class="fab fa-twitter"></i>Tweet</a>
			<a href="#" targer="_black" class="blank-btn"><i class="fab fa-pinterest"></i>Pin</a>
		</div>

	</session>
</article><!-- #post-## -->
