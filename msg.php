
<?php

include "databaseConnection.php";
session_start();

$mu = $_SESSION['mu'];


$sql= "SELECT * FROM slam_users WHERE username = '$mu'";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){


echo"

<!DOCTYPE html>
<html>
<head><title>

Message
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
  font-family : ".$row['font_style'].";
  color : ".$row['font_color'].";


}

</style>
</head>
<body >
<div class=container>

hello friend,
</div>

<div class=container>
<p>
  Welcom in Slambook you already know that your friend ".$row['name']." created a Slambook. It is full of memories of friends family persons and many others, we know that you are thinking that you should also have this type of Slambook which can contain all sweet and precious memories of your and your near and dear.,</p>
<br/>
<p>
So what are you waiting for click below button and creat your own SlamBook it is totaly free for now, do not think more cuz in future it will become chargeable but if you creat your SlamBook right Now then you will get benefit of our friendship2020 offer in which you get a SlamBook with all Pro Features totaly FREE, FREE...

</p>

</div>

";
}}}
?>


<form method='POST'>
<input type='submit' name='submit' value='Click here to Creat Your SlamBook Totaly Free Fore Now ' class='btn btn-warning'/>
</form>


<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>


<?php

if(isset($_POST['submit'])){
   header("Location: signup.php");

}
?>
