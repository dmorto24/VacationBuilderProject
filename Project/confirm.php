<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];

$sql="DELETE FROM package_table WHERE user_id='$uid' ";
$result = $connect->query($sql);

?>
<html>
<head>
</head>
<body>
	Your Vacation is confirmed!
</body>