<?php
add_action( 'wp_enqueue_scripts', 'xamin_enqueue_styles' ,99);

function xamin_enqueue_styles() {
	    $parent_style = 'parent-style'; 
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css');
}

/**
  * Set up My Child Theme's textdomain.
  *
  * Declare textdomain for this child theme.
  * Translations can be added to the /languages/ directory.
  */
function xamin_theme_setup() {
    load_child_theme_textdomain( 'xamin', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'xamin_theme_setup' );
