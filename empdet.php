<?php
session_start();
include_once 'dbconnect.php';
 
if(!isset($_SESSION['user']))
	header("Location: login.php");

$empid = $_GET['empId'];

$sql = "SELECT * FROM tbl_emp WHERE empId=".$empid;

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);
$name = $rows['name'];
$totalcost=$rows['costph']*$_SESSION['date_to']*$_SESSION['time_to'];
if($rows['total']!=0)
{
	$ratingemp=$rows['ratings']/$rows['total'];
}
else
{
	$ratingemp="Employee not yet rated";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
	<link rel ="stylesheet" href="css/home.css">
</head>
<body>
	
	<?php include 'navbar.php';?>
	<div class="container">
	<center><h3 style="margin:16px">The Details of the Employee are:</h3></center>

	<table class="table table-hover" style="padding:8px">
	<?php 

	echo "<tr>
	<th>Name</th>
	<td>".$rows['name']."</td>
	</tr>	
	<tr>
	<th>Contact Details</th>
	<td>".$rows['pno']."</td>
	</tr>
	<tr>
	<th>Skils</th>
	<td>".$rows['skills']."</td>
	</tr>
	<tr>
	<th>Cost Per Hour</th>	
	<td>Rs. ".$rows['costph']."/-</td>
	</tr>
	<tr>
	<th>Total Cost</th>
	<td>Rs. ".$totalcost."/-</td>	
	</tr>
	<tr>
	<th>Average Rating (Total votes)</th>
	<td>".$ratingemp." (".$rows['total'].")</td>
	</tr>

	</table>
	<center><button style='margin:16px'><a href='submit.php?empId=".$rows['empId']."'>SUBMIT</a></button></center>
	";

		// echo "<h3>Name of the Employee: ".$rows['name']."</h3>";
		// echo "<h3>Contact details:".$rows['pno']."</h3>";
		// echo "<h3>Skills:".$rows['skills']."</h3>";
		// echo "<h3>Cost per Hour:".$rows['costph']."</h3>";
		// echo "<h3>Ratings:".$ratingemp."</h3>";
		// echo 
		// "<center><button><a href='submit.php?empId=".$rows['empId']."'>SUBMIT</a></button></center>"
	?>	
	</div>
<?php include 'footer.php';?>

</body>
</html>

