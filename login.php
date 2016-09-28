<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>

</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container">
	    <fieldset>
	      <legend>Login Here</legend>
	      <form name="login">
	        <div class="form-group">
	          <label for="username">Username:</label>
	          <input type="textbox" class="form-control" id="username" name="username" placeholder="Enter User Name">
	        </div> 
	        <div class="form-group">
	          <label for="pwd">Username:</label>
	          <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password">
	        </div> 
	        <div class="form-group">
	        	<button type="submit" class="btn btn-default">Submit</button>
	        </div>
	        <div class="form-group">
	          New User? <a href="register.html">Register Here!</a>
	        </div>
	        <div class="form-group">
	          <a href="forgotPass.html">Forgot Password</a>
	        </div>      
	      </form>
	    </fieldset>
  	</div>
	<?php include 'footer.php';?>
</body>
</html>