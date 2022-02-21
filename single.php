<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'starsandstories' ), '%title' ),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	// Previous/next post navigation.
	$starsandstories_next = is_rtl() ? stars_and_stories_get_icon_svg( 'ui', 'arrow_left' ) : stars_and_stories_get_icon_svg( 'ui', 'arrow_right' );
	$starsandstories_prev = is_rtl() ? stars_and_stories_get_icon_svg( 'ui', 'arrow_right' ) : stars_and_stories_get_icon_svg( 'ui', 'arrow_left' );

	$starsandstories_next_label     = esc_html__( 'Next post', 'starsandstories' );
	$starsandstories_previous_label = esc_html__( 'Previous post', 'starsandstories' );

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $starsandstories_next_label . $starsandstories_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $starsandstories_prev . $starsandstories_previous_label . '</p><p class="post-title">%title</p>',
		)
	);
endwhile; // End of the loop.

get_footer();
