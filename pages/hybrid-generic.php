<?php
	/*
  Template Name: Generic (Hybrid)
	*/

get_header(); ?>
	
<?php // open the WordPress loop
	if (have_posts()) : while (have_posts()) : the_post();

		// are there any rows within within our flexible content?
		if( have_rows('moduleContent') ):
			
			// loop through all the rows of flexible content
			while ( have_rows('moduleContent') ) : the_row();

				// HEADER SECTION (MAIN || SUB)
				if( get_row_layout() == 'sectionHeader' )
					get_template_part('modules/section', 'header');
				
				// VIDEO SECTION`
				if( get_row_layout() == 'sectionVideo' )
					get_template_part('modules/section', 'video');
			
			endwhile; // close the loop of flexible content
		endif;
	endwhile; endif; // close the WordPress loop ?>
	<section class="section">
		<div class="container content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'popin' ) ); ?>
			<?php endwhile; ?>
		</div>
	</section>
<?php get_footer(); ?>