
<?php
include "databaseConnection.php";
error_reporting(0);


$username= $_GET['mu'];

$pub= "UPDATE slam_users SET login = 'logout' WHERE username = '$username' ";

mysqli_query($conn, $pub);

session_start();  
session_destroy();  

   header("Location: login.php");


?>
