<?php
    function enqueue_js(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js', array(), null, true);
        wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js', array(), null, true);   
        wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts-min.js', array(), null, true);       
    }
    add_action('wp_enqueue_scripts', 'enqueue_js');
?>