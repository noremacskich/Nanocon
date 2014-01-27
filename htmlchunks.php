<?php
	
	/**@function newScript($Location)
	 * 	^	This will spit out the html required for a simple script file
	 * 	^	such as a jquery library.
	 * 
	 * @param $Location | File Path
	 * 	^	This is the path to the script file to be included
	 * 
	 */
	function newScript($Location){
		echo '<script src="' . $Location . '"></script>';
	}
	
	/**@function newCss($Location)
	 * 	^	This will spit out the html required to link a css file to the page
	 * 
	 * @param $Location | File Path
	 * 	^	This is the path to the css file to be included
	 * 
	 */
	function newCss($Location){
		echo '<link rel="stylesheet" href="' . $Location . '"/>';
	}
	
?>