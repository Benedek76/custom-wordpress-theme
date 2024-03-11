<?php
/**
 * Template part for displaying posts.
 */

?>
<!-- Print out the ID of the current post --> 
<article id="post-<?php the_ID() ?>">
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            // Print out alongside with the link of that post. First param: DOM of the link, second param: closing tag.
            // esc_url: escaping url function for WP and get_permalink: get permalink will print out the current loops post url.
            the_title( '<h2 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink() ).'">', '</a></h2>' );
        endif;
        ?>
    </header>
    <!-- Post thumbnail -->
    <?php
    // If the post has any thumbnail attached to it, we are checking with the has post thumbnail.
    if ( has_post_thumbnail() ) :
        // If adds ‘post-thumbnail’ support, a special ‘post-thumbnail’ image size is registered
        the_post_thumbnail( 'large' ); // full, large, medium, custom size
    endif;
    ?>
    <!-- Post Content -->
    <?php if ( is_home() || is_archive() ) : ?>
    <div class="entry-content">
        <!-- Print out the portion of the page. -->
        <?php the_excerpt(); ?>
    </div>
     <!--  Determines whether the query is for an existing single post. -->
    <?php elseif( is_single() ) : ?>
        <div class="entry-content">
            <!-- Print out the portion of the page. -->
            <?php
                // Displays the post content.
                the_content();
                // Displays page links for paginated posts (i.e. including the <!--nextpage--> Quicktag one or more times). This tag must be within The Loop.
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'visionspot' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div>
    <?php endif; ?>
</article>