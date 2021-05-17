<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="../index.php"><b>ई-दादरा</a></b> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" >
               
              <li><a class="active" href="../index.php" >HOME</a></li>
                <li><a href="../covid.php">COVID19 DASHBOARD</a></li>
                <li><a href="../amphan.php">WEATHER DASHBOARD</a></li>
                <li><a href="../NEWS/index.php">NEWS DASHBOARD</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     MODULES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="../publiccare">Public Healthcare For Covid19</a>
                        <a href="../medical.php">Medical Stores</a>
                        <a href="../labs.php">Labs For Testing & Results</a>
                        <a href="../mentalbot.php">Counselling For Patients & Family</a>
                        <a href="../check.php">Check For Symptoms</a>
                        <a href="../appointment/cover.php">Online Doctor's Appointments</a>
                        <a href="../home.php">Home Treatment &amp; Alarm Systems </a>
                        <a href="../govt.php">Government Services</a>
                        <a href="../courses.php">Vocational Online Training</a>
                        <a href="../volunteer.php">Volunteers Registrations</a>
                        <a href="../tollfree.php">TollFree</a>
                     
                  </li>

                <li><a href="index.php">BLOG<i class="ti-angle-down"></i></a>
                </li>
                <li><a href="../contact.php">CONTACT</a></li>


                <?php
                if(isset($_SESSION['user_role'])){
                    $user_role = $_SESSION['user_role'];
                    if($user_role == 'admin') {
                        echo "<li><a href='admin/index.php'>Admin panel</a></li>";
                    } elseif(isset($_SESSION['user_role'])){
                        $user_role = $_SESSION['user_role'];
                            if($user_role == 'subscriber') {

                                echo "<li><a href='users/index.php'>USER DASHBOARD</a></li>";
                            } }
                   } 
                ?>
              
            </ul>
        <!--     <form class="navbar-form navbar-right" action="search.php" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                    <div class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="search_submit">
                        <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

