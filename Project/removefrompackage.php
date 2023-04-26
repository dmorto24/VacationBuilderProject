<?php 
session_start();
$uid=$_SESSION['id'];
include("db_connection.php");
$remove = $_POST['remove'];


if($connect->query("DELETE FROM package_table WHERE added = '$remove'") === TRUE){
?>
	<script>
		alert("Successfully removed from package!");
		history.back();
	</script>
<?php
}else{
die('Error executing query: ' . $connect->error);
}
?>