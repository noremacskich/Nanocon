<?php
	/* Page Header
	 * 	Description Spits out the html code needed for the head tag
	 * 		and spits out the top body tag
	 * 	@param	Title | String | Optional
	 * 		Description Changes the title of the document
	 * 		Default 'Title'
	 */
	function pageHeader($Title='Title'){
		echo '	<head>';
		echo '		<title>' . $Title . '</title>';
		echo '		<script src="libs/java/jquery-1.10.2.min.js"></script>';
		echo '		<link rel="stylesheet" href="css/myStyleSheet.css"/>';
		echo '	</head>';
	}

?>