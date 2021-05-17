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
<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style0.css">
      <style type="text/css">
    .responsive {
  max-width: 90%;
  height: auto;
}

 #map{
        margin-top: 70px;
        height: 650px;
        width: 100%
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

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container"><br><br><br>
         <img src="img/c1.png">
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
















<!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

           <div class="section-title" data-aos="zoom-out">
          <h2 class="responsive">ONLINE VOCATIONAL TRAINING</h2>
          <p>MODULES:<h2 >[SELECT YOUR PREFFERED MODULE]</h2></p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/c2.jpg" class="img-fluid" alt="">
             
              </div>
              <div class="member-info">
                <h4>TECHNOLOGY</h4>
                 <a href="tech.php"> <button id=mapsbtn>GO TO COURSES</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/c3.jpg" class="img-fluid" alt="">
             
              </div>
              <div class="member-info">
                <h4>MEDICINE</h4>
                  <a href="med.php"> <button id=mapsbtn>GO TO COURSES</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/c4.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>BUISNESS & STATISTICS</h4>
                 <a href="buis.php"> <button id=mapsbtn>GO TO COURSES</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/c5.jpg" class="img-fluid" alt="">
            
              </div>
              <div class="member-info">
                <h4>COMMUNICATION</h4>
                <a href="comm.php"> <button id=mapsbtn>GO TO COURSES</button></a>
              </div>
            </div>

          </div>

        </div>


       
          </div>

       
    </section><!-- End Team Section -->

  <br>  <!-- Sign up Section -->
  <section class="signup-section spad">
    <div class="container">
      <div class="row">
     

    <div class="jumbotron col-lg-12">
                   <!-- form message -->
                   <div class="singup-text">
            <h2 style="color: black" >WANT TO INCLUDE YOUR COURSE ON THE PLATFORM?</h2>
            <p>Enter the details of the course.</p>
          </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <!-- Contacts Form -->
<form class="tech_form" action="techcode.php"   method="POST">
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        FULL NAME 
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="name" id="name" required="" placeholder="name" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" name="email" id="email" required="" placeholder="name@gmail.com" type="email">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        COURSE NAME
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="subject" id="subject" required="" placeholder="Name of course" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your Phone Number
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" id="phone" name="phone" required="" placeholder="+0091----------" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                DESCRIPTION OF COURSE
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Details"></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                           <button name="tech_form" type="submit" class="btn btn-primary btn-circled" value="Send Message" style="background-color: 
                           grey;">Submit</button>
                           
                            <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
                        </div>
                    </form>
               </div>
      </div>
    </div>
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