<html><head><title>
Select Page
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



</head> <body>


<?php

include "databaseConnection.php";
session_start();

$mu= $_GET['mu'];

$wln= $mu."_slambook";

$sql = "SELECT * FROM $wln ";

if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

echo "<div class='container'>";
echo"<form method='POST'>";
echo"<div> select Name Of Your Friend to See there SlamPage </div> ";
echo"<center>";
echo"<select name='cat'>";

while($row = mysqli_fetch_array($result)){


echo"<option value='".$row['username']."'>".$row['name'] ."</option>"; 

}

echo"</select>";
echo"</center>";


echo"<br/> <center> <input class='btn btn-success' type='submit' name='submit' value='submit'/> </center>";

echo"<br/> <left> <input class='btn btn-primary' type='submit' name='submit1' value='Home'/> </left>";
echo"<right> <input type='submit' name='submit2' value='Send a SlamPage to Fill to UR Friend' class='btn btn-primary'/> </center>";



echo"</form>";



echo"</div>";




mysqli_free_result($result);

} else{
echo "<h1>No records matching your query were found.</h1>";

echo"<div> <form method='POST'>";


echo"<br/> <left> <input class='btn btn-primary' type='submit' name='submit1' value='Home'/> </left>";
echo"<right> <input type='submit' name='submit2' value='Send a SlamPage to Fill to UR Friend' class='btn btn-primary'/> </center>";



echo"</form>";



echo"</div>";

    
    
}
}
else{
echo"<h3> we told you that username is case-sensitive may be you entered wrong username please try again with new username or change caps letter </h3>";
echo"<a href='logout.php'>login page </a>";

die();



echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}


if(isset($_POST['submit'])){
$fu= $_POST['cat'];

header("Location: slampage.php?fu=$fu&mu=$mu&log=yes");


}


if(isset($_POST['submit1'])){



header("Location: profile.php?fu=$mu&mu=$mu");


}

if(isset($_POST['submit2'])){


header("Location: frienddetails.php?mu=$mu");


}

?>



<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>

</body>
</html>
