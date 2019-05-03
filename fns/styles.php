<?php
    function enqueue_css(){
        wp_enqueue_style( 'style', get_template_directory_uri().'/css/main.min.css' );
    }
    add_action('wp_enqueue_scripts', 'enqueue_css');
?>