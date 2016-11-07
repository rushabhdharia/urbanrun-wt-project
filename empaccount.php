<?php
session_start();

if(!isset($_SESSION['emp']))
{
  header("Location: emplogin.php");
}

include_once 'dbconnect.php'; 
if(isset($_POST['submit']))
{
  if($conn)
  {
    //echo "submitted";
      // Escape user inputs for security
    $fname = mysqli_real_escape_string($conn,$_POST['name']);
    $pno = mysqli_real_escape_string($conn,$_POST['pno']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $skills="";
    $cph=mysqli_real_escape_string($conn,$_POST['cph']);
    $skill=$_POST['service'];
    if(!empty($skill))
    {
      foreach($skill as $job){
        $skills.=" ".$job;
      }
    }
    $skills1=mysqli_real_escape_string($conn,$skills);
    $sql="UPDATE tbl_emp 
    SET name = '".$fname."', pno = ".$pno.", address = '".$address."', skills ='".$skills1."',costph=".$cph."
    WHERE empId = ".$_SESSION['emp'] ;
    
    $result = mysqli_query($conn,$sql);
    if (!mysqli_query($conn,$sql))
    {
    echo("Error description: " . mysqli_error($conn));
    }
  } 
}
$sql = "SELECT * FROM tbl_emp WHERE empId=".$_SESSION['emp'];

$resul = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($resul);
$name1=$row['name'];
$phone1=$row['pno'];
$add1=$row['address'];
$skilll=$row['skills'];
$costper=$row['costph'];
$nameval = (!$name1=='') ? $name1 : 'Enter your name:';
$phoneval = (!$phone1==0) ? $phone1 : 'Enter your Phone No:';
$addval = (!$add1=='') ? $add1 : 'Enter your Address:';
$costval = ($costper!=0)? $costper:'Enter the rate you charge per hour in Rupees';
$nameval1 = (!$name1=='') ? $name1 : '';
$phoneval1 =  (!$phone1==0) ? $phone1 : '';
$addval1 = (!$add1=='') ? $add1: '';
$skil1=(!$skilll=='') ? $skilll:'Skills not set';
$costval1 = ($costper!=0)? $costper:'';
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
      <form name="contact" method="post">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="textbox" class="form-control" id="name" name="name" placeholder="<?= $nameval?>" value="<?= $nameval1?>" required="true">
        </div> 
        <div class="form-group">
          <label for="pno">Phone-no:</label>
          <input type="text" class="form-control" id="pno" name="pno" placeholder="<?= $phoneval ?>" value = "<?= $phoneval1 ?>" required="true">
        </div> 
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control" id="address" name="address" placeholder="<?=$addval ?>" required="true"><?= $addval1 ?></textarea>
        </div>
        <div class="form-group">
          <h3>Rate Charged per Hour(in Rupees)</h3>
          <input type="text" class="form-control" name="cph" id="cph" placeholder="<?=$costval?>" value="<?=$costval1?>" required="true">
        </div> 
        <div class="form-group">
        <h3>Skills:</h3>
          <div class="row">
            <div class="col-md-3">
              <h4>Health & Wellness</h4>
              <input type="checkbox" name="service[]" value="yoga">Yoga Trainer<br>
              <input type="checkbox" name="service[]" value="massage">Massage<br>
              <input type="checkbox" name="service[]" value="salon">Salon<br>
              <input type="checkbox" name="service[]" value="diet">Dietician<br>
              <input type="checkbox" name="service[]" value="gym">Gym Trainer<br>
              <input type="checkbox" name="service[]" value="physio">Physiotherapy<br>
            </div>
            <div class="col-md-3">
              <h4>Repairs & Maintenance</h4>
              <input type="checkbox" name="service[]" value="elec">Electrician<br>
              <input type="checkbox" name="service[]" value="plumber">Plumber<br>
              <input type="checkbox" name="service[]" value="carpenter">Carpenter<br>
            </div>
            <div class="col-md-3">
              <h4>Personal</h4>
              <input type="checkbox" name="service[]" value="car">Car Cleaning<br>
              <input type="checkbox" name="service[]" value="tiffin">Dabawalla<br>
              <input type="checkbox" name="service[]" value="packmov">Packers & Movers<br>
              <input type="checkbox" name="service[]" value="driver">Driver On Demand<br>
              <input type="checkbox" name="service[]" value="baby">Baby Sitting<br>
            </div>
            <div class="col-md-3">
              <h4>Home Care</h4>
              <input type="checkbox" name="service[]" value="home">Home Cleaning<br>
              <input type="checkbox" name="service[]" value="wash">Washerman<br>
              <input type="checkbox" name="service[]" value="paint">House Painter<br>
            </div>                    
          </div>
        </div>
        <div class="form-group">
        	<button type="submit" name="submit" class="btn btn-default">Submit</button>
        </div>
        <div class="row" style="margin: 0px">
          <h4> Skills Entered</h4>
          <p><?php echo $skil1;?></p>
        </div>
      </form>
    </fieldset>
    </div>
	<?php include 'footer.php';?>
</body>
</html>