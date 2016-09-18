<?php

function root($path) {
    return get_template_directory_uri().$path;
}

function load_resources() {
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('header-footer', root("/header-footer.css"));
        
    wp_enqueue_script("jquery-1.12.1.min.js", root("/js/jquery-1.12.1.min.js"), array(), false, true);
}

function register_my_menu() {
  register_nav_menu('footer-menu', __( 'Footer Menu' ));
}

add_action('wp_enqueue_scripts', 'load_resources');
add_action( 'init', 'register_my_menu' );