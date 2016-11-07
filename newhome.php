<?php
session_start();
include_once 'dbconnect.php';
 
if(!isset($_SESSION['user']))
{
	header("Location: login.php");
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
	<?php 

	$skill = $_SESSION['service'];
	if($conn)
		$res=mysqli_query($conn,"SELECT * FROM tbl_emp WHERE skills LIKE '%".$skill."%'");
	else
		echo "Not connected";

	if(mysqli_num_rows($res)>0)
	{

		echo
		"<h3 style='margin-bottom: 16px; text-align: center;''>The Employees available for your needs</h3>
		<div class = 'table-responsive'>
   		<table class='table table-hover'>
		<title>Services</title>
		<tr>
			<th>Employee Id</th>
			<th>Name</th>
			<th>Contact Details</th>
			<th>Address</th>
			<th>Skills</th>
			<th>Ratings</th>
			<th>Cost per Hour</th>
			<th>Total Cost</th>
			<th></th>
		</tr>";
}
else
{
	echo "<center><h3>Sorry we could not find any employees matching your needs</h3></center>";
}
?>

<?php
	while($rows = mysqli_fetch_array($res))
	{
		// if($rows['empId']==0)
		// 	$empid="Not Assigned";
		// else
		$empid=$rows['empId'];
		if($rows['total']!=0)
		{
			
			$ratingemp=$rows['ratings']/$rows['total'];
			$totalcost=$rows['costph']*$_SESSION['date_to']*$_SESSION['time_to'];
		}
		else
		{
			$ratingemp="Employee not yet rated";
		}
		echo 
		"<tr>	
			<td>".$empid."</td>
			<td>".$rows['name']."</td>
			<td>".$rows['pno']."</td>
			<td>".$rows['address']."</td>
			<td>".$rows['skills']."</td>
			<td>".$ratingemp."</td>
			<td>".$rows['costph']."</td>
			<td>".$totalcost."</td>
			<td><a href='empdet.php?empId=".$rows['empId']."'>SELECT</a></td>
		</tr>\n
		";
	}
	
?>
</table>
</div>
	<?php include 'footer.php';?>
</body>
</html>