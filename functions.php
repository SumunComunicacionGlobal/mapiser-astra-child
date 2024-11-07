<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 20 );

add_action( 'astra_content_before', 'blog_top_content' );
function blog_top_content() {
	if ( is_home() ) {
		$page_id = get_option( 'page_for_posts' );
		$blog_content = get_post_field( 'post_content', $page_id );
		if ( $blog_content ) {
			echo '<div class="ast-container">';
				echo $blog_content;
			echo '</div>';
		}
		
	}
}
