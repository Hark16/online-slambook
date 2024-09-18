
<!DOCTYPE html>
<html>

<head><title>


Send Page 
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

<h1> Send a empty SlamBook Page to your friend which he/she will fill there Precious Thoughts,  </h1>
<div class="container">
<form method='POST'>
give your friend or whom you gonna send, a unique key it can be anytype of unique word like username or anything..
<br/>

<input type='text' name='fu' />
<br/>



name <br/>

<input type='text' name='name' />
<br/>


<input type='submit' name='submit' value='submit'/>
</form>

<?php

$mu= $_GET['mu'];

if(isset($_POST['submit'])){

$fu = $_POST['fu'];
$name= $_POST['name'];

include "databaseConnection.php";
session_start();



$wln= $mu."_slambook";

$sql = "SELECT * FROM $wln WHERE username= '$fu'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){
echo"<h1> this unique key is already submited </h1>";

}
else{
$sql = "SELECT * FROM slam_users WHERE username= '$mu'";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){

echo"share into <a href='whatsapp://send?text=(Hi, ".$name." ".$row['name']." has created a SlamBook and sent you a Page of it to fill with your Memories and Thoughts, so click next link to get it... https://slambook.myprabandhak.com/profile.php?mu=".$mu."%26fu=".$fu.")' data-action='share/whatsapp/share' class='btn btn-success'> whatsapp </a>
";

}}}}
}}

?>
<?php


echo"<br/><hr/><a class='btn btn-primary' href='profile.php?mu=".$mu."&fu=".$mu."'> click to home page </a>";

?>


<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>
