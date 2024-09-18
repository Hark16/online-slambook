<?php

include "databaseConnection.php";
$mu=$_GET['mu'];
$fu= $_GET['fu'];

$sql= "SELECT * FROM slam_users WHERE username = '$mu'";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){


echo"

<!DOCTYPE html>
<html>
<head><title>

Select FontColor 
</title>

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

}

</style>
</head>
<body >
";


}}}
?>



<div>
<form method='POST'>
<center>
<select name='fcolor'>
<option value='AliceBlue'> select Font Color 1 </option>
<option value='AntiqueWhite'> select Font Color 2 </option>
<option value='Aqua'> select Font Color 3 </option>
<option value='black'> select Font Color 4 </option>
<option value='BlueViolet'> select Font Color 5 </option>
<option value='Chocolate'> select Font Color 6 </option>
<option value='Crimson'> select Font Color 7 </option>
<option value='Cyan'> select Font Color 8 </option>
<option value='DarkGoldenRod'> select Font Color 9 </option>
<option value='DarkGreen'> select Font Color 10 </option>
<option value='DarkMagenta'> select Font Color 11 </option>
<option value='DarkOrange'> select Font Color 12 </option>
<option value='DarkRed'> select Font Color 13 </option>
<option value='GhostWhite'> select Font Color 14 </option>
<option value='Purple'> select Font Color 15 </option>
<option value='RebeccaPurple'> select Font Color 16 </option>


</select>
</center>

<div>
<input type='submit' name='submit' value='select FontColor'/>
</div>

<div>
<input type='submit' name='next' value='save and continue '/>
</div>

</form>
</div>

<?php

include "databaseConnection.php";
session_start();

if(isset($_POST['submit'])){

$img= $_POST['fcolor'];


echo"
<div style='color: ".$img."; font-size:20vw;'>
this is your text here you can see the color of your font and select correct one which you like most...


</div>
";

$pub= "UPDATE slam_users SET font_color = '$img' WHERE username = '$mu' ";

mysqli_query($conn, $pub);

}

if(isset($_POST['next'])){

   header("Location: fontstyle.php?mu=$mu&fu=$fu");

}
?>




<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>
