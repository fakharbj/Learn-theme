<?php 


get_header();
get_search_form();

    if ( have_posts()) : 
        while( have_posts()):
            ?>
            <h1>hello world</h1>
            // the_post();
            // get_template_part('template-parts/post/content'); 
        <?php
            endwhile;
    endif;

get_footer();