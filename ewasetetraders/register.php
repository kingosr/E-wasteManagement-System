<?php
include('includes/dbconfig.php');
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$state=$_POST['state'];
$area=$_POST['area'];
$phone=$_POST['phone'];
$zip=$_POST['zip'];
$a=rand(100,999);
echo $name."\n";
echo $email."\n";
echo $phone."\n";
echo $pass."\n";
echo $area;
//$query="select * from user_details where name='".$name."'";


$query="insert into user_details(name,email,mobile,password,address,uid) values('".$name."','".$email."','".$phone."','".$pass."','".$area."','".$a."')";
$result=mysqli_query($con,$query);
//mysql_connect($con,$query);
if($result)
	//alert("failed");

header('location:login.php');
?>	


