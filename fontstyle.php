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

Select FontStyle 
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
color: ".$row['font_color'].";
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
<select name='fstyle'>
<option value='Arial'> select Font Style 1 </option>
<option value='Monotype Corsiva'> select Font Style 2 </option>
<option value='Times New Roman'> select Font Style 3 </option>
<option value='Helvetica'> select Font Style 4 </option>
<option value='Verdana'> select Font Style 5 </option>
<option value='Calibri'> select Font Style 6 </option>
<option value='Noto'> select Font Style 7 </option>
<option value='Lucida Sans'> select Font Style 8 </option>
<option value='Gill Sans'> select Font Style 9 </option>
<option value='Century Gothic'> select Font Style 10 </option>
<option value='Lucidatypewriter'> select Font Style 11 </option>
<option value='Comic Sans MS'> select Font Style 12 </option>
<option value='Bradley Hand'> select Font Style 13 </option>
<option value='Brush Script MT'> select Font Style 14 </option>
<option value='Aharoni Bold'> select Font Style 15 </option>
<option value='Andalus'> select Font Style 16 </option>


</select>
</center>

<div>
<input type='submit' name='submit' value='select Font Style'/>
</div>

<div>
<input type='submit' name='next' value=' Finish '/>
</div>

</form>
</div>

<?php

include "databaseConnection.php";
session_start();

if(isset($_POST['submit'])){

$img= $_POST['fstyle'];


echo"
<div style='font-family: ".$img."; font-size:20vw;'>
this is your text here you can see the Style of your font and select correct one which you like most...


</div>
";

$pub= "UPDATE slam_users SET font_style = '$img' WHERE username = '$mu' ";

mysqli_query($conn, $pub);

}

if(isset($_POST['next'])){

   header("Location: profile.php?mu=$mu&fu=$fu");

}
?>





<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>
