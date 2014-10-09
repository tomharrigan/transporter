<?php
/**
 * Infinite Scroll Theme Assets
 *
 * Register support for Twenty Thirteen.
 */

/**
 * Add theme support for infinite scroll
 */
function twentythirteen_infinite_transporter_init() {
	add_theme_support( 'infinite-transporter', array(
		'render'    => 'infinite_transporter_render',
		'container' => 'content',
		'footer'    => 'page'
	) );
}
add_action( 'after_setup_theme', 'twentythirteen_infinite_transporter_init' );

function infinite_transporter_render() {
	global $wp_query;
	if( is_single() ) {
		while ( have_posts() ) { the_post();

			get_template_part( 'content', get_post_format() );

			comments_template();

		}
	}
}


/**
 * Enqueue CSS stylesheet with theme styles for Infinite Scroll.
 */
function twentythirteen_infinite_transporter_enqueue_styles() {
	wp_enqueue_style( 'infinity-twentythirteen', plugins_url( 'twentythirteen.css', __FILE__ ), array( 'mcninja-post-transporter' ), '20130409' );
}
add_action( 'wp_enqueue_scripts', 'twentythirteen_infinite_transporter_enqueue_styles', 25 );