<?php
ob_start();
session_start();

include('adminroom/dbconfig.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location:adminroom/dbconfig.php");
}

if(!$_SESSION['cusername'])
{
	header('Location:login.php');
}



?>