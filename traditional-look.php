<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM people WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>traditional-look</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }

h3 {
      margin-top: 70px;
      letter-spacing: 10px;      
      font-size: 25px;
font-weight:bold;
      color: #111;
}

 .container {
      padding: 30px 5px;
}

.bg-1 {
      background: #2d2d30;
}

.person {
      border: 3px solid transparent;
      margin-bottom:5px;
       width:450px;
       height:690px;
      
  }
 
.person:hover {
      border-color: #f1f1f1;
}

 .nav-tabs li a {
      color: #CC00CC;
}

  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #CC00CC;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: white !important;
  }
  .navbar-nav li a:hover {
      color: #fff;
font-weight:bold;
  }
  .navbar-nav li.active a {
      color: #fff;
      
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: #000;
color:#fff !important;
  }

.pagination{
margin-left= 50px;
} 

footer{
background-color: white;
color: black;
padding: 32px;
}

footer a{
color: black;
}

footer a:hover{
color: #CC00CC;
text-decoration:none;
}

</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	<span class="icon-bar"> </span>
	<span class="icon-bar"> </span>
	<span class="icon-bar"> </span>
</button>
<a class="navbar-brand" href="#myPage"> Ootd Obsessed </a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class= "nav navbar-nav navbar-right">
<li><a href="index.php">Home </a> </li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#"> Categories
<span class="caret"> </span> </a>
<ul class="dropdown-menu">
<li><a href="casual-look.php">Casual Look </a> </li>
<li><a href="party-look.php">Party Look </a> </li>
</ul>
</li>
<li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
 <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</nav>

<div class="text-center">
<h3> Traditional Look </h3>
</div>

<div class="container">

<a href="#demo" class="thumbnail bg-1" data-toggle="collapse"> 
<img src="images/deepika-padukone-in-blue-saree.jpg" class="img-rounded person" alt="deepika-padukone-in-blue-saree" width="450px" height"690px">
</a>

<div id="demo" class="collapse">

<ul class="nav nav-tabs">
<li class="active"> <a data-toggle="tab" href="#po"> Outfit </a></li>
<li> <a data-toggle="tab" href="#pm"> Makeup </a></li>
<li> <a data-toggle="tab" href="#ph"> Hair </a></li>
<li> <a data-toggle="tab" href="#pa"> Accesorries </a></li>
<li> <a data-toggle="tab" href="#pb"> Buy this look </a></li>
</ul>
<div class="tab-content">

<div id="po" class="tab-pane fade in active">
<p class="col-sm-12 text-center"> This royal blue color saree worn by deepika has blown everyone's mind. This look looks so stunning in party wear or in ceremony like weddings. This saree will definitaly give you deepika padukone look from 'yeh jawani hai deewani'! </p> <br> <br>
</div>

<div id="pm" class="tab-pane fade">
<p class="col-sm-12 text-center"> For traditional look, makeup is always a priority. Makeup should include your base foundation, blus in dark pink shade, contour-highlight and smokey eyes. For this look choose black eyeshadow and lip colors can be bright red, deep red or hot pink.  </p> <br> <br> <br>
</div>

<div id="ph" class="tab-pane fade">
<p class="col-sm-12 text-center"> Traditional look always look better with any type of bun and with gajara! but if want mordern touch then play with different hairstyles. To get deepika padukone look, make loose waves or curls and leave hair open </p> <br> <br>
</div>

<div id="pa" class="tab-pane fade">
<p class="col-sm-12 text-center"> Large earrings with light neckpiece or no neckpiece. Don't forget to wear matching bangles and keep a matching sparkeling clutch to falunt your overall look. </p> <br> <br>
</div>

<div id="pb" class="tab-pane fade">
<p class="text-center"> <b>Buy this complete look for Rs.843 </b>  </p>
<p class="col-sm-12 text-center"> <a href="http://www.myntra.com/embellished-saree/designersareez/designersareez-blue-faux-georgette-fashion-saree/735317/buy?src=search&uq=true&q=designer-saree&p=47" target="_blank"> Blue Faux Georgette Fashion Saree </a> Rs.843 </p> <br> <br>
</div>
</div>
</div>
<br> 

<a href="#demo1" class="thumbnail bg-1" data-toggle="collapse"> 
<img src="images/gul-panag-in-black-saree.jpg" class="img-rounded person" alt="gul-panag-in-black-saree" width="450" height"690">
</a>

<div id="demo1" class="collapse"> 

<ul class="nav nav-tabs">
<li class="active"> <a data-toggle="tab" href="#po1"> Outfit </a></li>
<li> <a data-toggle="tab" href="#pm1"> Makeup </a></li>
<li> <a data-toggle="tab" href="#ph1"> Hair </a></li>
<li> <a data-toggle="tab" href="#pa1"> Accesorries </a></li>
<li> <a data-toggle="tab" href="#pb1"> Buy this look </a></li>
</ul>

<div class="tab-content">

<div id="po1" class="tab-pane fade in active">
<p class="col-sm-12 text-center"> This black saree suits almost every occassion. This saree looks awesome with silver blouse. The plain designer saree is so light-weight and comfortable to carry. Black saree suits on all figures. </p> <br> <br>
</div>


<div id="pm1" class="tab-pane fade">
<p class="col-sm-12 text-center"> For makeup, first take a matching foundation to your skin tone, apply the base and blend it properly. Apply concealer around the eyes and again blend it. Choose contour one shade darker than your skin tone and apply blow your cheeks. Then, for eyes and lips, you are free to choose any shade but the only thing to take care is not to let both colors clash with each other.  </p> <br> <br>
</div>

<div id="ph1" class="tab-pane fade">
<p class="col-sm-12 text-center"> open hair look gorgeous and the high bun with a gajara can also look very elegent! </p> <br> <br>
</div>

<div id="pa1" class="tab-pane fade">
<p class="col-sm-12 text-center"> As you can see there is no need for any jewlery except showing off your sexy shades! Wear matching bellies. If you want extra boldness, choose wearing shoes over cute bellies! </p> <br> <br>
</div>

<div id="pb1" class="tab-pane fade">
<p class="text-center"> <b>Buy this complete look for Rs.747 </b> </p>
<p class="col-sm-12 text-center"> <a href="http://www.myntra.com/embellished-saree/mirchi-fashion/mirchi-fashion-black-faux-georgette-embellished-saree/1402364/buy?src=search&uq=true&q=black-saree&p=5" target="_blank"> Black Faux Georgette Embellished Saree </a> Rs.747 </p> <br> <br>
</div>
</div>
</div>

</div>


<div class="container">
 <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>

<div>
<footer class="text-center">
<a class="up arrow"  href="#myPage" data-toggle="tooltip" title="TO TOP">
<span class="glyphicon glyphicon-chevron-up"> </span>
</a> <br> <br>
<p> My blog <a href="flowerfairy5.htm" data-toggle="tooltip" title="visit wordpress" target="_blank"> www.flowerfairy5.wordpress.com </a> </p>
</footer>
</div>

<script>
$(document).ready(function() {
$('[data-toggle="tooltip"]').tooltip();
$("footer a[href='#myPage']"). on('click', function(event) {
if (this.hash !== "") {
event.preventDefault();
var hash= this.hash;
$('html,body').animate({scrollTop: $(hash).offset().top},900, function(){
window.location.hash= hash;
});
}
});
})
</script>

</body>
</html>

