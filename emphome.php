<?php
session_start();
include_once 'dbconnect.php';
 

if(!isset($_SESSION['emp']))
{
	header("Location: emplogin.php");
}
$res=mysqli_query($conn,"SELECT * FROM tbl_emp WHERE empId=".$_SESSION['emp']);
$empRow=mysqli_fetch_array($res);
$costph=$empRow['costph'];

if($empRow['name']=='')
{
	header("Location:empaccount.php");
}

if($conn)
	{
		$sql="SELECT order_details.userId as userId, tbl_users.name as userName, order_details.job_details as job_details,tbl_users.address as address, order_details.job_date as job_date,order_details.date_to as date_to, order_details.job_time as job_time,order_details.time_to as time_to, tbl_users.pno as pno, order_details.jobId as jobId  from order_details, tbl_users WHERE order_details.userId=tbl_users.userId AND empId=".$_SESSION['emp']." ORDER BY jobId DESC ";
		$result=mysqli_query($conn,$sql);
	}

if(isset($_GET['submit1'])){
	if($conn)
	{	
		$selectjob1=$_GET['selectedJobId'];
		$jobid = mysqli_real_escape_string($conn,$selectjob1);
		$emailquery="SELECT tbl_users.userEmail as email FROM tbl_users, order_details WHERE tbl_users.userId = order_details.userId AND order_details.jobId=".$jobid;
		$emailreq= mysqli_query($conn,$emailquery);
		$reqemail=mysqli_fetch_array($emailreq);
		$to=$reqemail['email'];
		$from="admin@urbanrun.16mb.com";
		$subject = 'Job Request has been declined';
		$headers  = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	    $headers .= "From: ". $from. "\r\n";
	    $headers .= "Reply-To: ". $from. "\r\n";
	    $headers .= "X-Mailer: PHP/" . phpversion();
	    $headers .= "X-Priority: 1" . "\r\n"; 
	    $body="Sorry to inform you but the job (JOB ID =".$jobid.") you requested for has been declined by the employee. Please make a new request";
	    $sql = "DELETE FROM order_details WHERE jobId=".$jobid;
		$result1 = mysqli_query($conn,$sql);
		if($result1){

			mail ($to, $subject, $body, $headers);
			header("Location:emphome.php");
		}else
		{
			echo mysqli_error($conn);
		}
		
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
	<div id="container-fluid">
	<div class="row">
		<center><h3> Hi <?php echo $empRow['name']; ?></h3></center>
	</div>

    	
			
		<?php
			if(mysqli_num_rows($result)>0)
			{
				echo "<center><h3>Jobs Available</h3></center>";
		?>
	

		
		<div class="table-responsive">
		<table class="table table-hover">
		<tr>
			<th>User Name</th>
			<th>User ID</th>
			<th>Address</th>
			<th>Job Details</th>
			<th>Date</th>
			<th>No of Days</th>
			<th>Time</th>
			<th>No of Hours</th>
			<th>Job Id</th>
			<th>Contact Number</th>
			<th>Total Cost</th>
			<th></th>
		</tr>
		<?php
			}
			else{
				echo "<center><h3>No Job Requests made yet</h3></center>";
			}
			while($rows = mysqli_fetch_assoc($result))
			{
				$totalcost=$costph*$rows['date_to']*$rows['time_to'];
				echo 
				"

				<tr>
					<td>".$rows['userName']."</td>
					<td>".$rows['userId']."</td>
					<td>".$rows['address']."</td>
					<td>".$rows['job_details']."</td>
					<td>".$rows['job_date']."</td>
					<td>".$rows['date_to']."</td>
					<td>".$rows['job_time']."</td>
					<td>".$rows['time_to']."</td>
					<td>".$rows['jobId']."</td>
					<td>".$rows['pno']."</td>
					<td>".$totalcost."</td>
					<td>
					<form name ='selectjob' type='post' >
						<input type='hidden' name='selectedJobId' value='".$rows['jobId']."'/>
						<button type='submit' name='submit1' id='submit1' class='btn btn-danger'>Decline Job Request</button>
						</form> 
					</td>
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