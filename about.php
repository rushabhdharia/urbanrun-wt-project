<?php
session_start();
//include once 'dbconnect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
	<style type="text/css">
		.imgf{
			max-height: 300px;
		}
	</style>
</head>
<body>
	<?php include 'navbar.php';?>
	<div class ="container">
	<div class = "row">
	<div class="col-md-8 col-md-offset-2">
		<p class="text-center" style="text-align:justify,center">
			Need anything done? <br>
			Want somebody to pickup your groceries and medicines?<br>
			<br>
			Need plumbers urgently?<br>
			We're the one stop shop to all your needs
			<br>
			<br>
			Meet UrbanRun !<br>
			An idea that sparked in the minds of 2 young engineers to provide the people with labour, skilled and unskilled.<br> The basic idea was to fulfil people's need, any need. <br>
			<br>
			You can hire electricians, plumbers, drivers, movers and packers and many more.<br>
			You can also find unskilled labour which you may require for menial work like buying groceries, etc.
		</p>
		</div>
	</div>
	<center>
		<h3>Founders:</h3>
		<div class="row">
			<div class ="col-md-6">
				<img class="img-responsive imgf" src="img/rad.jpg">
				<center><h4>Rushabh Dharia</h4></center>
			</div>
			<div class ="col-md-6">
				<img class="img-responsive imgf" src="img/rajat.JPG">
				<center><h4>Rajat Bhagat</h4></center>
			</div>
		</div>
		</center>
	</div>	
	<?php include 'footer.php';?>
</body>
</html>