<?php
require "config1.php";
include('navbar.php');
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css"/>-->
<!--    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="check/css/jquery.multiselect.css" type="text/css">
    <link rel="stylesheet" href="check/css/style.css" type="text/css">



      <style type="text/css">
    .responsive {
  max-width: 90%;
  height: auto;
}        i{
            cursor: pointer;
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
    <script>
        var diffsymps =[];
        function getSelectedOptions(sel) {
            var opts = [],
                opt;
            var len = sel.options.length;
            for (var i = 0; i < len; i++) {
                opt = sel.options[i];

                if (opt.selected) {
                    opts.push(opt);
                    alert(opt.value);
                }
            }

            return opts;
        }


        function getsubloc(val) {
            $.ajax({
                type: "POST",
                url: "get_subloc.php",
                data:'sloc='+val,
                success: function(data){
                    $("#bodysubloc").html(data);
                    // alert('success')
                }
                /*error: function (a,b,c) {
                    console.log(c);
                }*/
            });
        }

        function getsymps(val) {
            $.ajax({
               type: "POST",
               url: "get_symps.php",
               // data: 'symps='+val,
               data:{symps:val},
               success: function (data) {
                   $("#bodysymps").html(data);
                   $('#bodysymps').multiselect( 'reload' );
                   $("#bodysymps").multiselect({
                       texts: {
                           placeholder: 'Select',
                           search: 'Search symptoms'
                       },
                       search : true
                   });

               }

            });

        }

        function getdiagnosis() {

            yob = $('#yob').val();
            gen = $("input[name='genradio']:checked").val();
            bloc = $("#bodyloc").val();
            bsloc = $("#bodysubloc").val();
            // symps = $("#bodysymps").val();
            symps = returnsymps();
            // alert(symps);
            $.ajax({
                type: "POST",
                url: "get_diag.php",
                data:{yob:yob,gen:gen,bloc:bloc,bsloc:bsloc,symps:symps},
                beforeSend: function() {
                    $("#animation").show();
                },
                success: function (data) {
                    $("#tablebody").html(data);
                    $("#animation").hide();

                }

            });
        }






    </script>










  </head>
  <body>

    

 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container"><br><br><br>
         <img class="animated fadeInDown" src="img/a4.png" >
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

<br><br>
<center>
    <h1>SYMPTOMS CHECKER</h1>
<img src="img/a5.gif" class="responsive">
</center>

    <section id="team" class="team">
      <div class="container">


        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img"><br><br><br><br>
                <img src="img/h1.png" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Step 1:</h4>
                            <p>Enter the details and symptoms recurring:</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="img/about-2.png" class="img-fluid" alt="">
              
              </div>
              <div class="member-info">
                <h4>Step 2:</h4>
                            <p>Diagnose the symptoms to determine the possibilities</p>
                  
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="img/about-3.png" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Step 3:</h4>
                            <p>All possible health conditions are mentioned here in detail</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="img/about-4.png" class="img-fluid" alt="">
             
              </div>
              <div class="member-info">
                <h4>Analysis</h4>
                            <p>Different health issues,their treatment and in depth information of condition are mentioned here.</p>
              </div>
            </div>

          </div>

        </div>


       
          </div>

       

<br><br>

<div class="container jumbotron">
    
        <div class="card" >
            <h4 class="card-header"> 1. SELECT SYMPTOMS</h4>
            <form class="form-inline padit" action="med.php" method="post">
                <div class="form-group">
                <label for="yob" >Year of Birth:</label>
                <input class="form-control" type="number" value="1980" id="yob">
                </div>
            </form>
            <form class="form-inline padit">
                 <div class="form-group">
                <label>Gender:</label>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genradio" value="male" id="m" checked="checked">Male
                </label>
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="genradio" value="female" id="f">Female
                </label>
            </div>
            </form>
            <form class="form-group padit" method="post" action="">
                <label>Body Location:</label>
                <div id='response'></div>
                 <div class="form-group">
                <?php
                $obj = new schecker();
                $blarray = $obj->getbodyloc();
//                $bslarray = $obj1->getbodysubloc();
//                print_r(sizeof($bslarray));
                ?>
                <select id="bodyloc" name="bloc"  class="form-control" onchange="getsubloc(this.value)"  >
<!--                    <option selected="selected" disabled>Choose One</option>-->
                <option selected="selected" disabled>Select</option>
                <?php
                    foreach ($blarray as $i){
                        ?>
                        <option value="<?php echo $i['ID'];?>"><?php echo $i['Name'];?></option>
                            <?php
                    }
                    ?>
                </select>

                <label>Sublocation:</label>
                <select id="bodysubloc" name="bsloc" onchange="getsymps(this.value);" class="form-control" >
<!--                    <option selected="selected" >Select</option>-->
                </select>
                <label>Symptoms:</label>
                <select id="bodysymps" name="bsymps" class="form-control" multiple >
                </select>

                <div style="text-align: center;margin-top: 50px">

                  <a href="#select">  <input type="button" value="SELECT"  class="btn btn-primary" onclick=getselectedsymps()></a>
                    <input type="button" value="CLEAR ALL" class="btn btn-danger" onclick=clearsymptoms()>
                    <img src="img/a.png">

                </div>

</div>
            </form>


      </div>
  </div>
<br><br><br><br>
<div class="container jumbotron">
    <center>
        <div class="card w-75" id="select" >
            <h4 class="card-header">2. FINAL SYMPTOMS</h4>
            <table id="symptable" class="table table-bordered" style="text-align: center">
                <tr><th>NO SYMPTOMS SELECTED</th></tr>
            </table>
            <div style="text-align: center;margin-top: 50px">
              <a href="#diagnose">
                <input id="diagbutton" type="button" value="DIAGNOSE" class="btn btn-success" disabled="true" onclick=getdiagnosis()></a>
                  <img src="img/a.png">
            </div>
            <div id="animation" style="text-align: center">
                <img src="check/30.gif">
            </div>
        </div>
        </center>
    </div>
<br><br><br><br>
<div class="container jumbotron" id="diagnose">
    
        <div class="card" >
            <h4 class="card-header">3. POSSIBLE CONDITIONS & REMEDIES</h4>
            <div class="table-responsive">
            <table id="diagtable" class="table table-bordered table-striped" style="text-align: center">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>CHANCES</th>
                        <th>ADDITIONAL INFORMATION</th>
                    </tr>
                </thead>
                <tbody id="tablebody">

                </tbody>
            </table>
</div>
        </div>

</div>

<br><br>
<br><br>


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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" src="check/js/jquery.multiselect.js"></script>
    <script src="check/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!--<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>-->
<script>
    var allval=[];
    var diffsymps =[];
    $(function () {

        $("#bodysymps").multiselect({
            texts: {
                placeholder: 'Select Symptoms',
                search: 'Search symptoms'
            },
            search : true,
        });

    });

    function unique_jq(list) {
        var result = [];
        $.each(list, function(i, e) {
            if ($.inArray(e, result) == -1) result.push(e);
        });
        return result;
    }
    function getselectedsymps() {
        $('#diagbutton').attr('class','btn btn-success');
        $('#diagbutton').removeAttr('disabled');
        // var allval = [];
        var vals = $("#bodysymps option:selected").map(function() {
            return $(this).text();
        }).get();

        allval.push(vals);
        table = $('#symptable');
        $('#symptable tr').remove();
        var newallval = [];
        for(var i = 0; i < allval.length; i++)
        {
            newallval = newallval.concat(allval[i]);
        }

        newallval = unique_jq(newallval);
        for(var i=0;i<newallval.length;i++){
            table.append('<tr><td>'+newallval[i]+'</td></tr>');
        }
    }

    function returnsymps() {
        diffvals = $('#bodysymps').val();
        diffsymps.push(diffvals);
        var newdiffsymps = [];
        for(var i = 0; i < diffsymps.length; i++)
        {
            newdiffsymps = newdiffsymps.concat(diffsymps[i]);
        }

        newdiffsymps = unique_jq(newdiffsymps);
        // console.log(newdiffsymps);
        return newdiffsymps;
    }
    
    

    function getselectedblocs() {
        var allval = $('#bodyloc').val();
        return allval;
    }

    $('[data-toggle="popover"]').popover();
    function clearsymptoms() {
        $('#symptable tr').remove();
        $('#diagtable #tablebody tr').remove();
        $('#symptable').append('<tr><th>NO SYMPTOMS SELECTED</th></tr>');

        // $('#bodysymps').prop('selectedIndex',0);
        $('#bodyloc').prop('selectedIndex',0);
        $('#bodysubloc').prop('selectedIndex',0);
        $('#bodysymps').multiselect( 'reset' );
        getsubloc(this.value);
        getsymps(this.value);

        diffsymps=[];
        allval=[];
        // console.log(diffsymps);



    }
    var $loading = $('#animation').hide();
    /*var $loading = $('#animation').hide();
    $(document)
        .ajaxStart(function () {
            $loading.show();
        })
        .ajaxStop(function () {
            $loading.hide();
        });*/
</script>
  </body>
</html>
</body>
</html>




