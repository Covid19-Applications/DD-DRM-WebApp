<?php 
function SignIn() 
{ 
include 'dbconfig.php';

session_start();
if(!empty($_POST['uname']))  
{ 
    $query = mysqli_query($conn,"SELECT * FROM manager where username = '$_POST[uname]' AND password = '$_POST[pass]'");
    $row = mysqli_fetch_array($query);
    if(!empty($row['username']) AND !empty($row['password'])) 
    { 
        $_SESSION['username'] = $row['username'];
        $_SESSION['mgrname']=$row['name'];
        $_SESSION['mgrid']=$row['mid'];
        echo "Logging you in..";
        //header( "Refresh:3; url=mgrmenu.php");
        echo "<script type='text/javascript'>document.location='mgrmenu.php';</script>";
    } 
    else 
    { 
        echo "Wrong Credentials!"; 
    } 
    }
} 
    if(isset($_POST['submit'])) 
    { 
        SignIn(); 
    } 
?>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="shortcut icon" href="../../img/odi.png">
<link rel="stylesheet" href="main.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/magnific-popup.css">
<script src="https://kit.fontawesome.com/d0fe7b38ff.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../../fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
<link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style1.css">
      <style type="text/css">
    .responsive {
  max-width: 90%;
  height: auto;
}
#mapsbtn {

  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  margin-bottom: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: orange;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#mapsbtn:hover {background-color: #3e8e41}

#mapsbtn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#mapsbtn:hover a{

   color: #21c87a;    
}
  </style>
  </head>
 
<body>

    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
        


          <a class="navbar-brand" href="index.php"><img  class="responsive" src="img/logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">HOME</a>
              </li>
                 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EMERGENCY DATA</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="covid.html">COVID19 DASHBOARD</a>
                  <a class="dropdown-item" href="#">AMPHAN RELIEF </a>
                
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HEALTHCARE</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="publiccare.html">Public Healthcare Locations For COVID19</a>
                  <a class="dropdown-item" href="medical.html">Medical Stores</a>
                   <a class="dropdown-item" href="labs.html">Labs For Testing & Results</a>
                  <a class="dropdown-item" href="mentalbot.html">Counselling For Patients & Family</a>
                  <a class="dropdown-item" href="check.php">Check For Symptoms</a>
                  <a class="dropdown-item" href="#">Online Doctor's Appointments</a>
                  <a class="dropdown-item" href="home.html">Home Treatment &amp; Alarm Systems </a>

                </div>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SAFETY</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">First Responders</a>
                  <a class="dropdown-item" href="tollfree.html">Toll Free </a>
                
                </div>
              </li>
                 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="funds.html">Collection of Funds</a>
                  <a class="dropdown-item" href="rfood.html">Collection of Relief Materials Food</a>
                  <a class="dropdown-item" href="govt.html">Government Services</a>
                  <a class="dropdown-item" href="#">Food Supply to Isolated Patients</a>
                  <a class="dropdown-item" href="pass.html">Essential Service Transport Pass</a>
                  <a class="dropdown-item" href="pass.html">Personal Pass Service Request</a>
                  <a class="dropdown-item" href="pass.html">Movement Pass Service Request</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ENLIGHTMENT</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">Vocational Online Training</a>
                  <a class="dropdown-item" href="volunteer.html">Volunteers Registrations</a>
                 
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="NEWS/index.html">NEWS</a>
              </li>
                 
                 
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="logout.php">LOGOUT</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
















    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/jquery.waypoints.min.js"></script>
    <script src="../../js/aos.js"></script>

    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/magnific-popup-options.js"></script>
    

    <script src="../../js/main.js"></script>
    <script src="../../js/main1.js"></script>
    
</body>
</html>