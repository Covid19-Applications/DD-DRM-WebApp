<?php


include('adminroom/security.php');

if(isset($_POST['hospital_form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $state = $_POST['state'];

   
    $query = "INSERT INTO `hospital`(`name`, `email`, `hospital`, `phone`, `message`,`state`) VALUES ('$name','$email', '$subject', '$phone', '$message','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Hospital Added";
                $_SESSION['status_code'] = "success";
                header('Location:hospital.php');
            }
            else 
            {
                $_SESSION['status'] = "Hospital Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: hospital.php');  
            }


}




?>