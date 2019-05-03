<?php
//ob_start();
session_start();
require_once('dbconfig.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// If Old Session Available...
	if(isset($_SESSION['username']))
	{
		session_destroy();
		session_start(); 
	}
	
	$Action = $_POST['Action'];

	// Admin Login
	if($Action == 'userlogin')
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		echo $username;
//session_start();
//	$_SESSION["name"]=$username;

		
		$username = mysqli_real_escape_string($con,$username); 
	$password = mysqli_real_escape_string($con,$password);
				
		$EncPassword =$password;
		$query="select * from user_details where email='".$username."' AND password='".$EncPassword."'";
		$Select = "SELECT name FROM user_details WHERE  email='".$username."' AND password='".$EncPassword."'";
			$SelectQuery = mysqli_query($con,$Select);
			$result1=mysqli_query($con,$query);
	if($row=mysqli_fetch_assoc($result1))
		$_SESSION['usr']=$row['uid'];
			
		if(!$SelectQuery){
			$jsonData = '{ 
				"Status":"1"
			}';
			echo $jsonData;
			exit();
		}
		
		$existAccount = mysqli_num_rows($SelectQuery);
		$user = mysqli_fetch_array($SelectQuery);
		
		if($existAccount==1)
		{
			
			
				$UserName = $user['name'];
				//$LogInTime = date("Y-m-d H:i:s");
				//$SessionID = session_id();
				
				//ini_set('session_save_path','/');
				//ini_set('session.gc_probability', 1);
					
				$_SESSION['username'] = $UserName;
				//$_SESSION['SessionID']= $SessionID;
				
				//setcookie("username", $UserName, strtotime( '+30 days' ), "/", "", "", TRUE);
				
				//setcookie("LoginStatus", 1, strtotime( '+30 days' ), "/", "", "", TRUE);
				
						if(isset($_SESSION['username']))
				{
					$jsonData = '{ 
						"Status":"5"
					}';
					echo $jsonData;
					exit();
				}
				else
				{
					session_destroy();
					$jsonData = '{ 
						"Status":"4"
					}';
					echo $jsonData;
					exit();
				}
			
			
		}
		else
		{
			$jsonData = '{ 
				"Status":"2"
			}';
			echo $jsonData;
			exit();
		}
	}
	else
	{
		$jsonData = '{ 
			"Status":"Unauthorised Access!"
		}';
		echo $jsonData;
		exit();
	}
}
else
{
	$jsonData = '{ 
		"Status":"Unauthorised Access!"
	}';
	echo $jsonData;
	exit();
}
//ob_flush();
?>