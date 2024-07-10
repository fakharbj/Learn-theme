<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php 
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 

         ?>
         <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>  

    <div class="entry-footer">
        <?php 
        printf('<a href="%s">read more </a>', esc_url( get_permalink() ));
        ?>
</div>
    </header>
