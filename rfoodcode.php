<?php

include('adminroom/security.php');

if(isset($_POST['med1_form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $phone = $_POST['phone'];
   $sector = $_POST['sector'];
    $message = $_POST['message'];
     


   
    $query ="INSERT INTO `donate`(`name`, `email`, `service`,`address`,`experience`, `phone`,`sector`, `message`) VALUES ('$name','$email', '$service','$address', '$experience','$phone','$sector', '$message')";
    $query_run = mysqli_query($connection, $query);


// $link = mysqli_connect("localhost", "root", "", "india");

// $sql = "INSERT INTO `donate`(`name`, `email`, `service`,`address`,`experience`, `phone`,`sector`, `message`) VALUES ('$name','$email', '$service','$address', '$experience','$phone','$sector', '$message')";
            
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:rfood.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: rfood.php');  
            }

//     if(mysqli_query($link, $sql)){
//     echo '<script language="javascript">';
//     echo 'alert("Appointment Send Successfully")';
//     echo '</script>';
//      header('Location: rfood.php');  
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }


}
?>