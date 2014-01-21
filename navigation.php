<?php


	/* @function newPage($href, $label)
	 * 		^This function will quickly create a new list item
	 * 
	 * @param $href | Path
	 * 			^	This is the path to the page you are trying to open
	 * 
	 * @param $label | String
	 * 			^	This is the string that you want to show up in the menu.
	 *
	 */
	function newPageLink($href, $label){
		echo '		<li><a href="' . $href . '">' . $label . '</a></li>';
	}
	
	/* @function createNav()
	 * 		^ This will echo all of the navigation html
	 * 
	 * @requires jQuery Mobile
	 * 
	 */
	function createNav(){
		echo '<div id="nav" data-role="navbar">';
		echo '	<ul>';
		newPageLink('#','Option1');
		newPageLink('#','Option2');
		newPageLink('#','Option3');
		echo '	</ul>';
		echo '</div>';

	}
?>
