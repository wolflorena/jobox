<?php session_start();
error_reporting(0);
require_once('dbconnection.php');

if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
    $password=$_POST['password'];
    $occupation=$_POST['occupation'];
	$contact=$_POST['contactno'];
	$enc_password=$password;
	$msg=mysqli_query($con,"insert into users(fname,lname,email,password,occupation,contactno,descript,cv) values('$fname','$lname','$email','$enc_password','$occupation','$contact','Modify the description','Add your CV')");
if($msg)
{
	$_SESSION['msg']="Account successfully registered. You can log in now.";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>JOBOX | Register to our platform.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/pngstock.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/7e68aa4284.js" crossorigin="anonymous"></script>

</head>


<body style="background-color:white">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-menu">
  <a class="navbar-brand" href="index.php">
	  <img src="images/white-logo.png" style="width:75px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
    <ul class="navbar-nav mr-auto mt-2 mt-lg-2">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT</a>
    </li>
    <li class="nav-item" id="rightest-2">
        <a class="nav-link" id="rightest-a2" href="login.php">LOG IN</a>
	  </li>
	  <li class="nav-item" id="rightest">
        <a class="nav-link" id="rightest-a" href="signup.php">SIGN UP</a>
    </li>
    </ul>
  </div>
</nav>




<div class="row no-gutters">
  <div class="col-md-12 no-gutters">
      <div class="graphic d-flex justify-content-center align-items-center" id="login-bg">
				<div class="login-box">
					<p align="center" style="color:green;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']=""; ?></p>
					<form class="" action="" method="post">
						<h1> Signup </h1>
						<div class="textbox">
							<i class="fas fa-user"></i>
							<input type="text" placeholder=" First Name" name="fname" value="" required>
						</div>
						<div class="textbox">
							<i class="fas fa-user"></i>
							<input type="text" placeholder=" Last Name" name="lname" value="" required>
						</div>
						<div class="textbox">
							<i class="fas fa-envelope"></i>
							<input type="text" placeholder=" Email" name="email" value="" required>
						</div>
						<div class="textbox">
							<i class="fas fa-lock"></i>
							<input type="password" placeholder=" Password" name="password" value="" required>
						</div>
						<div class="textbox">
							<i class="fas fa-suitcase"></i>
							<input type="text" placeholder=" Occupation" name="occupation" value="" required>
						</div>
						<div class="textbox">
							<i class="fas fa-phone"></i>
							<input type="text" placeholder=" Phone" name="contactno" value="" required>
						</div>
						<br><br>
						<input type="checkbox" id="1st" name="1st" value="true" required>
						<label for="1st">I've read and I agree the <a href="" class="NEW"> terms and conditions</a> </label><br>
						<a href="login.php" class="NEW"> You have already an account? Click here! </a>
						<center>
						<div style="margin-left:35px;">
						<input type="submit" name="signup" value="SUBMIT" class="btn btn-theme" id="b3">
						</div>
					</center>
				</form>
				</div>
      </div>
  </div>

</div>




<div class="footer">
  <b id="footer-text">&copy; COPYRIGHT  2020</b>
</div>

</body>
</html>
