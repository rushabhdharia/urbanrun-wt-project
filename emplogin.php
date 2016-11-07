<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['emp'])!="")
{
	header("Location: emphome.php");
}
if(isset($_POST['btn-login']))
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$upass = mysqli_real_escape_string($conn,$_POST['pass']);
	$hashed_password = hash('sha256', $upass);
	$res=mysqli_query($conn,"SELECT * FROM tbl_emp WHERE empEmail='$email'");
	$row=mysqli_fetch_array($res);
 
	if($row['empPassword']== $hashed_password)
	{
		$_SESSION['emp'] = $row['empId'];
		header("Location: emphome.php");
	}
	else
	{
		?>
        <script>alert('wrong details');</script>
        <?php
	}
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>

</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container">
	    <fieldset>
	      <legend>Employee Login</legend>
	      <form name="login" method="post" autocomplete = "off">
	        <div class="form-group">
	          <label for="email">Email:</label>
	          <input type="textbox" class="form-control" id="email" name="email" placeholder="Enter your Email-id">
	        </div> 
	        <div class="form-group">
	          <label for="pass">Password:</label>
	          <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
	        </div> 
	        <div class="form-group">
	        	<button type="submit" class="btn btn-default" name="btn-login">Sign In</button>
	        </div>
	        <div class="form-group">
	          New Employee? <a href="empregister.php">Register Here!</a>
	        </div>
	        <div class="form-group">
	          User? <a href="login.php">Login Here</a>
	        </div>      
	      </form>
	    </fieldset>
  	</div>
	<?php include 'footer.php';?>
</body>
</html>