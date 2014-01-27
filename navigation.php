<?php

	/** @function newPage($href, $label)
	 * 	^	This function will quickly create a new list item
	 * 
	 * @param $href | Path
	 * 	^	This is the path to the page you are trying to open
	 * 
	 * @param $label | String
	 * 	^	This is the string that you want to show up in the menu.
	 *
	 * @param $attributes | String | Optional
	 * 	^	This will allow additional attributes to be added to 
	 * 	^	this page link.
	 * 	D	''
	 * 
	 * @todo NoremacSkich
	 * 	^	Need to prevent the link to the current page from being shown.
	 * 	^	Should probably use an if statement.
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
				newPageLink('./index.php', 'Home');
				newPageLink('./events.php', 'Events');
				newPageLink('#','Option2');
				newPageLink('#','Option3');
				newPageLink('#',"Close",'data-rel="close"');
			?>
			</ul>

	</div>
</div><!-- /panel -->

