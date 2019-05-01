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
                else :
                    get_template_part( 'parts/content', 'none' );
                endif;
			?>
        </div>
    </div>
</div>

<?php get_footer(); ?>