<?php
session_start();
$error=''; 
if (isset($_POST['login'])) {
if (empty($_POST['uname']) || empty($_POST['psw'])) {
$error = "Username or Password is invalid";
}
else
{
  include 'dbconfig.php';
  $username=$_POST['uname'];
  $password=$_POST['psw'];

  $query = mysqli_query($conn,"select * from patient where password='$password' AND username='$username'");
  $rows = mysqli_fetch_assoc($query);
  $num=mysqli_num_rows($query);
  if ($num == 1) {
    $_SESSION['username']=$rows['username'];
    $_SESSION['user']=$rows['name'];
    //header( "Refresh:1; url=ulogin.php");
    echo "<script type='text/javascript'>document.location='ulogin.php';</script>";
  } 
  else 
  {
    $error = "Username or Password is invalid";
  }
  mysqli_close($conn); 
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>ई-दादरा</title>


    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../css/style4.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    
body, html {
  background-color: #333;
    height: 100%;
    margin: 0;
  background-position: 0 7px;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  font-family:verdana;
}
h1{
  text-align:center;
  color:black;
  font-size:40px;
  top:30%;
}
a{
  font-size: 18px;
  color: white;
  text-decoration: none;
}
strong{
  color: white;
  font-size: 30px;
  font-family: verdana;
}
label{
  color:white;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
  border-right:3px solid #bbb;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 7px 35px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #111;
  opacity: 0.6;
}

.active {
    background-color: #e0e0d1;
}
/* Full-width input fields */
input[type=text], input[type=password], input[type=email] ,input[type=date], input[type=number]  {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit]
{
  border-radius:12px;
    background-color: black;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}

option{
  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
  border-radius:12px;
    background-color: black;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    border-radius:12px;
    background-color: red;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.signupbtn{
  border-radius:12px;
    background-color: green;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.loginbtn{
  position:absolute;
  top:50%;
  left:50%;
}
/* Center the image and position the close button */

}

img.avatar {
    width: 90%;
    border-radius:12px;
}

.container {
    padding: 16px;
}
.sucontainer{
  padding: 12px;
  position:absolute;
  left:30%;
  right:30%;
  top:12%;
  border:2px solid white;
  border-collapse:collapse;
  background:grey;
}
.dispcontainer{
  padding: 12px;
  position:bottom;
  left:30%;
  right:30%;
  bottom:5%;
  top:12%;
  border:2px solid white;
  border-collapse:collapse;
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size:cover
}
span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 35%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

 #map {
        height: 100%;
      }
/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 350px) {
  span.dont{
    display: block;
       float: right;
  }
    .cancelbtn {
       width: 100%;
    }
}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 45%;
  max-height:100%;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
</head>
<body style="background-image: url(images/p.png);background-size: 500px;background-position: center;">



      <div class="header">
        <ul>
          <li style="float:left;border-right:none"><a class="logo" href="../index.php"><img  class="responsive" src="../img/logo.png"></a></li>
          <li><a href="locateus.php">SEARCH A DOCTOR</a></li>
          <li><a href="../index.php">HOME</a></il>
        </ul>
        <ul style="position:absolute;top:93%;background-color:black">
        <!--  <li><a href="Admin/alogin.php">ADMIN LOGIN</a></li>-->
          <li><a href="Admin/mlogin.php">MEDICAL LOGIN</a></li>
        </ul>
      </div>
<p style="text-align:center;color:black;font-size:30px;top:55%">ONLINE APPOINTMENT BOOKING SYSTEM</p>
      <div class="card col-md-12" >
        
        

        <button onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:50%;left:50%">LOGIN</button>
      
      </div>  


      <div class="footer">
        <ul style="position:absolute;top:93%;background-color:black">
          
          <li><a href="Admin/mlogin.php">MEDICAL SECTION</a></li>
        <!--  <li><a href="Admin/alogin.php">ADMIN SECTION </a></li>-->
        </ul>
      </div>


<div id="id01" class="modal">
  
 <div class="card col-lg-4" style="margin: 18px;">

<div class="card-body" >

<form class="login100-form validate-form flex-sb flex-w"  action="cover.php" method="POST" >
         <div>
          <span class="login100-form-title p-b-53">
            SIGN IN
          </span>
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
          
          <div class="p-t-31 p-b-9">
            <span class="txt1">
              Username
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Username is required">
            <input type="text" placeholder="Enter Username" name="uname" required>
            <span class="focus-input100"></span>
          </div>
          
          <div class="p-t-13 p-b-9">
            <span class="txt1">
              Password
            </span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input type="password" placeholder="Enter Password" name="psw" required>
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
            <button type="submit" name="login">Login</button>
        
          </div>

          <div class="w-full  p-t-55">
            
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'" style="float:right">Don't have one?</button>
  
          </div>
        </form>

</div>
</div>  
</div>
<!-- <div id="id01" class="modal">
  
  <form class="modal-content animate " method="post" action="cover.php">
    <div class="imgcontainer">
    <span style="float:left"><h2>LOG IN</h2></span>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
  
    <div class="container ">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit" name="login">Login</button>
    
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'" style="float:right">Don't have one?</button>
    </div>
  </form>
</div> -->
<div id="id02" class="modal">
  
<div class="card col-lg-4" style="margin: 18px;">

<div class="card-body" >

<form class="login100-form validate-form flex-sb flex-w"  action="signup.php" method="POST" >
    <div class="container">
    <p style="text-align:center;font-size:18px;"><b>Sign Up -> Choose your Dates -> Book your visit</b></p>
      <p style="text-align:center"><b>Booking an appointment has never been easier!</b></p>
      <p style="text-align:center"><b>The 3 steps for an easier and healthy life</b></p>
    
    </div>

          <div class="w-full  p-t-55">
            
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    <button type="submit" name="signup" style="float:right">Sign Up</button>
  
          </div>
        </form>

</div>




</div>

</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>

</body>
</html>
