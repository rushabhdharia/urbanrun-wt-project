<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}

include_once 'dbconnect.php'; 
if(isset($_POST['submit']))
{
	if($conn)
	{
			// Escape user inputs for security
		$fname = mysqli_real_escape_string($conn,$_POST['name']);
		$pno = mysqli_real_escape_string($conn,$_POST['pno']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);

		$sql="UPDATE tbl_users 
		SET name = '".$fname."', pno = ".$pno.", address = '".$address."'
		WHERE userId = ".$_SESSION['user'] ;
		
		$result = mysqli_query($conn,$sql);
		/*if (!mysqli_query($conn,$sql))
	  {
	  echo("Error description: " . mysqli_error($conn));
	  }*/
	}
}

$sql = "SELECT * FROM tbl_users WHERE userId=".$_SESSION['user'];

$resul = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($resul);
$name1=$row['name'];
$phone1=$row['pno'];
$add1=$row['address'];

$nameval = (!$name1=='') ? $name1 : 'Enter your name:';
$phoneval = (!$phone1==0) ? $phone1 : 'Enter your Phone No:';
$addval = (!$add1=='') ? $add1 : 'Enter your Address:';
$nameval1 = (!$name1=='') ? $name1 : '';
$phoneval1 =  (!$phone1==0) ? $phone1 : '';
$addval1 = (!$add1=='') ? $add1: '';

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
      <legend>Account Details</legend>
      <form name="contact" method="post" class="form-horizontal">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="textbox" class="form-control" id="name" name="name" placeholder="<?= $nameval ?>" value="<?=$nameval1?>">
        </div> 
        <div class="form-group">
          <label for="pno">Phone-no:</label>
          <input type="text" class="form-control" id="pno" name="pno" placeholder="<?= $phoneval ?>" value = "<?=$phoneval1?>">
        </div> 
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control" id="address" name="address" placeholder="<?= $addval ?>"><?=$addval1?></textarea>
        </div> 
        <div class="form-group">
        	<button type="submit" name="submit" class="btn btn-default">Submit</button>
        </div>
      </form>
    </fieldset>
    </div>
	<?php include 'footer.php';?>
</body>
</html>