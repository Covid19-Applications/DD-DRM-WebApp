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
          <p>TECHNICAL COURSES</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/blog/b.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Dash General Assembly</h4>
                <p>Dash General Assembly is a for-profit education organization, but they also offer a free course that promises to teach students the basics of web development. The Dash program focuses on teaching you how to use HTML, CSS and JavaScript. The program is free and completely online, so you’ll be able to learn at your own pace.</p><br>
                 <a href="https://dash.generalassemb.ly/"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/blog/c.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>EdX</h4>
                <p>EdX is a massive open online course (MOOC) provider with university-level courses. These programs are offered for free to users, with courses from universities such as MIT and Harvard. Courses include short videos, interactive learning exercises, tutorial videos, online textbooks and a forum where students can interact with one another, ask questions and reach out to teaching assistants.</p>
                  <a href="https://www.edx.org/g.html"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/blog/d.png" class="img-fluid" alt="">
              
              </div>
              <div class="member-info">
                <h4>Udemy</h4>
                <p>Udemy is targeted at professional adults who need to fit education into their busy work schedules. Some courses on Udemy are free, while some are available at a fee — it will depend on the course and instructor. However, even paid courses won’t break the bank, as most go on sale for as low as $9.99, so you can typically find a good deal if there’s a course you want to take that isn’t free.</p><br>
                 <a href="http://www.cio.com/cms/article/Udemy"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/blog/e.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Harvard Online Learning</h4>
                <p>Harvard offers online access to course materials, lectures, programs and other educational content for free. The goal is to offer “effective, accessible avenues for people who desire to learn but who may not have an opportunity to obtain a Harvard education.”</p><br><br><br><br>
                <a href="https://online-learning.harvard.edu/"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>

          </div>

        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/blog/f.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Khan Academy</h4>
                <p>Khan Academy was developed in 2006 as a non-profit educational organization, with the distinct goal of educating students online for free. Lessons are taught through YouTube videos, with additional exercises online for educations and students. Courses can be accessed on a mobile device and most have been translated into several languages, with nearly 20,000 subtitle translations available.</p>
                 <a href="https://www.khanacademy.org/"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/blog/g.jpg" class="img-fluid" alt="">
             
              </div>
              <div class="member-info">
                <h4>Lynda.com</h4>
                <p>Lynda.com was founded in 1995 by Lynda Weinman, a special effects animator and multimedia professor who founded a digital arts school with her husband. It originally served as online support for her books and classes but it started offering free courses in 2002. It was purchased by LinkedIn in 2016 and offers free courses for subscribers on a wide variety of technical topics. </p>
                  <a href="https://www.lynda.com/"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/blog/h.png" class="img-fluid" alt="">
              
              </div>
              <div class="member-info">
                <h4>MIT OpenCourseWare</h4>
                <p>Over 100 courses that users can stream or download for offline viewing. If you want to work on a certain skill or try out a new skill before you commit to paying for a course, it’s worth checking out MIT OpenCourseWare to see what they have on your topic-of-interest.</p><br><br>
                 <a href="https://ocw.mit.edu/index.htm1"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/blog/i.png" class="img-fluid" alt="">
           
              </div>
              <div class="member-info">
                <h4>Coursera</h4>
                <p>Join Coursera for free and learn online. Build skills with courses from top universities like Yale, Michigan, Stanford, and leading companies like Google and IBM.<br>
              Choose from hundreds of free Information Technology courses or pay to earn a Course or Specialization Certificate.</p><br><br><br><br>
                <a href="https://www.coursera.org/browse/information-technology"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>

          </div>

        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="img/blog/a.png" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Codeacademy</h4>
                <p>Codeacademy offers free coding classes in 12 programming and markup languages, including Python, Ruby, Java, JavaScript, jQuery, React.js, AngularJS, HTML, Sass and CSS. The courses promise to give hands-on experience and real-time feedback from peers.</p><br>
                 <a href="https://www.codecademy.com/"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/blog/b4.png" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Skillshare</h4>
                <p>Skillshare is an American online learning community for people who want to learn from educational videos. The courses, which are not accredited, are available through subscription. The majority of courses focus on interaction rather than lecturing, with the primary goal of learning by completing a project.</p><br>
                  <a href="https://www.skillshare.com/"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/blog/b2.png" class="img-fluid" alt="">
             
              </div>
              <div class="member-info">
                <h4>Udacity</h4>
                <p>Offers an entire hub nano degree programs, individual certification programs etc. These courses help you understand how today’s business objectives can be achieved with user research, analysis, and strategy. Whether you want to start, advance your career, or set up a strong foundation, Udacity can help you attain everything.</p>
                 <a href="https://www.udacity.com/"> <button id=mapsbtn>ACCESS COURSE</button></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/c5.jpg" class="img-fluid" alt="">
              
              </div>
              <div class="member-info">
                <BR>
                <a href="courses.php"> <button id=mapsbtn>BACK TO COURSES</button></a>
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
<form class="tech_form2" action="techcode.php"   method="POST">
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
                           <button name="tech_form2" type="submit" class="btn btn-primary btn-circled" value="Send Message" style="background-color: 
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