<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="css\styles.css">
	<script src="js/script.js"></script>
</head>
<body align=center>
<div class="top" ><div class="dreamVacation" id="dreamTitle" >Your Dream Vacation Starts Here</div></div>
<form action="/action_page.php">

<table class='surveyTable'>
<tr>
	<td><label for="theme">What kind of vacation do you want to go on?</label></td>
		<td><select id="theme" name="theme">
			<option value="mountain">Beach</option>
			<option value="mountain">Mountain</option>
			<option value="city">City</option>
			<option value="romantic">Romantic</option>
			<option value="adventure">Adventure</option>
			<option value="relaxing">Relaxing</option>
		</select></td>
</tr>
<tr>
	<td><label for="lodging">Where would you like to stay?</label></td>
		<td><select id="lodging" name="lodging">
			<option value="hotel">Hotel</option>
			<option value="airbnb">Air BnB</option>
			<option value="resort">Resort</option>
			<option value="skilodge">Ski Lodge</option>
		</select></td>
</tr>
<tr>
	<td><label for="travelmethod">How do you want to get There?</label></td>
		<td><select id="travelmethod" name="travelmethod">
			<option value="drive">Drive</option>
			<option value="fly">Fly</option>
		</select></td>
</tr>
<tr>
	<td><label for="budget">What is your price range</label></td>
		<td><div class="slidecontainer" align='center'><input type="range" min="100" max="1500" value="50" class="slider" id="myRange"><p id='demo'></p></div>
	</td>
</tr>
<tr>
	<td><label for="rental">Will you need a rental car?</label></td>
		<td>Yes:<input type="radio" id="yesRental" name="rental"/>
		No:<input type="radio" id="noRental" name="rental"/></td>
</tr>
<tr>
	<td><label for="rentalType">If yes. What type of car do you need?</label></td>
		<td><select id="resturants" name="resturants">
			<option value="none">None</option>
			<option value="suv">SUV</option>
			<option value="luxury">Luxury</option>
			<option value="sport">Sport</option>
			<option value="van">Van</option>
		</select></td>
</tr>
<tr>
	<td><label for="numPeople">How many people are coming on your vacation?</label></td>
	<td><input type="number" id="numPeople" name="numPeople" min="1"></td>
</tr>
<tr>
	<td><label for="resturants">What kind of food do you like?</label></td>
		<td><select id="resturants" name="resturants">
			<option value="mexican">Mexican</option>
			<option value="bbq">Barbeque</option>
			<option value="italian">Italian</option>
			<option value="seafood">Seafood</option>
			<option value="america">American</option>
			<option value="asain">Asian</option>
		</select></td>
</tr>
<tr>
	<td><label for="activities">What kind of activities are you wanting to do</label></td>
		<td><select id="activities" name="activies">
			<option value="ocean">Ocean Activities</option>
			<option value="ski">Ski</option>
			<option value="explore">Explore</option>
			<option value="amusement">Amusement Park</option>
			<option value="museums">Museums</option>
			<option value="shop">Shop</option>
		</select></td>
</tr>
<tr>
	<td colspan=2><input type="submit" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>