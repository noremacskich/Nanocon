<?php
	// require 'path/to/file'; is very similar to an include in C/C++
	require '/htmlchunks.php'; // This will hold basic functions that will create simple html
	require '/navigation.php'; // this is where all the navigaiton functions are stored
?>
	<html>
		<head>
			<title>Nanocon</title>
				<?php 
					newScript('libs/java/jquery-1.10.2.min.js');

					// Jquery Mobile Library via CDN-hosted files
					newCss('http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css');
					newScript('http://code.jquery.com/jquery-1.9.1.min.js');
					newScript('http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js');
					// end Jquery Mobile Library
					newScript('libs/java/slick-nav/jquery.slicknav.js');
					newCss('libs/java/slick-nav/slicknav.css');
					newCss('css/core.css');
				?>
				<!-- Needed for Jquery Mobile Library -->
				<meta name="viewport" content="width=device-width, initial-scale=1">
		</head>
		<body data-role="page">
			<header data-role="header" id="header">
				<h1>Nanocon 2014</h1>
				
				<?php 
					createNav();
				?>
			</header>
			<div data-role="content">
				<p>Welcome to the Nanocon 2014 Website!</p>
			</div>
			<footer data-role="footer">
				<p>Nanocon - 2014</p>
			</footer>
			
		</body>
	</html>
