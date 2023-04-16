<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];

$ACTprice = $_POST['ACTprice'];
$CARprice = $_POST['CARprice'];
$HOTprice = $_POST['HOTprice'];
echo "Hotel price".$HOTprice;
echo "Car price".$CARprice;
echo "Activity price".$ACTprice;
$query="SELECT * FROM survey_table WHERE user_id='$uid' ";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0) {
  $row=$result->fetch_assoc();
} else {
  // there is no survey with the current user's ID
}



?>

<form method="post" action="confirm.php">
		<button type="submit" name="submit">Confirm Package</button>
</form>