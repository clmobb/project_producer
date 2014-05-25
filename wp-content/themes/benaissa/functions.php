<?php
/**
 * Benaissa functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * @package teckes
 * @subpackage benaissa
 */


function benaissa_setup() {

    // This theme supports a variety of post formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

    // This theme uses wp_nav_menu() in one location.
//    register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );

}
add_action( 'after_setup_theme', 'benaissa_setup' );