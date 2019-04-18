<?php
	
	// Var Dump -> Console Log to Browser
	// @link http://php.net/manual/en/debugger.php
	function console_log( $value, $tag ){
		echo '<script>';
		echo '	console.info(\'%c'.$tag.':\', \'background: #1dadb3; color:#fff; padding: 2px 4px; font-weight: bold;\');';
		echo '	console.log('.json_encode($value).');';
		echo '</script>';
	}

?>