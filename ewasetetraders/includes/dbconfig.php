<?php  
//ini_set('error_reporting', 0);
//ini_set('display_errors', 0);
date_default_timezone_set('Asia/Calcutta');

$db_host = "localhost"; 
// Place the username for the MySQL database here 
$db_username = "root";  
// Place the password for the MySQL database here 
$db_pass = "password";  
// Place the name for the MySQL database here 
$db_name = "etraders"; 


// Run the actual connection here  
$con = mysqli_connect("$db_host","$db_username","$db_pass","$db_name");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
