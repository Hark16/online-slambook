
<!DOCTYPE html>
<html>
<head><title>

member signup </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173478055-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173478055-1');
</script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>

<h1>Fill Your Details </h1>

<div class="container">

<p>we welcome you in Slambook.MyPrabandhak.com here you can create your account..</p>
<br/><p>For that you need to fill all fields</p>
</div>

<div class="container">
<form method='POST'>

<div class="container">
<div class="row">

  <div class="col-xs-6">

Mobile Number : 
</div>
  <div class="col-xs-6">

<input type='number' name= 'number' required></input><br/>
</div>
</div>

<div class="row">


  <div class="col-xs-6">

Unique Username : 
</div>
  <div class="col-xs-6">

<input type='text' name= 'username' value=' ' required> </input><br/>
<br/>
please pay attention that the username is case-sensitive

</div>
</div>


<div class="row">

  <div class="col-xs-6">

Full name : 
</div>
  <div class="col-xs-6">

<input type='text' name= 'fullname' required></input><br/>
</div>
</div>


<div class="row">

  <div class="col-xs-6">

Password : 
</div>
  <div class="col-xs-6">

<input type='password' name= 'password'> </input><br/>
</div>
</div>
<div class="row">

  <div class="col-xs-6">

reenter Password : 
</div>
  <div class="col-xs-6">

<input type='password' name= 'password1'> </input><br/>
</div>
</div>

<div class="row">

  <div class="col-xs-12">

 <input type='checkbox' name='agree' id='agree'> i agree to accept terms and conditions of this site.</input><br/>
<a href='termsandconditions.html'> Terms and Conditions </a><br/>
</div>
</div>
<div class="row">

  <div class="col-xs-12">
<center>

<input type='submit' name= 'submit' value='submit' class='btn btn-primary'></input><br/>
</center></div>
</div></div>

</form>
</div>

<?php

session_start();

error_reporting(0);

include "databaseConnection.php";
$user= $_POST['username'];


$pass= $_POST['password'];
$pass1= $_POST['password1'];
$tname= 'slam_users';

$sel= "SELECT username FROM $tname WHERE username='$user'";

$result = mysqli_query($conn,$sel);
$total=mysqli_num_rows($result);

if(isset($_POST['submit'])){

if (strpos($user, ' ') !== false) {
echo "please do not use space or write something ";

}


elseif ($total===0){

if($pass===$pass1){
if($_POST['agree']){


$fn=$_POST['fullname'];
$num= $_POST['number'];


$ins= "INSERT INTO $tname (design, image, font_color, font_style, number, name, password, username, login) VALUES('designed', 'images/image1.jpg', 'black', 'Monotype Corsiva', '$num', '$fn', '$pass', '$user', 'logout')";

mysqli_query($conn, $ins);


$worklistname= ($user."_slambook");

$sqlwork = "CREATE TABLE $worklistname (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMp, birthday TEXT NOT NULL, name TEXT NOT NULL, mobile TEXT NOT NULL, nickname TEXT NOT NULL, bloodgroup TEXT NOT NULL, brand TEXT NOT NULL, movie  TEXT NOT NULL, weakness TEXT NOT NULL, Strength TEXT NOT NULL, Dislike TEXT NOT NULL, Relationship TEXT NOT NULL, myNickname TEXT NOT NULL, book TEXT NOT NULL, song TEXT NOT NULL, met TEXT NOT NULL, mybadhabit TEXT NOT NULL, mysecret TEXT NOT NULL, mycrash TEXT NOT NULL, mycolor TEXT NOT NULL, similar TEXT NOT NULL, suggestion TEXT NOT NULL, moviech TEXT NOT NULL, personal TEXT NOT NULL, firstsite TEXT NOT NULL, island TEXT NOT NULL, wishes TEXT NOT NULL, sharesecret TEXT NOT NULL, life TEXT NOT NULL, friendship TEXT NOT NULL, mantra TEXT NOT NULL)";

mysqli_query($conn, $sqlwork);



   header("Location: login.php");


}
else{echo"first agree with terms and conditions ";}

}
else{echo"password not matched";}

}
else{

echo"username is taken, please Try Again with unique username..";

}

}


?>

<div>
    <b> already have account </b>
    <br/>
    <a class='btn btn-warning' href='login.php'> click here to login </a>
    
    </div>
    




<hr/>

<div class="container">
<center>
<a class='btn btn-warning' href='about.html'>
About and Contact Us Page
</a>
</center>


</div>



<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>
