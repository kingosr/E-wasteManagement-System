<?php
//ob_start();
//require_once('includes/dbconfig.php');

require_once ('includes/dbconfig.php');

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$Action = $_POST['Action'];

	if($Action == 'add')
	{ 
		$name = $_POST['pname'];
		$cname = $_POST['cato'];
		$usr=$_SESSION['usr'];
		$quan=1;
		echo $name;
		$des = $_POST['description'];
		echo $usr;
		
	
		$Insert = "insert into webuy(title,category,quantity,des,usr_id) values('".$name."','".$cname."','".$quan."','".$des."','".$usr."')";
		$InsertQuery = mysqli_query($con,$Insert);
		
		if(!$InsertQuery)
		{	
			if(mysqli_errno($con)==1062)
			{
				$jsonData = '{ 
					"Status":"0"
				}';
				echo $jsonData;
				exit();
			}
			else
			{
				$jsonData = '{ 
					"Status":"1"
				}';
				echo $jsonData;
				exit();
			}
	
		}	
	}else{
		$jsonData = '{ 
			"Status":"Unauthorised Access!"
		}';
		echo $jsonData;
		exit();
	}
}
//ob_flush();

?>