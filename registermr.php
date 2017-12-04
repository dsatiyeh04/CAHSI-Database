<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
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
            <div class="logo text-uppercase"><span>Mentor/Reviewer</span><strong class="text-primary">Registration</strong></div>
            <p>If your a first time user fill in the form below!</p>
            <form id="register-form" method = "post" action = thankyouSR.php>
              <div class="form-group">
                <label for="register-fullname" class="label-custom">Full Name (First, Last)</label>
                <input id="register-fullname" type="fullname" name="registerfullname" required>
              </div>
              <div class="form-group">
                <label for="register-email" class="label-custom">Email Address</label>
                <input id="register-email" type="email" name="registerEmail" required>
              </div>
            <div class="form-group">
                <label for="register-passowrd" class="label-custom">Password        </label>
                <input id="register-passowrd" type="password" name="registerPassword" required>
              </div>
            <div class="form-group">
                <label for="register-Professional" class="label-custom">Professional Titles      </label>
                <input id="register-Professional" type="title" name="registerProfessional" required>
<!--                <input id="register-Class" type="class" name="registerclass" required>-->
              </div>
              <div class="form-group">
                <label for="register-gender" class="label-custom">Gender       </label>
                <select id="register-Institution" name="registerInstitution">
                    <option value="Male" selected>Male</option>
                    <option value="Female">Female</option>
                    <option value="NONB">Non-Binary</option>
                    <option value="nada">Perfer not to answer</option>
                </select>
                <br /> 
                <br /> 
              </div>
            <div class="form-group">
                <label for="register-ethnicity" class="label-custom">Ethnicity       </label>
                  <select id="register-ethnicity" name="registerEthnicity">
                    <option value="white" selected>White</option>
                    <option value="Hispanic">Hispanic or Latino</option>
                    <option value="Black">Black/African American</option>
                    <option value="Native">Native American/American Indian</option>
                    <option value="Asian">Asian/Pacific Islander</option>
                    <option value="Other">Other</option>
                </select>
                <br /> 
                <br /> 
<!--                <input id="register-Class" type="class" name="registerclass" required>-->
              </div>
             <div class="form-group">
                <label for="register-Institution" class="label-custom">Institution       </label>
                <select id="register-Institution" name="registerInstitution">
                    <option value="CSUDH" selected>California State University Dominguez Hills</option>
                    <option value="CSUSM"> California State University San Marcos</option>
                    <option value="CSUSTAN"> California State University Stanislaus</option>
                    <option value="FIU">Florida International University</option>
                    <option value="NMSU"> New Mexico State University</option>
                    <option value="TAMUCC">Texas AM University Corpus Christi</option>
                    <option value="UGD">University of Houston-Downtown</option>
                    <option value="UPR"> Universidad de Puerto Rico</option>
                    <option value="UTEP">The University of Texas at El Paso</option>
                    <option value="NIU" >Northeastern Illinois University</option>
                    <option value="UTPA">University of Texas-Pan American</option>
                    <option value="PUPR"> Universidad Politecnica Puerto Rico</option>
                    <option value="UPRR">Universidad De Puerto Rico Recinto De Rio Piedras</option>
                    <option value="DACC">Dona Ana Community College</option>
                    <option value="UPR"> Universidad de Puerto Rico-Arecibo</option>
                    <option value="EPCC">El Paso Community College</option>
                    <option value="MCCD">Merced Community College</option>
                    <option value="UPR"> Universidad de Puerto Rico-Arecibo</option>
                    <option value="UCMERCED">UCMerced University of California</option>
                </select>
                <br /> 
                <br /> 
              </div>
              <input id="register" type="submit" value="Register" class="btn btn-primary">
            </form><small>Already have an account? </small><a href="login.php" class="signup">Login</a>
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