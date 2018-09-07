<?php
 ob_start();
session_start();
if( isset($_SESSION['user'])!="" ){
  header("location: index.php");
 } 

 include_once 'dbconnect.php';

 $error = false;

 if ( isset($_POST['btn_add']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
 
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Please enter your full name.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Name must have atleat 3 characters.";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "Name must contain alphabets and space.";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM people WHERE userEmail='$email'";
   $res = mysql_query($query);
   $count = mysql_num_rows($res);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Password must have atleast 6 characters.";
  }
  
  // password encrypt using SHA256();
  $password = hash('sha256', $pass);
  
  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO people (userName,userEmail,userPass) VALUES('$name','$email','$pass')";
   $res = mysql_query($query);
    
   if ($res) {
    $errType = "success";
    $errMSGe = "Successfully registered, you may login now";
    unset($name);
    unset($email);
    unset($pass);
   } else {
    $errType = "danger";
    $errMSGe = "Something went wrong, try again later..."; 
   } 
    
  }
    
 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>ootd-obsessed</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="content/bootstrapJS/jquery-2.1.1.min.js" type="text/javascript"></script>
  
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal1').modal('show');
    });
</script> 

<style>
body {
font: 400 15px/1.8 Lato, sans-serif;
background: url('images/style-fasion-beauty-at-ootd-obsessed.jpg'); 
background-size: cover;
-moz-background-size:  cover;
}


h5{
margin-left: 350px;
letter-spacing: 10px;
font-size: 30px;
color: #111;
}

.w{
margin: 20px;
}

.modal-body{
overflow-y: hidden;
height: 100%;
max-height:600px;
}

</style>
</head>

<body>

<div class="modal fade" id="myModal1" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"> x </button>
<h5> Sign-Up </h5>
</div>
<div class="modal-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" class="form-horizontal">

 <?php
   if ( isset($errMSGe) ) {
if($errType== "success")
{
     echo $errMSGe; 
}
else if($errType== "danger")
{
     echo $errMSGe;
}
}
    ?>

  
<div class=form-group>
<label class="control-label col-sm-2" for="aaa"> Name: </label>
<div class="col-sm-4">
<input type="name" name="name" class="form-control" id="aaa" placeholder="enter name" value="<?php echo $name ?>" />
</div>
</div>
<?php echo $nameError;?>


<div class=form-group>
<label class="control-label col-sm-2" for="bbb"> Email: </label>
<div class="col-sm-4">
<input type="email" name="email"  class="form-control" id="bbb" placeholder="enter email" value="<?php echo $email ?>" />
</div>
</div>
<?php echo $emailError; ?>


<div class=form-group>
<label class="control-label col-sm-2" for="ccc"> Password: </label>
<div class="col-sm-4">
<input type= "password" name="pass" class="form-control" id="ccc" placeholder="enter password" value="<?php echo $pass ?>" /> 
</div>
</div>
<?php echo $passError;?>

<div class=form-group>
<div class="col-sm-offset-2 col-sm-10">
<div class="checkbox">
<label> <input type="checkbox"> Remember me </label>
</div>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-4">
<input type="submit" class="btn btn-block btn-primary" name="btn_add" value="Sign-Up"/>
</div>
</div> 

<div class="col-sm-10">
<a href="login.php" class="btn btn-info" role="button">Go back to login</a>
</div>
</form>



</div>
</div>
</div>

</body>
</html>
<?php ob_end_flush(); ?>