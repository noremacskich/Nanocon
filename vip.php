<?php
/**@function newvip()
 * 	^	This will create a VIP tile for the vip page
 * 
 * @param $vipName | String
 * 	^	This is the name of the VIP
 * 
 * @param $vipProfile | File Path
 * 	^	Where is this VIP's profile picture located?
 * 
 * @param $vipAbout | Text Blob
 * 	^	Who is the VIP?  What is he know for?  This should be general 
 * 	^	background information.
 * 
 * @param presTitle | String
 * 	^	What is the Title of the Presentation topic the vip will be 
 * 		discussing
 * 
 * @param $presDescription | Text Blob
 * 	^	Give a brief summery about the presentation topic.
 * 
 * @param $presLocation | String
 * 	^	Where is this taking place at?
 * 
 * @param $presTime | Formatted String
 * 	^	When will he be presenting?
 * 	F	(Day of Week) Start Hour-End Hour (am|pm)
 * 	E	Sat 6-8pm
 * 
 * @todo NoremacSkich
 * 	^	Need to cut down on the number of parameters for this function.
 * 
 * @todo Noremacskich
 * 	^	Need to allow multiple Presentations for one VIP
 * 
 */
function newvip(
	$vipName,			// Name of the VIP
	$vipProfile,		// Path to Picture of VIP
	$vipAbout,		// General Background about the VIP
	$presTitle,		// What is the Title of the Presentation topic the vip will be discussing
	$presDescription,	// Give a brief summery about the presentation topic.
	$presLocation,		// Where will the VIP be presenting?
	$presTime			// When will he be presenting? (ex: Sat 6-8pm : Sun 1-3am : Fri 11-1pm)
){
	echo '<div class="vip ui-corner-all custom-corners">';
	echo '	<h1 class="ui-bar ui-bar-a">' . $vipName . '</h1>';
	echo '	<div class="ui-body ui-body-a">';
	echo '		<img class="vipimage" src="' . $vipProfile . '" alt="' . $vipName . '" />';
	echo '		<div class="bio">';
	echo '			<div class="Presentation" data-role="collapsible">';
	echo '				<h2>' . $presTitle . '</h2>';
	echo '				<div class="timeplace">';
	echo '					<div class="pres_time">' . $presTime . '</div>';
	echo '					<div class="pres_location">' . $presLocation . '</div>';
	echo '				</div>';
	echo '				<p>' . $presDescription . '</p>';
	echo '			</div>';
	echo '			<div class="about" data-role="collapsible">';
	echo '				<h2>About the VIP</h2>';
	echo '				' . $vipAbout . '';
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
					newvip(
						"Noremac Skich",			// Name of the VIP
						"./imgs/vip/1.jpg",		// Path to Picture of VIP
						"
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
						",		// General Background about the VIP
						"About the Presentation",		// What is the Title of the Presentation topic the vip will be discussing
						"<h2>This is a really long title, so long in fact you might
						call it rediculous.</h2>
											<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
						",	// Give a brief summery about the presentation topic
						"Auditorium",		// Where will the VIP be presenting?
						'Sat 6-8pm'			// When will he be presenting? (ex: Sat 6-8pm : Sun 1-3am : Fri 11-1pm)
					);
					
					newvip(
						"Noremac Skich",			// Name of the VIP
						"./imgs/vip/2.jpg",		// Path to Picture of VIP
						"
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
						",		// General Background about the VIP
						"About the Presentation",		// What is the Title of the Presentation topic the vip will be discussing
						"<h2>This is a really long title, so long in fact you might
						call it rediculous.</h2>
											<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
						",	// Give a brief summery about the presentation topic
						"Auditorium",		// Where will the VIP be presenting?
						'Sat 6-8pm'			// When will he be presenting? (ex: Sat 6-8pm : Sun 1-3am : Fri 11-1pm)
					);
										newvip(
						"Noremac Skich",			// Name of the VIP
						"./imgs/vip/4.png",		// Path to Picture of VIP
						"
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
						",		// General Background about the VIP
						"About the Presentation",		// What is the Title of the Presentation topic the vip will be discussing
						"<h2>This is a really long title, so long in fact you might
						call it rediculous.</h2>
											<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer nec odio. Praesent libero. Sed cursus ante dapibus 
						diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. 
						Duis sagittis ipsum. <b>Lorem ipsum dolor sit amet, consectetur 
						adipiscing elit</b>. Praesent mauris. <b>Lorem ipsum dolor 
						sit amet, consectetur adipiscing elit</b>. Fusce nec tellus 
						sed augue semper porta. Mauris massa. Vestibulum lacinia arcu 
						eget nulla. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Curabitur sodales 
						ligula in libero. 
					</p>

					<p>
						Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh.
						 <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit</i>. 
						 Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed 
						 convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. 
						 Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. 
						 Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus 
						 metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat 
						 condimentum velit. Class aptent taciti sociosqu ad litora torquent 
						 per conubia nostra, per inceptos himenaeos. 
					 </p>
						",	// Give a brief summery about the presentation topic
						"Auditorium",		// Where will the VIP be presenting?
						'Sat 6-8pm'			// When will he be presenting? (ex: Sat 6-8pm : Sun 1-3am : Fri 11-1pm)
					);
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