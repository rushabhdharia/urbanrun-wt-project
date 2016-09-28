<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'head.php';?>
</head>
<body>
	<?php include 'navbar.php';?>
	<div class="container">
    <fieldset>
      <legend>Contact</legend>
      <form name="contact">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="textbox" class="form-control" id="name" name="name" placeholder="Enter Name">
        </div> 
        <div class="form-group">
          <label for="emailid">Email-id:</label>
          <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Enter Email-id">
        </div> 
        <div class="form-group">
          <label for="pno">Phone-no:</label>
          <input type="text" class="form-control" id="pno" name="pno" placeholder="Enter Phone No.">
        </div> 
        <div class="form-group">
          <label for="desc">Description:</label>
          <textarea class="form-control" id="desc" name="desc" placeholder="Describe your problem here"></textarea>
        </div> 
        <div class="form-group">
        	<button type="submit" class="btn btn-default">Submit</button>
        </div>
      </form>
    </fieldset>
  </div>
	<?php include 'footer.php';?>
</body>
</html>