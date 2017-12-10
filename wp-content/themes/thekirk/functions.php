<?php 
function register_menus() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}

function add_assets(){
  wp_enqueue_script( 'kirk-js', get_stylesheet_directory_uri() . '/js/app.min.js', array( 'jquery' ), '1.0', true );
  wp_enqueue_script( 'kirk-fonts', get_stylesheet_directory_uri() . '/fonts/kirkfontskit.js' );
}

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Homepage CTA',
    'description' => 'Homepage blocks',
    'before_widget' => '<div class = "columns three cta">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    )
  );
  register_sidebar(array(
    'name' => 'Homepage Ticker',
    'description' => 'Inline ticker text on home page',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<strong>',
    'after_title' => '</strong>',
    )
  );
}

add_post_type_support( 'page', 'excerpt' );
add_action( 'init', 'register_menus' );
add_action( 'wp_enqueue_scripts', 'add_assets' );
?>