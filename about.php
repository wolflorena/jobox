<?php session_start();
require_once('dbconnection.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>JOBOX | Everything about this platform.</title>
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
  <div class="col-md-6 no-gutters">
      <div class="left-about d-flex justify-content-center align-items-center">
        <img src="images/about.svg" class="img-about">

      </div>
  </div>
  <div class="col-md-6 no-gutters">
      <div class="right-about d-flex justify-content-center align-items-center">

     <p class="info-about">&emsp;&emsp;&emsp;Lorem ipsum dolor sit amet, elitr soleat laoreet sit eu, minim detracto ius ne. Usu ad duis placerat accusamus, munere doctus eripuit in mei, id eam definiebas assueverit. In tollit dicunt principes quo, doming splendide intellegebat ea est. Quo congue deserunt interesset no, usu ad case legere discere, nam an volumus qualisque.

Mea ad aeque labitur recusabo. Eum ei dolore audire, at nec oportere voluptatum dissentias, iudicabit omittantur ut sea. Ut forensibus scribentur instructior vix, invidunt assueverit eam cu. Et alii sanctus concludaturque vis, his iisque inimicus elaboraret te. Mel minimum petentium ut.

Mazim scripserit et vix, et audire ornatus corrumpit est. Mei ut minimum adipisci tincidunt, mea nonumy dolorem graecis in. Affert latine malorum ex vim.
</p>



      </div>
  </div>
</div>




<div class="footer">
  <b id="footer-text">&copy; COPYRIGHT  2020</b>
</div>

</body>
</html>
