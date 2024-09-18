

<?php

include "databaseConnection.php";
session_start();

$log= $_GET['log'];

$mu = $_GET['mu'];

$fu = $_GET['fu'];

if(isset($_POST['submit1'])){
$_SESSION['mu']=  $mu;

   header("Location: msg.php");

}

if(isset($_POST['submit'])){
$_SESSION['mu']=  $mu;


   header("Location: selectpage.php?mu=$mu&fu=$fu");


}

$sql= "SELECT * FROM slam_users WHERE username = '$mu'";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){


echo"

<!DOCTYPE html>
<html>
<head><title>

SlamPage </title>

<meta name=viewport content=width=device-width, initial-scale=1.0>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-173478055-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173478055-1');
</script>


<!-- Latest compiled and minified CSS -->
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>

<!-- jQuery library -->
<script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>

<!-- Latest compiled JavaScript -->
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js></script>

<style>
body {
background-image: url(".$row['image'].");
  font-family : ".$row['font_style'].";
  color : ".$row['font_color'].";


}

</style>
</head>
<body >
";
}}}
?>


<?php
$home= $mu."_slambook";

$sql = "SELECT * FROM $home WHERE username= '$fu'";


if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){
echo"<div class=container>
";
while($row = mysqli_fetch_array($result)){

echo"

<div class=container>

<div class=row>
  <div class=col-xs-6>
Your birthday

</div>

  <div class=col-xs-6>

<p>".$row['birthday']." </p>

</div> </div>


<div class=row>
  <div class=col-xs-6>
Your Full Name

</div>
  <div class=col-xs-6>
<p>".$row['name']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Mobile Number

</div> 
  <div class=col-xs-6>
<p>".$row['mobile']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Your Nickname

</div> 
  <div class=col-xs-6>
<p>".$row['nickname']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Your BloodGroup

</div>

  <div class=col-xs-6>
<p>".$row['bloodgroup']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Your Favorite Brand

</div>

  <div class=col-xs-6>
<p>".$row['brand']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Your Favorite Movies

</div>

  <div class=col-xs-6>
<p>".$row['movie']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Your weaknesses

</div>

  <div class=col-xs-6>
<p>".$row['weakness']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Your Strengths 

</div>

  <div class=col-xs-6>
<p>".$row['Strength']." </p>

</div> </div>


<div class=row>
  <div class=col-xs-6>
One thing you dislike in Me

</div>

  <div class=col-xs-6>
<p>".$row['Dislike']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Relationship between You and Me

</div>

  <div class=col-xs-6>
<p>".$row['Relationship']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Nickname For Me

</div>

  <div class=col-xs-6>
<p>".$row['myNickname']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Any Book for me
</div>

  <div class=col-xs-6>
<p>".$row['book']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Any song to Me

</div>

  <div class=col-xs-6>
<p>".$row['song']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
When we met

</div>

  <div class=col-xs-6>
<p>".$row['met']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
My Bad habit acording to You

</div>

  <div class=col-xs-6>
<p>".$row['mybadhabit']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Do You know any secret about Me?

</div>

  <div class=col-xs-6>
<p>".$row['mysecret']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
what is My Crash name?

</div>

  <div class=col-xs-6>
<p>".$row['mycrash']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
what is My Favorite Color?

</div>

  <div class=col-xs-6>
<p>".$row['mycolor']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
similar between You and Me?

</div>

  <div class=col-xs-6>
<p>".$row['similar']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
suggestion for Me?

</div>

  <div class=col-xs-6>
<p>".$row['suggestion']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>

any Movie character dedicate to me 
</div>

  <div class=col-xs-6>
<p>".$row['moviech']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
if you say something about your personal life

</div>

  <div class=col-xs-6>
<p>".$row['personal']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
when you first saw me what did You think?

</div>

  <div class=col-xs-6>
<p>".$row['firstsite']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
if you are in an island and you have only one choice to take anyone with you then will you take me to you if Yes then why or if No then why?

</div>

  <div class=col-xs-6>
<p>".$row['island']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
3 wishes for me

</div>

  <div class=col-xs-6>
<p>".$row['wishes']." </p>

</div> </div>


<div class=row>
  <div class=col-xs-6>
Secret to share with me

</div>

  <div class=col-xs-6>
<p>".$row['sharesecret']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
what is Life acording to You?

</div>

  <div class=col-xs-6>
<p>".$row['life']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
what is Friendship acording to You?

</div>

  <div class=col-xs-6>
<p>".$row['friendship']." </p>

</div> </div>

<div class=row>
  <div class=col-xs-6>
Your life Mantra 

</div>

  <div class=col-xs-6>
<p>".$row['mantra']." </p>

</div> </div>
</div>
";

}
echo "</div>";

// Free result set

mysqli_free_result($result);

} else{
echo "No records matching your query were found.";
}
}
else{

echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>

<?php


if($mu==$fu or $log=='yes'){
echo"

<form method='POST'>
<right>
<input class='btn btn-primary' type='submit' name='submit' value='go to Select Another Page '/>
</right></form>


<div class='container'>
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>

";
}
else{
echo"

<form method='POST'>
<right>
<input class='btn btn-primary' type='submit' name='submit1' value='Hey Friend Message for You '/>
</right></form>


<div class='container'>
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>

";


}
?>

