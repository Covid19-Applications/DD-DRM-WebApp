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
          <h2 class="animated fadeInDown" style="color: black">MEDICAL STORES</h2>
          
          <p class="animated fadeInUp" style="font-size: 20px">Automated services and an Intuitive platform</p>
         
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

 <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>ई-दादरा</h2>
          <p>Services Offered:</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          
          <li data-filter=".filter-active">App</li>
          
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/m1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>INTEGRATED WEB/APP</h4>
              
              <a href="img/m1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/m2.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>24/7 SERVICES</h4>
           
              <a href="img/m2.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/m3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>PLOTTED MAPS</h4>
              
              <a href="img/m3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="img/m4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>EMERGENCY TOLL FREE NO></h4>
         
              <a href="img/m4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="img/m5.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>ADD STORES</h4>
             
              <a href="img/m5.png" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="img/m7.png" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>E-SERVICES</h4>
             
              <a href="img/m7.png" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Portfolio Section -->



<br><br><br><br><br>

    <section class="section  bg-light top-slant-white">
      
  <!-- Sign up Section -->
  <section class="signup-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
        <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239630.87345506926!2d72.93367161655769!3d20.207661655209762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0cb6d4a4c3ed5%3A0x25181c86d4de1850!2sDadra%20and%20Nagar%20Haveli!5e0!3m2!1sen!2sin!4v1593837572812!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div><br />
        </div>

    <div class="col-lg-6">
                   <!-- form message -->
                   <div class="singup-text">
            <h2 style="color: black" >ADD YOUR MEDICAL STORE</h2>
            <p>Fill the info and provide details of the medical store.</p>
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
<form class="med_form" action="frontcode.php"   method="POST">
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        NAME OF SUPPLIER
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
                                        STORE NAME
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="subject" id="subject" required="" placeholder="Name of store" type="text">
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
                      <option name="state" value="puducherry " > Puducherry </option>
                      <option name="state" value="delhi  " > Delhi  </option>
                      <option name="state" value="chandigarh " > Chandigarh  </option>

                    </select>
                                </div>
                            </div>

                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                DESCRIPTION
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required="" placeholder="Details"></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                           <button name="med_form" type="submit" class="btn btn-primary btn-circled" value="Send Message" style="background-color: 
                           grey;">Submit</button>
                           
                            <p class="small pt-3">We'll get back to you in 1-2 business days.</p>
                        </div>
                    </form>
               </div>
      </div>
    </div>
  </section>
  <!-- Sign up Section end -->



</section> 


<div class="container responsive">
  <h1 style="text-align: center;color: red"><hr><hr>MEDICAL STORES LOCATION</h1><hr><hr>
</div>

  <div id="map"></div>

                    <br><br>    
                       
                    <div class="whole-wrap">
                        <div class="container box_1170">

                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25" style="text-align: center;">24 Hours Medical Stores In Dadra & Nagar Haveli</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning"  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-info">S.No</th>
                                                        <th class="bg-primary">Name of the store</th>
                                                        <th class="bg-warning">Address </th>
                                                        <th class="bg-danger">Phone No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                            <td>1.</td>
                                                            <td>Bhawani Medical & General Stores</td>
                                                            <td>Shop No.3, Mahavir Complex, Khanvel Rd, Opposite Bus Depot,Near Sangam Hardware, Samarvarni, Silvassa, Dadra and Nagar Haveli 396230</td>
                                                            
                                                            
                                                             <td>
                                                        <a href="tel:+917698194040">+917698194040</a></td>
                                                    </tr>

                                                    <tr>
                                                        <td >2.</td>
                                                        <td>Bhavani Medical Store</td>
                                                        <td>Brahmin Falia, near sai temple, Naroli, Dadra and Nagar Haveli 396235</td>
                                                        
                                                        
                                                         <td>
                                                        <a href="tel:+919033588864">+919033588864</a></td>
                                                    </tr>
                                             <!--        <tr>
                                                        <td >3.</td>
                                                        <td>Shree Medico</td>
                                                        <td>Shop no. 27, HUDA Market Rd, Sector 40, Gurugram, Haryana 122001</td>
                                                        
                                                        
                                                         <td>
                                                        <a href="tel:+918826231657">+918826231657</a></td>
                                                    </tr> -->
                                                <!--      <tr>
                                                        <td >3.</td>
                                                        <td>Apollo Pharmacy</td>
                                                        <td>Bir Tikendrajit Rd, Paona Bazar, Imphal, Manipur 795001</td>
                                                        
                                                        <td>
                                                        <a href="tel:+913852441151">+913852441151</a></td>
                                                    </tr> -->
 
                                                </tbody>


                                               

                                            </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br>

                    <div class="whole-wrap">
                        <div class="container box_1170">

                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25" style="text-align: center;">Medical Stores @3km Radius </h2>
                               <h4 style="text-align: center;"> Enable location to view medical stores within 3 Km</h4>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning"  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-secondary">S.No</th>
                                                        <th class="bg-danger">Medical Store Name</th>
                                                        <th class="bg-success">Address </th>
                                                 </tr>
                                                 </thead>   
                                                <tbody id="box"></tbody>
                                            </table>
                                             
                                                <button  style="float: right; margin-right: 15px;" id="mapsbtn" >More Stores</button>
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                    




<!-- Replace the value of the key parameter with your own API key. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJtzDjYH9_kxP_5kBgOMkxGc6OVrTNDho&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
    // This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var map,infoWindow;

function initMap() {
  // Create the map.
  var pyrmont ={lat:11.9416, lng:79.8083};
  map = new google.maps.Map(document.getElementById('map'), {
    center: pyrmont,
    zoom: 19
  });


  infoWindow = new google.maps.InfoWindow;

 if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
 
      infoWindow.setPosition(pos);
      map.setCenter(pos);

        var center = new google.maps.LatLng(pos.lat,pos.lng);
       
    


  // Create the places service.
  var service = new google.maps.places.PlacesService(map);
  var getNextPage = null;
  var moreButton = document.getElementById('mapsbtn');
  moreButton.onclick = function() {
    moreButton.disabled = true;
    if (getNextPage) getNextPage();
  };

  // Perform a nearby search.
  service.nearbySearch(
      {location: center,
      radius: 3000, type: ['pharmacy']},
      function(results, status, pagination) {
        if (status !== 'OK') return;

        createMarkers(results);
        moreButton.disabled = !pagination.hasNextPage;
        getNextPage = pagination.hasNextPage && function() {
          pagination.nextPage();
        };
      })

 }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}




function createMarkers(places) {
  var bounds = new google.maps.LatLngBounds();
  var placesList = document.getElementById('places');

  for (var i = 0, place; place = places[i]; i++) {
    var image = {
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(25, 25)
    };

    var marker = new google.maps.Marker({
      map: map,
      icon: image,
      title: place.name,
      position: place.geometry.location
    });


    bounds.extend(place.geometry.location);
  }
  map.fitBounds(bounds);

  var html = "<table border='1|1'>";
  var sno = 1;
for (var i = 0; i < 20; i++) {
    html+="<tr>";
    html+="<td>"+ sno + "</td>";
    html+="<td>"+ places[i].name + "</td>";
    html+="<td>"+ places[i].vicinity +"</td>";  

    html+="</tr>";
    sno++;

}
html+="</table>";
document.getElementById("box").innerHTML = html;
document.getElementById("loc").innerHTML = ' ';


}


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);


}


function med() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("box");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>


    <script src="js/vendor/jquery-1.12.4.min.js"></script>







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