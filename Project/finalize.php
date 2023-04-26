<?php include("db_connection.php");
include("menu.php");
session_start();
$uid=$_SESSION['id'];

$ACTprice = $_POST['ACTprice'];
$CARprice = $_POST['CARprice'];
$HOTprice = $_POST['HOTprice'];
$RESprice = $_POST['RESprice'];

$sql="SELECT * FROM survey_table WHERE user_id='$uid' ";
$result = $connect->query($sql);
if(mysqli_num_rows($result) > 0) {
  $row=$result->fetch_assoc();
  $numPeople = $row['num_people'];
  $leave = $row['leave_date'];
  $return = $row['return_date'];
  $food = $row['food_type'];
  $budget = $row['price'];
  $datetime1 = new DateTime($leave);
  $datetime2 = new DateTime($return);
  $numDays = $datetime2->diff($datetime1)->format('%a');
  $finalPrice = ($ACTprice * $numPeople) + ($CARprice * $numDays) + ($HOTprice * $numDays) + ($RESprice * $numPeople)?>
<html>
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
	<form method="post" action="confirm.php">
		<button type="submit" id="submit">Confirm Package</button>
	</form>

<?php } else {?>
<script>
	function verify(){
		var leave = document.getElementById("leaveDate").value;
		var returnday = document.getElementById("returnDate").value;
		var budget1 = document.getElementById("budget").value.toString();
		var numPeople = document.getElementById("numPeople").value;
		const diffTime = Math.abs(new Date(returnday) - new Date(leave));
		const numDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
		var finalPrice = (<?php echo $ACTprice ?>  * numPeople) + (<?php echo $CARprice ?> * numDays) + (<?php echo $HOTprice ?> * numDays) + (<?php echo $RESprice ?> * numPeople);

		display(leave, returnday, budget1, finalPrice);
	}
	function display(l, r, b, t){
		var leave = document.getElementById("leaving");
		var returnday = document.getElementById("returning");
		var budget = document.getElementById("budgettable");
		var total = document.getElementById("cost");
		
		leave.innerHTML = l;
		returnday.innerHTML = r;
		budget.innerHTML = "$" + b;
		total.innerHTML = "$" + t;
		
		document.getElementById("verifyTable").style.display="contents";
		document.getElementById("submit").style.display="inline-block";
		document.getElementById("verify").style.display="none";
	}
</script>
	<h2> Verify some information before continuing </h2>
  <table>
    <tr>
		<td><label for="budget">What is your budget?</label></td>
		<td><div class="slidecontainer" align='center'><input type="range" min="100" max="1500" value="500" class="slider" id="budget" name="budget"><p>Budget: $<span id="slider_value"></span></p></div>
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
	<center>
		<table id="verifyTable" style="display:none"> <tr> 
		<td>Leaving:</td> 
		<td id="leaving"></td> 
		</tr> <tr> 
		<td>Returning:</td> 
		<td id="returning"></td> 
		</tr> <tr> 
		<td>Your Budget:</td> 
		<td id="budgettable"></td> 
		</tr> <tr> 
		<td>Your Cost:</td> <td id="cost"></td> 
		</tr> 
		</table>
		</center>
	<button id="verify" onclick="verify()">Verify Information</button>
<?php } ?>

<form method="post" action="confirm.php">
		<button style="display:none" type="submit" id="submit">Confirm Package</button>
</form>
<script src="js/script.js"></script>
</html>