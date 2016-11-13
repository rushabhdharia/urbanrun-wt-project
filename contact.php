<?php
session_start();
//include once 'dbconnect.php'; 
  $errName="";
  $errEmail="";
  $result = "";
  $errMessage="";
  $errPhone="";
  
  $from = 'rushabh@urbanrun.com'; 
  $to = 'rushabh.dharia@gmail.com'; 
  $subject = 'Message from contact form';
  if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: ". $from. "\r\n";
    $headers .= "Reply-To: ". $from. "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "X-Priority: 1" . "\r\n"; 
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    //Check if phone number has been entered
    if(!$_POST['pno']){
      $errPhone = "Please Enter your phone number";
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }

    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errPhone) {
    if (mail ($to, $subject, $body, $headers)) {
      $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
      } else {
      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
      }
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
      <legend>Contact Us</legend>
      <form name="contact" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="textbox" class="form-control" id="name" name="name" placeholder="Enter Name" >
          <?php echo "<p class='text-danger'>$errName</p>";?>
        </div> 
        <div class="form-group">
          <label for="email">Email-id:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email-id">
          <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div> 
        <div class="form-group">
          <label for="pno">Phone-no:</label>
          <input type="text" class="form-control" id="pno" name="pno" placeholder="Enter Phone No.">
          <?php echo "<p class = 'text-danger'>$errPhone</p>"?>
        </div> 
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea class="form-control" id="message" name="message" placeholder="Describe your problem here"></textarea>
          <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div> 
        <div class="form-group">
        	<button type="submit" name="submit" class="btn btn-default">Submit</button>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>  
            </div>
          </div>
      </form>
    </fieldset>
  </div>
	<?php include 'footer.php';?>
</body>
</html>