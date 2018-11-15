<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <title>Register</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>

<main>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            
            <div class="col-md-8">
    
                <div class="card" style="width: 600px; height: 1100px;">
                    <div class="card-body ">
                        <form method="POST" action="php_files/register-cust.php" enctype="multipart/form-data">
                          
                            <div class="text-center">

                                <h2 class="boldtx mb-4">REGISTER</h2><hr>
                                <p>	Create your OTOP Customer Account now!</p>
                            </div>

                            


                  

                           
                           <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                	<label>Personal Information</label>
                                   <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                                </div>
                            </div>	
                            <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                   <input type="text" name="middlename" class="form-control" placeholder="Middle Name" required>
                                </div>
                            </div>	
                            <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                   <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                   <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                            </div>  	
                            <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                   <input type="text" name="mobile" class="form-control" placeholder="999-9999-999" required>
                                </div>
                            </div>
                            <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                   <input type="file" name="file" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                	<label>Email Address</label>
                                   <input type="email" name="email" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group row  justify-content-center">
                                <div class="col-md-8">
                                	<label>Password</label>
                                   <input type="password" name="password" class="form-control" placeholder="" required>
                                </div>
                            </div>






                            <div class="form-row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" name="submit" class="btn btn-warning btn-lg btn-block rounded text-white">
                               SIGN UP
                                    </button>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-md-8 offset-md-5">
                                    <a class="btn btn-link" href="">

                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>
</body>
</html> 

