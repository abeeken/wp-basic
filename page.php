<?php get_header(); ?>

<div class="container page">
    <div class="row">
        <div class="col">
            <?php
			    if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'parts/content', 'page' );
                    endwhile;
                else :
                    get_template_part( 'parts/content', 'none' );
                endif;
			?>
            <?php comments_template(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>