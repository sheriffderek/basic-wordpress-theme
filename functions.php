<?php

// hide admin bar
show_admin_bar( false );


// register and call style sheet
function basicTheme_styles() {
  wp_enqueue_style( 'styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'basicTheme_styles' );


// register and call scripts
function basicTheme_scripts() {
  wp_register_script( 'main-scripts',
    get_template_directory_uri() . '/scripts.js',
    array( 'jquery' ) );
  wp_enqueue_script( 'main-scripts' );
}
add_action( 'wp_enqueue_scripts', 'basicTheme_scripts' );


/* no lines after this! */ ?>