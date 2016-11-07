<?php
session_start();
include_once 'dbconnect.php';
 
if(!isset($_SESSION['user']))
{
	header("Location: login.php");
}

$res=mysqli_query($conn,"SELECT * FROM tbl_users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);

if($userRow['name']=='')
{
	header("Location:account.php");
}

if(isset($_POST['submit']))
{
	if($conn)
	{
			// Escape user inputs for security
		$details = mysqli_real_escape_string($conn,$_POST['service']);
		$_SESSION['service'] = $details;
		$date = mysqli_real_escape_string($conn,$_POST['job_date']);
		$_SESSION['date']=$date;
		$date_to = mysqli_real_escape_string($conn,$_POST['job_date_to']);
		$_SESSION['date_to']=$date_to;
		$time = mysqli_real_escape_string($conn,$_POST['job_time']);
		$_SESSION['time']=$time;
		$time_to = mysqli_real_escape_string($conn,$_POST['job_time_to']);
		$_SESSION['time_to']=$time_to;
		$userid = mysqli_real_escape_string($conn,$_SESSION['user']);
		
		// $sql="INSERT INTO order_details(userId,job_details,job_date,job_time) VALUES($userid,'$details','$date','$time')";
		header("Location:newhome.php");

		// $result = mysqli_query($conn,$sql);

		// if (!result)
  		//   {
  		//   echo("Error description: " . mysqli_error($conn));
  		//   }
	}
}

if(isset($_GET['submit1'])){
	if($conn)
	{
		$empid = mysqli_real_escape_string($conn,$_GET['selectedId']);
		$rating = mysqli_real_escape_string($conn,$_GET['user-rating']);
		$sql = "UPDATE tbl_emp SET ratings = ratings+".$rating.",total=total+1 WHERE empId=".$empid;
		$result = mysqli_query($conn,$sql);
		// if (!mysqli_query($conn,$sql))
	 //  {
	 //  echo("Error description: " . mysqli_error($conn));
	 //  }
	}
}

if(isset($_GET['submit2'])){
	if($conn)
	{
		$jobid = mysqli_real_escape_string($conn,$_GET['selectedJobId']);
		$emailquery="SELECT tbl_emp.empEmail as email FROM tbl_emp, order_details WHERE tbl_emp.empId = order_details.empId AND order_details.jobId=".$jobid;
		$emailreq= mysqli_query($conn,$emailquery);
		$reqemail=mysqli_fetch_array($emailreq);
		$to=$reqemail['email'];
		$from="admin@urbanrun.16mb.com";
		$subject = 'Cancellation of Job';
		$headers  = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	    $headers .= "From: ". $from. "\r\n";
	    $headers .= "Reply-To: ". $from. "\r\n";
	    $headers .= "X-Mailer: PHP/" . phpversion();
	    $headers .= "X-Priority: 1" . "\r\n"; 
	    $body="Sorry to inform you but the job assigned to you (JOB ID =".$jobid." )is cancelled";
		mail ($to, $subject, $body, $headers);
		$sql = "DELETE FROM order_details WHERE jobId=".$jobid;
		$result = mysqli_query($conn,$sql);
		// if (!mysqli_query($conn,$sql))
	 //  {
	 //  echo("Error description: " . mysqli_error($conn));
	 //  }
	}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
	<link rel ="stylesheet" href="css/home.css">

</head>
<body>
	<?php include 'navbar.php';?>
    <div class="container">
        	<center><h3> Hi <?php echo $userRow['name']; ?></h3> </center>
        	<form name="service" method="post" class="form-horizontal">
        	<div class="row">
        		<h3>Service Required</h3>
        	</div>
        	<div class="row">
        		<div class="col-md-3">
        			<h4>Health & Wellness</h4>
        			<input type="radio" name="service" value="yoga">Yoga Trainer<br>
        			<input type="radio" name="service" value="massage">Massage<br>
        			<input type="radio" name="service" value="salon">Salon<br>
        			<input type="radio" name="service" value="diet">Dietician<br>
        			<input type="radio" name="service" value="gym">Gym Trainer<br>
        			<input type="radio" name="service" value="physio">Physiotherapy<br>
        		</div>
        		<div class="col-md-3">
        			<h4>Repairs & Maintenance</h4>
        			<input type="radio" name="service" value="elec">Electrician<br>
        			<input type="radio" name="service" value="plumber">Plumber<br>
        			<input type="radio" name="service" value="carpenter">Carpenter<br>
        		</div>
        		<div class="col-md-3">
        			<h4>Personal</h4>
        			<input type="radio" name="service" value="car">Car Cleaning<br>
        			<input type="radio" name="service" value="tiffin">Dabawalla<br>
        			<input type="radio" name="service" value="packmov">Packers & Movers<br>
        			<input type="radio" name="service" value="driver">Driver On Demand<br>
        			<input type="radio" name="service" value="baby">Baby Sitting<br>
        		</div>
        		<div class="col-md-3">
        			<h4>Home Care</h4>
        			<input type="radio" name="service" value="home">Home Cleaning<br>
        			<input type="radio" name="service" value="wash">Washerman<br>
        			<input type="radio" name="service" value="paint">House Painter<br>
        		</div>    		        		
        	</div>
        	<div class="row">
	        	<div class="col-md-3 col-md-offset-3">
	        		<center> <h3>Date</h3><input type="Date" name="job_date"></center>
	        	</div>
	        	<div class="col-md-3">
	        		<center> <h3>Number of Days</h3><input type="text" name="job_date_to"></center>
	        	</div>
	        	</div>
	        <div class="row">	
	        	<div class="col-md-3 col-md-offset-3">
	        		<center><h3>Time</h3><input type="Time" name="job_time"></center>
	        	</div>
	        	<div class="col-md-3">
	        		<center><h3>Number of Hours</h3><input type="text" name="job_time_to"></center>
	        	</div>	
        	</div>
        	<br>
			<div class="row">
			<div class="col-md-2 col-md-offset-5">
				<center><p><input type="Submit" name="submit"></p></center>
			</div>	
			</div>
			
        </form>
        </div>
        <div class="container-fluid">
        <br>
		<?php 

			if($conn)
			{
				// $sql="SELECT * from order_details WHERE userId=".$_SESSION['user']." ORDER BY jobId DESC";

				$sql="SELECT order_details.empId as empId, tbl_emp.name as empName, order_details.job_details as job_details, order_details.job_date as job_date, order_details.job_time as job_time,order_details.time_to as time_to, order_details.date_to as date_to ,tbl_emp.pno as contactemp,tbl_emp.costph as cost ,order_details.jobId as jobId FROM tbl_emp , order_details WHERE order_details.empId = tbl_emp.empId AND userId=".$_SESSION['user']." ORDER BY jobId DESC";

				$result1=mysqli_query($conn,$sql);


			}
			else
				echo "Not connected";
		?>

<?php 
	if(mysqli_num_rows($result1)>0)
	{
?>
			<div class="table-responsive">
	   		<table class="table table-hover">
			<title>Services</title>
			<tr>
				<th>Job Id</th>
				<th>Employee Id</th>
				<th>Employee Name</th>
				<th>Job Details</th>
				<th>Date</th>
				<th>No of Days</th>
				<th>No of Hours(per day)</th>
				<th>Time</th>
				<th>Contact Number</th>
				<th>Total Cost</th>
				<th>Rate Employee<br><pre>1 2 3 4 5</pre></th>
				<th></th>
				<th></th>
			</tr>


			<?php
		}
		else{
			echo "<center><h3>No Requests made yet</h3></center>";
		}
				while($rows = mysqli_fetch_assoc($result1))
				{
					// if($rows['empId']==0)
					// 	$empid="Not Assigned";
					// else
					// 	$empid=$rows['empId'];
					$totalcost=$rows['cost']*$rows['date_to']*$rows['time_to'];
					echo 
					"
					<tr>
						<td>".$rows['jobId']."</td>
						<td>".$rows['empId']."</td>
						<td>".$rows['empName']."</td>
						<td>".$rows['job_details']."</td>
						<td>".$rows['job_date']."</td>
						<td>".$rows['date_to']."</td>
						<td>".$rows['job_time']."</td>
						<td>".$rows['time_to']."</td>
						<td>".$rows['contactemp']."</td>
						<td>".$totalcost."</td>
						<form name='rate' type='post'>
						<td>
							<input type='radio' name='user-rating' value=1>
							<input type='radio' name='user-rating' value=2>
							<input type='radio' name='user-rating' value=3>
							<input type='radio' name='user-rating' value=4>
							<input type='radio' name='user-rating' value=5>
							</td>
							<td>
							
							<input type='hidden' name='selectedId' value='".$rows['empId']."'/>
							<button type='submit' name='submit1' id='submit1' class='btn btn-default'>Submit</button>
							
						</td>
						<td>
						<input type='hidden' name='selectedJobId' value='".$rows['jobId']."'/>
						<button name='submit2' id='submit2' class = 'btn btn-danger'>Cancel Job Request</button>
						</td>
						</form>
					</tr>\n
					";
				}
			?>
			</table>
		</div>
 	</div>
	<?php include 'footer.php';?>
</body>
</html>