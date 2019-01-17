<?php

//Registro de archivos

function register_enqueue_style(){
    $theme_data = wp_get_theme();

    //Registrando estilos
    wp_register_style('Bootstrap-min', 
    get_parent_theme_file_uri('/assets/css/bootstrap.min.css'), 
    null, '1.0.0', 'screen');
    
    wp_register_style('Bootstrap-theme', 
    get_parent_theme_file_uri('/assets/css/bootstrap-theme.min.css'), 
    null, '1.0.0', 'screen');

    wp_register_style('Style', 
    get_parent_theme_file_uri('/assets/css/styles.css'), 
    null, '1.0.0', 'screen');

    //Enqueue estilos
    wp_enqueue_style('Bootstrap-min');
    wp_enqueue_style('Bootstrap-theme');
    wp_enqueue_style('Style');
}

add_action('wp_enqueue_scripts', 'register_enqueue_style');

//registro de scripts

function register_enqueue_scripts(){
    $theme_data = wp_get_theme();
    
    //deregister scripts
    wp_deregister_script('jQuery-slim-min');
    wp_deregister_script('jQuery-min');
    wp_deregister_script('Modernizr');
    wp_deregister_script('Bootstrap');
    wp_deregister_script('Main');

    //registrando scripts
    
    wp_register_script('jQuery-slim-min', 
    get_parent_theme_file_uri('/assets/js/vendor/jquery-3.3.1.slim.min.js'), 
    null, '3.3.1', true);

    wp_register_script('jQuery-min', 
    get_parent_theme_file_uri('/assets/js/vendor/jquery-1.11.2.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Modernizr', 
    get_parent_theme_file_uri('/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Bootstrap', 
    get_parent_theme_file_uri('/assets/js/vendor/bootstrap.min.js'), 
    null, '3.2.1', true);

    wp_register_script('Main', 
    get_parent_theme_file_uri('/assets/js/main.js'), 
    null, '3.2.1', true);

    //Enqueue scripts
    wp_enqueue_script('jQuery-slim-min');
    wp_enqueue_script('jQuery-min');
    wp_enqueue_script('Modernizr');
    wp_enqueue_script('Bootstrap');
    wp_enqueue_script('Main');
    
}
add_action('wp_enqueue_scripts', 'register_enqueue_scripts');
?>