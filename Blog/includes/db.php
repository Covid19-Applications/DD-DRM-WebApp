<?php
ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "yjnvjqa2uzvu";
$db['db_pass'] = "Abdulrahman@07";
$db['db_name'] = "Sevahind";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>
