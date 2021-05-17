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
      <style type="text/css">
    .responsive {
 max-width: 100%;
  height: auto;
}
.carousel-inner img{
  max-width: 250%;
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
#map{
  margin-top: 70px;
  height: 650px;
  width: 100%
}
  </style>
  </head>
  <body>
<?php  
include('navbar.php');
?>
<style type="text/css">


</style>

<img class="img-fluid" src="img/haryana/t.jpg" >
<div id="map"></div>


    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">CLUSTER GEOFENCING</h3>
        </div>
        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
            <span style="font-size: 30px;" id="distance"></span>
            <p>Distance from containment zone.</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span style="font-size: 30px;" id="message"></span>
            <p>Status</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->


<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJtzDjYH9_kxP_5kBgOMkxGc6OVrTNDho&callback=initMap">
</script>



<script type="text/javascript">
	function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 3,
    center: {lat: 20.5937, lng: 78.9629}
  });

  // Create an array of alphabetical characters used to label the markers.
  var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  var markers = locations.map(function(location, i) {
    return new google.maps.Marker({
      position: location,
      label: labels[i % labels.length]
    });
  });

  // Add a marker clusterer to manage the markers.
  var markerCluster = new MarkerClusterer(map, markers,
      {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
var locations = [
  {lat: 11.822600, lng: 93.037110},
  {lat: 17.393480, lng: 78.559647},
  {lat: 17.344800, lng: 78.548670},
  {lat: 17.366010, lng: 78.735940},
  {lat: 17.342310, lng: 78.504180},
  {lat: 17.328120, lng: 78.479870},
  {lat: 17.361259, lng: 78.473450},
  {lat: 17.333820, lng: 78.466740},
  {lat: 19.004050, lng: 72.843300},
   {lat: 28.485127, lng: 77.088527},
    {lat: 28.493764, lng: 77.107278},
     {lat: 28.494044, lng: 77.108411},
      {lat: 28.448183, lng: 77.984884},
       {lat: 28.431023, lng: 77.095960},
        {lat: 28.377444, lng: 76.908252},
         {lat: 28.466789, lng: 77.014969},
         {lat: 23.691881, lng: 86.147717},
         {lat: 22.618977, lng: 84.491579},
         {lat: 23.374661, lng: 85.298654},
         {lat: 23.959352, lng: 86.799035},
         {lat: 29.857941, lng: 77.887615},
         {lat: 29.808917, lng: 77.931469},
         {lat: 29.718300, lng: 78.047159},
         {lat: 29.828549, lng: 77.881189},
         {lat: 29.925914, lng: 78.105760},
         {lat: 29.944590, lng: 77.810794},
         {lat: 30.084690, lng: 78.244170},
         {lat: 29.990351, lng: 78.185238},
         {lat: 30.309935, lng: 78.018888},
         {lat: 30.336898, lng: 78.512034},
         {lat: 28.988087, lng: 79.394695},
         {lat: 20.276654, lng: 72.937439},
         {lat: 20.235185, lng: 73.012018},
         {lat: 20.234655, lng: 72.970646},
         {lat: 20.129405, lng: 73.057591},
         {lat: 20.267328, lng: 73.013484},
                 
{lat:22.47921,lng:88.39341},
{lat:22.29173,lng:70.76214},



{lat:28.52942,lng:77.21381},
{lat:28.61906,lng:77.27976},

{lat:13.00996,lng:77.51601},
{lat:12.9932,lng:77.70158},


{lat:25.24374,lng:84.663002},
{lat:24.885,lng:86.924301},

{lat:18.95458,lng:72.83682},
{lat:19.17128,lng:72.94716},



{lat:26.0227,lng:89.9784},
{lat:26.2528,lng:92.34259},


{lat:12.97627,lng:80.258},
{lat:13.03472,lng:80.18089},

{lat:22.47841,lng:88.29806},
{lat:22.59234,lng:88.32809},


{lat:15.46999,lng:78.47107},
{lat:15.88536,lng:78.58296},

{lat:21.99724,lng:82.26671},
{lat:22.33531,lng:82.71458},

{lat:30.73335,lng:76.77904},
{lat:30.71923,lng:76.81524},

{lat:15.48428,lng:73.82301},
{lat:15.39214,lng:73.81202},

{lat:30.91011,lng:77.09669},
{lat:28.57709,lng:77.12241},

{lat:32.70533,lng:74.88001},
{lat:34.2332,lng:74.64},

{lat:23.35708,lng:85.31953},

{lat:9.59175,lng:76.53191},
{lat:11.86078,lng:75.414},

{lat:21.31173,lng:76.22618},
{lat:21.8228,lng:76.35229},

{lat:24.802151,lng:93.938622},
{lat:20.29248,lng:82.23669},

{lat:26.10759,lng:91.82195},
{lat:25.4849,lng:92.28211},

{lat:22.91189,lng:92.75539},
{lat:23.92853,lng:92.49048},

{lat:25.88247,lng:93.77437},
{lat:25.67492,lng:94.11052},

{lat:20.51309,lng:84.42992},
{lat:20.51309,lng:84.42992},

{lat:31.63269,lng:74.86721},
{lat:31.326059,lng:75.575623},

{lat:26.58432,lng:73.85013},
{lat:27.56109,lng:76.62147},

{lat:27.30515,lng:88.36463},
{lat:27.57003,lng:88.4773},

{lat:23.34897,lng:91.32939},
{lat:23.74509,lng:91.74274},

{lat:27.18097,lng:78.01054},
{lat:27.20987,lng:78.00818},

{lat:13.03592,lng:80.20775},
{lat:29.38526,lng:79.46836},

{lat:12.9414,lng:92.82055},
{lat:12.9414,lng:92.82055},






{lat:11.93451,lng:79.8327}


]
</script>


 <script type="text/javascript" src="js/fencing1.js"></script>
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





