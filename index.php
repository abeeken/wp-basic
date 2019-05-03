<?php get_header(); ?>

<div class="container page">
    <div class="row">        
        <div class="col">
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'parts/content', get_post_format() );
                    endwhile;
                    the_posts_pagination( array(
                        'mid_size'  => 2,
                        'prev_text' => __( 'Previous', 'textdomain' ),
                        'next_text' => __( 'Next', 'textdomain' )
                    ) );
                else :
                    get_template_part( 'parts/content', 'none' );
                endif;
            ?>
        </div>
        <?php
            do_sidebar("primary-sidebar", "col-3");
        ?>
    </div>
</div>

<?php get_footer(); ?>