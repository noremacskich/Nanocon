
<?php
	/**@function newTextArea($id, $label, $innerText='')
	 * 		^ This will create a new text area
	 * 
	 * @param $id | String
	 * 		^	This is the unique identifier for this text box
	 * 
	 * @param $Label | String
	 * 		^	This is the label for the text area
	 * 
	 * @param $innerText | String | Optional
	 * 		^	This text will appear in the textbox when first
	 * 			created
	 * 		D	''
	 * 
	 */
	function newTextArea($id, $Label, $innerText=''){
		 echo '<label for="' . $id . '">' . $Label . '</label>';
		 echo '<textarea name="' . $id . '" id="' . $id . '">' . $innerText . '</textarea>';
	 }
	/**@function newText($id, $Label, $attributes='')
	 * 
	 * @param $id | String
	 * 		^	This is the id for the text box
	 * 
	 * @param $Label | String
	 * 		^	This is the label for the box
	 * 
	 * @param $attributes | String | Optional
	 * 		^	Where you can define additional parameters if needed
	 * 		D	""
	 */
	function newText($id, $Label, $attributes=''){
		echo '<fieldset class="ui-field-contain">';
		echo '	<label for="' . $id . '">' . $Label . '</label>';
		echo '	<input type="text" name="' . $id . '" id="' . $id . '" value="" ' . $attributes . ' data-clear-btn="true" data-mini="true">';
		echo '</fieldset>';
	}
	
	/* @function newDropDown($id, $Label, $DropdownList)
	 * 		^	This function will create a dropdown list with the
	 * 			given array in $DropdownList
	 * 
	 * @param $id | unique String
	 * 		^	This is the id for the selectbox
	 * 
	 * @param $Label | String
	 * 		^	This is the label that will hover next to the 
	 * 			drop down list
	 * 
	 * @param $DropdownList | Array | [$dropID, $dropLabel]
	 * 		^	This array hold the id and label for each
	 * 			selection option
	 * 		@element $dropID | String
	 * 				^	This will be the value that will be returned
	 * 					when the form is submitted
	 * 		@element $dropLabel | String
	 * 				^	This is the label that will be shown when 
	 * 					the values are displayed
	 */
	function newDropDown($id, $label, $DropdownList){
		echo '<div class="ui-field-contain">';
		echo '	<label for="' . $id . '">'. $label . '</label>';
		echo '	<select name="' . $id . '" id="' . $id . '">';
		foreach($DropdownList as list($dropID, $dropLabel)){
			echo '<option value="' . $dropID . '">' . $dropLabel . '</option>';
		}
		echo '	</select>';
		echo '</div>';
		
	}
	
	/* @function Button
	 * 		^	This will create a new button
	 * 
	 * @param $txt | String | Optional
	 * 		^	This is what the button will say
	 * 		D	"Button"
	 * 
	 * @param $link | HyperLink
	 * 		^	This is where the button will send you
	 * 		D	"#"
	 * 
	 * @param $Icon | File
	 * 		^	If you want an Icon, you put it here
	 * 		D	""
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
						<h2>Contact Info</h2>
						<?php
							newText('fullname', 'Full Name');
							newText('address', 'Address');
							newText('city', 'City');
							newText('state', 'State');
							newText('zip', 'Zip');
							newText('phone', 'Phone');
							newText('email', 'Email');
						?>
						<h2>Game Info</h2>
						<?php
							newText('title','Title');
							$eventType = [
								[0, 'Seminar'],
								[1, 'Single Game'],
								[2, 'Special Event'],
								[3, 'Elimination Tournament'],
								[4, 'Non-Elimination Tournament']
							];
							newDropdown('eventtype','Event Type', $eventType);
							$gameType = [
								[0, 'Board Game'],
								[1, 'Card Game'],
								[2, 'Computer Game'],
								[3, 'Interactive Role Playing'],
								[4, 'Miniature'],
								[5, 'Role Playing']
							];
							newDropdown('gametype', 'Game Type', $gameType);
							newText('console','Gaming Console');
							newText('publisher', 'Publisher');
							newText('lead', 'GM\'s \ Coordinators');
							newText('players', 'Number of Players');
							newText('sponsor', 'Sponser');
							?>
							<h3>Choose Slot</h3>
							
							<?php
							
							$Day = [
								[0, "Friday"],
								[1, "Saturday"],
								[2, "Sunday"]
							];
							newDropdown('time', 'Day', $Day);
							$eventLength = [
								[1, '1 hour'],
								[2, '2 hours'],
								[3, '3 hours'],
								[4, '4 hours'],
								[6, '6 hours']
							];
							newDropdown('eventLength', 'Event Length', $eventLength);
							$eventTime = [
								[5, "5pm"],
								[6, "6pm"],
								[7, "7pm"],
								[8, '8pm'],
								[9, '9pm'],
								[10, '10pm'],
								[11, '11pm'],
								[12, '12am']
							];
							
							newDropDown('eventTime', 'Event Time', $eventTime);
						?>
						<h2></h2>
						<?php
							newTextArea('description', 'Description');
							newTextArea('knowledge', 'Knowledge');
							newTextArea('SpecialReq', 'Special Requirements');
						
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