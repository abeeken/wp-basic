<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <title>
            <?php echo get_bloginfo( 'name' ); ?>
            <?php 
                if(is_single()){
                    echo " - ".get_the_title(get_the_ID());
                }
            ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>

        <header class="container">
            <div class="row jumbotron">
                <div class="col">
                    <h1><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                </div>
            </div>
        </header>

        <nav class="container navbar navbar-light bg-light navbar-expand-lg mb-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php
                    wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'depth'           => 2,
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'menu_class'      => 'nav navbar-nav',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker()
                    ) );
                ?>
            </div>
        </nav>