<?php
	
	/**@function newScript($Location)
	 * 	^	This will spit out the html required for a simple script file
	 * 	^	such as a jquery library.
	 * 
	 * @param $Location | File Path <br>
	 * 	^	This is the path to the script file to be included
	 * 
	 */
	function newScript($Location){
		echo '<script src="' . $Location . '"></script>';
	}
	
	/**@function newCss($Location)
	 * 	^	This will spit out the html required to link a css file to the page
	 * 
	 * @param $Location | File Path <br>
	 * 	^	This is the path to the css file to be included
	 * 
	 */
	function newCss($Location){
		echo '<link rel="stylesheet" href="' . $Location . '"/>';
	}
	
	/**@fun basicHeader()
	 *	^	This function must go on each page that has a header, since this
	 * 		will contain all the style sheets and java script files needed 
	 * 		for the overall theme and functionality of the website.
	 * 
	 * 
	 */
	function basicHeader(){
		echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
		// Jquery Mobile Library via CDN-hosted files
		newCss('http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css');
		newScript('http://code.jquery.com/jquery-1.9.1.min.js');
		newScript('http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js');
		// end Jquery Mobile Library
		newCss('css/core.css');
		newCss('css/desktop.css');
		newCss('css/phone.css');
		newCss('css/tablet.css');
	}
?>