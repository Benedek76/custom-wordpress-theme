<?php
/* This template will be responsible if your theme has any such searching functionalities then if you want to show those things into a page then you can use this search. */
/**
 * The template for displaying search result.
 */
get_header();
?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php
        if ( have_posts() ) :
                // Start the loop.
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/page/content', 'search' );
                endwhile;
                
                // Retrieves paginated links for archive post pages.
                echo paginate_links( [
                    'prev_text' => esc_html__( 'Prev', 'visionspot' ),
                    'next_text' => esc_html__( 'Next', 'visionspot' ),
                ] );

        else :
            get_template_part( 'template-parts/page/content', 'none' );
        ?>
        <?php endif; ?>
    </main>
</div>

<?php
get_footer();