<?php
ob_start();
session_start();


if(!$_SESSION['cusername'])
{
    header('Location: ../login.php');
}


?>