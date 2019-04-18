<?php
		$acf_php_files = new DirectoryIterator(get_template_directory() . '/acf-json/');
		foreach($acf_php_files as $file) {
			if(pathinfo($file, PATHINFO_EXTENSION) === 'php') :
				$filename_php = basename($file);
				$path_to_json = get_template_directory() . '/acf-json/' . $filename_php;
				require $path_to_json;
			endif;
		}
?>