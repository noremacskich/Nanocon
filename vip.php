<?php

// The vipInfo and presInfo arrays come from this file
include 'database.php';
	
	
/**@fun newvip()
 * 	^	This will create a VIP tile for the vip page
 * 
 * @param $vipID | Integer
 * 	^	The vipID will get all information regarding the VIP
 *
 * @param $presID | Integer
 * 	^	This presID will get all information regard the Presentation the 
 * 	^	VIP is giving.
 * 
 * @todo Noremacskich 2014-3-4
 * 	^	Need to allow multiple Presentations for one VIP
 * 
 * @note NoremacSkich 2014-3-4
 *	^	If the vip or the presentation ID doesn't have data associated with
 * 		it, the containers are still displayed.
 * 
 */
 
function newvip($vipID, $presID){
	
	// Grab the vip info
	$vipInfo = getVIPInfo($vipID);
	// and grab the presentation info.
	$presInfo = getPresInfo($presID);
	
	echo <<<EOD
<div class="vip ui-corner-all custom-corners">
	<h1 class="ui-bar ui-bar-a">{$vipInfo["name"]}</h1>
	<div class="ui-body ui-body-a">
		<img class="vipimage" src="{$vipInfo["profileImage"]}" alt="{$vipInfo["name"]}" />
		<div class="bio">
			<div data-role="collapsible">
				<h2>Presentation Info</h2>
				<div class="timeplace">
					<div class="pres_time">{$presInfo["time"]}</div>
					<div class="pres_location">{$presInfo["location"]}</div>
				</div>
				<h2>{$presInfo["title"]}</h2>
				<p>{$presInfo["description"]}</p>
			</div>
			<div class="about" data-role="collapsible">
				<h2>About the VIP</h2>
				<p>{$vipInfo["about"]}</p>
			</div>
		</div>
	</div>
</div>
EOD;
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

			<?php basicHeader(); ?>				
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