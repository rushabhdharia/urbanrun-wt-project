<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
	<script type="text/javascript">
		function first() {
			var fcheck=/^[a-zA-Z]{3,}$/
			var ccheck=/^[0-9]{10}$/
			var echeck=/^[a-z][a-z0-9]*[._]?[a-z0-9]*[@][a-z.]*$/
			var connum=document.register.cno.value
			var firname=document.register.fname.value
			var lastname=document.register.lname.value
			var email2=document.register.email1.value
			var pass1=document.register.password1.value
			var pass2=document.register.password2.value

			if(pass1!=pass2){
				alert("Passwords don't match");
			}
			else if (!echeck.test(email2)) {
				alert("email not accepted");
			}
			else if(fcheck.test(firname)&&fcheck.test(lastname)&&ccheck.test(connum))
			{
				alert("done");
			}
			else
			{
				alert("not done");
			}
		}
	</script>
</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container">
		<fieldset>
			<legend>Personal information</legend>
			<form name="register">
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="textbox" class="form-control" id="fname" name="fname" placeholder="Enter First Name">
				</div>
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="textbox" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
				</div>
				<div class="form-group">
					<label for="email1">Email:</label>
		      		<input type="email" class="form-control" id="email1" name="email1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="password1">Password:</label>
		      		<input type="password" class="form-control" id="password1" placeholder="Enter password" name="password1">
				</div>
				<div class="form-group">
					<label for="password2">Retype Password:</label>
		      		<input type="password" class="form-control" id="password2" placeholder="Retype password" name="password2">
				</div>
				<div class="form-group">
					<label for="gender">Gender:</label>
					<label><input type="radio" name="gender" value="male">Male</label>
					<label><input type="radio" name="gender" value="female">Female</label></td>
				</div>
				<div class="form-group">
					<label for="address">Address:</label>
					<textarea class="form-control" placeholder="Enter your Address"></textarea>
				</div>
				<div class="form-group">
					<label for="cno">Contact Number:</label>
		      		<input type="textbox" class="form-control" id="cno" placeholder="Enter your mobile number" name="cno">
				</div>		
				<button type="submit" class="btn btn-default" onclick="first()">Submit</button>
			</form>
		</fieldset>
	</div>
	<?php include 'footer.php';?>
</body>
</html>