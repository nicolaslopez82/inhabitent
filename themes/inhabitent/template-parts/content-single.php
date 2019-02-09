<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php nicolaslopez82_inhabitent_posted_on(); ?> / <?php nicolaslopez82_inhabitent_comment_count(); ?> / <?php nicolaslopez82_inhabitent_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<p><a href="<?php the_permalink(); ?>" class="read-more black-btn">Read more →</a></p>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php nicolaslopez82_inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
