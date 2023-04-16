<?php
include("db_connection.php");
include("menu.php");
session_start();
$uid = $_SESSION['id'];
$theme = $_POST['theme'];
$lodging = $_POST['lodging'];
$travelmethod = $_POST['travelmethod'];
$budget = $_POST['budget'];
$rental = $_POST['rental'];
$ren = $_POST['rentalType'];
$numPeople = $_POST['numPeople'];
$leaveDate = $_POST['leaveDate'];
$returnDate = $_POST['returnDate'];
$resturants = $_POST['resturants'];
$activities= $_POST['activities'];


$sql = "INSERT INTO survey_table (`sid`, `user_id`, `type`, `lodging`, `travel_method`, `price`, `rental`, `type_rental`, `num_people`, `leave_date`, `return_date`, `food_type`,`activities`) 
		VALUES (0, '$uid', '$theme', '$lodging', '$travelmethod', '$budget', '$rental', '$ren', '$numPeople','$leaveDate','$returnDate','$resturants','$activities')";
		
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}

echo "<h3>Based off Your Survey Results, You Might Like...</h3>";

if ($activities == "ocean"){
	$sql2="SELECT * FROM activity_table LIMIT 3";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while($row2 = $result2->fetch_assoc())
	{
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['name']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addactivitytopackage.php' method='post'><button type='submit' name=activity id='activity".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
		echo "</td>";
		
		$count++;
		$total++;
		
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}

if ($activities == "ski"){
	$sql2="SELECT * FROM activity_table WHERE sid > 3";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 4)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['name']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addactivitytopackage.php' method='post'><button type='submit' name=activity id='activity".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($activities == "explore"){
	$sql2="SELECT * FROM activity_table WHERE sid > 6";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 4)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['name']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addactivitytopackage.php' method='post'><button type='submit' name=activity id='activity".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($activities == "amusement"){
	$sql2="SELECT * FROM activity_table WHERE sid > 9";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 4)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['name']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addactivitytopackage.php' method='post'><button type='submit' name=activity id='activity".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}

if ($activities == "museums"){
	$sql2="SELECT * FROM activity_table WHERE sid > 12";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 4)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['name']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addactivitytopackage.php' method='post'><button type='submit' name=activity id='activity".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($activities == "shop"){
	$sql2="SELECT * FROM activity_table WHERE sid > 15";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 4)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['name']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addactivitytopackage.php' method='post'><button type='submit' name=activity id='activity".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($ren == "suv"){
	$sql2="SELECT * FROM car_table WHERE sid >= 1";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 8)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['type']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addcartopackage.php' method='post'><button type='submit' name=car id='car".$total."' value='".$row2['type']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($ren == "luxury"){
	$sql2="SELECT * FROM car_table WHERE sid > 7";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 6)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['type']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addcartopackage.php' method='post'><button type='submit' name=car id='car".$total."' value='".$row2['type']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($ren == "sport"){
	$sql2="SELECT * FROM car_table WHERE sid > 12";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 6)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['type']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addcartopackage.php' method='post'><button type='submit' name=car id='car".$total."' value='".$row2['type']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($ren == "van"){
	$sql2="SELECT * FROM car_table WHERE sid > 17";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while(($row2 = $result2->fetch_assoc()) && ($total < 5)){
		
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['type']."-";
			echo $row2['price']."<br>";
		echo "</a>";
			echo "<form action='addcartopackage.php' method='post'><button type='submit' name=car id='car".$total."' value='".$row2['type']."'>Add to Package</button></form>";
		
		echo "</td>";
			
		$count++;
		$total++;
			
		if($count==4){
			echo "</tr><tr>";
			$count=1;
		}
	}
	echo "</table>";
}
if ($theme == "beach"){
	if ($lodging == "airbnb"){
		$sql2="SELECT * FROM hotel_table WHERE sid < 6";
		$result2=$connect->query($sql2);
	
		$count=1;
		$total=1;
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while(($row2 = $result2->fetch_assoc()) && ($total < 6)){
		
			echo "<td>";
			echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
				echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
				echo "<br>";
				echo $row2['name']."-";
				echo $row2['location']."<br>";
				echo $row2['price']."<br>";
			echo "</a>";
				echo "<form action='addlodgingtopackage.php' method='post'><button type='submit' name=lodging id='lodging".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
			echo "</td>";
				
			$count++;
			$total++;
			
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
	if ($lodging == "hotel"){
		$sql2="SELECT * FROM hotel_table WHERE sid > 5";
		$result2=$connect->query($sql2);
	
		$count=1;
		$total=1;
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while(($row2 = $result2->fetch_assoc()) && ($total < 3)){
		
			echo "<td>";
			echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
				echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
				echo "<br>";
				echo $row2['name']."-";
				echo $row2['location']."<br>";
				echo $row2['price']."<br>";
			echo "</a>";
				echo "<form action='addlodgingtopackage.php' method='post'><button type='submit' name=lodging id='lodging".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
			echo "</td>";
				
			$count++;
			$total++;
			
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
	if ($lodging == "resort"){
		$sql2="SELECT * FROM hotel_table WHERE sid > 7";
		$result2=$connect->query($sql2);
	
		$count=1;
		$total=1;
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while(($row2 = $result2->fetch_assoc()) && ($total < 3)){
		
			echo "<td>";
			echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
				echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
				echo "<br>";
				echo $row2['name']."-";
				echo $row2['location']."<br>";
				echo $row2['price']."<br>";
			echo "</a>";
				echo "<form action='addlodgingtopackage.php' method='post'><button type='submit' name=lodging id='lodging".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
			echo "</td>";
				
			$count++;
			$total++;
			
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
}
if ($theme == "mountain"){
	if ($lodging == "hotel"){
		$sql2="SELECT * FROM hotel_table WHERE sid > 9";
		$result2=$connect->query($sql2);
	
		$count=1;
		$total=1;
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while(($row2 = $result2->fetch_assoc()) && ($total < 2)){
		
			echo "<td>";
			echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
				echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
				echo "<br>";
				echo $row2['name']."-";
				echo $row2['location']."<br>";
				echo $row2['price']."<br>";
			echo "</a>";
				echo "<form action='addlodgingtopackage.php' method='post'><button type='submit' name=lodging id='lodging".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
			echo "</td>";
				
			$count++;
			$total++;
			
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
	if ($lodging == "airbnb"){
		$sql2="SELECT * FROM hotel_table WHERE sid > 10";
		$result2=$connect->query($sql2);
	
		$count=1;
		$total=1;
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while(($row2 = $result2->fetch_assoc()) && ($total < 6)){
		
			echo "<td>";
			echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
				echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
				echo "<br>";
				echo $row2['name']."-";
				echo $row2['location']."<br>";
				echo $row2['price']."<br>";
			echo "</a>";
				echo "<form action='addlodgingtopackage.php' method='post'><button type='submit' name=lodging id='lodging".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
			echo "</td>";
				
			$count++;
			$total++;
			
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
	if ($lodging == "skilodge"){
		$sql2="SELECT * FROM hotel_table WHERE sid > 15";
		$result2=$connect->query($sql2);
	
		$count=1;
		$total=1;
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while(($row2 = $result2->fetch_assoc()) && ($total < 3)){
		
			echo "<td>";
			echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
				echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
				echo "<br>";
				echo $row2['name']."-";
				echo $row2['location']."<br>";
				echo $row2['price']."<br>";
			echo "</a>";
				echo "<form action='addlodgingtopackage.php' method='post'><button type='submit' name=lodging id='lodging".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
			echo "</td>";
				
			$count++;
			$total++;
			
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
}
if ($theme == "city"){
	if ($lodging == "hotel"){
		$sql2="SELECT * FROM hotel_table WHERE sid > 17";
		$result2=$connect->query($sql2);
	
		$count=1;
		$total=1;
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while(($row2 = $result2->fetch_assoc()) && ($total < 8)){
		
			echo "<td>";
			echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
				echo "<img height='400px' width='500px' src= '".$row2['img']."'/>";
				echo "<br>";
				echo $row2['name']."-";
				echo $row2['location']."<br>";
				echo $row2['price']."<br>";
			echo "</a>";
				echo "<form action='addlodgingtopackage.php' method='post'><button type='submit' name=lodging id='lodging".$total."' value='".$row2['name']."'>Add to Package</button></form>";
		
			echo "</td>";
				
			$count++;
			$total++;
			
			if($count==4){
				echo "</tr><tr>";
				$count=1;
			}
		}
		echo "</table>";
	}
}
?>
<html>
<script>
function returnHome(){
	window.location.href="http://localhost/Project/display_hotels.php"
}
</script>
<body align='center'>
	<br><button onclick=returnHome()> Return Home </button>
</body>
</html> 