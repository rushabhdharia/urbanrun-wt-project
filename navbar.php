<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo"></a>
        <!-- <a class="navbar-brand" href="index.php" style="margin-top: 8px; margin-bottom: 0px; padding-bottom: 0px">UrbanRun</a> -->
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="howit.php">How It Works</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <?php //session_start();
        if((!isset($_SESSION['user']))&&(!isset($_SESSION['emp'])))
                 { ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
            <?php } ?>     
      </ul>
      <?php
                 if(isset($_SESSION['user'])){ ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Dashboard</a></li>
                        <li><a href="account.php">Your Account</a></li>
                        <li><a href="logout.php?logout">Logout</a></li>
                    </ul>
            <?php } ?>
       <?php
                 if(isset($_SESSION['emp'])){ ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="emphome.php">Dashboard</a></li>
                        <li><a href="empaccount.php">Your Account</a></li>
                        <li><a href="emplogout.php?logout">Logout</a></li>
                    </ul>
            <?php } ?>     
      </div>
    </div>
  </nav>