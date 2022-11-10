<?php
error_reporting(0);
session_start();
require_once('dbconnection.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
} else{


/*if(isset($_POST['change_descript']))
  {
    $id = $_SESSION['id'];
  	$descript=$_POST['descript'];
  	$msg=mysqli_query($con,"update users set descript='$descript' where id='$id'");
  if($msg)
  {
  	$_SESSION['msg']="Profile Updated successfully";
  }
}*/

$id = $_SESSION['id'];
$ret=mysqli_query($con,"select * from users where id = '$id'");
$row=mysqli_fetch_array($ret);


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
        <a class="nav-link" href="logout.php"><?php echo $_SESSION['name']; ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">LOGOUT <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>


<center style="margin-top: 10%;">
<h1>WELCOME <?php echo $row['fname']; echo (" "); echo $row['lname'] ?></h1>
<h1>HERE IS YOUR ACCOUNT DETAILS :</h1>
<h1>EMAIL : <?php echo $row['email']; ?></h1>
<h1>PASSWORD : <?php echo $row['password']; ?></h1>
<h1>OCCUPATION : <?php echo $row['occupation']; ?></h1>
<h1>PHONE NUMBER : <?php echo $row['contactno']; ?></h1>
<h1>DESCRIPTION : <?php echo $row['descript']; ?></h1>
<h1>CV : <?php echo $row['cv']; ?></h1>
<h1>REGISTRATION DATE & HOUR : <?php echo $row['posting_date']; ?></h1>
</center>


<div class="footer">
  <b id="footer-text">&copy; COPYRIGHT  2020</b>
</div>

</body>
</html>
<?php } ?>
