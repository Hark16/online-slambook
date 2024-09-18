


<?php

error_reporting(0);
session_start();
include "databaseConnection.php";

$mu = $_SESSION['mu'];

$fu = $_SESSION['fu'];

$birthday = $_SESSION['birthday'];

$name= $_SESSION['name'];

$mobile = $_SESSION['mobile'];

$nickname = $_SESSION['nickname'];

$bloodgroup = $_SESSION['bloodgroup'];

$brand = $_SESSION['brand'];

$movie = $_SESSION['movie'];

$weakness = $_SESSION['weakness'];

$strength = $_SESSION['strength'];

$dislike = $_SESSION['dislike'];

$relationship = $_SESSION['relationship'];

$mynickname = $_SESSION['mynickname'];

$book = $_SESSION['book'];

$song = $_SESSION['song'];

$met = $_SESSION['met'];

$mybadhabit = $_SESSION['mybadhabit'];

$mysecret = $_SESSION['mysecret'];

$mycrash = $_SESSION['mycrash'];

$mycolor = $_SESSION['mycolor'];

$similar = $_SESSION['similar'];

$suggestion = $_SESSION['suggestion'];

$moviech = $_SESSION['moviech'];

$personal = $_SESSION['personal'];

$firstsite = $_SESSION['firstsite'];

$island = $_SESSION['island'];

$wishes = $_SESSION['wishes'];

$sharesecret = $_SESSION['sharesecret'];

$life = $_SESSION['life'];

$friendship = $_SESSION['friendship'];

$mantra = $_SESSION['mantra'];

$tname= $mu."_slambook";


$sql1= "SELECT * FROM $tname WHERE username = '$fu'";
if($result = mysqli_query($conn, $sql1)){
if(mysqli_num_rows($result) ==0){


$sqlwork = "INSERT INTO $tname (username, birthday, name, mobile, nickname, bloodgroup, brand, movie, weakness, Strength, Dislike, Relationship, myNickname, book, song, met, mybadhabit, mysecret, mycrash, mycolor, similar, suggestion, moviech, personal, firstsite, island, wishes, sharesecret, life, friendship, mantra) VALUES('$fu', '$birthday', '$name', '$mobile', '$nickname', '$bloodgroup', '$brand', '$movie', '$weakness', '$strength', '$dislike', '$relationship', '$mynickname', '$book', '$song', '$met', '$mybadhabit', '$mysecret', '$mycrash', '$mycolor', '$similar', '$suggestion', '$moviech', '$personal', '$firstsite', '$island', '$wishes', '$sharesecret', '$life', '$friendship', '$mantra')";

mysqli_query($conn, $sqlwork);


   header("Location: slampage.php?mu=$mu&fu=$fu&log=login");

}}


   header("Location: slampage.php?mu=$mu&fu=$fu&log=login");




?>

