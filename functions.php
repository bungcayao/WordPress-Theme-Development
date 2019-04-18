<?php
// TODO (Josh)
// `popin-theme-scripts.php` will be mixed into _archive/scripts.php.
// Eventually, version 6.0 will take overand everything in _archive
// will be merged or  mixed in somehow or deprecated

/*************************************************************************************************************************/

// @popin - version 5.X.X

	// Default settings
	// This needs to be enabled in order for posts to show up.
	// Not sure why, but will have to look into this later.
	include( get_template_directory() . '/inc/_archive/default.php' );
	
	// Custom Posts
	// include( get_template_directory() . '/inc/_archive/custom-posts.php' );
	
	// Theme sidebars
	//include( get_template_directory() . '/inc/_archive/sidebars.php' );
	
	// Theme menus
	// include( get_template_directory() . '/inc/_archive/menus.php' );
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'popin' ),
		'footer_nav' => __( 'Footer Navigation', 'popin' ),
	) );
	
	// Theme css & js (also includes scripts for v6+ js/css)
	// include( get_template_directory() . '/inc/_archive/scripts.php' );

	// Hacks & Custom Functions
	include( get_template_directory() . '/inc/_archive/hacks.php' );

/*************************************************************************************************************************/

/**
 * Turn Off Warnings and Errors on PHP
 * @link https://stackoverflow.com/questions/1645661/turn-off-warnings-and-errors-on-php-mysql?answertab=votes#tab-top
 */

 // Turn off all error reporting
 error_reporting(0);
 // Report simple running errors
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
 // Reporting E_NOTICE can be good too (to report uninitialized
 // variables or catch variable name misspellings ...)
 error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
 // Report all errors except E_NOTICE
 // This is the default value set in php.ini
 error_reporting(E_ALL ^ E_NOTICE);
 // Report all PHP errors (see changelog)
 error_reporting(E_ALL);
 // Report all PHP errors
 error_reporting(-1);
 
 // Same as error_reporting(E_ALL);
 ini_set('error_reporting', E_ALL);


/**
 * Prevent User Enumeration
 * @link https://medium.com/@ahmed_elhady/wordpress-username-enumeration-techniques-2ca0510df632
 */

if (!is_admin()) {
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
	add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request)
{
	// permalink URL format
	if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
	else return $redirect;
}


/** WordPress Environment Setup * */
if ( file_exists( ABSPATH . 'wp-environment.php') ) :
	/** The config file resides in ABSPATH */
	include( ABSPATH . 'wp-environment.php' );
elseif ( @file_exists( dirname( ABSPATH ) . '/wp-environment.php' ) ) :
	/** The config file resides one level above ABSPATH but is not part of another installation */
	include( dirname( ABSPATH ) . '/wp-environment.php' );
else :
  /* 
    wp-environment.php file doesn't exist.
    Word Press Environment is not setup
  */
	$WPENV = null;
endif;

// @popin - version 6.0

	/**
	 * popin functions and definitions
	 *
	 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
	 *
	 * @package popin
	 */

	/**
	 *  Devtools -> Console Log
	 *  You're able to make php console logs by using console_log($value, $tag);
	 *  @param $value -> the variable you want to log
	 *  @param $tag -> string that you want to comment or accompany the value with.
	 * 
	 */
	require get_template_directory() . '/devtools/console_log.php';



	if( $WPENV == 'local' ) :
		/**
		 *  Advanced Custom Field Groups
		 *
		 * v1
		 * require get_template_directory() . '/inc/acf-modules.php';
		 * require get_template_directory() . '/inc/acf-theme-options.php';
		 *
		 * v2
		 * require get_template_directory() . '/inc/acf-groups.php';
		 *
		 * v3
		 * After spending countless hours, I had this idea of syncing our changes
		 * to any Custom Fields Group by using sing the `acf-groups.php` script 
		 * referenced above. It auto-exports a php based on the auto-generated acf-json files
		 * that the plugin creates in the `/acf-json/` folder. My script looks for
		 * the json files, copies the data objects, decodes them into php object arrays,
		 * cleans it up and ideally should be ready to plugin.
		 * 
		 * JSON vs PHP
		 * JSON involves the Admin/Editor on WordPress to manually sync the Field Groups through
		 * the plugin.
		 * PHP version needs to be `required` inthe functions.php file and will update as long as
		 * the php is updated.
		 * PROBLEM: My PHP format needs more polish. Encoded/decoded characters might 
		 * break the ACF PHP format, which makes the custom field group broken or actually
		 * breaks the site all together.
		 * 
		 * v4
		 * We are currently using the .json files in the `/acf-json/` directory. I've manually
		 * imported them into the live site and should now be able to have a 'sync' feature
		 * when the ACF plugin detects modifications in the file.
		 *
		 */
	endif;

	/**
	 *  Theme css & js (also includes scripts for v6+ js/css)
	 */
	require get_template_directory() . '/inc/popin-theme-scripts.php';

	/**
	 *  Setup Custom Posts
	 */
	require get_template_directory() . '/inc/popin-theme-custom-posts.php';
	
	/**
	 *  Run popin theme setup
	 */
	require get_template_directory() . '/inc/popin-theme-setup.php';
	
	/**
	 *  Setup popin theme custom functions & definitions
	 */
	require get_template_directory() . '/inc/popin-theme-custom.php';

	/**
	 *  Setup Custom Image Sizes
	 */
	require get_template_directory() . '/inc/popin-theme-thumbnails.php';	
	
	/**
	 * Setting Up Support for Custom Header Navigation
	 */
	require get_template_directory() . '/inc/template-navmenu-header.php';
	
	/**
	 * Setting Up Support for Custom Footer Navigation
	 */
	require get_template_directory() . '/inc/template-navmenu-footer.php';
	
	/**
	 * Custom template tags for this theme.
	 */
	require get_template_directory() . '/inc/template-tags.php';
	
	/**
	 * Functions which enhance the theme by hooking into WordPress.
	 */
	require get_template_directory() . '/inc/template-functions.php';
	
	/**
	 * Customizer additions.
	 */
	require get_template_directory() . '/inc/customizer.php';
	
	/**
	 * Load Jetpack compatibility file.
	 */
	if(defined('JETPACK__VERSION')) {
		require get_template_directory() . '/inc/jetpack.php';
	}
?>