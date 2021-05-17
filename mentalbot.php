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

.button {
  display: inline-block;
  padding: 6px 5px;
  font-size: 24px;
  cursor: pointer;
  
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: palevioletred;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: grey}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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






  <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript" SRC="bot/js/elizabot.js"></SCRIPT>
  <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript" SRC="bot/js/elizadata.js"></SCRIPT>  
  <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript" SRC="bot/js/sentimood.js"></SCRIPT>

  <SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">    
   var eliza = new ElizaBot();
   var elizaLines = new Array();
   var sentiment = new Sentimood();

   var displayCols = 60;
   var displayRows = 20;

   var userSentiment = 0;
   
   var imgs = {};
   imgs[0] = "bot/img/default-01.png";
   imgs[1] = "bot/img/happy1-01.png";
   imgs[2] = "bot/img/happy2-01.png";
   imgs[3] = "bot/img/happy3-01.png";
   imgs[-1] = "bot/img/sad1-01.png";
   imgs[-2] = "bot/img/sad2-01.png";
   imgs[-3] = "bot/img/sad3-01.png";
   
   function updateImage(val) {
       // If continuing on same sentiment
       if(val * userSentiment >= 0) {
     if(val < 0) {
         userSentiment -= 1;
     }
     if(val > 0) {
         userSentiment += 1;
     }
       }
       else {
     // switch moods
     userSentiment = val
       }
       
       if(userSentiment < -3) {
     userSentiment = -3
       }
       if(userSentiment > 3) {
     userSentiment = 3
       }

       // Update image
       document.getElementById('main-image').src = imgs[userSentiment];
   }
   
   function elizaReset() {
       userSentiment = 0;
       eliza.reset();
       elizaLines.length = 0;
       elizaStep();
   }

   function elizaStep() {
       var f = document.forms.e_form;
       var userinput = f.e_input.value;
       
       //console.log(sentiment.analyze(userinput));
       updateImage(sentiment.analyze(userinput)['score']);

       if (eliza.quit) {
     f.e_input.value = '';
     if (confirm("This session is over.\nStart over?")) elizaReset();
     f.e_input.focus();
     return;
       }
       else if (userinput != '') {
     var usr = 'YOU:   ' + userinput;
     var rpl ='ELIZA: ' + eliza.transform(userinput);
     elizaLines.push(usr);
     elizaLines.push(rpl);
     // display nicely
     // (fit to textarea with last line free - reserved for extra line caused by word wrap)
     var temp  = new Array();
     var l = 0;
     for (var i=elizaLines.length-1; i>=0; i--) {
         l += 1 + Math.floor(elizaLines[i].length/displayCols);
         if (l >= displayRows) break
         else temp.push(elizaLines[i]);
     }
     elizaLines = temp.reverse();    
     f.e_display.value = elizaLines.join('\n');
       }
       else if (elizaLines.length == 0) {
     // no input and no saved lines -> output initial
     var initial = 'ELIZA: ' + eliza.getInitial();
     elizaLines.push(initial);
     f.e_display.value = initial + '\n';
       }
       f.e_input.value = '';
       f.e_input.focus();
   }

  </SCRIPT>




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
          <img class="img-fluid" src="img/h1.png">
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

<br>


 <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>mental health & wellfare</h2>
          <p>IMPORTANCE OF BEING HEALTHY BOTH MENTALLY & PHYSICALLY </p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
             Your mind and body will feel better if you sleep well. Your body needs time every day to rest and heal. If you often have trouble sleeping — either falling asleep, or waking during the night and being unable to get back to sleep — one or several of the following ideas might be helpful to you:


            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Go to bed at the same time every night and get up at the same time every morning.</li>
              <li><i class="ri-check-double-line"></i> Avoid caffeine, nicotine, and alcohol.</li>
              <li><i class="ri-check-double-line"></i> Eat on a regular schedule and avoid a heavy meal prior to going to bed.</li>
              <li><i class="ri-check-double-line"></i> Exercise daily, but avoid strenuous or invigorating activity before going to bed.</li>
              <li><i class="ri-check-double-line"></i> 
Take a warm bath or shower before going to bed.</li>
              <li><i class="ri-check-double-line"></i> Drink a cup of herbal chamomile tea before going to bed.</li>
              <p>You need to see your doctor if:</p>
              <li><i class="ri-check-double-line"></i> You often have difficulty sleeping and the solutions listed above are not working</li>
              <li><i class="ri-check-double-line"></i>You awaken during the night gasping for breath</li>
              <li><i class="ri-check-double-line"></i>Your partner says that your breathing stops when you are sleeping or you snore loudly</li>
              <li><i class="ri-check-double-line"></i> You wake up feeling like you haven’t been asleep</li>
             
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
If Condition deteriorates consult a psychologist/doctor.
            </p>
            
            <a href="https://www.vandrevalafoundation.com/" class="btn-learn-more">CONTACT A DOCTOR</a><br><br>
             
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
   <section id="cta" class="cta" style="background-color: black">
      <div class="container" >

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-left">
            <h2 style="color: white">ELIZA---OUR VIRTUAL HEALTH COUNSELLOR</h2><br>
           <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i>
Eliza provides protection of user data and helps users input how they feel and gives responses accordingly with almost human like efficiency.Consult a doctor option is provided for better results and help patients and family members as well as people having mental issues due to the ongoing pandemic.
<i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle button" href="https://www.vandrevalafoundation.com/">CONSULT A DOCTOR</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
    <br><br>


<CENTER>
    <div class="container">
      <H3>ELIZA+</H3>
      <img id="main-image" src="bot/img/default-01.png" width=300px height=300px>
      <TABLE>
    <FORM NAME="e_form" onsubmit="elizaStep();return false">
        <TR>
      <TD COLSPAN="2">
          <TEXTAREA class="form-control" NAME="e_display" COLS="60" ROWS="20"  style="background-color: #121212;color: #fff" placeholder="WELCOME! ENTER THE TALK BUTTON TO INITIATE THE CONVERSATION"></TEXTAREA>
      </TD>
        </TR>
        <TR VALIGN="middle">
      <TD>
          <INPUT class="form-control" TYPE="text" NAME="e_input" SIZE="43">
      </TD>
      <TD ALIGN="right">
          <INPUT class="btn btn-default button" TYPE="submit" VALUE="Talk">
          <INPUT class="btn btn-default button" TYPE="reset" VALUE="Reset" onClick="window.setTimeout('elizaReset()',100)">
      </TD>
        </TR>
    </FORM>
      </TABLE>
  </CENTER>


</div>

<br>

<br><br><br><br><br><br>



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