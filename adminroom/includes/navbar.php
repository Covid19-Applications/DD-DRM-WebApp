   <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php" style="background-color: white; ">
  <div class="sidebar-brand-icon rotate-n-15">
  </div>
  <div class="sidebar-brand-text mx-3" ><img src="../img/logo1.png"></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<li class="nav-item">
  <a class="nav-link" href="register.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Admin Profile</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="users.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Users Profile</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="contact.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Contact-Us Forums</span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="ecommerce.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Ecommerce Products</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="store.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Request for Mapping <br>Medical Stores</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="hosp_list.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Hospital Admissions</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="hospitaladd.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Hospital Add Request</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="emergency.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>First Responders Inclusion</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="healthcare.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>24@Hospitals</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="orphans.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Add Orphanage </span></a>
</li>
<li class="nav-item">
  <a class="nav-link" href="donate.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Donations</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="orphanhelp.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Support For Vuln/Orphans</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="volunteers.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Volunteers Registered</span></a>
</li>



<li class="nav-item">
  <a class="nav-link" href="companies-details.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Education Centers Requests</span></a>
</li>




<!-- Divider -->
<hr class="sidebar-divider">




<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

        

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
               <?php  echo $_SESSION['username']; ?>
                  
                </span>
                <i class="fas fa-user-shield"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>