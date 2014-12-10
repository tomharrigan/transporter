<?php
/**
 * Infinite Scroll Theme Assets
 *
 * Register support for Genesis.
 */

/**
 * Add theme support for infinite scroll
 */
function canvas_infinite_transporter_init() {
    add_theme_support( 'infinite-transporter', array(
        'container' => 'main',
        'render'    => 'canvas_infinite_transporter_render'
    ) );
}
add_action( 'after_setup_theme', 'canvas_infinite_transporter_init' );

/**
 * Set the code to be rendered on for calling posts,
 * hooked to template parts when possible.
 */
function canvas_infinite_transporter_render() {

    if( is_single() ) {

        woo_loop_before();
        
        if (have_posts()) { $count = 0;
            while (have_posts()) { the_post(); $count++;
                
                woo_get_template_part( 'content', get_post_type() ); // Get the post content template file, contextually.
            }
        }
        
        woo_loop_after();
    }
        
}

/**
 * Enqueue CSS stylesheet with theme styles for Infinite Transporter.
 */
function canvas_infinite_transporter_enqueue_styles() {
    wp_enqueue_style( 'infinity-canvas', plugins_url( 'canvas.css', __FILE__ ), array( 'mcninja-post-transporter' ), '20141210' );
}
add_action( 'wp_enqueue_scripts', 'canvas_infinite_transporter_enqueue_styles', 25 );