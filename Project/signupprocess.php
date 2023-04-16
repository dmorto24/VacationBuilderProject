<?php
include("db_connection.php");

$uid = $_POST['id'];
$pw = $_POST['password'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];

$sql = "INSERT INTO user_table (`user_id`, `password`, `first_name`, `last_name`, `email`, `phone`, `points`, `previous`)
	VALUES ('$uid','$pw','$fname','$lname','$email','$phone',0,0)";
$result = $connect->query($sql);


if ($result == FALSE){
	echo "Error: ".$connect->error;
}
header('location: /Project/menu.php');
?>