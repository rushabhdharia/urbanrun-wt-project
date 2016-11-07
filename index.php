<?php
session_start();
//include once 'dbconnect.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
	<link rel ="stylesheet" href="css/home.css">
	<script type="text/javascript">
		$(document).ready(function () {
			$('.carousel').carousel({
  				interval: 4000
			});
		});
	</script>

</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container-fluid">
		<div class="container">
  		<br>
  		<a href="services.php">
  			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    			<!-- Indicators -->    
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			      <li data-target="#myCarousel" data-slide-to="3"></li>
			    </ol>
    
			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">

			      <div class="item active">
			        <img src="img/hi1.jpg" alt="" class="img-responsive mainpicclass">
			        <div class="carousel-caption">
			          <h3>Domestic Services</h3>
			          <p>These Housekeepers will keep your house spick and span!</p>
			        </div>
			      </div>

			      <div class="item">
			        <img src="img/hi2.png" alt="" class="img-responsive mainpicclass">
			        <div class="carousel-caption">
			          <h3>Electrical Solutions</h3>
			          <p>We provide high quality Electricians</p>
			        </div>
			      </div>
			    
			      <div class="item">
			        <img src="img/hi3.jpg" alt="Flower" class="img-responsive mainpicclass">
			        <div class="carousel-caption">
			          <h3>Baby Sitting</h3>
			          <p>Our Baby Sitters are verified and trustworthy</p>
			        </div>
			      </div>

			      <div class="item">
			        <img src="img/hi4.jpg" alt="Driver on Demand" class="img-responsive mainpicclass">
			        <div class="carousel-caption">
			          <h3>Driver on Demand</h3>
			          <p>We provide experienced chauffeurs</p>
			        </div>
			      </div>
  
    			</div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
  			</div>
  		</a>
		</div>
  		<div class="container">
	    		<div class="row center">
	      			<h3 style="text-align:center">
	        			Browse By Categories
	      			</h3>
	    		</div>
	    	<div class="row">
		      	<div class="col-md-3 col-xs-6 floating-box">
		      		<a href="services.php">
		        		<div class="column"><img src="img/fitness.png" class="img-responsive"></div>
		       	 		<div class="column"><center><h4>Health & Wellness</h4></center></div>
		        	</a>
		      	</div>
		      	<div class="col-md-3 col-xs-6 floating-box">
		        	<a href="services.php">
		        		<div class="column"><img src="img/repair.jpg" class="img-responsive"></div>
		        		<div class="column"><center><h4>Repairs & Maintenance</h4></center></div>
		        	</a>
		      	</div>
		      	<div class="col-md-3 col-xs-6 floating-box">
		        	<a href="services.php">
		        		<div class="column"><img src="img/carwash.jpg" class="img-responsive"></div>
		        		<div class="column"><center><h4>Personal</h4></center></div>
		        	</a>
		      	</div>
		      	<div class="col-md-3 col-xs-6 floating-box">
		        	<a href="services.php">
		        		<div class="column"><img src="img/personalimg.jpg" class="img-responsive"></div>
		        		<div class="column"><center><h4>Home Care</h4></center></div>
		        	</a>
		      	</div>
	    	</div>
  		</div>
	</div>
	<?php include 'footer.php';?>
</body>
</html>