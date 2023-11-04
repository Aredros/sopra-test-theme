<?php
    //Enqueing the JS
    function register_sopracheo_scripts(){
        //bootstrap
            wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js');
    }
        //adding
    add_action( 'wp_enqueue_scripts', 'register_sopracheo_scripts');


    //Enqueing the CSS
    function register_sopracheo_styles(){
        //bootstrap styles
            wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/css/bootstrap.css');
        //regular css styles
            wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css');
    }
        //adding
    add_action( 'wp_enqueue_scripts', 'register_sopracheo_styles');


?>