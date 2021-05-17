<?php

include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> EDIT Orphan Profile </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['orphan_edit_btn']))
{
    $id = $_POST['orphan_edit_id'];
    
    $query = "SELECT * FROM orphans WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
              <input type="hidden" name="orphan_edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> Orphanage Name </label>
                  <input type="text" name="edit_name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Enter Name">
              </div>
              <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="edit_address" value="<?php echo $row['address'] ?>" class="form-control" placeholder="Enter Address">
              </div>
              <div class="form-group">
                  <label>Contact No</label>
                  <input type="text" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Contact No">
              </div>
              <div class="form-group">
                  <label>State</label>
                  <input type="text" name="edit_state" value="<?php echo $row['state'] ?>" class="form-control" placeholder="Enter state">
              </div>


             

              <a href="orphans.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updateorphanbtn" class="btn btn-primary"> Update </button>

          </form>
    <?php
    }
}
?>



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
