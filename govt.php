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
    <!-- Theme Style -->
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
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
  background-color: palevioletred;
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
  </head>
  <body>
<?php  
include('navbar.php');
?>
 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <div class="carousel-item active">
        <div class="carousel-container"><br><br><br>
          
         <img class="animated fadeInDown" src="img/emb.png">
          
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>



    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>e-applications/payments/registrations...</h2>
          <p>ONLINE SERVICES</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
         
          <li data-filter=".filter-app">App</li>
          
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <a href="https://www.myloancare.in/loan-rate/dadra" >
            <div class="portfolio-img"><img src="img/g7.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>LOAN SERVICES</h4>
              
              <a href="img/g7.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="https://www.myloancare.in/loan-rate/dadra" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>

             <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <a href="http://dnh.nic.in/Docs/18Feb2016/MARRIAGEREGISTRATIONAPPLICATIONFORM.pdf" >
            <div class="portfolio-img"><img src="img/g5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>MARRIAGE SERVICES</h4>
             
              <a href="img/g5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="http://dnh.nic.in/Docs/18Feb2016/MARRIAGEREGISTRATIONAPPLICATIONFORM.pdf" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="http://smcdnh.nic.in/FuturePlan.aspx">
            <div class="portfolio-img"><img src="img/g2.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>WATER SERVICES</h4>
             
              <a href="img/g2.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="http://smcdnh.nic.in/FuturePlan.aspx" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <a href="http://dnh.nic.in/Docs/old/RTO-LINL-2.pdf">
            <div class="portfolio-img"><img src="img/g8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>DRIVING LICENCE</h4>
              
              <a href="img/g8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="http://dnh.nic.in/Docs/old/RTO-LINL-2.pdf" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>

   
 <div class="col-lg-4 col-md-6 portfolio-item filter-web">
  <a href="https://www.dnhpdcl.in/" >
            <div class="portfolio-img"><img src="img/g1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>ELECTRICITY SERVICES</h4>
            
              <a href="img/g1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="https://www.dnhpdcl.in/" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <a href="https://services.india.gov.in/service/service_url_redirect?id=NTY3Mw==">
            <div class="portfolio-img"><img src="img/g10.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>BIRTH CERTIFICATE</h4>
           
              <a href="img/g10.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="https://services.india.gov.in/service/service_url_redirect?id=NTY3Mw==" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div></a>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
             <a href="https://projects.mapmyindia.com/SilvassaPay/" >
            <div class="portfolio-img"><img src="img/g9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>TAX PAYMENT</h4>
              
              <a href="img/g9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="https://projects.mapmyindia.com/SilvassaPay/" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <a href="http://dnh.nic.in/Docs/old/RTO-LINK-3.pdf">
            <div class="portfolio-img"><img src="img/g6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>VEHICLE REGISTRATION</h4>
             
              <a href="img/g6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="http://dnh.nic.in/Docs/old/RTO-LINK-3.pdf" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web"><a href="http://dnh.nic.in/Departments/COVID19.aspx">
            <div class="portfolio-img"><img src="img/g11.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>COVID19 SERVICES</h4>
             
              <a href="img/g11.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="http://dnh.nic.in/Departments/COVID19.aspx" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div></a>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
  </section><br><br><br>




<?php
include('footer.php');
?>



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