<?php
/**
 * Show the appropriate content for the Audio post format.
 */

$content = get_the_content();

if ( has_block( 'core/audio', $content ) ) {
	stars_and_stories_print_first_instance_of_block( 'core/audio', $content );
} elseif ( has_block( 'core/embed', $content ) ) {
	stars_and_stories_print_first_instance_of_block( 'core/embed', $content );
} else {
	stars_and_stories_print_first_instance_of_block( 'core-embed/*', $content );
}

// Add the excerpt.
the_excerpt();
