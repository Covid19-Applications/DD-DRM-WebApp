
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <!-- Uncompressed jQuery -->
  >
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <!-- My Stylesheet -->
  <link rel="stylesheet" href="style.css" />

  <!-- My jQuery -->
  <script src="main.js"></script>

  <!-- Chart.js (Working CDN) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

  <title>ई-दादरा</title>
</head>

<body>
  <br>
  <a href="../../covid.php" class="btn btn-link btn-lg active" role="button" aria-pressed="true">
    <img src="../../img/home-icon.png"><img src="../../img/arrow.png"></a>
  <!-- Main Title and  Sub-heading -->
  <div class=" container bg-dark p-5 my-5 text-center">
    <h1 class="">Covid-19 Dashboard - India</h1>
    <h5 class="text-muted">
      COVID-19 cases within the Indian territory.
    </h5>
  </div>

  <!-- Total number of confirmed and all the other info -->
  <div class="container my-5">
<div class="card-deck">
       <div class="card text-white bg-dark mb-3,col-3 text-warning" >
  <div class="card-header" style="text-align: center;">Confirmed</div>
  <div class="card-body">
    
    <p id="confirmed" style="text-align: center;"></p>
  </div>
</div>

      <div class="card text-white bg-dark mb-3,col-3 text-info" >
  <div class="card-header" style="text-align: center;">Active</div>
  <div class="card-body">
    
    <p id="active" style="text-align: center;"></p>
  </div>
</div>

      <div class="card text-white bg-dark mb-3,col-3 text-success">
  <div class="card-header" style="text-align: center;">Recovered</div>
  <div class="card-body">
    
    <p id="recovered" style="text-align: center;"></p>
  </div>
</div>

<div class="card text-white bg-dark mb-3,col-3 text-danger" >
  <div class="card-header" style="text-align: center;">Deceased</div>
  <div class="card-body">
    
    <p id="deaths" style="text-align: center;"></p>
  </div>
</div>

    </div>
  </div>

  <!-- Quote -->
  
    <h5 class="text-info" style="text-align: center;font-size: 40px;">"आत्मनिर्भर भारत"</h5>
    <p class="text-muted" style="text-align: center;">Stay Indoors Stay Safe.</p>
  
<br>  <!-- Bottom Note -->
  <div class="container text-center my-5">
    <h6 class="text-info">
      *Press the Confirmed/Recovered/Deaths buttons below to see the chart
      individually.*
    </h6>
  </div>
  <br>
  <!-- Used by Chart.js -->
  <canvas id="myChart"></canvas>




</body>

</html>