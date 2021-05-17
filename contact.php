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

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container"><br><br><br>
         <img class="img-fluid animated fadeInDown" src="img/haryana/aa.png" >
        </div>
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



    <section class="contact-page-section spad overflow-hidden">
        <div class="container">
               
                      <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239630.87345506926!2d72.93367161655769!3d20.207661655209762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cb6d4a4c3ed5%3A0x25181c86d4de1850!2sDadra%20and%20Nagar%20Haveli!5e0!3m2!1sen!2sin!4v1593837572812!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

              <br><br> 
            <div class="row">
                <div class="col-lg-6">
                       <div class="col-md-8 mx-auto contact-form-contact-info">
             <img  class="responsive" src="img/logo1.png"></a>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5" style="color: palevioletred"></span>
                  <span>Saidabad, Hyderabad, Telangana,India</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5" style="color: palevioletred"></span>
                  <span>+91 XXXXXXXXXX</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5" style="color: palevioletred"></span>
                  <span>rahman77mohd@gmail.com</span>
                </p>
              </div>
                </div>
                <div class="col-lg-6">
                   <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" action="backcode.php"   method="POST">
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="name" id="name" required="" placeholder="Enter Name" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Your email address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" name="email" id="email" required="" placeholder="Enter Email address" type="email">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="w-100"></div>

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Context
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="subject" id="subject" required="" placeholder="Sector involved" type="text">
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
                                        <input class="form-control" id="phone" name="phone" required="" placeholder="+0091 --------" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                        </div>

                            <div class="col-sm-6 mb-3">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        STATE
                                        <span class="text-danger">*</span>
                                    </label>

                                     
                    <select name="state" class="input100 form-control" type="text" required="" id="state">
                     <option>Select State</option>  
                      <option name="state" value="andhra pradesh "> Andhra Pradesh</option>
                      <option name="state" value="arunachal pradesh " > Arunachal Pradesh </option>
                      <option name="state" value="assam  " > Assam  </option>
                      <option name="state" value="bihar " > Bihar </option>
                      <option name="state" value="chhattisgarh " > Chhattisgarh </option>
                      <option name="state" value="goa " > Goa </option>
                      <option name="state" value="gujarat " > Gujarat </option>
                      <option name="state" value="haryana " > Haryana </option>
                      <option name="state" value="himachal pradesh " > Himachal Pradesh </option>
                      <option name="state" value="jammu & kashmir " > Jammu & Kashmir </option>
                      <option name="state" value="jharkhand" > Jharkhand</option>
                      <option name="state" value="karnataka " > Karnataka </option>
                      <option name="state" value="kerala " > Kerala </option>
                      <option name="state" value="madhya pradesh " > Madhya Pradesh </option>
                      <option name="state" value="maharashtra " > Maharashtra </option>
                      <option name="state" value="manipur " > Manipur </option>
                      <option name="state" value="meghalaya " > Meghalaya </option>
                      <option name="state" value="mizoram " > Mizoram </option>
                      <option name="state" value="nagaland " > Nagaland </option>
                      <option name="state" value="orissa " > Orissa </option>
                      <option name="state" value="punjab " > Punjab </option>
                      <option name="state" value="rajasthan " > Rajasthan </option>
                      <option name="state" value="sikkim " > Sikkim </option>
                      <option name="state" value="tamil nadu " > Tamil Nadu </option>
                      <option name="state" value="telangana " > Telangana </option>
                      <option name="state" value="tripura " > Tripura </option>
                      <option name="state" value="uttar pradesh " > Uttar Pradesh </option>
                      <option name="state" value="uttarakhand " > Uttarakhand </option>
                      <option name="state" value="west bengal " > West Bengal </option>
                      <option name="state" value="andaman & nicobar islands " > Andaman & Nicobar Islands </option>
                      <option name="state" value="dadra and nagar haveli" > Dadra and Nagar Haveli</option>
                      <option name="state" value="daman and diu" > Daman and Diu</option>
                      <option name="state" value="lakshadweep " > Lakshadweep </option>
                      <option name="state" value="ladakh " > Ladakh </option>
                      <option name="state" value="puducherry " > Puducherry </option>
                      <option name="state" value="delhi  " > Delhi  </option>
                      <option name="state" value="chandigarh " > Chandigarh  </option>

                    </select>
                                </div>
                            </div>
                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                How can we help you?
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Hi there, I would like to ..."></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                           <button name="contact_form" type="submit" class="btn btn-primary btn-circled" value="Send Message" style="background-color: 
                           grey;">SEND</button>
                           
                            <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
                        </div>
                    </form>
               </div>

            </div>
        </div>
    </section>
    <!-- Trainers Section end -->
<br><br><br><br>

    </section>
  

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






















   

