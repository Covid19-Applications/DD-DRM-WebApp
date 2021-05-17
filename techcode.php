<?php


include('adminroom/security.php');

if(isset($_POST['tech_form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   
    $query = "INSERT INTO `company`(`name`, `email`, `subject`, `phone`, `message`) VALUES ('$name','$email', '$subject', '$phone', '$message')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:courses.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: courses.php');  
            }


}

if(isset($_POST['tech_form1']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   
    $query = "INSERT INTO `company`(`name`, `email`, `subject`, `phone`, `message`) VALUES ('$name','$email', '$subject', '$phone', '$message')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:med.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: med.php');  
            }


}

if(isset($_POST['tech_form2']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   
    $query = "INSERT INTO `company`(`name`, `email`, `subject`, `phone`, `message`) VALUES ('$name','$email', '$subject', '$phone', '$message')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:tech.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: tech.php');  
            }


}

if(isset($_POST['tech_form3']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   
    $query = "INSERT INTO `company`(`name`, `email`, `subject`, `phone`, `message`) VALUES ('$name','$email', '$subject', '$phone', '$message')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:buis.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: buis.php');  
            }


}

if(isset($_POST['tech_form4']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   
    $query = "INSERT INTO `company`(`name`, `email`, `subject`, `phone`, `message`) VALUES ('$name','$email', '$subject', '$phone', '$message')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Contact Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:comm.php');
            }
            else 
            {
                $_SESSION['status'] = "Contact Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: comm.php');  
            }


}




?>