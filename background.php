<?php

$mu=$_GET['mu'];
$fu= $_GET['fu'];

?>

<!DOCTYPE html>
<html>
<head><title>

Select background 
</title>

<meta name=viewport content=width=device-width, initial-scale=1.0>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173478055-1"></script>
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

</head>
<body >


<div>
<form method='POST'>
<center>
<select name='image'>
<option value='image1'> select image 1 </option>
<option value='image2'> select image 2 </option>
<option value='image3'> select image 3 </option>
<option value='image4'> select image 4 </option>
<option value='image5'> select image 5 </option>
<option value='image6'> select image 6 </option>
<option value='image7'> select image 7 </option>
<option value='image8'> select image 8 </option>
<option value='image9'> select image 9 </option>
<option value='image10'> select image 10 </option>
<option value='image11'> select image 11 </option>
<option value='image12'> select image 12 </option>
<option value='image13'> select image 13 </option>
<option value='image14'> select image 14 </option>
<option value='image15'> select image 15 </option>
<option value='image16'> select image 16 </option>


<option value='image17'> select image 17 </option>
<option value='image18'> select image 18 </option>
<option value='image19'> select image 19 </option>
<option value='image20'> select image 20 </option>
<option value='image21'> select image 21 </option>
<option value='image22'> select image 22 </option>
<option value='image23'> select image 23 </option>
<option value='image24'> select image 24 </option>
<option value='image25'> select image 25 </option>
<option value='image26'> select image 26 </option>
<option value='image27'> select image 27 </option>

<option value='image28'> select image 28 </option>


</select>
</center>

<div>
<input type='submit' name='submit' value='select background'/>
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

$i= $_POST['image'];
$img= "images/".$i.".jpg";

echo"
<body style='background-image: url(".$img."); height: 100%; width: 100%; '>


</body>
";

$pub= "UPDATE slam_users SET image = '$img' WHERE username = '$mu' ";

mysqli_query($conn, $pub);

}

if(isset($_POST['next'])){

   header("Location: fontcolor.php?mu=$mu&fu=$fu");

}
?>



<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>
