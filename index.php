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
				<header data-role="header">
					<div id="heading" class="ui-grid-a">
						<div id="mascot" class="ui-block-a">
							&nbsp;						
						</div>
						<div id="nav" class="ui-block-b">
							<?php include 'navigation.php';	?>
						</div>
					</div>
				</header>
				<div data-role="content">
					<p>Welcome to the Nanocon 2014 Website!</p>
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
				</div>
				<footer data-role="footer">
					<p>Nanocon - 2014</p>
				</footer>
			</div>
		</body>
	</html>
