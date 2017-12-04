<?php
   //We include the configuration file
   include("config.php");

// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Escape user inputs for security
       $Sname = mysqli_real_escape_string($db, $_POST['Sname']);
       $Semail = mysqli_real_escape_string($db, $_POST['Semail']);
       $Spassword = mysqli_real_escape_string($db, $_POST['Spassword']);
       $Sgender = mysqli_real_escape_string($db, $_POST['Sgender']);
       $Smajor = mysqli_real_escape_string($db, $_POST['Smajor']);
       $Sethnicity = mysqli_real_escape_string($db, $_POST['Sethnicity']);
       $Ins_ID = mysqli_real_escape_string($db, $_POST['Ins_ID']);
       $Cclassification_ID = mysqli_real_escape_string($db, $_POST['Cclassification_ID']);
       $Rrole_ID = mysqli_real_escape_string($db, $_POST['Rrole_ID ']);

    $sql = "INSERT INTO Student (Sname, Semail, Spassword, Sgender, Smajor, Sethnicity, Ins_ID, Cclassification_ID, Rrole_ID) VALUES ('$Sname', '$Semail', '$Spassword', '$Sgender', '$Smajor', '$Sethnicity', '$Ins_ID', '$Cclassification_ID', 'S')";
       
      if ($db->query($sql) === TRUE) {
        $message=  "User Added!";
    } else {
        $error=  $sql . "<br>" . $db->error;
    }
}
$db->close();
   
//   $error = "";
//   //Start the session
//   session_start();
   
//   if($_SERVER["REQUEST_METHOD"] == "POST") {
//       if(isset($_POST['Register'])){
//        $sql = "INSERT INTO users (username, password, email)
//        VALUES (?,?,?)";
//           $stmt = mysqli_prepare($sql);
//       $stmt->bind_param("sss", $_POST['username'], $_POST['email'], $_POST['password']);
//        $stmt->execute();
//       }
//       // Escape user inputs for security
//       $Sname = mysqli_real_escape_string($_REQUEST['Sname']);
//       $Semail = mysqli_real_escape_string($_REQUEST['Semail']);
//       $Spassword = mysqli_real_escape_string($_REQUEST['Spassword']);
//       $Sgender = mysqli_real_escape_string($_REQUEST['Sgender']);
//       $Smajor = mysqli_real_escape_string($_REQUEST['Smajor']);
//       $Sethnicity = mysqli_real_escape_string($_REQUEST['Sethnicity']);
//       $Ins_ID = mysqli_real_escape_string($_REQUEST['Ins_ID']);
//       $Cclassification_ID = mysqli_real_escape_string($_REQUEST['Cclassification_ID']);
//      // $Rrole_ID = mysqli_real_escape_string($_REQUEST['Rrole_ID ']);
// 
//       // attempt insert query execution
//       $sql = "INSERT INTO Student VALUES ('NULL', '$Sname', '$Semail', '$Spassword', '$Sgender', '$Smajor', '$Sethnicity', '$Ins_ID', '$Cclassification_ID', 'S')";
//       if(mysqli_query($sql)){
//           echo "Records added successfully.";
//       } else{
//           echo "ERROR: Could not able to execute $sql. ";
//       }
//   }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CAHSI SYSTEM by SJ^2</title>
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
    <!-- Side Navbar -->
   <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">Claudia Casas</h2><span class="text-uppercase">Administrator</span>
          </div>
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.php"> <i class="icon-home"></i><span>Home</span></a></li>
            <li> <a href="forms.php"><i class="icon-form"></i><span>Modify Users</span></a></li>
<!--            <li> <a href="charts.php"><i class="icon-presentation"></i><span>Charts</span></a></li>-->
            <li> <a href="tables.php"> <i class="icon-grid"> </i><span>Tables  </span>
              <div class="badge badge-info">Overview</div></a></li>
<!--            <li> <a href="login.php"> <i class="icon-interface-windows"></i><span>Login page</span></a></li>-->
<!--
            <li> <a href="#"> <i class="icon-mail"></i><span>Demo</span>
                <div class="badge badge-warning">6 New</div></a></li>
-->
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Administrator </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item"><a href="login.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Forms</li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <header> 
            <h1 class="h3 display">Modify Users</h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display display">Add Student</h2>
                </div>
                <div class="card-body">
                  <p>Create a new student profile</p>
                  <form action=".php" method ="post">
                    <div class="form-group">
                <label for="register-fullname" class="label-custom">Full Name (First and Last name)</label>
                <input id="registerfullname" type="text" name="Sname" required>
              </div>
              <div class="form-group">
                <label for="register-email" class="label-custom">Email Address</label>
                <input id="registeremail" type="email" name="Semail" required>
              </div>
            <div class="form-group">
                <label for="register-password" class="label-custom">Password        </label>
                <input id="registerpassword" type="password" name="Spassword" required>
              </div>
              <div class="form-group">
                <label for="register-gender" class="label-custom">Gender       </label>
                <select id="registergender" name="Sgender">
                    <option value="male" selected>Male</option>
                    <option value="female">Female</option>
                    <option value="nonb">Non-Binary</option>
                    <option value="nada">Perfer not to answer</option>
                </select>
                <br /> 
                <br /> 
              </div>
            <div class="form-group">
                <label for="register-ethnicity" class="label-custom">Ethnicity       </label>
                  <select id="registerethnicity" name="Sethnicity">
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
                <label for="register-Class" class="label-custom">Classification       </label>
                  <select id="registerClass" name="Cclassification_ID">
                    <option value="Freshman" selected>Freshman</option>
                    <option value="Sophmore">Sophmore</option>
                    <option value="Junior">Junior</option>
                    <option value="Senior">Senior</option>
                </select>
                <br /> 
                <br /> 
<!--                <input id="register-Class" type="class" name="registerclass" required>-->
              </div>
            <div class="form-group">
                <label for="register-Major" class="label-custom">Major      </label>
                <select id="registerMajor" name="Smajor">
                    <option value="Engineering" selected>Engineering</option>
                    <option value="Science"> Science</option>
                    <option value="Math"> Math</option>
                    <option value="Technology">Technology</option>
                    <option value="Other">Other</option>
                </select>
                <br /> 
                <br /> 
              </div>
             <div class="form-group">
                <label for="register-Institution" class="label-custom">Institution       </label>
                <select id="registerInstitution" name="Ins_ID">
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
                    <option value="UPRA"> Universidad de Puerto Rico-Arecibo</option>
                    <option value="EPCC">El Paso Community College</option>
                    <option value="MCCD">Merced Community College</option>
                    <option value="UCMERCED">UCMerced University of California</option>
                </select>
                <br /> 
                <br /> 
              </div>
                    <div class="form-group">       
                      <input type="submit" value="Register" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Add Mentor/Reviewer</h2>
                </div>
                <div class="card-body">
                  <p>Create a new Mentor/Reviewer</p>
                  <form class="form-horizontal">
              <div class="form-group">
                <label for="register-fullname" class="label-custom">Full Name (First and Last name</label>
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
                    <option value="UPRA"> Universidad de Puerto Rico-Arecibo</option>
                    <option value="EPCC">El Paso Community College</option>
                    <option value="MCCD">Merced Community College</option>
                    <option value="UCMERCED">UCMerced University of California</option>
                </select>
                <br /> 
                <br /> 
              </div>
                    <div class="form-group row">       
                      <div class="col-sm-10 offset-sm-2">
                        <input type="register" value="Register" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Delete any user</h2>
                </div>
                <div class="card-body">
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="inlineFormInput" class="sr-only">Name</label>
                      <input id="inlineFormInput" type="text" placeholder="First Last Name" class="mx-sm-3 form-control">
                    </div>
                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">Email</label>
                      <input id="inlineFormInputGroup" type="text" placeholder="Username" class="mx-sm-3 form-control form-control">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Submit" class="mx-sm-3 btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Administrator</h2>
                </div>
                <div class="card-body text-center">
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary"> Add</button>
                  <!-- Modal-->
                  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 id="exampleModalLabel" class="modal-title">Adding new Administrator</h5>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <p>Adding new Administrator</p>
                          <form>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="form-group">       
                              <label>Password</label>
                              <input type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">       
                              <input type="register" value="Register" class="btn btn-primary">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
<!--                          <button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
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