
<?php

	/*
	 * newText
	 * @param $txt | String
	 * 		^This is what the button will say
	 * 		^"Button"
	 * 
	 * @param $link | HyperLink
	 * 		^This is where the button will send you
	 * 		^"#"

	 */
	function newText($id, $Label){
		echo '<label for="' . $id . '">' . $Label . '</label>';
		echo '<input type="text" name="' . $id . '" id="' . $id . '" value="" data-clear-btn="true" data-mini="true">';
	}
	/*
	 * Button
	 * @param $txt | String
	 * 		^Description This is what the button will say
	 * 		^Default "Button"
	 * 
	 * @param $link | HyperLink
	 * 		^Description This is where the button will send you
	 * 		^Default "#"
	 * 
	 * @param $Icon | File
	 * 		^Description If you want an Icon, you put it here
	 * 		^Default ""
	 */
    function Button($text='Button', $link='#', $Icon=''){
		// The link needs http:// in order to function correctly
		
		// Now spit it out to the website
	    echo '<a href="' . $link . '" data-role="button" '. $Icon . '>' . $text . '</a>';
	}
?>
<?php
	// require 'path/to/file'; is very similar to an include in C/C++
	require '/htmlchunks.php'; // This will hold basic functions that will create simple html
	//require '/navigation.php'; // this is where all the navigaiton functions are stored
?>
<!DOCTYPE html> 
	<html>
		<head>
			<title>Nanocon</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">

				<?php 
					//newScript('libs/java/jquery-1.10.2.min.js');

					// Jquery Mobile Library via CDN-hosted files
					newCss('http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css');
					newScript('http://code.jquery.com/jquery-1.9.1.min.js');
					newScript('http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js');
					// end Jquery Mobile Library
					//newScript('libs/java/slick-nav/jquery.slicknav.js');
					//newCss('libs/java/slick-nav/slicknav.css');
					newCss('css/core.css');
					newCss('css/desktop.css');
					newCss('css/phone.css');
					newCss('css/tablet.css');
					
				?>
				<!-- Needed for Jquery Mobile Library -->
				
		</head>
		<body>
			<div data-role="page">
				<header data-role="header" data-position="fixed" role="banner">
					<h1>Nanocon - 2014</h1>
					<a href="#nav-panel" data-icon="carat-l" data-iconpos="notext" class="ui-btn-right">Menu</a>
				</header>
				<div data-role="content" id="">
					<form class="userform">
						<h2></h2>
						<?php
							newText('fullname', 'Full Name');
							newText('address', 'Address');
						?>

						<div class="ui-grid-a">
							<div class="ui-block-a"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-b ui-mini">Cancel</a></div>
							<div class="ui-block-b"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-mini">Save</a></div>
						</div>
					</form>
				</div>
				<footer data-role="footer">
					<p>Nanocon - 2014</p>
				</footer>
				<?php
					include 'navigation.php';
				?>
			</div>
		</body>
	</html>