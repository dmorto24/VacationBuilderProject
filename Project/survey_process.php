<?php
include("db_connection.php");
include("menu.php");

$theme = $_POST['theme'];
$lodging = $_POST['lodging'];
$travelmethod = $_POST['travelmethod'];
//$budget = $_POST['budget'];
$rental = $_POST['rental'];
$ren = $_POST['rentalType'];
$numPeople = $_POST['numPeople'];
$leaveDate = $_POST['leaveDate'];
$returnDate = $_POST['returnDate'];
$resturants = $_POST['resturants'];
$activities= $_POST['activities'];


$sql = "INSERT INTO survey_table (user_id,type,lodging,travel_method,price,rental,type_rental,num_people,leave_date,return_date,food_type,activities) 
		VALUES (1,'$theme', '$lodging', '$travelmethod',100, '$rental', '$ren', '$numPeople','$leaveDate','$returnDate','$resturants','$activities')";
		
$result = $connect->query($sql);

if ($result == FALSE){
	echo "Error: ".$connect->error;
}
?>
<html>
<script>
function returnHome(){
	window.location.href="http://localhost/Project/display_hotels.php"
}
</script>
<body align='center'>
	Survey Successfully Submitted<br>
	<button onclick=returnHome()> Return Home </button>
</body>
</html>