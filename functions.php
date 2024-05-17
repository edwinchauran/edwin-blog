<?php

function add_theme_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() . "/assets/css/style.css",false, 1.0,'all');
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

function edwinblog_setup(){
    register_nav_menus( array(
        'header-menu' => ('Header Menu')
    ));

    //habilitar imagenes destacadas
    add_theme_support('post-thumbnails');
}
    add_action('after_setup_theme', "edwinblog_setup");


// add_filter( 'the_content', 'filter_the_content_in_the_main_loop' );


// function agregarClases($atts, $item, $args) {
//     $class = "nav-link text-white";
//     $atts["class"] = $class;
//     return $atts;
// }
// add_filter("nav_menu_link_attributes", "agregarClases", 10, 3);


function add_responsive_class($content)
{
    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    if (!empty($content)) {
        $document = new DOMDocument();
        libxml_use_internal_errors(true);
        $document->loadHTML(utf8_decode($content));

        $imgs = $document->getElementsByTagName('img');
        foreach ($imgs as $img) {
            // $img->setAttribute('class', 'img-fluid');
            $img->setAttribute('class', $classes . ' img-fluid');
        }

        $html = $document->saveHTML();
        return $html;
    }
}
add_filter('the_content', 'add_responsive_class');

// $img->setAttribute('class', 'img-fluid');

// This sets the class field to a new value. Simply change this line to

// $classes = $img->getAttribute('class');
// $img->setAttribute('class', $classes . ' img-fluid');