<?php
/* 404.php now uh what this file will do this will handle uh the not found content or fallback uh of any search that is not finding any content then it will fall back into this for 404. php */
get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'visionspot' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ninestars' ); ?></p>

                <?php get_search_form(); ?>
            </div>
        </section>

    </main>
</div>
<?php
get_footer();