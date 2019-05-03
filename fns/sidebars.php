<?php
    function primary_sidebar() {
        register_sidebar(
            array (
                'name' => __( 'Primary', $themeDomain ),
                'id' => 'primary-sidebar',
                'description' => __( 'Primary Sidebar', $themeDomain ),
                'before_widget' => '<div class="widget-content">',
                'after_widget' => "</div>",
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
    }
    add_action( 'widgets_init', 'primary_sidebar' );

    function do_sidebar($id, $container){
        if ( is_active_sidebar( $id ) ) :
            ?>
            <div class="<?php echo $container; ?>">
                <?php dynamic_sidebar( $id ); ?>
            </div>
            <?php
        endif;
    }
?>