<?php
include('security.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ई-दादरा</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
   
    <link rel="shortcut icon" href="img/odi.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
<script src="https://kit.fontawesome.com/d0fe7b38ff.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link href="vendor1/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor1/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor1/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor1/remixicon/remixicon.css" rel="stylesheet">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
  </head>
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
  background-color:palevioletred;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#mapsbtn:hover {background-color: grey}

#mapsbtn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#mapsbtn:hover a{

   color: #21c87a;    
}
  </style>
  <body style="background-color: #121212;">
    
    
    
    <?php  
include('navbar.php');
?>



    <section class="section bg-dark top-slant-white">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap" >
              <br><br><br><br>
              <h2>Covid19 dashboard</h2>
              <p class="lead" style="color: white">Select One to Proceed</p>
            </div>
          </div>
        </div>
      </div>
        <div class="container">
          <div class="row">
            <div class="major-caousel js-carousel-1 owl-carousel">
              <div >
                <div class="media d-block media-custom text-center">
                  <a href="covid_world/examples/dashboard/index.html"><img src="img/person_1.jpg" alt="Image Placeholder" class="img-fluid"></a>

                  <div class="media-body" style="background-color: #121212">
                    <h3 class="mt-0 text-white">GLOBAL ANALYSIS</h3>
                    <p class="lead">Data of All Countries</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="media d-block media-custom text-center">
                  <a href="covid_ind/Tracker - India/index.php"><img src="img/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
                  <div class="media-body" style="background-color: #121212">

                    <h3 class="mt-0 text-white">INDIA ANALYSIS</h3>

                    <p class="lead">Data Of All States</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="media d-block media-custom text-center">
                  <a href="covid_ind/Tracker - Odisha/index.php"><img src="img/dadra/map.jpg" alt="Image Placeholder" class="img-fluid"></a>
                 
                  <div class="media-body" style="background-color: #121212">
                    <h3 class="mt-0 text-white">DADRA & NAGAR HAVELI ANALYSIS</h3>
                    <p class="lead">Data Of All Cities/Districts</p>
                  </div>
                </div>
              </div>

               
            
              
          </div>
          <!-- END slider -->
          </div>
        </div>
      
    </section> <!-- .section -->
    

    <footer class="site-footer" role="contentinfo"  >
<br><br><br><br><br><br><br>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3 style="color: white">About Us</h3>
            <p class="mb-5">An online inuitive platform designed to serve the society.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2" style="color: palevioletred"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"style="color: palevioletred"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"style="color: palevioletred"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"style="color: palevioletred"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
           
            <div>
              <h3 style="color: white">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-grey"style="color: palevioletred">Address:</span>
                  <span style="color: palevioletred">34 Street Name, Dadra & Nagar Haveli, India</span></li>
                <li class="d-block" ><span class="d-block text-grey"style="color: palevioletred" >Phone:</span><span>+1 242 4942 290</span></li>
                <li class="d-block"><span class="d-block text-grey"style="color: palevioletred">Email:</span><span>info@ed&d.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3 style="color: white">Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#"style="color: palevioletred">About</a></li>
              <li><a href="#"style="color: palevioletred">Terms of Use</a></li>
              <li><a href="#"style="color: palevioletred">Disclaimers</a></li>
              <li><a href="#"style="color: palevioletred">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
       
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
    <script src="js/main1.js"></script>
  </body>
</html>