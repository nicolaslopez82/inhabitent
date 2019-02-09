<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
	<div class="entry">
		<div class="entry-picture">
			<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'small' ); ?>
			<?php endif; ?>
			</a>
		</div>
		<div class="entry-meta">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
			<span><?php echo CFS()->get('price'); ?></span>
		</div><!-- .entry-meta -->
	</div><!-- .entry-header -->

</article><!-- #post-## -->
