<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package rcpTheme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function rcptheme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'rcptheme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function rcptheme_jetpack_setup
add_action( 'after_setup_theme', 'rcptheme_jetpack_setup' );

function rcptheme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function rcptheme_infinite_scroll_render