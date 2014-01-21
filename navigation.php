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
		/*echo '<div id="nav" data-role="navbar">';
		echo '	<ul>';
		newPageLink('#','Option1');
		newPageLink('#','Option2');
		newPageLink('#','Option3');
		echo '	</ul>';
		echo '</div>';
*/
		echo <<<endecho
		<ul id="menu2">
		    <li>Parent 1
		        <ul>
		            <li><a href="#">item 3</a></li>
		            <li>Parent 3
		                <ul>
		                    <li><a href="#">item 8</a></li>
		                    <li><a href="#">item 9</a></li>
		                    <li><a href="#">item 10</a></li>
		                </ul>
		            </li>
		            <li><a href="#">item 4</a></li>
		        </ul>
		    </li>
		    <li><a href="#">item 1</a></li>
		    <li>non-link item</li>
		    <li>Parent 2
		        <ul>
		            <li><a href="#">item 5</a></li>
		            <li><a href="#">item 6</a></li>
		            <li><a href="#">item 7</a></li>
		        </ul>
		    </li>
		</ul>
		<script>
		$('#menu2').slicknav({
			label:'Nanocon - 2014'
		});
		</script>
endecho;
	}
?>
