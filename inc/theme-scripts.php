<?php

	/**
	 * Enqueue scripts and styles.
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	 *
	 * Using Dynamic Hashes in File Names with WordPress’ Enqueue Function
	 * @link https://css-tricks.com/hashes-in-wordpress-assets-with-enqueue/
	 *
	 */

	// Default WordPress Scripts/Styles
	function default_wp_scripts() {
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
		// Disables included jQuery provided by WordPress
		wp_deregister_script('jquery');
		// Disables Guttenberg's style.css (WordPress v5.0.X)
		wp_dequeue_style('wp-block-library');
	}
	add_action('wp_enqueue_scripts', 'default_wp_scripts');


	function enqueue_hashed_files() {
		// Look for files in `dist` folder
		$dist_files = new DirectoryIterator(get_stylesheet_directory().'/dist/');

		foreach ($dist_files as $file) {		

			// JavaScript Files
			if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
				// Get fullname -> bundle.123456.js
				$fullName = basename($file);	
				// Get first name -> bundle
				$name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));

				switch ($name) {
					case 'bundle':
						$deps = array('jquery');
						$footer = false;
						break;
					default:
						$deps = null;
						$footer = false;
						break;
				}
				
			}
			// CSS Files
			if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
						
				// Get fullname -> style.123456.css
				$fullName = basename($file);
				// Create first name -> style
				$name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));
				$media = 'all';
				wp_enqueue_style($name, get_template_directory_uri() . '/dist/' . $fullName, array(), null, $media);
			}
		}
	}
	add_action('wp_enqueue_scripts', 'enqueue_hashed_files');
?>