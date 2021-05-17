<?php


include('adminroom/security.php');

if(isset($_POST['med_form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $store = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $state = $_POST['state'];

   
    $query = "INSERT INTO `store`(`name`, `email`, `store`, `phone`, `message`,`state`) VALUES ('$name','$email', '$store', '$phone', '$message','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:medical.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: medical.php');  
            }


}



?>