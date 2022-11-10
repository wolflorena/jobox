<?php
session_start();
include('dbconnection.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['email'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Nume de utilizator sau parola incorecte.');</script>";
$extra="register.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
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
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
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
							<form class="" action="" method="post">
							<h1> Login </h1>
							<div class="textbox">
								<i class="fas fa-user"></i>
								<input type="text" placeholder=" Email" name="email" value="" required>
							</div>
							<div class="textbox">
								<i class="fas fa-lock"></i>
								<input type="password" placeholder=" Password" name="password" value="" required>
							</div>
							<a href="signup.php" class="NEW"> You're new? Click here! </a>
							<center>
							<div style="margin-left:35px;">
							<input type="submit" name="login" value="SUBMIT" class="btn btn-theme" id="b3">
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
