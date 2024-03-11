<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<!-- Displays translated text that has been escaped for safe use in HTML output. -->
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'visionspot' ); ?></h1>
	</header>

	<div class="page-content">
		<?php
		// Determines whether the query is for the blog homepage (is_ ...).
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'visionspot' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'visionspot' ); ?></p>
			<?php
			// Displays search form.
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'visionspot' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div>
</section>