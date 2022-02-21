<?php
/**
 * Show the appropriate content for the Gallery post format.
 */

// Print the 1st gallery found.
if ( has_block( 'core/gallery', get_the_content() ) ) {

	stars_and_stories_print_first_instance_of_block( 'core/gallery', get_the_content() );
}

the_excerpt();
