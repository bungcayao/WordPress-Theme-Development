<?php
	/**
	 * Template Name: Redirect Page
	 * Boilerplate -> Home Page -> Modular Page
	 *
	 * @package popin
	 */

	if ( ! post_password_required( $post ) ) : 
	
		get_header();

			// Redirect Page Template
			// - Redirect URL Field
			// - Event Action Field
			// - Redirect Url Module Section

			if( get_field('redirectUrl') ) :
				get_template_part('modules/redirect', 'url');
			endif;

		get_footer();

	else:
		// we will show password form here
		echo get_the_password_form();

	endif;

?>