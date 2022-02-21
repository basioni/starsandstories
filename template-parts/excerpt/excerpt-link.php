<?php
/**
 * Show the appropriate content for the Link post format.
 */

// Print the 1st instance of a paragraph block. If none is found, print the content.
if ( has_block( 'core/paragraph', get_the_content() ) ) {

	stars_and_stories_print_first_instance_of_block( 'core/paragraph', get_the_content() );
} else {

	the_content();
}
