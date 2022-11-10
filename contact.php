<?php session_start();
require_once('dbconnection.php');

if(isset($_POST['send']))
{
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$msg=mysqli_query($con,"insert into gmessage(email,subject,message) values('$email','$subject','$message')");
if($msg)
{
	echo "<script>alert('Mesaj trimis cu succes.');</script>";
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>JOBOX | The way we can communicate.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/pngstock.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


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

  <div class="col-sm-4 no-gutters">
    <div class="graphic d-flex justify-content-center align-items-center">
      <center>
      <img src="images/contact_left.svg" class="img-left">
      </center>
    </div>
  </div>

  <div class="col-sm-4 no-gutters">
      <div class="graphic d-flex justify-content-center align-items-center">
      <center>
        <img src="images/send-message.png" class="img-center">
        <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:50px;"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="" placeholder="EMAIL"required>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:50px;"></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="subject" value="" placeholder="SUBJECT " required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:50px;" ></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="message" value="" placeholder=" TELL US YOUR MESSAGE" id="message-contact" required>
                              </div>
                            </div>
                            <div style="margin-left:35px;">
                            <input type="submit" name="send" value="SUBMIT" class="btn btn-theme" id="b2"></div>


                            </center>
          </form>
      </div>
  </div>
  <div class="col-sm-4 no-gutters">
      <div class="graphic d-flex justify-content-center align-items-center">
         <center>
         <img src="images/contact_right.svg" class="img-right">
        </center>
      </div>
  </div>
</div>




<div class="footer">
  <b id="footer-text">&copy; COPYRIGHT  2020</b>
</div>

</body>
</html>
