<?php
/**
 * Infinite Scroll Theme Assets
 *
 * Register support for Genesis.
 */

/**
 * Add theme support for infinite scroll
 */
function genesis_infinite_transporter_init() {
    add_theme_support( 'infinite-transporter', array(
        'container' => 'main-content',
        'footer'    => false,
        'render'    => 'genesis_infinite_transporter_render'
    ) );
}
add_action( 'after_setup_theme', 'genesis_infinite_transporter_init' );

/**
 * Set the code to be rendered on for calling posts,
 * hooked to template parts when possible.
 */
function genesis_infinite_transporter_render() {

        if ( have_posts() ) :

            do_action( 'genesis_before_while' );
            while ( have_posts() ) : the_post();

                do_action( 'genesis_before_entry' );

                printf( '<article %s>', genesis_attr( 'entry' ) );

                    do_action( 'genesis_entry_header' );

                    do_action( 'genesis_before_entry_content' );

                    printf( '<div %s>', genesis_attr( 'entry-content' ) );
                    do_action( 'genesis_entry_content' );
                    echo '</div>';

                    do_action( 'genesis_after_entry_content' );

                    do_action( 'genesis_entry_footer' );

                echo '</article>';

                do_action( 'genesis_after_entry' );

            endwhile; //* end of one post

        else : //* if no posts exist
            do_action( 'genesis_loop_else' );
        endif; //* end loop

}