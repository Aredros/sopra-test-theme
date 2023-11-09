<?php
    //Enqueing the JS
    function register_sopracheo_scripts(){
        // Enqueue jQuery
            wp_enqueue_script('jquery');
        //bootstrap
            wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js');
        //laravelmix js script start 
            wp_register_script('app.js', get_template_directory_uri() . '/dist/app.js', [], 1, true);
            wp_enqueue_script('app.js');
        //FullPage JS
            wp_enqueue_script('fullpage.min.js', get_template_directory_uri() . '/assets/js/fullpage.min.js', array('jquery'), null, true);
        //Custom code for fullpage.js
            wp_enqueue_script('custom-code-fullpage.js', get_template_directory_uri() . '/assets/js/custom-code-fullpage.js', array('jquery'), null, true);
    }
        //adding
    add_action( 'wp_enqueue_scripts', 'register_sopracheo_scripts');


    //Enqueing the CSS
    function register_sopracheo_styles(){
        //bootstrap styles
            wp_enqueue_style( 'bootstrap.css', get_template_directory_uri() . '/assets/css/bootstrap.css');
        //fullpage styles
        wp_enqueue_style( 'fullpage.css', get_template_directory_uri() . '/assets/css/fullpage.css');
        //regular css styles
            wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css');
        //Enqueue laravel scss styles start
            //Dynamic page showing styles on save dir
            wp_enqueue_style('app.css', get_template_directory_uri() . '/dist/dist/app.css', [], 1, 'all');
            wp_enqueue_style('header.css', get_template_directory_uri() . '/dist/dist/header.css', [], 1, 'all');
            wp_enqueue_style('multi-slide-styles.css', get_template_directory_uri() . '/dist/dist/multi-slide-styles.css', [], 1, 'all');
            wp_enqueue_style('posts-carousels.css', get_template_directory_uri() . '/dist/dist/posts-carousels.css', [], 1, 'all');
            wp_enqueue_style('videos-carousel.css', get_template_directory_uri() . '/dist/dist/videos-carousel.css', [], 1, 'all');
            wp_enqueue_style('footer.css', get_template_directory_uri() . '/dist/dist/footer.css', [], 1, 'all');
    }
        //adding
    add_action( 'wp_enqueue_scripts', 'register_sopracheo_styles');


?>