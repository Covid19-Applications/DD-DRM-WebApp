<?php


include('adminroom/security.php');

if(isset($_POST['vol_form']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $pre_add = $_POST['pre_add'];
    $per_add = $_POST['per_add'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $phone = $_POST['phone'];
    $sector = $_POST['sector'];
    $message = $_POST['message'];
    $state = $_POST['state'];

   
    $query = "INSERT INTO `volunteers`(`name`, `email`, `service`,`pre_add`,`per_add`,`education`,`experience`, `phone`,`sector`, `message`,`state`) VALUES ('$name','$email', '$service','$pre_add','$per_add','$education','$experience', '$phone','$sector', '$message','$state')";
    $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Volunteer Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location:volunteer1.php');
            }
            else 
            {
                $_SESSION['status'] = "Volunteer Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: volunteer1.php');  
            }


}


?>