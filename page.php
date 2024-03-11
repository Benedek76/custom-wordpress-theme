<?php
/**
 * This page.php will be responsible for showing any individual pages like whatever pages you add into the wordpress site this page.php will dynamically handle everything related to the page next we can use this single.php.
 * Template for displaying all the pages.
 */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/page/content', 'page' );

            // If comments are open then we can show the comments template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>
    </main>
    <?php get_sidebar();  ?>
</div>
<?php
get_footer();