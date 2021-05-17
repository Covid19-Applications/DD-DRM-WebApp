<?php
if(isset($_POST['check']))
{
		include 'dbconfig.php';
		$name=$_SESSION['user'];
		$sql = "Select * from book where name='$name'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($rows = mysqli_fetch_assoc($result)) 
			{
				echo "Username:".$rows["username"]."Name:".$rows["name"]."Date of Visit:".$rows["dov"]."Town:".$rows["town"]."<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
}
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
//	header( "Refresh:1; url=../cover.php");
	echo "<script type='text/javascript'>document.location='../cover.php';</script>";
}
?>

<html>
<head>
	<link rel="stylesheet" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link rel="shortcut icon" href="../../img/odi.png">

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

<center><img src="../../img/d1.jpg"></center>





<!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

           <div class="section-title" data-aos="zoom-out">
          
          <p>BOOKING STATUS:</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="../../img/c3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
               
                  <button type="button" name="change" id=mapsbtn onclick="window.location.href='changebookingstatus.php'">Change/View Booking Status</button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="../../img/c2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                
                 <button type="submit" name="logout" id="mapsbtn" onclick="window.location.href='mlogin.php'" >Log Out</button>
              </div>
            </div>
          </div>


     


        </div>


       
          </div>

       
    </section><!-- End Team Section -->








   

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