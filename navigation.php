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
	 * @param $attributes | String | Optional
	 * 			^	This will allow additional attributes to be added to 
	 * 				this page link.
	 * 			^	The default is a empty string
	 */
	function newPageLink($href, $label, $attributes=''){
		echo '		<li><a href="' . $href . '" ' . $attributes . ' >' . $label . '</a></li>';
	}

?>
<!-- This is the new navigation Bar.  When the display is small, we will 
	hide it, but when showing on monitor, it should show.  It will need 
	to be put after the footer in order to work. -->
<div data-role="panel" data-position="right" data-position-fixed="true" data-display="overlay" data-theme="a" id="nav-panel">
	<div data-role="collapsible-set">
			<ul data-role="listview">
			<?php
				newPageLink('#',"Close",'data-rel="close" data-icon="delete" data-inset="true" data-split-icon="delete"');
				newPageLink('http://127.0.0.1/nanocon/events.php','Events');
				newPageLink('#','Option2');
				newPageLink('#','Option3');
			?>
			</ul>

	</div>
</div><!-- /panel -->

