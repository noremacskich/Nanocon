
<?php
	// For now, we need the functions for the forms.
	require 'forms.php';
?>
<?php
	// require 'path/to/file'; is very similar to an include in C/C++
	require '/htmlchunks.php'; // This will hold basic functions that will create simple html
?>
<!DOCTYPE html> 
	<html>
		<head>
			<title>Nanocon</title>
			
				<?php basicHeader(); ?>
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