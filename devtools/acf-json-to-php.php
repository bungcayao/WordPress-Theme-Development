<?php

/**
 * Convert ACF JSON to ACF PHP
 *
 * Requirements: ACF Pro v 5.0.0 or Higher
 *
 */
function acf_json_to_php()
{

	// Look inside acf-json directory
	$acf_json_files = new DirectoryIterator('./acf-json/');

	foreach ($acf_json_files as $file) {
				
		// Look for JSON files only
		if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
					
			// Get Fullname of File (includes extension).
			$filename_json = basename($file);

			// Get Path of Filename
			$path_to_json = './acf-json/' . $filename_json;

			// Get Contents of JSON file
			$get_json = file_get_contents($path_to_json);
					
			// Encode JSON Option
			$encode_json = json_encode($get_json);
					
			// Decode JSON Option (This Converts JSON Arrays -> PHP Arrays)
			$decode_json = json_decode($get_json, true);

			// Print Converted JSON -> PHP Arrays
			$print_json = print_r($get_json, true);

			// This is where I try to convert/cleanup any remaining unattended characters:

			// Convert [] and {} -> array()
			$convert_to_php = str_replace(['[', ']', '{', '}'], ['array(', ')', 'array(', ')'], $get_json);

			// Convert "key" : "value" -> 'key' => 'value'
			$convert_to_php = str_replace("'", "\'", $convert_to_php);
			$convert_to_php = str_replace('":', '\' =>', $convert_to_php);
			$convert_to_php = str_replace('"', '\'', $convert_to_php);
					
			// Replace special Characters
			$convert_to_php = str_replace('\/', '/', $convert_to_php);
			$convert_to_php = str_replace(['\r\n', '\n', '\t'], ['<br>', '<br>', '  '], $convert_to_php);

			// Template of our ACF PHP Export w/ JSON->PHP conversion implemented in the middle.
			$acf_php_template = '<?php 
	
	/* The following was an ACF JSON converted to ACF PHP format */

	if( function_exists(\'acf_add_local_field_group\') ):
		acf_add_local_field_group(
			
			' . $convert_to_php . '
			
		);
endif; ?>';

			// Get Path to JSON file -> Replace .json with .php
			$path_to_php = str_replace('.json', '.php', $path_to_json);

			// Create New PHP file and Put Content from JSON into New File
			file_put_contents($path_to_php, $acf_php_template);

		}

	}
}

// Run the function
acf_json_to_php();
?>