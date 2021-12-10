<?php

function wp_init() {
  
  register_nav_menu('menu-principal',__( 'Menu principal' ));
  add_theme_support('post-thumbnails');

}


add_action( 'init', 'wp_init' );



function ecitv_scripts() {
  
  // enqueue style
  wp_enqueue_style('ecitv-style', get_stylesheet_uri());
  
  
  
}
add_action('wp_enqueue_scripts', 'ecitv_scripts');


?>






