<?php
/* This file will handle your commenting section like if if you if you want to modify your commenting layout or any other things you can do with this. */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <!-- Determines whether current WordPress query has comments to loop over. -->
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            // Retrieves the amount of comments a post has.
            $comment_count = get_comments_number();
            if ( '1' === $comment_count ) {
                printf(
                    esc_html__( 'Comments (1)', 'herobiz' )
                );
            } else {
                printf(
                    esc_html__( 'Comments (%1$s)', 'herobiz' ),
                    // Returns the integer value of a variable.
                    intval( $comment_count )
                );
            }
            ?>
        </h2>
        <!-- Displays navigation to next/previous set of comments, when applicable. -->
        <?php the_comments_navigation(); ?>
        <ol class="comment-list">
            <?php
            // Displays a list of comments.
            wp_list_comments( [
                'style' => 'ol',
                'short_ping' => true
            ] );
            ?>
        </ol>
        <?php
        the_comments_navigation();
        //  If the comments are closed the show this message.
        // Determines whether the current post is open for comments.
        if ( ! comments_open() ) {
            printf(
                '<p class="no-comments">%1$s</p>',
                esc_html__( 'Comments are closed', 'herobiz' )
            );
        }
        ?>
    <?php
    endif;
     // Outputs a complete commenting form for use within a template.
    comment_form();
    ?>

</div>