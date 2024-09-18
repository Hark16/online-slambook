<?php

session_start();
include "databaseConnection.php";

$mu = $_GET['mu'];;

$fu = $_GET['fu'];

if(isset($_POST['slampage'])){

$_SESSION['mu']=  $mu;
$_SESSION['fu']=  $fu;

   header("Location: selectpage.php?mu=$mu&fu=$fu");

}

if(isset($_POST['submit'])){

$birthday = $_POST['birthday'];

$name = $_POST['name'];;

$mobile = $_POST['mobile'];

$nickname = $_POST['nickname'];

$bloodgroup = $_POST['bloodgroup'];

$brand = $_POST['brand'];

$movie = $_POST['movie'];

$weakness = $_POST['weakness'];

$strength = $_POST['strength'];

$dislike = $_POST['dislike'];

$relationship = $_POST['relationship'];

$mynickname = $_POST['mynickname'];

$book = $_POST['book'];

$song = $_POST['song'];

$met = $_POST['met'];

$mybadhabit = $_POST['mybadhabit'];

$mysecret = $_POST['mysecret'];

$mycrash = $_POST['mycrash'];

$mycolor = $_POST['mycolor'];

$similar = $_POST['similar'];

$suggestion = $_POST['suggestion'];

$moviech = $_POST['moviech'];

$personal = $_POST['personal'];

$firstsite = $_POST['firstsite'];

$island = $_POST['island'];

$wishes = $_POST['wishes'];

$sharesecret = $_POST['sharesecret'];

$life = $_POST['life'];

$friendship = $_POST['friendship'];

$mantra = $_POST['mantra'];

$_SESSION['mu']=  $mu;
$_SESSION['fu']=  $fu;


$_SESSION['birthday']=  $birthday;

$_SESSION['name']=  $name;

$_SESSION['mobile']=  $mobile;

$_SESSION['nickname']=  $nickname;

$_SESSION['bloodgroup']=  $bloodgroup;

$_SESSION['brand']=  $brand;

$_SESSION['movie']=  $movie;

$_SESSION['weakness']=  $weakness;

$_SESSION['strength']=  $strength;

$_SESSION['dislike']=  $dislike;

$_SESSION['relationship']=  $relationship;

$_SESSION['mynickname']=  $mynickname;

$_SESSION['book']=  $book;

$_SESSION['song']=  $song;

$_SESSION['met']=  $met;

$_SESSION['mybadhabit']=  $mybadhabit;

$_SESSION['mysecret'] =  $mysecret;

$_SESSION['mycrash']=  $mycrash;

$_SESSION['mycolor']=  $mycolor;

$_SESSION['similar']=  $similar;

$_SESSION['suggestion']=  $suggestion;

$_SESSION['moviech']=  $moviech;

$_SESSION['personal']=  $personal;

$_SESSION['firstsite']=  $firstsite;

$_SESSION['island']=  $island;

$_SESSION['wishes']=  $wishes;

$_SESSION['sharesecret']=  $sharesecret;

$_SESSION['life']=  $life;

$_SESSION['friendship']=  $friendship;

$_SESSION['mantra']=  $mantra;


   header("Location: insert.php");


}



$sql= "SELECT * FROM slam_users WHERE username = '$mu'";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){


echo"

<!DOCTYPE html>
<html>
<head><title>

Home page</title>

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


<audio id='a' src='music.mp3'>
</audio>


<div class="container">

<div class="row">
    
<div class='col-xs-2'>
<button onclick='play()'>play</button>
</div>

<div class='col-xs-2'>
<button onclick='pause()'>pause</button>
</div>
    
  <div class="col-xs-4">

<?php
if($mu==$fu){
echo"<a href='logout.php?mu=".$mu."' class='btn btn-danger'> logout </a>";
?>
</div>

  <div class="col-xs-4">
<?php

echo"<a class='btn btn-success' href='background.php?mu=".$mu."&fu=".$fu."' > Design Your SlamPage </a>";
}
?>
</div> </div> </div>

<h1> Welcome Friend in SlamBook </h1>
<h5>Fill this all fields and click Submit button and See your SlamPage </h5>

<div class="container">

<form method='POST'>

<div class="container">

<div class="row">
  <div class="col-xs-6">
Your birthday

</div>

  <div class="col-xs-6">
<input name='birthday' placeholder='12/12/2020'/>

</div> </div>


<div class="row">
  <div class="col-xs-6">
Your Full Name

</div>
  <div class="col-xs-6">

<input type='text' name='name' placeholder='full name'/>
</div> </div>

<div class="row">
  <div class="col-xs-6">
Mobile Number

</div> 
  <div class="col-xs-6">
<input type='number' name='mobile' placeholder='0123456789'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Your Nickname

</div> 
  <div class="col-xs-6">
<input type='text' name='nickname' placeholder='nickname'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Your BloodGroup

</div>

  <div class="col-xs-6">
<input type='text' name='bloodgroup' placeholder='O+'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Your Favorite Brand

</div>

  <div class="col-xs-6">
<input name='brand' placeholder='apple and dominoz and zara'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Your Favorite Movies

</div>

  <div class="col-xs-6">
<input name='movie' placeholder='Titanic, DDLJ, 3 idiots'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Your weaknesses

</div>

  <div class="col-xs-6">
<input name='weakness' placeholder='your weaknesses '/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Your Strengths 

</div>

  <div class="col-xs-6">
<input placeholder='Strengths' name='strength' />

</div> </div>


<div class="row">
  <div class="col-xs-6">
One thing you dislike in Me

</div>

  <div class="col-xs-6">
<input name='dislike' placeholder='Dislike in me'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Relationship between You and Me

</div>

  <div class="col-xs-6">
<input placeholder='our Relationship' name='relationship'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Nickname For Me

</div>

  <div class="col-xs-6">
<input placeholder='my Nickname' name='mynickname'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Any Book for me
</div>

  <div class="col-xs-6">
<input placeholder='suggest Book to Me' name='book'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Any song to Me

</div>

  <div class="col-xs-6">
<input placeholder='suggest Song to Me' name='song'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
When we met

</div>

  <div class="col-xs-6">
<input placeholder='when We Met' name='met'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
My Bad habit acording to You

</div>

  <div class="col-xs-6">
<input placeholder='my bad habit' name='mybadhabit'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Do You know any secret about Me?

</div>

  <div class="col-xs-6">
<input placeholder='tell My Secret' name='mysecret'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
what is My Crash name?

</div>

  <div class="col-xs-6">
<input placeholder='my crash name' name='mycrash'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
what is My Favorite Color?

</div>

  <div class="col-xs-6">
<input placeholder='my Fav Color' name='mycolor'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
similar between You and Me?

</div>

  <div class="col-xs-6">
<input placeholder='Our Similarity' name='similar'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
suggestion for Me?

</div>

  <div class="col-xs-6">
<input placeholder='give me Suggestion' name='suggestion'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">

any Movie character dedicate to me 
</div>

  <div class="col-xs-6">
<input placeholder='which movie ch. have similarity with Me' name='moviech'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
if you say something about your personal life

</div>

  <div class="col-xs-6">
<input placeholder='about Your Personal Life' name='personal'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
when you first saw me what did You think?

</div>

  <div class="col-xs-6">
<input placeholder='what you Thought' name='firstsite'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
if you are in an island and you have only one choice to take anyone with you then will you take me to you if Yes then why or if No then why?

</div>

  <div class="col-xs-6">
<input placeholder='Yes or No and Why' name='island'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
3 wishes for me

</div>

  <div class="col-xs-6">
<input placeholder='Wishes for Me' name='wishes'/>

</div> </div>


<div class="row">
  <div class="col-xs-6">
Secret to share with me

</div>

  <div class="col-xs-6">
<input placeholder='share any Secret' name='sharesecret'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
what is Life acording to You?

</div>

  <div class="col-xs-6">
<input placeholder='Life acording to U' name='life'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
what is Friendship acording to You?

</div>

  <div class="col-xs-6">
<input placeholder='Friendship acording to U' name='friendship'/>

</div> </div>

<div class="row">
  <div class="col-xs-6">
Your life Mantra 

</div>

  <div class="col-xs-6">
<input placeholder='Mantra' name='mantra'/>

</div> </div>

<div class="row">
  <div class="col-xs-12">

<center>
<input type='submit' name='submit' value='submit' class='btn btn-primary'/>
</center>
</div></div>

<div class="row">
  <div class="col-xs-12">

<br/>

<right>
<?php
if($mu==$fu){
?>
<input type='submit' name='slampage' value='go to Pages' class='btn btn-warning'/>
<?php
}
?>

</right>
</div></div>

</div> </form> </div>


<div> <center>

share into <a href="whatsapp://send?text= Hi friend, I got an amazing site for our memories which is Slambook please have a look on this if you like it then create a slambook of your own and design it, here is the link   https://slambook.myprabandhak.com " data-action="share/whatsapp/share" class="btn btn-success"> whatsapp </a>

</center> </div>



<div class="container">
©2020-21 SlamBook.MyPrabandhak.com  All Rights Reserved.
</div>
<script>
var audio= document.getElementById('a')

function play(){
audio.play();
audio.volume= 0.5;
}

function pause(){
audio.pause();

}

</script>



</body>
</html>

