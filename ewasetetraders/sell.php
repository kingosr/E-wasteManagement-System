<?php
session_start();
echo $_SESSION['error']; 
if(!isset($_SESSION['username']))
{
  header('location:login.php');

}?>
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
  <!--  <link href="cover.css" rel="stylesheet">-->


</head>
<body >
            <div class="container-fluid" style="margin-top:60px;">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2 >Sell Products</h2>
                            </div>

                            <form action="#" id="SubmitForm" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <input type="text" class="form-control" name="pname" id="pname" value="" placeholder="Product Name" required>
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <select name="cato" class="w-100" id="state">
                                            <option value="dehradun">Choose</option>
                                            <option value="mobile">Mobile</option>
                                            <option value="laptop">Laptop</option>
                                            <option value="pc">Pc</option>
                                            <option value="fridge">Fridge</option>
                                            <option value="fan">Fan</option>
                                            <option value="other">other E Products(Specify in description)</option>

                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="date" class="form-control" name="dos" id="dos" value="" placeholder="purchased date" required>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <textarea class="form-control"  name="description" placeholder="description" rows="5" required></textarea>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="file"  name="pimages" id="productimg" placeholder="Product Images">                                        
                                    </div>
 
                                    <div class="col-12 mb-3"> 
                                        <input class="btn-block btn btn-primary" type="submit" value="submit">
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
				
                </div>
            </div>




    <script type="text/javascript">
       $('#SubmitForm').on('submit', function(event) {
        event.preventDefault();
        var Action = 'add';
        var form_data = new FormData(this);
        form_data.append('Action',Action); 
        alert(Action);
       // $("#flash").show();
        //$("#flash i").addClass('fa-spinner');
        //$("#flash i").addClass('fa-spin');
        //$("#flash").removeClass('hidden');
        //$('html,body').animate({ scrollTop: $(".main-content").offset().top},'slow');
        //$("#flash span").html('Please Wait...');
        
        
       $.ajax({
        url: 'includes/sell_insert.php',
        type: 'POST',
        data: form_data,
        
          contentType: false,
          cache: false,
          processData:false,
                  success: function(result)
          {
            alert(result);
            var obj = JSON.parse(result);
            var Status = obj.Status;
            
            if(Status == '2')
            {
              
                window.location.href = "index.html";
              
              return true;
            }
            else if(Status == '1')
            {
              $("#flash").removeClass('alert-success');
              $("#flash").addClass('alert-danger');
              $("#flash i").removeClass('fa-spinner');
              $("#flash i").removeClass('fa-spin');
              $("#flash i").removeClass('fa-check');
              $("#flash i").addClass('fa-times');
              $("#flash span").html('Family Insert Not Successfully.');
              $('#flash').delay(3000).fadeOut(500);
              return true;
            }
            else if(Status == '0')
            {
              $("#flash").removeClass('alert-success');
              $("#flash").addClass('alert-danger');
              $("#flash i").removeClass('fa-spinner');
              $("#flash i").removeClass('fa-spin');
              $("#flash i").removeClass('fa-check');
              $("#flash i").addClass('fa-times');
              $("#flash span").html('Member No Or Mobile Or UserName Already Exists.');
              $('#flash').delay(4000).fadeOut(500);
              return true;
            }
            else
            {
              $("#flash").removeClass('alert-success');
              $("#flash").addClass('alert-danger');
              $("#flash i").removeClass('fa-spinner');
              $("#flash i").removeClass('fa-spin');
              $("#flash i").removeClass('fa-check');
              $("#flash i").addClass('fa-times');
              $("#flash span").html(Status);
              $('#flash').delay(4000).fadeOut(500);
              return true;
            }
          }
                });
            });
    </script>

</body>
</html>