<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }

 
 $error = false;
 
 if( isset($_POST['login_submit']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Enter your email";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Enter your password";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysql_query("SELECT userId, userName, userPass FROM people WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if( $count == 1 && $row['userPass']==$pass ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: index.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again!";
   }
    
  }
  
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ootd-obsessed</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
    .bs-example{
    	margin: 10px 5px;
    }

body{
background: url('images/style-fasion-beauty-at-ootd-obsessed.jpg'); 
background-size: cover;
-moz-background-size:  cover;
}


h4{
margin: 50px 300px;
letter-spacing: 10px;
font-size: 30px;
color: #111;
}

div.transbox {
margin-top:170px;
margin-left:120px;
width: 80%;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.7;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox h4 {
  font-weight: bold;
  color: #000000;
}

div.transbox .form-group {
font-size: 16px;
  font-weight: 900;
  color: #111;
}

input[type=password] {
  border: solid 3px;
  font-weight: bold;
  color: #000000;
}

input[type=email] {
  border: solid 3px;
  font-weight: bold;
  color: #000000;
}

input[type=submit] {
  font-weight: bold;
font-size: 16px;
  color: #000000;
}

input[value=login] {  
font-weight: bold;
  color: #000000;
}

div.transbox a {
  font-weight: bold;
  color: #000000;
}

img{
float: right;
margin-right: 20px;
}

</style>
</head>

<body>
<div class="transbox">

<h4> Login </h4> 
<form id="form2" method="post" name="login" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
             <div class="alert alert-danger">
            <?php echo $errMSG; ?>
                </div>
                <?php
   }
   ?>
            
   
         
<div class=form-group>
<label class="control-label col-sm-2" for="fff"> Email: </label>
<div class="col-sm-4">
<input type="email" name="email"  class="form-control" id="fff" placeholder="enter email" value= "<?php echo $email ?>" />
</div>
</div>
<span class="text-danger"><?php echo $emailError; ?></span>

<div class=form-group>
<label class="control-label col-sm-2" for="jjj"> Password: </label>
<div class="col-sm-4">
<input type="password" name="pass"  class="form-control" id="jjj" placeholder="enter password" value="<?php echo $pass ?>"/>
</div>
</div>
<span class="text-danger"><?php echo $passError; ?></span>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-4">
<input type="submit" class="btn btn-block btn-primary" name="login_submit" value="Login"/>
</div>
</div>          
          
<div class=form-group>
<div class="col-sm-offset-2 col-sm-10">
<a href="signup.php" class="btn btn-info" role="button"> Sign-Up Here </a> <br> <br>
</div>
</div>        
        
</form>
</div>
</body>
</html>                                		