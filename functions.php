<?php
function followmoreplastic_theme_support(){
    //Adds dynamic title tag support
    add_theme_support('title-tag');
}

function followmoreplastic_menus(){
    $locations = array(
        'primary' => 'Main Menu Top',
        'social' => 'Social Media Footer'
    ); 
    register_nav_menus($locations);
}

add_action('init', 'followmoreplastic_menus');

add_action('after_setup_theme', 'followmoreplastic_theme_support');


function followmoreplastic_register_styles(){
    wp_enqueue_style('followmoreplastic-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('followmoreplastic-font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css", array(), '1.0', 'all');
    wp_enqueue_style('followmoreplastic-styles', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');
    wp_enqueue_style('followmoreplastic-aos', get_template_directory_uri() . "/assets/css/aos.css", array(), '1.0', 'all');
    wp_enqueue_style('followmoreplastic-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'followmoreplastic_register_styles');

function followmoreplastic_register_scripts(){
    // wp_enqueue_script('followmoreplastic-jquery', "https://code.jquery.com/jquery-3.3.1.slim.min.js", array(), '3.3.1', true);
    wp_enqueue_script('followmoreplastic-popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", array(), '1.14.7', true);
    wp_enqueue_script('followmoreplastic-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", array(), '3.3.1', true);
    wp_enqueue_script('followmoreplastic-aos', get_template_directory_uri() . "/assets/js/aos.js", array(), '1.0.0', true);
    wp_enqueue_script('followmoreplastic-script', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0.0', true);

   
}

add_action('wp_enqueue_scripts', 'followmoreplastic_register_scripts');

add_theme_support( 'post-thumbnails' );

/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';





