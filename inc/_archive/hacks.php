<?php
	/*
	 *  Functions/Hacks that were living in the functions.php file.
	 */
	
	/* Deregister Styles and Scripts */
	
	function my_deregister_styles()
	{
		if(current_user_can('update_core')) {    // If used in Admin
			return;                                // Then don't remove
		}
		
		// The Following Styles are deregistered
		wp_deregister_style('validate-engine-css');
		wp_deregister_style('dashicons');
		wp_deregister_style('wordfenceAJAXcss');
		wp_deregister_style('yoast-seo-adminbar');
		wp_deregister_style('wordpress-popular-posts');
		wp_deregister_style('A2A_SHARE_SAVE');
		
	}
	add_action('wp_print_styles', 'my_deregister_styles', 100);
	
	// Javascript Async load
	function popin_async_scripts($url) {
		if ( strpos( $url, '#asyncload') === false )
			return $url;
		else if ( is_admin() )
			return str_replace( '#asyncload', '', $url );
		else
			return str_replace( '#asyncload', '', $url )."' async='async";
	}
	add_filter( 'clean_url', 'popin_async_scripts', 11, 1 );
	
	// Not sure what this does, but it filters widgets?
	// Looks like it outputs a "show more" link
	// Also outputs or removes tag clouds?
	function filter_widgets( $widget_output, $widget_type, $widget_id, $sidebar_id ) {
		if ( $widget_id == 'tag_cloud-2' ) {
			$widget_output .= '<div class="show-more"><a href="#">Show more</a></div>';
			$widget_output = str_replace('tagcloud', 'tagcloud short-text', $widget_output);
		}
		return $widget_output;
	}
	add_filter( 'widget_output', 'filter_widgets', 10, 4 );
	remove_action('wp_head', 'wp_generator');
	
	// Removes <p> </p> from being wrapped around every content.
	remove_filter('the_content', 'wpautop');
	
	// REMOVE WP EMOJI
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	
	/**
	 *
	 * URL Params Checker
	 * @bungcayao
	 *
	 * I created this for the Technology Blog
	 * This checks our URL for parameters
	 * Usage: /blog/?category=item
	 * check_url_params('category', 'item');
	 *
	 * If url params match, it will confirm that it $has_params and $is_matched
	 *
	 */
	function url_params_set_active ($query_key, $query_value) {
		// Check: If query_key is being passed
		if ($query_key) {
			// Then we have url parameters
			$has_params = true;
			
			// If query_key and query_value being passed are in our url
			if ( (isset($_GET[$query_key])) && $_GET[$query_key] == $query_value) {
				// Then our query_key and query_value are matched
				$is_matched = true;
			} else {
				// Else, there is no match
				$is_matched = false;
			}
		} else {
			// Else, if query_key is not being passed
			// We have no query_key
			// We have no url parameters
			// We have no query value
			$has_params = false;
			$query_value = null;
		}
		// Check: If query_key && query_value are matched
		if ($is_matched) {
			// We are Active
			echo 'active';
		} else {
			// Otherwise we are empty
			echo '';
		}
	}
?>