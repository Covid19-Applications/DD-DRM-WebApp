<?php
include('security.php');


if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
  
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
  $state = $_POST['state'];
    
    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password,usertype,state) VALUES ('$username','$email','$password','$usertype','$state') WHERE state='dadra and nagar haveli'";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}


if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = $_POST['password']; 
   // $usertype = $_POST['usertype'];



    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login'  ";

//    $userquery = "SELECT * FROM user WHERE email='$email_login' AND password='$password_login' ";

    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

   if($usertypes['usertype'] == "admin")
   {
        $_SESSION['username'] = $email_login;
        echo "<script type='text/javascript'>document.location='index.php';</script>";
   } 
   elseif ($usertypes['usertype'] == "user") {

        $_SESSION['username'] = $user_login;
        echo "<script type='text/javascript'>document.location='login.php';</script>";
       # code...
   }
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        echo "<script type='text/javascript'>document.location='login.php';</script>";
   }
    
}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password', usertype= '$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
       echo "<script type='text/javascript'>document.location='register.php';</script>";
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
       echo "<script type='text/javascript'>document.location='register.php';</script>";
    }
}

//UPDATE 24 HOSPITALS
if(isset($_POST['update1btn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $address = $_POST['edit_address'];
    $phone = $_POST['edit_phone'];
   $state = $_POST['edit_state'];
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE healthcare SET name='$name', address='$address', phone='$phone',state='$state' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
       echo "<script type='text/javascript'>document.location='healthcare.php';</script>";
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
       echo "<script type='text/javascript'>document.location='healthcare.php';</script>";
    }
}
//UPDATE HOSPITALS
if(isset($_POST['updatehospitalsbtn']))
{
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $address = $_POST['edit_address'];
    $phone = $_POST['edit_phone'];
    $district = $_POST['edit_district'];
   
    $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE hosp_list SET name='$name', address='$address', phone='$phone',district='$district' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
       echo "<script type='text/javascript'>document.location='hosp_list.php';</script>";
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
       echo "<script type='text/javascript'>document.location='hosp_list.php';</script>";
    }
}

//DELETE HOSPTALS
if(isset($_POST['delete_hosp_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM hosp_list WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: hosp_list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: hosp_list.php'); 
    }    
}

//UPDATE ORPHANAGES

if(isset($_POST['updateorphanbtn']))
{
    $id = $_POST['orphan_edit_id'];
    $name = $_POST['edit_name'];
    $address = $_POST['edit_address'];
    $phone = $_POST['edit_phone'];
    $state = $_POST['edit_state'];
   
   // $usertypeupdate = $_POST['update_usertype'];

    $query = "UPDATE orphans SET name='$name', address='$address', phone='$phone',state='$state' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
       echo "<script type='text/javascript'>document.location='orphans.php';</script>";
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
       echo "<script type='text/javascript'>document.location='orphans.php';</script>";
    }
}

//DELETE ORPHANGES
if(isset($_POST['delete_orp_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM orphans WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: orphans.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: orphans.php'); 
    }    
}

///DELETE USERS
if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}


if(isset($_POST['hospitalbtn']))
{
    $name= $_POST['name']; 
    $add = $_POST['add']; 
     $contact = $_POST['contact']; 
     $state = $_POST['state']; 

  $query = "INSERT INTO `healthcare`( `name`, `address`, `phone`,`state`) VALUES ('$name','$add','$contact','$state')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Hospital Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location:healthcare.php');
        }
        else 
        {
            $_SESSION['status'] = "Hospital Profile Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: healthcare.php'); 

    
        }   

}


if(isset($_POST['orphanbtn']))
{
    $name= $_POST['name']; 
    $add = $_POST['add']; 
     $contact = $_POST['contact']; 
       $state = $_POST['state']; 

  $query = "INSERT INTO `orphans`( `name`, `address`, `phone`,`state`) VALUES ('$name','$add','$contact','$state')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Orphanage Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location:orphans.php');
        }
        else 
        {
            $_SESSION['status'] = "Orphanage Profile Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: orphans.php'); 

    
        }   

}


if(isset($_POST['hospbtn']))
{
    $name= $_POST['name']; 
    $add = $_POST['add']; 
     $contact = $_POST['contact']; 
     $district = $_POST['district']; 
      $state = $_POST['state']; 

  $query = "INSERT INTO `hosp_list`( `name`, `address`, `phone`,`district`,`state`) VALUES ('$name','$add','$contact','$district','$state')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Hospital Profile Added";
            $_SESSION['status_code'] = "success";
            header('Location:hosp_list.php');
        }
        else 
        {
            $_SESSION['status'] = "Hospital Profile Not Added";
            $_SESSION['status_code'] = "error";
            header('Location: hosp_list.php'); 

    
        }   

}



if(isset($_POST['ecommercebtn']))
{
    $text= $_POST['text']; 
    $image = $_POST['image']; 
    $type = $_POST['type'];
     

  $query = "INSERT INTO `ecommerce`( `text`, `image`,`type`) VALUES ('$text','$image','$type')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Product Successfully Added";
            $_SESSION['status_code'] = "success";
            header('Location:ecommerce.php');
        }
        else 
        {
            $_SESSION['status'] = "Product Not Added";
            $_SESSION['status_code'] = "error";
            header('Location:ecommerce.php'); 

    
        }   

}


?>


