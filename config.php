<?php
   //Specify the Database server host
   define('DB_SERVER', 'earth.cs.utep.edu');
   //Specify the Database username
   define('DB_USERNAME', 'cs_scarrillo7');
   //Specify the Database password
   define('DB_PASSWORD', 'Sweglerd!4');
   //Choose the Database (name)
   define('DB_DATABASE', 'f17cs4342team07');
   //We make the connection.
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>