<?php
session_start();
//include once 'dbconnect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container">
		<h3>Health & Wellness</h3>
		<ul type="none">
		  <li><a href="home.php">Yoga Trainer</a> </li>
		  <li><a href="home.php">Massage</a></li>
		  <li><a href="home.php">Salon</a></li>
		  <li><a href="home.php">Dietician</a></li>
		  <li><a href="home.php">Gym Trainer</a></li>
		  <li><a href="home.php">Physiotherapy</a></li>
		</ul>
		<br>
		<h3>Repairs & Maintenance</h3>
		<ul type="none">
			<li><a href="home.php">Electrician</a></li>
			<li><a href="home.php">Plumber</a></li>
			<li><a href="home.php">Carpenter</a></li>
			<br>
		</ul>
		<h3>Personal </h3>
		<ul type="none">
			<li><a href="home.php">Car Cleaning</a></li>
			<li><a href="home.php">Dabawalla</a></li>
			<li><a href="home.php">Packers & Movers</a></li>
			<li><a href="home.php">Driver On Demand</a></li>
			<li><a href="home.php">BabySitting</a></li>
		</ul>
		<br>
		<h3>Home Care</h3>
			<ul type ="none">
			<li><a href="home.php">Home Deep Cleaning</a></li>
			<li><a href="home.php">Washerman</a></li>
			<li><a href="home.php">House Painter</a></li>
		</ul>
	</div>	
	<?php include 'footer.php';?>
</body>
</html>