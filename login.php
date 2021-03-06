<?php
   //We include the configuration file
   include("config.php");
   $error = "";
   //Start the session
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      //Building the query
      $sql = "SELECT * FROM LOGIN WHERE username = '$myusername' and password = '$mypassword'";
      //Performs a query on the database
      $result = mysqli_query($db,$sql);
      //Fetch a result row as an associative, a numeric array, or both
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['user_id'];
      
      //Gets the number of rows in a result
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count >= 1) {
		  if($myusername=="admin"){
			  $_SESSION['login_user'] = $myusername;
			  header("location: index.php");
		  }
         else{
			 $_SESSION['login_user'] = $myusername;
			 header("location: indexR.php"); 
		 }
      }
		else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CAHSI Submission</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Abstract</span><strong class="text-primary">Selection</strong></div>
            <p>Welcome Students, Mentors, and Reviewers! Please login to view any pending tasks!</p>
            <form id="login-form" method="post" action="login.php">
              <div class="form-group">
                <input id="login-username" type="text" name="username" required="" class="input-material">
                <label for="login-username" class="label-custom">E-mail</label>
              </div>
              <div class="form-group">
                <input id="login-password" type="password" name="password" required="" class="input-material">
                <label for="login-password" class="label-custom">Password</label>
              </div>
            <input type="submit" class="btn btn-primary" value="Login">
            </form>
              <a href="forgotpass.php" class="forgot-pass">Forgot Password?</a><small>First time Student? </small><a href="registers.php" class="signup">Sign up</a><br /> 
              <small>First time Mentor/Reviewer? </small><a href="registermr.php" class="signup">Signup</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>