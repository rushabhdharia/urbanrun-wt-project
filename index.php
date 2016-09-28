<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
	<link rel ="stylesheet" href="css/home.css">
</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container-fluid">
  		<div class="mainpicclass img-responsive">
	      	<input type="text"  name="search" placeholder="Search.."/>
	      	<button type="button" class="btn btn-primary btn-lg">
	      		<span class="glyphicon glyphicon-search"></span> Search
	    	</button>
      	</div>
  		<div class="container">
	    		<div class="row center">
	      			<h2 style="text-align:center">
	        			Browse By Categories
	      			</h2 style="text-algin:center">
	    		</div>
	    	<div class="row">
		      	<div class="col-md-3 floating-box">
		      		<a href="#">
		        		<div class="column"><img src="img/fitness.png" class="img-responsive"></div>
		       	 		<div class="column"><center><h3>Health & Wellness</h3></center></div>
		        	</a>
		      	</div>
		      	<div class="col-md-3 floating-box">
		        	<a href="#">
		        		<div class="column"><img src="img/repair.jpg" class="img-responsive"></div>
		        		<div class="column"><center><h3>Repairs & Maintenance</h3></center></div>
		        	</a>
		      	</div>
		      	<div class="col-md-3 floating-box">
		        	<a href="#">
		        		<div class="column"><img src="img/carwash.jpg" class="img-responsive"></div>
		        		<div class="column"><center><h3>Personal</h3></center></div>
		        	</a>
		      	</div>
		      	<div class="col-md-3 floating-box">
		        	<a href="#">
		        		<div class="column"><img src="img/personalimg.jpg" class="img-responsive"></div>
		        		<div class="column"><center><h3>Home Care</h3></center></div>
		        	</a>
		      	</div>
	    	</div>
  		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>