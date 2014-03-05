<?php			
	/**@fun connectDatabase()
	 *	^	This function will open up the database and return a connection.
	 * 
	 * @author NoremacSkich | 2014-3-4
	 * 
	 * @error InvalidID | 
	 *	C	Echo's Failed to connect to MySQL with error info
	 *	F	This function simply exits the function.
	 * 
	 * @return Database Connection
	 *	^	This returns a database connection.
	 * 
	 */
	function connectDatabase(){
		
		// Want to separate out this info, since it really shouldn't be in this 
		// file.
		
		// Specify the database name and location
		$dbName = 'vipinfo';
		$dbLocation = '127.0.0.1';
		
		// Specify the user name, then password
		$dbUser = 'root';
		$dbPass = '';
		
		
		// Now try connecting to the database
		$connection = mysqli_connect($dbLocation, $dbUser, $dbPass, $dbName);
		
		// Check to make sure that we connected
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			exit();
		}else{
			return $connection;
		}
		
	}

	/**@fun getVIPInfo($vipID)
	 *	^	This function will return the name, image location and 
	 * 		description for the VIP.
	 * 
	 * @author NoremacSkich | 2014-3-4
	 * 
	 * @param $vipID | Int
	 *	^	This is the id that is assigned to the VIP.
	 * 
	 * @error InvalidID | -1
	 *	C	You provided an vip ID that doesn't exist.
	 *	F	This function does not provide a fix.
	 *
	 * @return Array | [name, img, about]
	 *	^	3 string array
	 * 
	 *	@element name | String
	 *		^	This is the name of the VIP
	 * 
	 *	@element profileImage | File Path
	 * 		^	This is the file path to this VIP's image
	 * 
	 *	@element about | Text Blob
	 * 		^	This is a description of the VIP, expect it to be a very
	 * 			long string, with possible formatting.
	 * 
	 * @todo NoremacSkich 2014-3-4
	 *	^	Add Security checks to the parameter.
	 * 
	 * @todo NoremacSkich 2014-3-4
	 * 	^	Figure out how to deal with an invalid vipID.
	 * 
	 */
	function getVIPInfo($vipID){
		
		// Get a connection to the database.
		$connection = connectDatabase();
		
		// This will get the relevant information from the database
		$result = mysqli_query($connection, "SELECT name, profileImage, about FROM basics WHERE ID=$vipID");
	
		// And close the connection.
		mysqli_close($connection);
		
		// Check to make sure that we got something valid.
		if($result){
			
			// Now return the presentation information.
			return mysqli_fetch_array($result);

		}else{
			
			// The presentation ID doesn't exist, return a -1
			return -1;
			
		}
	}
	
	
	/**@fun getPresInfo($presID)
	 *	^	This function will grab the all info related to the presentation
	 * 		from the database, and return it in an array.
	 * 
	 * @author NoremacSkich | 2014-3-4
	 * 
	 * @param $presID | int
	 *	^	This is the ID of the presentation.
	 * 
	 * @error InvalidID | -1
	 *	C	You provided an presentation ID that doesn't exist.
	 *	F	This function does not provide a fix.
	 * 
	 * @return Array
	 * 	^	This function returns an array with 4 strings.
	 * 
	 * 	@element title | string
	 * 		^	This is the title of the presentation
	 * 
	 * 	@element description | string
	 * 		^	This is a description of the presentation.  Expect the string
	 * 			to be long, and have possible formatting.
	 * 
	 *	@element location | string
	 *		^	This is the where the presentation is taking place.
	 * 
	 *	@element time | String
	 * 		^	This is when the presentation is taking place.
	 * 
	 * @todo NoremacSkich 2014-3-4
	 *	^	Add security checks.
	 * 
	 * @todo NoremacSkich 2014-3-4
	 *	^	Figure out how to deal with an invalid presentation ID.
	 * 
	 */
	function getPresInfo($presID){
		
		$connection = connectDatabase();
		
		// Now Grab the Presentation information
		$result = mysqli_query($connection, "SELECT title, description, location, time FROM presentation WHERE ID=$presID");
		
		// And close the connection.
		mysqli_close($connection);
		
		// Check to make sure that we got something valid.
		if($result){
			
			// Now return the presentation information.
			return mysqli_fetch_array($result);

		}else{
			
			// The presentation ID doesn't exist, return a -1
			return -1;
			
		}
		
	}

?>