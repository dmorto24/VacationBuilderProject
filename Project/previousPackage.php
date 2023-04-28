<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];?>
<html>
<head>
	<script src="jss\script.js"></script>
	<link rel="stylesheet" href="css\styles.css">
</head>
<body>
<table align="center">

<?php	
	$sql2="SELECT * FROM previous_table WHERE user_id='$uid' ";
	$result2=$connect->query($sql2);
	if(mysqli_num_rows($result2) == 0){
		echo "<h2> No previous vacations </h2>";
	}
	else{
		$countCAR=1;
		$countHOT=1;
		$countRES=1;
		$countACT=1;
		$sqlCAR="SELECT * FROM previous_table WHERE user_id='$uid' AND type='C'";
		$sqlACT="SELECT * FROM previous_table WHERE user_id='$uid' AND type='A'";
		$sqlHOT="SELECT * FROM previous_table WHERE user_id='$uid' AND type='L'";
		$sqlRES="SELECT * FROM previous_table WHERE user_id='$uid' AND type='R'";
		$resultCAR=$connect->query($sqlCAR);
		$resultACT=$connect->query($sqlACT);
		$resultHOT=$connect->query($sqlHOT);
		$resultRES=$connect->query($sqlRES);
		
		echo "<h2>Cars you have rented</h2>";
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while($rowCAR = $resultCAR->fetch_assoc())
		{
			if($countCAR==4){
				echo "</tr><tr>";
				$countCAR=1;
			}
			$sqlCAR2="SELECT * FROM car_table WHERE type='".$rowCAR['added']."'";
				$resultCAR2=$connect->query($sqlCAR2);
				$rowCAR2 = $resultCAR2->fetch_assoc();
				echo "<td>";
					echo "<img height='400px' width='500px' src= '".$rowCAR2['img']."'/>";
					echo "<br>";
					echo $rowCAR2['type']."<br>";
					echo "$".$rowCAR2['price']."/day<br>";
				echo "</td>";
				$countCAR++;
				
				
		}
		echo "</table>";
		
		echo "<h2>Lodging you have stayed at</h2>";
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while($rowHOT = $resultHOT->fetch_assoc())
		{
			if($countHOT==4){
				echo "</tr><tr>";
				$countHOT=1;
			}
			$sqlHOT2="SELECT * FROM hotel_table WHERE name='".$rowHOT['added']."'";
				$resultHOT2=$connect->query($sqlHOT2);
				$rowHOT2 = $resultHOT2->fetch_assoc();
				echo "<td>";
					echo "<img height='400px' width='500px' src= '".$rowHOT2['img']."'/>";
					echo "<br>";
					echo $rowHOT2['name']."<br>";
					echo "$".$rowHOT2['price']."/day<br>";
				echo "</td>";
				$countHOT++;
				
				
		}
		echo "</table>";
		
		echo "<h2>Activities you've done</h2>";
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while($rowACT = $resultACT->fetch_assoc())
		{
			if($countACT==4){
				echo "</tr><tr>";
				$countACT=1;
			}
			$sqlACT2="SELECT * FROM activity_table WHERE name='".$rowACT['added']."'";
				$resultACT2=$connect->query($sqlACT2);
				$rowACT2 = $resultACT2->fetch_assoc();
				echo "<td>";
					echo "<img height='400px' width='500px' src= '".$rowACT2['img']."'/>";
					echo "<br>";
					echo $rowACT2['name']."<br>";
					echo "$".$rowACT2['price']."/day<br>";
				echo "</td>";
				$countACT++;
				
		}
		echo "</table>";
		
		echo "<h2>Restaurants you've eaten at</h2>";
		echo "<table align='center' class='hotelTable'>";
		echo "<tr>";
		while($rowRES = $resultRES->fetch_assoc())
		{
			if($countRES==4){
				echo "</tr><tr>";
				$countRES=1;
			}
			$sqlRES2="SELECT * FROM resturant_table WHERE name='".$rowRES['added']."'";
				$resultRES2=$connect->query($sqlRES2);
				$rowRES2 = $resultRES2->fetch_assoc();
				echo "<td>";
					echo "<img height='400px' width='500px' src= '".$rowRES2['img']."'/>";
					echo "<br>";
					echo $rowRES2['name']."<br>";
					echo "$".$rowRES2['price']."/day<br>";
				echo "</td>";
				$countRES++;
				
				
		}
		echo "</table>";
	}
	?>
</body>
</html>