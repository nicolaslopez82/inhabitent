<?php
/**
 * The Main HomePage
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<session class="page-hero">
    <h2 class="page-title"><span class="screen-reader-text">Inhabitent</span></h2>
</session>

<div class="content-to-center">

    <session class="page-content shop-stuff">
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

                <h3 class="screen-reader-text"> <?php echo $product_type->name; ?> </h3>

                <img src= <?php echo esc_url( get_template_directory_uri() ) . "/build/img/product-type-icons/" . $product_type->slug . ".svg"; ?> />

                <p> <?php echo $product_type->description; ?> </p>
                <p> <a href=" <?php echo get_term_link( $product_type ); ?> " class="btn"><?php echo $product_type->name . " stuff"; ?></a> </p>

            </li>
        <?php endforeach; ?>
        </ul>

        <?php endif; ?>
    </session>

    <session class="page-content journal">
        <h2>Inhabitent Journal</h2>

        <?php
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC'
            );
            $blog_posts = get_posts( $query_args ); // returns an array of posts
        ?>

        <?php if ( !empty( $blog_posts ) ) : ?>
        <ul class="journal">

        <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
            <li>
                <div class="picture"><?php the_post_thumbnail( 'medium_large' ); ?></div>
                <div class="info"><?php nicolaslopez82_inhabitent_posted_on(); ?> / <?php nicolaslopez82_inhabitent_comment_count(); ?></div>
                <h3 class="title"><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h3>
                <a href="<?php the_permalink(); ?>" class="btn">Read entry</a>
            </li>
        <?php endforeach; wp_reset_postdata(); ?>

        </ul>
        <?php endif; ?>
    </session>

    <session class="page-content adventures">
        <h2>Latest Adventures</h2>

        <?php
            $query_args = array(
                'post_type' => 'adventures',
                'posts_per_page' => 4,
                'order' => 'ASC'
            );
            $adventures_posts = get_posts( $query_args ); // returns an array of posts
        ?>

        <?php if ( !empty( $adventures_posts ) ) : ?>
        <ul class="adventures">

        <?php foreach ( $adventures_posts as $post ) : setup_postdata( $post ); ?>
            <li>
                <div class="picture"><?php the_post_thumbnail( 'medium_large' ); ?></div>
                <h3 class="title"><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h3>
            </li>
        <?php endforeach; wp_reset_postdata(); ?>

        </ul>
        <?php endif; ?>
    </session>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
