<?php 




function rabbit_hole() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
  

    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}


add_action('wp_enqueue_scripts', 'rabbit_hole');




