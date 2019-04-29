<?php
    function register_menus() {
        register_nav_menu('primary',__( 'Primary Menu' ));
    }
    add_action( 'init', 'register_menus' );
?>