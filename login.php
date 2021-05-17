<?php
session_start();
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ई-ओडिशा<">
    <title>ई-दादरा</title>

<link rel="shortcut icon" href="img/odi.png">    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    
    <link rel="shortcut icon" type="image/x-icon" href="img/images/icons/footer_logo.png">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="css/style4.css">
<!--===============================================================================================-->
</head>
<body>

<style type="text/css">



<!--.no-js #loader { display: none;  }-->
<!--.js #loader { display: block; position: absolute; left: 100px; top: 0; }-->
<!--.se-pre-con {-->
<!--    position: fixed;-->
<!--    left: 0px;-->
<!--    top: 0px;-->
<!--    width: 100%;-->
<!--    height: 100%;-->
<!--    z-index: 9999;-->
  background-image: url(img/os.PNG);
 	background-repeat: no-repeat;
 	background-size: 1150px;


<!--}-->

body{
	background-image: url('img/dadra/bg.jpg');
	background-repeat: no-repeat;
	background-size: cover;




</style>


<div class="se-pre-con"></div>

<br>
<center>
    <header>
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                	
                                    <h3 style="color: white; font-size: 45px ">ई-दादरा</h3>
                                    
                                </a>
                            </div>
                        </div>
               
    </header>
</center>
<br><br><br>

<div class="card col-lg-4"  style="margin: 8px" >

<div class="card-body">

<form class="login100-form validate-form flex-sb flex-w"  action="code.php" method="POST" >
					<span class="login100-form-title p-b-53">
						SIGN IN
					</span>
					
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100"  type="email" name="email" placeholder="Enter Email Address" required="">
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required="">
						<span class="focus-input100"></span>
					</div>

					<?php
		                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
		                    {
		                        echo '<h6> '.$_SESSION['status'].' </h6>';
		                        unset($_SESSION['status']);
		                    }
		                ?>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn"  type="submit" name="login_btn">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2" style="color: black">
							Not a member?
						</span>

						<a href="register.php" class="txt2 bo1">
							Sign up Now
						</a>
					</div>
				</form>

</div>
</div>	


<!--/*-->
<!--8?    <script type="text/javascript">-->
    	
<!--$(window).load(function() {-->
<!--        $(".se-pre-con").fadeOut(3000);;-->
<!--    });-->
<!--    </script>-->

</body>
</html>