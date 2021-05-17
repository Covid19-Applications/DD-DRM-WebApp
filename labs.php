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
   


  <link rel="stylesheet" href="https://drvic10k.github.io/bootstrap-sortable/Contents/bootstrap-sortable.css" />



  


    <link rel="shortcut icon" href="img/odi.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

 

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
     <!-- Vendor CSS Files -->
  
  <link href="vendor1/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor1/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor1/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor1/remixicon/remixicon.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
          <h2 class="animated fadeInDown" style="color: black"><img src="img/l1.png"> </h2>
          
        </div>
      </div>

     

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


<!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">


        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">COVID19 TESTING CENTERS</h4></a>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">COVID 19 HELPLINE </h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">CHATBOT</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">COVID DADRA & NAGAR HAVELI UPDATES</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>TESTING CENTERS.</h3>
                <p class="font-italic">
                  The following data provides data on testing done at centers in DNH for the treatment & diagnosis of COVID-19.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> COVID Hospitals.</li>
                  <li><i class="ri-check-double-line"></i> COVID Testing Center.</li>
                  <li><i class="ri-check-double-line"></i> District Boundaries.</li>
                 
                </ul>
               <!--  <a href="https://dashboard.kerala.gov.in/testing-view-public.php"><button id="mapsbtn">VIEW ANALYSIS</button></a> -->
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
           <a href="https://www.icmr.gov.in/pdf/covid/labs/COVID_Testing_Labs_02072020.pdf">
 <button id="mapsbtn">TESTING CENTERS</button></a>
              </div>
            </div>

          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>COVID 19 HELPLINE NUMBER </h3>
                
                <p class="font-italic">
                 State Helpline Number: 
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> <span><a href="tel:104">104</a></span> </li>
                  
                           
                </ul>
                               
              </div>

              <div class="col-lg-6 order-1 order-lg-2 text-center">
                
              <iframe src="https://www.google.co.in/maps/d/embed?mid=1tiS6MqaCuMXFyYNTWJGFw7Y_QSjIFAGg" width="640" height="480"></iframe>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>CHATBOT</h3>
                <p>
                Chatbot for Covid-19 data and Awareness.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Whatsapp Chatbot do get details and information regarding coronavirus. </li>
                  
                           
                </ul>
                <a href="https://wa.me/919013151515?text=hi">
 <button id="mapsbtn">GO TO CHATBOT</button></a>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="img/p2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Clinics  & Testing centers in DADRA & NAGAR HAVELI</h3>
                
               
                <p>
                 The following are the details of ongoing cases.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> <n2 >DADRA & NAGAR HAVELI CONFIRMED<h2>
                  <n2 id="dc"><h2></li>
                  <li><i class="ri-check-double-line"></i>  <n2>DADRA & NAGAR HAVELI RECOVERED<h2>
                  <n2 id="dr"><h2></li>
                  <li><i class="ri-check-double-line"></i>  <n2>DADRA & NAGAR HAVELI DEATHS<h2>
                  <n2 id="dd"><h2></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="img/p4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->



<script type="text/javascript">
  

  $.ajax({
    url:"https://api.covid19india.org/v2/state_district_wise.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

    console.log(covid_data)
    
/*
      var sno = 1;

    $.each(covid_data[8].districtData, function(key, value){
      

      $("#state-wise").append("<tr>" + 
        "<td >" + sno + " </td>" +
        "<td>" + value.district + "</td>" +
        "<td>" + value.confirmed + "</td>" +
        "<td>" + value.active + "</td>" +
        "<td>" + value.recovered + "</td>" +
        "<td>" + value.deceased + "</td>" +

        "</tr>" );
      sno++;

console.log(value.confirmed);

    });
*/
Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
}

    
    var DelhiConfirmed = covid_data[9].districtData.sum("confirmed");
    document.getElementById("dc").innerHTML = DelhiConfirmed
    var DelhiDeceased = covid_data[9].districtData.sum("deceased");
    document.getElementById("dd").innerHTML = DelhiDeceased
        var DelhiRecovered = covid_data[9].districtData.sum("deceased");
    document.getElementById("dr").innerHTML = DelhiRecovered

    


  }

});


</script>


  <section id="cta" class="cta" style="background-color: #121212">
      <div class="container" >

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-left">
            <h2 style="color: grey">COVID 19 SELF ASSESSMENT</h2><br>
           <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i>
The following health assessment aims towards analysing the chances of a person being affected with covid19 and how they might get infected.The users need to input data being asked inorder to get full fledged correct responses.
<i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle button" href="https://doctorsetu.projectstepone.org/">GO TO SELF ASSESSMENT</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->












<br><br><br>





<br><br>


<div class="container table-responsive">

  <h1 style="text-align: center;">DAILY-RECORDS OF TESTING IN DADRA & NAGAR HAVELI/DAMAN & DIU</h1>

  <table  class="table  table-hover sortable" id="myTable">

    <thead>

      <tr>

        <th class="bg-secondary">S.No</th>
      <th class="bg-info">UPDATED ON</th>
      <th class="bg-warning">TOTAL TESTED</th>
      <th class="bg-danger">POSITIVE RATE </th>
      <th class="bg-success">POSITIVE CASES</th>
      <th class="bg-primary">TESTS PER MILLION</th>

      </tr>

    </thead>

    <tbody id="state_tested_data">

      

    </tbody>

  </table>

</div>




<script type="text/javascript">
  

  $.ajax({
    url:"https://api.covid19india.org/state_test_data.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {
    
      var newArray = covid_data.states_tested_data.filter(function (el) {

      return el.state === 'Dadra and Nagar Haveli and Daman and Diu';

    });

    console.log(newArray);

      var sno = 1;

    $.each(newArray, function(key, value){
      

      $("#state_tested_data").append("<tr>" + 
        "<td >" + sno + " </td>" +
        "<td>" + value.updatedon + "</td>" +
        "<td>" + value.totaltested + "</td>" +
        "<td>" + value.testpositivityrate + "</td>" +
        "<td>" + value.positive + "</td>" +
        "<td>" + value.testspermillion + "</td>" +

        "</tr>" );
      sno++;

console.log(covid_data)

    });


  }

});


</script>

<br><br><br><br><br>

  



<br><br><br><br><br>

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