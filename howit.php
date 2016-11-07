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
	  <div>
	    <img src="img/choose.png" class="img-responsive" style="float:right" data-toggle="modal" data-target="#myModal1">  
	  </div>
	  <div>
	    <img src="img/book.png" class="img-responsive" style="float:left" data-toggle="modal" data-target="#myModal2">
	  </div>
	  <div>
	    <img src="img/chat.png" class="img-responsive" style="float:right"
	    data-toggle="modal" data-target="#myModal3">
	  </div>
	  <div>
	    <img src="img/relax.png" class="img-responsive" style="float:left" data-toggle="modal" data-target="#myModal4">
	  </div>
	</div>

<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Choose Service</h4>
	  </div>
	  <div class="modal-body">
		<h5>
			Select the service that you require from our list
		</h5>
		<div>
		<img src="img/choosehire.png" class="img-responsive" style="float:right">
	  </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Browse and Book</h4>
	  </div>
	  <div class="modal-body">
		<h5>
			Choose the employee that meet your needs from our long list of highly qualified employees
		</h5>
		<div>
		<img src="img/browsebook.png" class="img-responsive" style="float:right">
	  </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

  </div>
</div>
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Chat and Hire</h4>
	  </div>
	  <div class="modal-body">
		<h5>
			Chat with our employee and only hire them if they satisfy your needs
		</h5>
		<div>
		<img src="img/chathire.png" class="img-responsive" style="float:right">
	  </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

  </div>
</div>
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Sit Back and Relax</h4>
	  </div>
	  <div class="modal-body">
		<img src="img/sitbackrelax.png" class="img-responsive" >
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

  </div>
</div>
	
	<?php include 'footer.php';?>
</body>
</html>