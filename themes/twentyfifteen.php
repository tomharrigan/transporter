<?php
/**
 * Infinite Transporter Theme Assets
 *
 * Register support for Twenty Fifteen.
 */

/**
 * Add theme support for infinite transporter
 */
function twentyfifteen_infinite_transporter_init() {
	add_theme_support( 'infinite-transporter', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'twentyfifteen_infinite_transporter_init' );

/**
 * Enqueue CSS stylesheet with theme styles for Infinite Transporter.
 */
function twentyfifteen_infinite_transporter_enqueue_styles() {
	wp_enqueue_style( 'infinity-twentyfifteen', plugins_url( 'twentyfifteen.css', __FILE__ ), array( 'the-neverending-homepage' ), '20141022' );
	wp_style_add_data( 'infinity-twentyfifteen', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_infinite_transporter_enqueue_styles', 25 );
