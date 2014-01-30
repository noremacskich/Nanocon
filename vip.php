<?php

/**@function newvip()
 * 	^	This will create a VIP tile for the vip page
 * 
 * @param $vipID | Integer
 * 	^	The vipID will get all information regarding the VIP
 *
 * @param $presID | Integer
 * 	^	This presID will get all information regard the Presentation the 
 * 	^	VIP is giving.
 * 
 * @todo Noremacskich
 * 	^	Need to allow multiple Presentations for one VIP
 * 
 */
 
function newvip($vipID, $presID){
	
	// The vipInfo and presInfo arrays come from this file
	include 'database.php';
	
	echo '<div class="vip ui-corner-all custom-corners">';
	echo '	<h1 class="ui-bar ui-bar-a">' . $vipInfo["name"] . '</h1>';
	echo '	<div class="ui-body ui-body-a">';
	echo '		<img class="vipimage" src="' . $vipInfo["img"] . '" alt="' . $vipInfo["name"] . '" />';
	echo '		<div class="bio">';
	echo '			<div class="Presentation" data-role="collapsible">';
	echo '				<h2>Presentation Info</h2>';
	echo '				<div class="timeplace">';
	echo '					<div class="pres_time">' . $presInfo["time"] . '</div>';
	echo '					<div class="pres_location">' . $presInfo["location"] . '</div>';
	echo '				</div>';
	echo '				<h2>' . $presInfo["title"] . '</h2>';
	echo '				<p>' . $presInfo["description"] . '</p>';
	echo '			</div>';
	echo '			<div class="about" data-role="collapsible">';
	echo '				<h2>About the VIP</h2>';
	echo '				' . $vipInfo["about"] . '';
	echo '			</div>';
	echo '		</div>';
	echo '	</div>';
	echo '</div>';
}



?>

<?php
	// require 'path/to/file'; is very similar to an include in C/C++
	require '/htmlchunks.php'; // This will hold basic functions that will create simple html
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
					newCss('css/core.css');
					newCss('css/desktop.css');
					newCss('css/phone.css');
					newCss('css/tablet.css');
					
				?>				
		</head>
		<body>
			<div data-role="page">
				<header data-role="header" data-position="fixed" role="banner">
					<h1>Nanocon - 2014</h1>
					<a href="#nav-panel" data-icon="carat-l" data-iconpos="notext" class="ui-btn-right">Menu</a>
				</header>
				<div data-role="content" id="">
				<?php
					// Create a bunch of random VIP's with various
					// attributes for testing purposes.
					$i = rand(2,20);
					while($i!=0){
						newvip(rand(1,100), rand(1,100));
						$i--;
					}
				?>
				
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