<?php
	// This opens the connection to the database
	$connection = mysqli_connect("127.0.0.1", "root", "", "vipinfo");
	
	// Check to make sure that we connected
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	// This will get the relevant information from the database
	$result = mysqli_query($connection, "SELECT name, profileImage, about FROM basics WHERE ID=$vipID");
	
	// this allows us to seperate out the results
	$row = mysqli_fetch_array($result);
	
	// put it into an array, for later use
	$vipInfo = array(
		"name" => $row['name'], 
		"img" => $row['profileImage'],
		"about" => $row['about']
	);
	
	// Now Grab the Presentation information
	$result = mysqli_query($connection, "SELECT title, description, location, time FROM presentation WHERE ID=$presID");
	
	// put it in a array
	$row = mysqli_fetch_array($result);

	$presInfo = array(
		"title" => $row['title'], 
		"description" => $row['description'],
		"location" => $row['location'],
		"time" => $row['time']
	);
	
	// Close the connection to the array
	mysqli_close($connection);


?>