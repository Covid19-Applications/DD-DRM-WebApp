<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>

  <div class="card-body">

<?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{

  # code...
  echo '<h2 class="bg-primary text-white">  '.$_SESSION['success'].' </h2>';
  unset( $_SESSION['success']);

}
if(isset($_SESSION['status']) && $_SESSION['status'] != '')
{

  # code...
  echo '<h2 class="bg-danger">  '.$_SESSION['status'].' </h2>';
  unset( $_SESSION['status']);

}

?>

  <div class="table-responsive">
    <?php
        $query = "SELECT * FROM donate ";
        $query_run = mysqli_query($connection, $query);
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th> Name </th>
              <th>Email</th>
              <th>Service</th>
              <th>Address</th>
              <th>Experience</th>
              <th>Phone</th>
              <th>Sector</th>
              <th>Description</th>
              
              <th>EDIT</th>
              <th>DELETE</th>
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
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['service']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><?php  echo $row['experience']; ?></td>
            <td><?php  echo $row['phone']; ?></td>
             <td><?php  echo $row['sector']; ?></td>
            <td><?php  echo $row['message']; ?></td>
           
        <!--     <td><?php  echo $row['usertype']; ?></td> -->
            <td>
                <form action="#" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">


                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="#" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
            </td>
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
<!-- /.container-fluid -->













<?php
include('includes/scripts.php');
include('includes/footer.php');
?>

