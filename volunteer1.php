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
    <meta name="author" content="Free-Template.co" />

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
  max-width: 100%;
  max-height: 50%;
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
    
<img src="img/y.png" class="img-fluid responsive" style="width: 100%; " >



<br>




 <section class="signup-section spad">
    <div class="container">
      <div class="row">
     

    <div class="jumbotron col-lg-12">
                   <!-- form message -->
                   <div class="singup-text">
            <h2 style="color: black" >VOLUNTEERING</h2>
            <p>Input Correct information only</p>
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
<form class="vol_form" action="volcode.php"   method="POST">
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
                                        SERVICE NAME
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="subject" id="subject" required="" placeholder="Name of service" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        PRESENT ADDRESS
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="fname" id="fname" required="" placeholder="Address.." type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                                                        <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        PERMANENT ADDDRESS
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="lname" id="lname" required="" placeholder="Address.." type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                                                        <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        EDUCATIONAL QUALIFICATION
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="education" id="education" required="" placeholder="Enter Qualification" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->
                                                        <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        EXPERIENCE
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="experience" id="experience" required="" placeholder="Enter years and org. info" type="text">
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
                       
<!--   <div class="form-group">
    <label class="h6 small d-block text-uppercase"  for="exampleFormControlSelect1">Select sector</label>
    <select class="form-control"  name="exampleFormControlSelect1" id="exampleFormControlSelect1" >
      <option>HealthCare</option>
      <option>Essential Services</option>
      <option>Enterpreneurship</option>
      <option>Raise Voice</option>
     
    </select>
  </div> -->
<div class="col-sm-6 mb-6">
                        <label class="h6 small d-block text-uppercase"  for="exampleFormControlSelect1">Select sector</label>
                    

                    <div class="form-group wrap-input100 validate-input" data-validate = "State is required">
                    
                    <select name="sector" class="form-control" type="text" required="" id="sector">
                     <option>Select </option>  
                      <option name="sector" value="healthcare "> HealthCare</option>
                      <option name="sector" value="essential " >Essential Services </option>
                      <option name="sector" value="enterpreneurship  " > Enterpreneurship  </option>
                      <option name="sector" value="voice " > Raise Voice </option>
                    
                    </select>
              </div>
          </div>
                            <div class="col-sm-6 mb-6">
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
                      <option name="state" value="puducherry " > Puducherry </option>
                      <option name="state" value="delhi  " > Delhi  </option>
                      <option name="state" value="chandigarh " > Chandigarh  </option>

                    </select>
                                </div>
                            </div>
                             </div>


                       

                   
              
                       <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                Explain How You Would Be suitable for this challenge.
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Details"></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                           <button name="vol_form" type="submit" class="btn btn-primary btn-circled" value="Send Message" style="background-color: 
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