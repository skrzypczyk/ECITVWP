<?php

function wp_init() {
  
  register_nav_menu('menu-principal',__( 'Menu principal' ));

}


add_action( 'init', 'wp_init' );



?>