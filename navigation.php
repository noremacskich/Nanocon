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

?>

	<div data-role="collapsible-set">
		<div data-role="collapsible" data-iconpos="right" data-theme="b">
			<h1>Nanocon 2014</h1>
			<ul data-role="listview">
			<?php
			
				newPageLink('http://127.0.0.1/nanocon/index.php','Home');
				newPageLink('#','Option2');
				newPageLink('#','Option3');
			?>
			</ul>
		</div>
	</div>
