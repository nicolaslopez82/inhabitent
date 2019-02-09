<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function nicolaslopez82_inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	return $classes;
}
add_filter( 'body_class', 'nicolaslopez82_inhabitent_body_classes' );


function nicolaslopez82_inhabitent_login_logo($url) {
	// return "$url/images/logos/inhabitent-logo-full.svg";
	echo '<style type="text/css">
	h1 a {background-image: url('.get_bloginfo('template_directory').'/build/img/logos/inhabitent-logo-full.svg) !important; }
</style>';
}
add_filter( 'login_head', 'nicolaslopez82_inhabitent_login_logo' );


function nicolaslopez82_inhabitent_login_url($url) {
	return "http://localhost:3000/inhabitent/";
}
add_filter( 'login_headerurl', 'nicolaslopez82_inhabitent_login_url' );
