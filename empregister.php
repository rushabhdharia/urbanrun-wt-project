<?php
session_start();
//include once 'dbconnect.php'; 
if(isset($_SESSION['emp'])!="")
{
  header("Location: emphome.php");
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<?php include 'head.php';?>
<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
</head>

<body>
  <?php include 'navbar.php';?>
	<div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form method="post" role="form" id="register-form" autocomplete="off">
         
         <div class="form-header">
         	<h3 class="form-title">Employee Sign Up</h3>
                      
         
                      
         </div>
                  
         <div class="form-body">
         
         	  <!-- json response will be here -->
              <div id="errorDiv"></div>
              <!-- json response will be here -->
                      
                        
              <div class="form-group">
                   <div class="input-group">
                   <input name="email" id="email" type="text" class="form-control" placeholder="Email" maxlength="50">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
                        
              
                        
                   <div class="form-group">
                        <div class="input-group">
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group">
                        <div class="input-group">
                        <input name="cpassword" type="password" class="form-control" placeholder="Retype Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
           
                        
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-info" id="btn-signup">
                Sign Up
                 </button>
            </div>
            <div>
            Click here to
              <a href="register.php">
                Sign Up as User
              </a>
            </div>

            </form>
            
           </div>
           
          

	</div>
    <?php include 'footer.php';?> 
    <script src="assets/jquery-1.12.4-jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery.validate.min.js"></script>
    <script src="assets/empregister.js"></script>
   
</body>
</html>
