<?php
include("db_connection.php");
include("menu.php");
?>
<html>
<head>
	<script src="jss\script.js"></script>
	<link rel="stylesheet" href="css\styles.css">
</head>
<body>
<table align="center">
<?php
		
	$sql2="SELECT * FROM car_table";
	$result2=$connect->query($sql2);
	
	$count=1;
	$total=1;
	echo "<table align='center' class='hotelTable'>";
	echo "<tr>";
	while($row2 = $result2->fetch_assoc())
	{
		echo "<td>";
		echo "<a href = javascript:void(0) onclick='popupfunction(".$total.")' class=linktext>";
			echo "<img height='350px' width='550px' src= '".$row2['img']."'/>";
			echo "<br>";
			echo $row2['type']."<br>";
			echo "$".$row2['price']."/day<br>";
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
	echo "</table>";?>
</body>
</html>