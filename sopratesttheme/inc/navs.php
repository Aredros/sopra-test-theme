<?php 
 function register_sopra_navs(){
    register_nav_menus( array(
        'sopra-top-nav' => __('Sopra Top Menu'),
        'sopra-bot-footer' => __('Sopra Bottom Menu'),
        'sopra-sub-bot-footer' => __('Sopra Sub Bottom Menu')
    ));
 }
add_action( 'init', 'register_sopra_navs' );

?>