<?php
	// ACF PHP to JSON
	// Import Fields with JSON
	// @link https://dev-notes.eu/2017/01/convert-acf-fields-registered-by-php-to-importable-json-format/
	// Drop the code below into a suitable template
	
	/*
	 * USAGE -> Drop the following lines below onto a template need fields from.
		  <?php
				require get_template_directory() . '/devtools/acf-php-to-json.php';
				acf_to_json();
		  ?>
	 */
	
	
	function acf_to_json() {
		$groups = acf_get_local_field_groups();
		$json = [];
		
		foreach ($groups as $group) {
			// Fetch the fields for the given group key
			$fields = acf_get_local_fields($group['key']);
			
			// Remove unecessary key value pair with key "ID"
			unset($group['ID']);
			
			// Add the fields as an array to the group
			$group['fields'] = $fields;
			
			// Add this group to the main array
			$json[] = $group;
		}
		
		$json = json_encode($json, JSON_PRETTY_PRINT);
// Optional - echo the JSON data to the page
		echo "<pre>";
		echo $json;
		echo "</pre>";

// Write output to file for easy import into ACF.
// The file must be writable by the server process. In this case, the file is located in
// the current theme directory.
		$file = get_template_directory() . '/devtools/acf-import.json';
		file_put_contents($file, $json );
	}
	acf_to_json();
?>


