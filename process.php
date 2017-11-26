<?php include 'config.php';>
 
<?php
 
// create a variable
$username=$_POST['username'];
$Uname=$_POST['Uname'];
$Uemail=$_POST['Uemail'];
$Upassword=$_POST['Upassword'];
$Ugender=$_POST['Ugender'];
$Up_tittles=$_POST['Up_tittles'];
$school=$_POST['school'];
$role=$_POST['role'];

 
//Execute the query
 
//mysqli_query($connect"INSERT INTO User(Uname,Uemail,Upassword,Ugender,Up_tittles)
//				VALUES('$Uname','$Uemail','$Upassword','$Ugender','$Up_tittles')");
//	if(mysqli_affected_rows($connect) > 0){
//	echo "<p>Employee Added</p>";
//	echo "<a href="reviewer_MentorList.php">Go Back</a>";
//} else {
//	echo "Employee NOT Added<br />";
//	echo mysqli_error ($connect);
//}