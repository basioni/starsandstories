<?php
/**
 * Show the appropriate content for the Video post format.
 */

$content = get_the_content();

if ( has_block( 'core/video', $content ) ) {
	stars_and_stories_print_first_instance_of_block( 'core/video', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	stars_and_stories_print_first_instance_of_block( 'core/embed', $content );
} else {
	stars_and_stories_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
