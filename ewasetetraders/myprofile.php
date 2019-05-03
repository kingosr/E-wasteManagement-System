<?php
session_start();

if(!isset($_SESSION['username']))
{
header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    
    
    <title>E-waste Traders</title>

    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<script src="js/bootstrap.min.js"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    

  </head>
  

<body class="text-center">
    
    
            <div class="container" style="margin-top:90px;">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        
                            <img class="rounded" src="img/core-img/user.png" style="width:150px;height:150px;">
                            <div class="cart-title">
                                <h2><?php  echo "Welcome ".$_SESSION['username']; ?></h2>
                            </div>

                            <form action="sout.php" method="post">
                                <div class="row">
                                    
                                <div class="col-md-12 mb-3">
                                    <input type="submit" class="btn-block btn btn-primary"  value="Logout" required>
                                </div>

                                    
                                </div>
                            </form>
                        
                    </div>
				
                </div>
            </div>
    
</body>

</html>