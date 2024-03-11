<?php
/*  The index.php is the main homeplace (fallback file) for the wordpress that means it's gonna load your all the blog post into the index.php. */
/*
* The main template file.
*/
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Loop the posts
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                // Loads a template part into a template. Provides a simple mechanism for child themes to overload reusable sections of code in the theme.
                get_template_part( 'template-parts/post/content', get_post_format() );
            endwhile;

            echo paginate_links( [
                'prev_text' => esc_html__( 'Prev', 'visionspot' ),
                'next_text' => esc_html__( 'Next', 'visionspot' ),
            ] );
        else :
            get_template_part( 'template-parts/page/content', 'none' );
        endif;
        ?>
    </main>

    <?php get_sidebar(); ?>
</div>
<?php
get_footer();