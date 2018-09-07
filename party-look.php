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
  <title>party-look</title>
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
      background-color:  #CC00CC;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: white !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
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
<li><a href="traditional-look.php">Traditional Look </a> </li>
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
<h3> Party Look </h3>
</div>

<div class="container">

<a href="#demo" class="thumbnail bg-1" data-toggle="collapse"> 
<img src="images/party-style-buy-this-look.jpg" class="img-rounded person" alt="party-style-buy-this-look" width="450px" height"690px">
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
<p class="col-sm-12 text-center"> This outfit is suitable for many occassion whether its party or meetings or date! A pencil skirt and matching crop top is all you need. This dreesing suits mostly to slim women. Women with heavy body may look worse in this dress so never go for this if you are one of them.   </p> <br> <br>
</div>

<div id="pm" class="tab-pane fade">
<p class="col-sm-12 text-center"> As long as the dressing is something which makes you stand out, you don't have to bother for heavy makeup. A touch up with foundation, little blush or contour can do much more. Apply thin eyeliner and define your eyebrowswith black/brown brow pencil. For lips, go for any shades depending on how you want to look. For boldness choose dip red, hot pink or maroon shades. For soft look, choose light pinks, peach or light brown shades.  </p> <br> <br> <br>
</div>

<div id="ph" class="tab-pane fade">
<p class="col-sm-12 text-center"> Hairstyles for this look can be a neat bun, Half pony-tail or leave hair open. Depending on the occassion, you can pick hair styles accordingly  </p> <br> <br>
</div>

<div id="pa" class="tab-pane fade">
<p class="col-sm-12 text-center"> For this dressing and the occassion, you can go for long layered neck pieces, a luxury watch and a statement purse! For earrings, you can choose big tops or long chain earrings if you are not wearring any necklace. To complete your look, wear a matching pair of heels/flats on this dress </p> <br> <br>
</div>

<div id="pb" class="tab-pane fade">
<p class="text-center"> <b>Buy this complete look for Rs.4,295 </b>  </p>
<p class="col-sm-12 text-center"> <a href="http://www.myntra.com/tops/cation/cation-women-white-crop-top/375312/buy?src=search&uq=true&q=white-crop-top&p=7" target="_blank"> White Crop Top </a> Rs.384 &nbsp<a href="http://www.myntra.com/skirts/purple-feather/purple-feather-black-pencil-skirt/1096314/buy?src=search&uq=true&q=black-pencil-skirt&p=1" target="_blank"> Black Pencil Skirt </a> Rs.547 &nbsp <a href="http://www.myntra.com/flats/kielz/kielz-women-black-ballerinas/1562356/buy?src=search&uq=true&q=black-bellies&p=20" target="_blank">Black Ballerinas</a> Rs.649 &nbsp <a href="http://www.myntra.com/clutches/covo/covo-black-purse/1226173/buy?src=search&uq=true&q=black-purse&p=4" target="_blank"> Black purse </a> Rs.949 </p> <br> <br>
</div>
</div>
</div>
<br> 

<a href="#demo1" class="thumbnail bg-1" data-toggle="collapse"> 
<img src="images/alia-bhatt-in-party-look.jpg" class="img-rounded person" alt="alia-bhatt-in-party-look" width="450" height"690">
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
<p class="col-sm-12 text-center"> Alia bhatt is wearing a black crop top and printed shorts. This look is party wear as well as sporty. You can wear crop top in any color of your choice matching to your shorts. Shorts can be printed or plain. Even crop tops can be off shoulder, cold shoulder or sleevless. It depends on how you want to make it look. Overall, this look is pretty bubbly!</p> <br> <br>
</div>


<div id="pm1" class="tab-pane fade">
<p class="col-sm-12 text-center"> Wear your favourite foundation first and then conceal your pors with good quality concealer. After the base, apply coral blush in shades of bright pink or else coral peach. Eyes can be smokey or soft. Apply mascara, define your brows and winged eyeliner. Lastly, don't miss your matching lip shade in gloss finish. The complete look is now ready. </p> <br> <br>
</div>

<div id="ph1" class="tab-pane fade">
<p class="col-sm-12 text-center"> With this outfits, soft curly waves goes more nicely than any other hairstyle. curl your hair with the rollar and then brush them thourouly to get bouncy waves. After it is done, set this style with good quality hair spray. </p> <br> <br>
</div>

<div id="pa1" class="tab-pane fade">
<p class="col-sm-12 text-center"> Just a delicate bracelate is enough. No need for any neckpiece or earrings, they are optional. Alia is wearing black hat and shoes which are enough for stylng this look. </p> <br> <br>
</div>

<div id="pb1" class="tab-pane fade">
<p class="text-center"> <b>Buy this complete look for Rs.4,482 </b> </p>
<p class="col-sm-12 text-center"> <a href="http://www.myntra.com/tops/faballey/faballey-women-black-crop-top/707844/buy?src=search&uq=true&q=black-crop-top&p=140" target="_blank"> Black Crop Top</a> Rs.850 &nbsp <a href="http://www.myntra.com/shorts/all-about-you/all-about-you-from-deepika-padukone-beige-printed-shorts/1290812/buy?src=search&uq=true&q=printed-short&p=14" target="_blank">Beige Printed Shorts</a> Rs.779 &nbsp <a href="http://www.myntra.com/hat/parfois/parfois-women-black-bucket-hat/1418737/buy?src=search&uq=true&q=women-black-hat&p=1" target="_blank">Black Bucket Hat</a> Rs.483 &nbsp <a href="http://www.myntra.com/heels/flat-n-heels/flat-n-heels-women-black-solid-heeled-boots/1568921/buy?src=search&uq=true&q=women-black-shoes&p=61" target="_blank">Black Solid Heeled Boots </a> Rs.2,339 </p> <br> <br>
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

