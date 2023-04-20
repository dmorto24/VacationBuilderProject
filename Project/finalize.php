<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];

$ACTprice = $_POST['ACTprice'];
$CARprice = $_POST['CARprice'];
$HOTprice = $_POST['HOTprice'];

$sql="SELECT * FROM survey_table WHERE user_id='$uid' ";
$result = $connect->query($sql);
if(mysqli_num_rows($result) > 0) {
  $row=$result->fetch_assoc();
  $numPeople = $row['num_people'];
  $leave = $row['leave_date'];
  $return = $row['return_date'];
  $budget = $row['price'];
  $datetime1 = new DateTime($leave);
  $datetime2 = new DateTime($return);
  $numDays = $datetime2->diff($datetime1)->format('%a');
  $finalPrice = ($ACTprice * $numPeople) + ($CARprice * $numDays) + ($HOTprice * $numDays)?>
<html>
<head>
<script>
	funtion verify(){
		var leave = document.getElementById("leaveDate").value;
		var returnday = document.getElementById("returnDate").value;
		var budget = document.getElementById("budget").value;
		var numPeople = document.getElementById("numPeople").value;
		const diffTime = Math.abs(new Date(returnday) - new Date(leave));
		const numDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
		var finalPrice = (<?php echo $ACTprice ?>  * numPeople) + (<?php echo $CARprice ?> * numDays) + (<?php echo $HOTprice ?> * numDays);

		// create table element
		var table = document.createElement("table");

		// create rows and cells for each piece of information
		var row1 = table.insertRow();
		var cell11 = row1.insertCell(0);
		var cell12 = row1.insertCell(1);
		cell11.innerHTML = "Leaving:";
		cell12.innerHTML = leave;

		var row2 = table.insertRow();
		var cell21 = row2.insertCell(0);
		var cell22 = row2.insertCell(1);
		cell21.innerHTML = "Returning:";
		cell22.innerHTML = returnday;

		var row3 = table.insertRow();
		var cell31 = row3.insertCell(0);
		var cell32 = row3.insertCell(1);
		cell31.innerHTML = "Your Budget:";
		cell32.innerHTML = budget;

		var row4 = table.insertRow();
		var cell41 = row4.insertCell(0);
		var cell42 = row4.insertCell(1);
		cell41.innerHTML = "Your Cost:";
		cell42.innerHTML = finalPrice;

		// add table to document
		document.body.appendChild(table);
	}
</script>
</head>
	<table>
	<tr>
		<td>Leaving:</td><td><?php echo $leave ?></td>
	</tr>
	<tr>
		<td>Returning:</td><td><?php echo $return ?></td>
	</tr>
	<tr>
		<td>Your Budget:</td><td><?php echo $budget ?></td>
	</tr>
	<tr>
		<td>Your Cost:</td><td><?php echo $finalPrice ?></td>
	</tr>
	<table>
<?php } else {?>
	<h2> Verify some information before continuing </h2>
  <table>
    <tr>
		<td><label for="budget">What is your budget?</label></td>
		<td><div class="slidecontainer" align='center'><input type="range" min="100" max="1500" value="500" class="slider" id="budget" name="budget"><p>Budget: <span id="slider_value"></span></p></div>
		</td>
	</tr>
	<tr>
		<td><label for="leaveDate">What day do you want to leave?</label></td>
		<td><input type="date" id="leaveDate" name="leaveDate"></td>
	</tr>
	<tr>
		<td><label for="returnDate">What day do you want to return?</label></td>
		<td><input type="date" id="returnDate" name="returnDate"></td>
	</tr>
	<tr>
		<td><label for="numPeople">How many people are coming on your vacation?</label></td>
		<td><input type="number" id="numPeople" name="numPeople" min="1"></td>
	</tr>	
	</table>
	<button type="button" name="verify" onclick="verify()">Verify Information</button>
<?php } ?>

<form method="post" action="confirm.php">
		<button type="submit" name="submit">Confirm Package</button>
</form>
</html>