<?php
require_once ('includes/dbconfig.php');

session_start();

		

		$name = $_POST['pname'];
		$cname = $_POST['cato'];
		$usr=$_SESSION['usr'];
		

		$quan=1;
		//echo $name;
		$des = $_POST['description'];
		$Photo = $_FILES['Photo']['name'];
		$tmp =$_FILES['Photo']['tmp_name'];


$a=rand(100,999);
		
		
		//$Insert = "INSERT INTO wetake(pid,des,name,category,quantity,usr_id,photos) VALUES ('$a','$des','$name','$cname','$quan','$usr','$Photo')";
		
		
		$insert  = "insert into wetake(pid,name,des,usr_id,photos,category) values('".$a."','".$name."','".$des."','".$usr."','".$Photo."','".$cname."')";
		
		
		
		$InsertQuery = mysqli_query($con,$insert);//$username = mysqli_insert_id($con);

		if(!$InsertQuery)
		{	
			if(mysqli_errno($con)==1062)
			{$e="Data not inserted 1";
				$_SESSION['error']=$e;
			}
			else
			{	$e="Data not inserted 2";
				$_SESSION['error']=$e;
			}
		}
		else{
			$ex=end($Photo);
			$e="Successful";
			$_SESSION['error']=$e;
			$PhotoNew = 'img_'.rand(900,100).'.'.$ex;
				//	$targe = $target . basename($PhotoNew);
					$ImageUpdate = mysqli_query($con,"UPDATE wetake SET `photos`='$PhotoNew' WHERE `usr_id`='".$usr."'");

		move_uploaded_file($tmp, "uploads/".$PhotoNew);

					

						if(!$ImageUpdate)
						{
							//@unlink($target);
							//$DeleteRecord = mysqli_query($con,"DELETE FROM pg WHERE pgid='".$pgid."'");
						}
		
			
			header('location:sell.php');
		}
	?>	