<?php
	require '/htmlchunks.php'; // very similar to include in C/C++
    
	echo '<html>';
	echo '	<head>';
	echo '		<title>Nanocon</title>';
				newScript('/libs/java/jquery-1.10.2.min.js');
				newCss('/css/core.css');
	echo '	</head>';
	echo '	<body>';
	echo '		<h1>Nanocon Homepage</h1>';
	echo '	</body>';
	echo '</html>';
?>