<!doctype html>
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
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">


  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">E-Waste Traders</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link"  href="sell.php">Sell Products</a>
        <a class="nav-link"  href="buy.php">Buy Products</a>
		<?php session_start();
		if(isset($_SESSION['username']))
			
		{//session_destroy();
		//echo $_SESSION['username'];?>
	
	    <a class="nav-link"  href="myprofile.php">account</a>
		<?php } 
		else
		{?>
        <a class="nav-link"  href="login.php">Login</a>
		<?php }?>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">E-Waste Management Platform</h1>
    <p class="lead">This platform will provide interface to manage and sell your e waste. Electronic waste (e-waste) is one of the fastest-growing pollution problems worldwide given the presence if a variety of toxic substances which can contaminate the environment and threaten human health, if disposal protocols are not meticulously managed.</p>
    <p class="lead">
      <a href="intro.html" class="btn btn-lg btn-secondary">Learn more</a>
    </p>
  </main>



  <div id="sell" class="tab-pane fade">
      <h1>Hello</h1>
  </div>


  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>all rights reserved.</p>
    </div>
  </footer>
</div>
</body>
</html>
