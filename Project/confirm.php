<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];

$sql2="SELECT * FROM package_table WHERE user_id='$uid' ";
	$result2=$connect->query($sql2);
while($row2 = $result2->fetch_assoc()){
	if($row2['typeadded']=='A'){
		$addedACT = $row2['added'];
		$connect->query("INSERT INTO previous_table (user_id, added, type) VALUES ('$uid','$addedACT','A')");
	}
	else if($row2['typeadded']=='C'){
		$addedCAR = $row2['added'];
		$connect->query("INSERT INTO previous_table (user_id, added, type) VALUES ('$uid','$addedCAR','C')");
	}
	else if($row2['typeadded']=='R'){
		$addedRES = $row2['added'];
		$connect->query("INSERT INTO previous_table (user_id, added, type) VALUES ('$uid','$addedRES','R')");
	}
	else if($row2['typeadded']=='L'){
		$addedHOT = $row2['added'];
		$connect->query("INSERT INTO previous_table (user_id, added, type) VALUES ('$uid','$addedHOT','L')");
	}
		
}

$sql="DELETE FROM package_table WHERE user_id='$uid' ";
$result = $connect->query($sql);

$sql1="SELECT * FROM survey_table WHERE user_id='$uid' ";
$result2 = $connect->query($sql1);
if(mysqli_num_rows($result2) > 0) {
	$sql2="DELETE FROM survey_table WHERE user_id='$uid' ";
	$result3 = $connect->query($sql2);
}


?>
<html>
<head>
</head>
<body>
	Your Vacation is confirmed!
</body>