<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
        the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    ?>

    <div class="entry-content">
        <?php
            the_content();            
        ?>
    </div>
</div>