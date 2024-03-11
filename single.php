<?php
/**
 * The search.php will be responsible to show your single blog post that you are gonna load into the index.php.
 * Single page template
 */
echo get_post_format();
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/post/content', get_post_format() );
        endwhile;

        /* If comments are open than we can show the comments template. 
         comments_open: Determines whether the current post is open for comments.
         get_comments_number: Retrieves the amount of comments a post has.
         comments_template: Loads the comment template specified in $file.*/
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
    </main>
    <?php get_sidebar();  ?>
</div>

<?php
get_footer();