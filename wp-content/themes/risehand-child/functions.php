<?php
/**
 * Theme functions and definitions.
 */
function risehand_child_enqueue_styles() {

    if ( SCRIPT_DEBUG ) {
        wp_enqueue_style( 'risehand-style' , get_template_directory_uri() . '/style.css' );
    } else {
wp_enqueue_style( 'risehand-style' , get_template_directory_uri() . '/style.css' );
    }

    wp_enqueue_style( 'risehand-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'risehand-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'risehand_child_enqueue_styles' );