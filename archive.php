<?php
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/post/content' );

            endwhile;

            // Previous/next page navigation.
echo paginate_links([
    'prev_text' => esc_html__('prev', 'herobiz'),
    'next_text' => esc_html__('next', 'herobiz'),

]);



        else :

            // If no content, include the "No posts found" template.
            get_template_part( 'template-parts/page/content', 'none' );

        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
