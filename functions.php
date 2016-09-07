<?php

function root($path) {
    return get_template_directory_uri().$path;
}

function load_resources() {
    wp_enqueue_style('bootstrap.css', root("/css/bootstrap.css"));
    wp_enqueue_style('font-awesome.min.css', root("/font-awesome/css/font-awesome.min.css"));
	wp_enqueue_style('style', get_stylesheet_uri());
        
    wp_enqueue_script("jquery-1.11.1.min.js", root("/js/jquery-1.11.1.min.js"), array(), false, true);
    wp_enqueue_script("bootstrap.min.js", root("/js/bootstrap.min.js"), array(), false, true);
    wp_enqueue_script("jquery.backstretch.min.js", root("/js/jquery.backstretch.min.js"), array(), false, true);
    wp_enqueue_script("scrollReveal.js", root("/js/scrollReveal.js"), array(), false, true);
    wp_enqueue_script("jquery.downCount.js", root("/js/jquery.downCount.js"), array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_resources');
