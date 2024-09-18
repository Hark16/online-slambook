

<!DOCTYPE html>
<html>
<head><title>

Login Page 
</title>

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

<h1>Welcom Member</h1>
<div class="container">

<p> Fill username and password to login your account...</p>
<br/>
please pay attention that username is case-sensitive 

</div>

<div class="container">

<form method='POST'>

<div class="container">
<div class="row">
  <div class="col-xs-6">
Username  : </div>

  <div class="col-xs-6">

<input type='text' placeholder='username' name='username' required/><br/>
</div>
</div>
<div class="row">
  <div class="col-xs-6">
Password : </div>

  <div class="col-xs-6">

<input type='password' name='password' required/><br/>
</div></div>
<div class="row">
  <div class="col-xs-12">
<center>

<input type='submit' name='submit' value='submit' class='btn btn-success'/>
</center>
</div></div>
</div>

</form>
</div>

<div class="container">


<?php

//error_reporting(0);


if (isset($_POST['submit']))
{

session_start();
//$wln=$_SESSION['wln'];
include "databaseConnection.php";

error_reporting(0);

$password = $_POST['password'];
$username = $_POST['username'];
$tname= 'slam_users';



$sql= "SELECT * FROM $tname WHERE username ='$username' and password='$password' ";

$result = mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
 
if ($total===1){
$_SESSION['firstname']= $row['firstname'];
$_SESSION['username']= $row['username'];


$pub= "UPDATE $tname SET login='login' WHERE username= '$username' ";

mysqli_query($conn, $pub);

   header("Location: profile.php?mu=$username&fu=$username");

}
else
{
?>
<script>alert("login unsuccessfull, try again")
</script>
<?php

}

}
?>

</div>

<div class="container">
if you forget password then mail us with your username at connection@myprabandhak.com 
</div>

<div class="container">
<center>
<a class='btn btn-primary' href='signup.php'>
Click Here For Create New Account
</a>
</center>


</div>

<hr/>


<div> <center>

share into <a href="whatsapp://send?text= Hi friend, I got an amazing site for our memories which is Slambook please have a look on this if you like it then create a slambook of your own and design it, here is the link   https://slambook.myprabandhak.com " data-action="share/whatsapp/share" class="btn btn-success"> whatsapp </a>

</center> </div>


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
