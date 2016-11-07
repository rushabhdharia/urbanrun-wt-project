<?php
session_start();
include_once 'dbconnect.php';
 
if(!isset($_SESSION['user']))
	header("Location: login.php");

$empid = $_GET['empId'];

$sql = "SELECT * FROM tbl_emp WHERE empId=".$empid;

$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);
$uid = $_SESSION['user'];
$ser=$_SESSION['service'];
$tock=$_SESSION['time'];
$tock2=$_SESSION['time_to'];
$dt = $_SESSION['date'];
$dt2 = $_SESSION['date_to'];
$empemail=$rows['empEmail'];
	

$sql1 = "INSERT INTO order_details (empId,userId,job_details,job_time,job_date,date_to,time_to) VALUES ('$empid','$uid','$ser','$tock','$dt','$dt2','$tock2')";
	
$result1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM tbl_users WHERE userId=".$uid;
$result2 = mysqli_query($conn,$sql2);
$jobrow = mysqli_fetch_array($result2);

$username=$jobrow['name'];
$useraddress=$jobrow['address'];
$userpno=$jobrow['pno'];

$to = $empemail;
$from="admin@urbanrun.16mb.com";
$subject = 'Job Request';
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ". $from. "\r\n";
$headers .= "Reply-To: ". $from. "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "X-Priority: 1" . "\r\n"; 
$body="Job Request <br> User Name = ".$username."<br>Service Required = ".$ser."<br> Address = ".$useraddress."<br> Contact Number = ".$userpno."<br>Date = ".$dt."<br>Time = ".$tock;
mail ($to, $subject, $body, $headers);


if (!$result1)
{
  echo("Error description: " . mysqli_error($conn));
}
else{
	header("Location: home.php");
}
?>
