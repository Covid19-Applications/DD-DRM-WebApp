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
          <h2 class="animated fadeInDown" style="color: black">PUBLIC HEALTHCARE LOCATIONS </h2>
          <h2 class="animated fadeInUp" style="color: black"> FOR COVID19</h2>
          <p class="animated fadeInUp" style="font-size: 20px">Services providing checkup & treatment</p>
         
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
              <h4 class="d-none d-lg-block">HOSPITALS</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">GOVERNMENT SERVICES</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">LABS</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">CLINICS</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Symptoms of COVID19.</h3>
                <p class="font-italic">
                  If the following persist visit the nearest hospital immediately.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> FEVER.</li>
                  <li><i class="ri-check-double-line"></i> DRY COUGH.</li>
                  <li><i class="ri-check-double-line"></i> TIREDNESS/ACHES & PAINS.</li>
                  <li><i class="ri-check-double-line"></i> DIARRHOEA.</li>
                  <li><i class="ri-check-double-line"></i> CHEST PAIN.</li>
                  <li><i class="ri-check-double-line"></i> SORE THROAT.</li>
                  <li><i class="ri-check-double-line"></i> HEADACHE.</li>
                  <li><i class="ri-check-double-line"></i> LOSS OF TASTE & SMELL.</li>
                  <li><i class="ri-check-double-line"></i> SHORTNESS OF BREATH[SEVERE.].</li>
                  <li><i class="ri-check-double-line"></i> LOSS OF SPEECH/MOVEMENT[SEVERE.].</li>
                  <li><i class="ri-check-double-line"></i> CHEST PAIN[SEVERE.].</li>
                </ul>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="img/p1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>SERVICES PROVIDED BY GOI DURING THE PANDEMIC</h3>
                
                <p class="font-italic">
                  A look at some of the government's measures against Covid-19 amid lockdown
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Introduced the Aarogya Setu mobile application to educate citizens about novel coronavirus and help them make informed decisions amid the crisis.</li>
                  <li><i class="ri-check-double-line"></i> Under its Ujjawala scheme, the government is providing free LPG refills for the next three months to over 8.3 crore poor women</li>
                  <li><i class="ri-check-double-line"></i> Over 2 crore construction workers received financial support worth Rs 3,066 crore under the Building and Construction Workers’ Fund.</li>
                  <li><i class="ri-check-double-line"></i> The government is also providing medical insurance cover of Rs 50 lakh per person to health workers fighting the coronavirus pandemic.</li>
                     <li><i class="ri-check-double-line"></i> The government said it plans to set up a chain of 20 lakh retail shops called ‘Suraksha Stores’ across India which will provide daily essentials to citizens.</li>
                        <li><i class="ri-check-double-line"></i> Union Human Resource Development Minister launched a web portal to monitor and record the initiative by the ministry to combat Covid-19 with Knowledge, Technology and Innovation (YUKTI).</li>
                           
                </ul>
              </div>

              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <br><br><br>
                <img src="img/p2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Labs & Medical Testing</h3>
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
                <img src="img/p3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Clinics  & Testing centers in Dadra & Nagar Haveli</h3>
                
                <p class="font-italic">

                  List of government approved testing centers
                  <br>
                  <a href=" https://www.icmr.gov.in/pdf/covid/labs/COVID_Testing_Labs_27062020.pdf" class="btn-buy"><button id="mapsbtn">TESTING CENTERS</button></a>

              


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

<br><br><br><br><br>

    <section class="section  bg-light top-slant-white">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>HEALTH-CARE LOCATIONS FOR COVID 19</h2>
             
            </div>
          </div>
        </div>
      </div>

      

            <div class="container" style="position: center;">
              <CENTER>
<img class="responsive" src="img/dadra/p.png">
</CENTER>
</div>

</section> 






         <div id="map"></div>

                    <br><br>    
                       
                    <div class="whole-wrap">
                        <div class="container box_1170">

                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25" style="text-align: center;">Emergency Speciality Hospitals</h2>
                                    <?php
                                  $query = "SELECT * FROM healthcare WHERE state='dadra and nagar haveli'";
                                  $query_run = mysqli_query($connection, $query);
                              ?>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning table table-hover"  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-warning">S.No</th>
                                                        <th class="bg-secondary">Hospital Name</th>
                                                        <th class="bg-info">Address </th>
                                                        <th class="bg-danger">Phone No.</th>
                                                         <th class="bg-success">State.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                       ?>
                                                  <tr>
                                                    <td><?php  echo $row['id']; ?></td>
                                                    <td><?php  echo $row['name']; ?></td>
                                                    <td><?php  echo $row['address']; ?></td>
                                                    <td><?php  echo $row['phone']; ?></td>
                                                    <td><?php  echo $row['state']; ?></td>
                                                  </tr>
                                                  <?php
                                                    } 
                                                }
                                                else {
                                                    echo "No Record Found";
                                                }
                                                ?>
                                                    
 
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
                                <h2 class="title-1 m-b-25" style="text-align: center;">HOSPITALS @3KM RADIUS </h2>
                               <h5 style="text-align: center;"> Enable location to view hospitals within 3 Km ofyour location</h5>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning table table-hover"  id="state-wise">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-secondary">S.No</th>
                                                        <th class="bg-warning">Hospital Name</th>
                                                        <th class="bg-info">Address </th>
                                                 </tr>
                                                 </thead>   
                                                <tbody id="box"></tbody>
                                            </table>
                                             
                                                <button  style="float: right; margin-right: 15px;" id="mapsbtn" >View More</button>
                                               
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
    moreButton.disabled = false;
    if (getNextPage) getNextPage();
  };
console.log(map);
  // Perform a nearby search.
  service.nearbySearch(
      {location: center,
      radius: 3000, type: ['hospital']},
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



  


<!--  <div id="map" style="position: relative;"></div> -->
  
<br>


<div class="container table-responsive">
  <h1 style="text-align: center;">HEALTH-CARE CENTERS IN DADRA & NAGAR HAVELI</h1>
  <br><br>
  <CENTER>
  <div ><a href="http://vbch.dnh.nic.in/contact.aspx">
             <button id="mapsbtn">SEARCH HOSPITALS</button></a>
            </div></CENTER>
<!-- <center>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."></center>
  

  <table  class="table  table-hover sortable" id="myTable">

 
    <thead>
 <tr>

        <th class="bg-secondary">S.No</th>
      <th class="bg-info">Health Facility Name</th>
      <th class="bg-warning">Facility Type</th>
      <th class="bg-danger">Landline Numbers </th>
      <th class="bg-info">Address</th>
      <th class="bg-success">District</th>
      <th class="bg-primary">State</th>

      </tr>


     

    </thead>

    <tbody id="healthcenters"> </tbody>
  </table>
</div>




<script type="text/javascript">
  
  $.ajax({
    url: "https://api.data.gov.in/resource/0dfebd78-bac4-44be-9291-025a983323f4?api-key=579b464db66ec23bdd000001f0ef82e810fb4202420cb9a0a785ea9b&format=json&offset=0&limit=5000&filters=State_Name%3D%22Delhi%22",

    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

    var newArray = covid_data.records.filter(function (el) {

      return el.state_name === 'Manipur';

    });

    console.log(newArray);

    var sno = 1;

    $.each(newArray, function(key, value){


      $("#healthcenters").append("<tr>" + 
        "<td>" + sno + " </td>" +
        "<td>" + value.health_facility_name + "</td>" +
        "<td>" + value.facility_type + "</td>" +
        "<td>" + value.landline_number + "</td>" +
        "<td>" + value.block_name + "," + value.street + "</td>" +
        "<td>" + value.district_name+ "</td>" +
        "<td>" + value.state_name+ "</td>" +
        "</tr>" );
      sno++;


    });

  }

});
</script> -->



<br><br><br>
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