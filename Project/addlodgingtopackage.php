<?php 
session_start();
$uid=$_SESSION['id'];
include("db_connection.php");
$added = $_POST['lodging'];


if ($connect->query("INSERT INTO package_table (user_id, added,typeadded) VALUES ('$uid','$added','L')") === TRUE) {
?>
	<script>
		alert("Successfully added to package!");
		history.back();
	</script>
<?php
}else{
die('Error executing query: ' . $connect->error);
}
?>