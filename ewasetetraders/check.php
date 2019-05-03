<?php
session_start();
include('dbconfig.php');
$username = $_POST['username'];
$password = $_POST['password'];

				
		
		$query="select * from user_details where email='".$username."' AND password='".$password."'";
		$Select = "SELECT name FROM user_details WHERE  email='".$username."' AND password='".$password."'";
			$SelectQuery = mysqli_query($con,$Select);
			$result1=mysqli_query($con,$query);
	if($row=mysqli_fetch_assoc($result1))
		$_SESSION['usr']=$row['uid'];
				
		
	
		
		$existAccount = mysqli_num_rows($SelectQuery);
		$user = mysqli_fetch_array($SelectQuery);
		
		if($existAccount==1)
		{
		
				$UserName = $user['name'];
			
				//ini_set('session_save_path','/');
				//ini_set('session.gc_probability', 1);
					
				$_SESSION['username'] = $UserName;
				//$_SESSION['SessionID']= $SessionID;
				
				//setcookie("username", $UserName, strtotime( '+30 days' ), "/", "", "", TRUE);
				
				//setcookie("LoginStatus", 1, strtotime( '+30 days' ), "/", "", "", TRUE);
				
						if(isset($_SESSION['username']))
				{
				header('location:index.php');
				}
				
				
				
		}
		else{
			?>
			<html><body>hii<font size="10" align="center"><a href="demo.php">Wrong credentials plz touch here to login again!!!!!!!!<a></font></body>
</html>
			<?php
			} 
			?>
