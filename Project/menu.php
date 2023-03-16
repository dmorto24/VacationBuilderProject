
<html>
<head>
	<link rel="stylesheet" href="css\styles.css">
	<?php include("db_connection.php");?>
</head>
<body align="center">
	<h1>Sojourn<a><img src="img/palm.png" class="logo"/></a></h1>
	<ul>
		<li class="menu-item"><a href="vacationSurvey.php" class="drp">Take Survey </a>
		<div class="menu-content">
		</div>
		</li>

		<li class="menu-item"><a href="#" class="drp">Browse </a>	
		<div class="menu-content">
			<a href="display_hotels.php">Hotels</a><br>
			<a href="display_cars.php">Vehicles</a><br>
			<a href="display_activities.php">Activities</a><br>
			<a href="#">Resturants</a><br>
			
		</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Plan </a>	
		<div class="menu-content">
			<a href="#">Start from Scratch</a><br>
			<a href="vacationSurvey.php">Take Survey</a><br>
			
		</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Account </a>	
		<div class="menu-content">
			<a href="#">Your Vacation Package</a><br>
			<a href="#">Settings</a><br>
		</div>
		</li>
	</ul>
</body>
</html>