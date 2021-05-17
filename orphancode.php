<?php


include('adminroom/security.php');

if(isset($_POST['orphan_form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $state = $_POST['state'];

   
    $query = "INSERT INTO `orphanhelp`(`name`, `email`, `service`, `phone`, `message`,`state`) VALUES ('$name','$email', '$subject', '$phone', '$message','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Request Added";
                $_SESSION['status_code'] = "success";
                header('Location:orphans.php');
            }
            else 
            {
                $_SESSION['status'] = "Request Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: orphans.php');  
            }


}




?>