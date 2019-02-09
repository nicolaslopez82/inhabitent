<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( CFS()->get('hero_image') ) : ?>

		<div class="feature-image" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) 100% ), url(<?php echo CFS()->get('hero_image'); ?>)">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>

	<?php else: ?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="content-to-center">

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

	</div>
</article><!-- #post-## -->
