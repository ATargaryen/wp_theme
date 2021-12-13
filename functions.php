<?php

// load head css
function customer_portal_register_styles(){
    wp_enqueue_style( 'aman-customer-portal-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'aman-customer-portal-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'aman-customer-portal-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}

// load js files
function customer_portal_register_scripts(){
    wp_enqueue_script( 'aman-customer-portal-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'aman-customer-portal-scripts', get_template_directory_uri().'/main_js.js', array(), wp_get_theme()->get( 'Version' ) ,true);
}

// theme
function customer_portal_theme_support(){
    add_theme_support('title-tag'); // set title dynamically
    add_theme_support('custom-logo'); // enable custome logo feature
    add_theme_support('post-thumbnails'); // enable custome logo feature
}


// menu - navmenu

function customer_portal_register_menu(){

    $locations = array(
        'primary' => 'Main Navigation Menu',
        'footer' => 'Footer Menu',

    );

    register_nav_menus($locations);
}



// Hook wordpress functions to customer function of our theme
add_action('wp_enqueue_scripts','customer_portal_register_styles');
add_action('wp_enqueue_scripts','customer_portal_register_scripts');
add_action('after_setup_theme','customer_portal_theme_support');
add_action('init','customer_portal_register_menu');
?>