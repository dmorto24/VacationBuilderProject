<?php 
	$connect = new mysqli("localhost", "root","","sojourn_db");
	if($connect->connect_errno){
		die('Could not connect: ' . $connect->connect_errno);
	}
?>