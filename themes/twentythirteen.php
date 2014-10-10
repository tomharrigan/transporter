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
		'container' => 'content',
		'footer'    => 'page'
	) );
}
add_action( 'after_setup_theme', 'twentythirteen_infinite_transporter_init' );

/**
 * Enqueue CSS stylesheet with theme styles for Infinite Scroll.
 */
function twentythirteen_infinite_transporter_enqueue_styles() {
	wp_enqueue_style( 'infinity-twentythirteen', plugins_url( 'twentythirteen.css', __FILE__ ), array( 'mcninja-post-transporter' ), '20130409' );
}
add_action( 'wp_enqueue_scripts', 'twentythirteen_infinite_transporter_enqueue_styles', 25 );