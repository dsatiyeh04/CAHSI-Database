<?php
   //Specify the Database server host
   define('DB_SERVER', 'earth.cs.utep.edu');
   //Specify the Database username
   define('DB_USERNAME', 'cs_scarrillo7');
   //Specify the Database password
   define('DB_PASSWORD', 'nanochromatico9');
   //Choose the Database (name)
   define('DB_DATABASE', 'f17cs4342team07');
   //We make the connection.
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//
////create a variable
//$username=$_POST['username'];
//$Uname=$_POST['Uname'];
//$Uemail=$_POST['Uemail'];
//$Upassword=$_POST['Upassword'];
//$Ugender=$_POST['Ugender'];
//$Up_tittles=$_POST['Up_tittles'];
//$school=$_POST['school'];
//$role=$_POST['role'];

 
//Execute the query
 
//$sql="INSERT INTO User(Uname,Uemail,Upassword,Ugender,Up_tittles)
//				VALUES('$Uname','$Uemail','$Upassword','$Ugender','$Up_tittles')");
//	if(mysqli_affected_rows($db) > 0){
//	echo "<p>Employee Added</p>";
//	echo "<a href="reviewer_MentorList.php">Go Back</a>";
//} else {
//	echo "Employee NOT Added<br />";
//	echo mysqli_error ($connect);
//}
?>