<?php
	/**
	 * Module part for displaying HTML WSIWYG
	 * Advanced Custom Fields will be implemented for Users to fill these modules with content
	 *
	 * @link https://www.advancedcustomfields.com/resources/
	 * @link https://bulma.io/documentation/layout/section/
	 *
	 * @package popin
	 */

	if (get_row('sectionHTML')) :
		$sectionHTML = get_row('sectionHTML');
		$renderHTML = $sectionHTML['HTML_WSIWYG'];	
		// Render HTML WSIWYG
		echo $renderHTML;
	endif;
?>