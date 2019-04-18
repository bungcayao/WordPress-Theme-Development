<?php

/**
 * Template Name: Modular Page
 * Boilerplate -> Home Page -> Modular Page
 *
 * @link https://www.advancedcustomfields.com/resources/
 * @link https://bulma.io/documentation/layout/section/
 *
 * Setup Template Parts
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 * @link http://buildwpyourself.com/get-template-part/
 *
 * Setup ACF Flexible Content
 * @link http://selfteach.me/acf-flexible-content-modular-wordpress-themes/
 *
 * @package popin
 */

if (!post_password_required($post)) :

	get_header();

/** Convert ACF PHP into JSON for Import **/
	// require get_template_directory() . '/devtools/acf-php-to-json.php';
	// acf_to_json();

		// TODO (Josh)
		
		// Resources
		// @link https://www.impressivewebs.com/parallax-scrolling-scripts-plugins/
		
		// Sexyness
		// @link http://johnpolacek.github.io/superscrollorama/
		
		// Simple
		// @link http://pixelcog.github.io/parallax.js/
		
		// Title Hover Effects
		// @link http://gijsroge.github.io/tilt.js/
		
		// Page Loader
		// @link https://tympanus.net/Tutorials/PagePreloadingEffect/
		
		// Simple CSS Hover Effects
		// @link https://www.webdesignerdepot.com/2014/05/8-simple-css3-transitions-that-will-wow-your-users/
		
		// Transition CSS Tricks
		// @link https://css-tricks.com/almanac/properties/t/transition/

		// Animation Effects
		// @link https://github.com/daneden/animate.css
		
		// Sloped Edges w/ Consistent Angle
		// @link https://kilianvalkhof.com/2017/design/sloped-edges-with-consistent-angle-in-css/
		//   - Apply a background DIV inside section
		//   - If has class .has-bg-slopped
		//   - then background div created
		// 	- then it is position absolute, z-index behind content, then transformation:rotate(Xdeg)

		// Fix for ACF -> JSON Import -> Empty Values
		// @link https://support.advancedcustomfields.com/forums/topic/radio-buttons-dont-retain-choices-on-exportimport/	
			
		// TODO
		// Webpack -> fetch JS + CSS (babel-plugin-universal-iimport)
?>
	
	<!-- Development Only: HTML Here -->
	
	<?php

	// open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();
		
	// are there any rows within within our flexible content?
if (have_rows('moduleContent')) :
			
			// loop through all the rows of flexible content
while (have_rows('moduleContent')) : the_row();

// POPINLIVE HOMEPAGE
if (get_row_layout() == 'PopinLiveHomePage')
	get_template_part('modules/componentize', 'me-daddy');

// RIBBON (CTA ANNOUNCEMENT) SECTION
if (get_row_layout() == 'sectionRibbon')
	get_template_part('modules/section', 'ribbon');
				
// HEADER SECTION (MAIN || SUB)
if (get_row_layout() == 'sectionHeader')
	get_template_part('modules/section', 'header');

// HERO SECTION
if (get_row_layout() == 'sectionHero')
	get_template_part('modules/section', 'hero');	

// INTRO BLOCK SECTION
if (get_row_layout() == 'sectionIntroBlocks')
	get_template_part('modules/section', 'intro-blocks');	

// HTML WSIWYG SECTION
if (get_row_layout() == 'sectionHTML')
	get_template_part('modules/section', 'html-wsiwyg');	
				
// FEATURE SECTION
if (get_row_layout() == 'sectionFeature')
	get_template_part('modules/section', 'feature');
				
// CONTENT BLOCK SECTION
if (get_row_layout() == 'sectionContent')
	get_template_part('modules/section', 'content');

// CONTENT ANIMATED BLOCK SECTION
if (get_row_layout() == 'sectionContentAnimated')
	get_template_part('modules/section', 'content-animated');	
				
// VIDEO SECTION`
if (get_row_layout() == 'sectionVideo')
	get_template_part('modules/section', 'video');

endwhile; // close the loop of flexible content

else : ?>
			<section data-module="section-basic" class="section">
				<div class="container">
					<div class="columns level">
						<div class="column is-12 content">
							<?php	the_content(); ?>
						</div>
					</div>
				</div>
			</section>
		<?php 
	endif;

	if (have_rows('flexible_content')) :
			
	// loop through all the rows of flexible content
	while (have_rows('flexible_content')) : the_row();

	// POPIN TEAM
	if (get_row_layout() == 'popin_team')
		get_template_part('modules/section', 'team');

	endwhile; // close the loop of flexible content	

	endif; // close flexible content conditional

	endwhile;
	endif; // close the WordPress loop 

	get_footer();

	else :
	// we will show password form here
	echo get_the_password_form();

	endif;

	?>