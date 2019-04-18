<?php
	
	// Let's Deregister a Few Things
function default_wp_scripts()
{
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'default_wp_scripts');


/*
 * Remove the `wp-block-library.css` file from `wp_head()`
 *
 * @author Rahul Arora
 * @since  12182018
 * @uses   wp_dequeue_style
 * @link https://wpcrux.com/blog/remove-gutenberg-enqueued-css/
 */
add_action( 'wp_enqueue_scripts', function() {
  wp_dequeue_style( 'wp-block-library' );
} );


	// Enqueue CSS + JS
function popin_theme_style_scripts()
{
		// You'll want to change it to ||,
		// But it needs to be &&
	if (!is_page_template('pages/modules.php') &&
		!is_page_template('pages/hybrid-resources.php') &&
		!is_page_template('pages/hybrid-news.php') &&
		!is_page_template('pages/hybrid-blog-technology.php') &&
		!is_page_template('pages/hybrid-generic.php') &&
		!is_page_template('pages/hybrid-blog.php') &&
		!is_page_template('pages/redirect.php') &&
		!is_page_template('pages/custom-usecase.php') &&
		!is_home('index.php') &&
		!is_404('404.php') &&
		!is_singular('post')) :
			// POPin Main Style Sheet
	wp_enqueue_style('popin-style', get_template_directory_uri() . '/style.min.css', array(), '5.3.7');
			
			// Font Family - Open Sans
	wp_enqueue_style('font-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700', array(), '5.3.7');
			
			// Font Family - Material Icons
	wp_enqueue_style('font-material-icons', 'https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css', array(), '5.3.7');
			
			// Flickity Slider CSS
	wp_enqueue_style('css-flickity', get_template_directory_uri() . '/css/flickity.min.css', array(), '5.3.7');
			
			// Custom POPin Redesign Style Sheet
	wp_enqueue_style('css-custom-popin', get_template_directory_uri() . '/css/popin-custom.min.css', array(), '5.3.7');
			
			// Switch Auto-Tenant Style Sheet
	wp_enqueue_style('css-auto-tenant-popin', get_template_directory_uri() . '/css/switch-autotenant.min.css', array(), '5.3.7');
			
			// Custom POPin Redesign Style Sheet
	wp_enqueue_style('css-custom-popin', get_template_directory_uri() . '/css/popin-custom.min.css', array(), '5.3.7');
			
			// Switch Auto-Tenant Style Sheet
	wp_enqueue_style('css-auto-tenant-popin', get_template_directory_uri() . '/css/switch-autotenant.min.css', array(), '5.3.7');
			
			// JQUERY LIBRARY
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, false);
	wp_enqueue_script('jquery-validate', 'https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js#asyncload', 'jquery', '5.3.7', true);
			
			// Remove WP Embed Script
			// Allows you to embed, shortcode, video's in wordpress page/posts.
			// https://codex.wordpress.org/Embeds
	wp_deregister_script('wp-embed');
			
			// JQUERY WP CORE SCRIPTS
	wp_enqueue_script('popin-script', get_template_directory_uri() . '/js/jquery.main.js', 'jquery', null, true);
			
			// Vendor: Flickity
	wp_enqueue_script('js-flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js#asyncload', 'jquery', '5.3.7', true);
			

		  // Vendor: Alexa Certify
		  // wp_enqueue_script('js-alexa', get_template_directory_uri() . '/js/alexa-certify.js#asyncload', '', '5.3.7', false);

			// POPin Webminar Styles
	if (is_page_template('pages/landing-webinar-iframe.php')) {
		wp_enqueue_style('popin-webinar-style', get_template_directory_uri() . '/css/style-demandgen.min.css', array(), '5.3.7');
	}
						
			// POPIN v5
	if (is_page_template('pages/popin-v5-homepage.php') ||
		is_page_template('pages/popin-v5-productpage.php') ||
		is_page_template('pages/popin-v5-customerspage.php') ||
		is_page_template('pages/template-technology-blog.php') ||
		is_page_template('pages/template-legal.php') ||
		is_singular($post_types = 'technology-blog')) {
		wp_enqueue_style('css-popin-fiveOh', get_template_directory_uri() . '/css/popin-v5.min.css', array(), '5.3.7');
	}
			
			// GoogleAnalytics
			// wp_enqueue_script('js-google-analytics', get_template_directory_uri() . '/js/google-analytics.js#asyncload', '', '5.3.7', true);
	endif;
}

add_action('wp_enqueue_scripts', 'popin_theme_style_scripts');
	
	
	// popin-theme-scripts.php

function enqueue_hashed_files()
{
	if (is_page_template('pages/modules.php') ||
		is_page_template('pages/hybrid-resources.php') ||
		is_page_template('pages/hybrid-news.php') ||
		is_page_template('pages/hybrid-blog-technology.php') ||
		is_page_template('pages/hybrid-generic.php') ||
		is_page_template('pages/hybrid-blog.php') ||
		is_page_template('pages/redirect.php') ||
		is_page_template('pages/custom-usecase.php') ||
		is_home('index.php') ||
		is_404('404.php') ||
		is_singular('post')) :
			// Look for files in `dist` folder
	$dist_files = new DirectoryIterator(get_stylesheet_directory() . '/dist/');
	foreach ($dist_files as $file) {
				
				// If .js files ...
		if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
					// fullname -> bundle.123456.js
			$fullName = basename($file);
					
					// name -> bundle.js
			$name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

			switch ($name) {
						// if we have file `bundle`
				case 'bundle':
							// we're going to make it's dependent on `jquery`
					$deps = array('jquery');
					$footer = true;
					break;
				default:
							// if not bundle, and is jquery, dependency is null
					$deps = null;
					$footer = false;
					break;
			}
			if ( ($fullName !== 'bundle.instapage.js') && ($fullName !== 'seo-verification.instapage.js') && ($fullName !== 'header.instapage.js') && ($fullName !== 'footer.instapage.js') && ($fullName !== 'analytics.js')) {
				wp_enqueue_script($name, get_template_directory_uri() . '/dist/' . $fullName, $deps, null, $footer);
			}
					
					// If .css files ...
		}
		if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
					
					// fullname -> style.123456.js
			$fullName = basename($file);
					// name -> style.js
			$name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));
			$media = 'all';
			if ($fullName !== 'style.instapage.css') {
				wp_enqueue_style($name, get_template_directory_uri() . '/dist/' . $fullName, array(), null, $media);
			}
		}
	}
	endif;
}
add_action('wp_enqueue_scripts', 'enqueue_hashed_files');
?>