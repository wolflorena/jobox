<?php session_start();
require_once('dbconnection.php');
$sql = "SELECT * FROM users";
$ret=mysqli_query($con,"select * from motto");

$query = mysqli_query($con,$sql);
$row=mysqli_fetch_array($ret);

$number=mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>JOBOX | Your career starts here.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/pngstock.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta http-equiv="X-UA-Compatible"content="ie-edge">
</head>

<body class="index-body">


<!-- CHILD 1 -->
<div class="index-div" id="child1">
  <img src="images/white-logo.png" class="logo-white"></img>
  <svg width="425" height="113" viewBox="0 0 425 113" fill="none" xmlns="http://www.w3.org/2000/svg" id="logo">
    <path d="M13.4401 85.8317C16.2241 90.0557 19.3441 93.1757 22.8001 95.1917C26.2561 97.2077 29.8081 98.2157 33.4561 98.2157C40.2721 98.2157 45.2161 96.4397 48.2881 92.8877C51.4561 89.2397 53.0401 83.5277 53.0401 75.7517V22.4717H13.4401V12.3917H64.9921V76.7597C64.9921 81.1757 64.4641 85.3517 63.4081 89.2877C62.3521 93.1277 60.5761 96.4877 58.0801 99.3677C55.6801 102.248 52.4641 104.552 48.4321 106.28C44.4961 107.912 39.6001 108.728 33.7441 108.728C28.3681 108.728 23.1361 107.48 18.0481 104.984C13.0561 102.488 8.92806 98.5037 5.66406 93.0317L13.4401 85.8317Z" stroke="white" stroke-width="8"/>
    <path d="M88.9838 72.1517C88.9838 66.2957 89.8958 61.1117 91.7198 56.5997C93.6398 51.9917 96.1838 48.1037 99.3518 44.9357C102.52 41.7677 106.168 39.3677 110.296 37.7357C114.52 36.1037 118.936 35.2877 123.544 35.2877C128.152 35.2877 132.52 36.1037 136.648 37.7357C140.872 39.3677 144.568 41.7677 147.736 44.9357C150.904 48.1037 153.4 51.9917 155.224 56.5997C157.144 61.1117 158.104 66.2957 158.104 72.1517C158.104 77.9117 157.144 83.0957 155.224 87.7037C153.4 92.2157 150.904 96.0557 147.736 99.2237C144.568 102.296 140.872 104.648 136.648 106.28C132.52 107.912 128.152 108.728 123.544 108.728C118.936 108.728 114.52 107.912 110.296 106.28C106.168 104.648 102.52 102.296 99.3518 99.2237C96.1838 96.0557 93.6398 92.2157 91.7198 87.7037C89.8958 83.0957 88.9838 77.9117 88.9838 72.1517ZM101.224 72.1517C101.224 76.1837 101.752 79.8317 102.808 83.0957C103.864 86.3597 105.352 89.1917 107.272 91.5917C109.288 93.8957 111.64 95.7197 114.328 97.0637C117.112 98.3117 120.184 98.9357 123.544 98.9357C126.904 98.9357 129.928 98.3117 132.616 97.0637C135.4 95.7197 137.752 93.8957 139.672 91.5917C141.688 89.1917 143.224 86.3597 144.28 83.0957C145.336 79.8317 145.864 76.1837 145.864 72.1517C145.864 68.1197 145.336 64.4717 144.28 61.2077C143.224 57.8477 141.688 54.9677 139.672 52.5677C137.752 50.1677 135.4 48.3437 132.616 47.0957C129.928 45.7517 126.904 45.0797 123.544 45.0797C120.184 45.0797 117.112 45.7517 114.328 47.0957C111.64 48.3437 109.288 50.1677 107.272 52.5677C105.352 54.9677 103.864 57.8477 102.808 61.2077C101.752 64.4717 101.224 68.1197 101.224 72.1517Z" stroke="white" stroke-width="8" />
    <path d="M180.08 4.47168H191.888V32.4077L191.6 45.9437C194.96 42.6797 198.704 40.0877 202.832 38.1677C207.056 36.2477 211.232 35.2877 215.36 35.2877C220.064 35.2877 224.24 36.1517 227.888 37.8797C231.536 39.5117 234.56 41.9117 236.96 45.0797C239.456 48.1517 241.328 51.8957 242.576 56.3117C243.824 60.6317 244.448 65.4797 244.448 70.8557C244.448 76.8077 243.584 82.1357 241.856 86.8397C240.128 91.5437 237.776 95.5277 234.8 98.7917C231.92 102.056 228.56 104.552 224.72 106.28C220.88 107.912 216.896 108.728 212.768 108.728C209.408 108.728 205.76 107.912 201.824 106.28C197.984 104.552 194.384 102.2 191.024 99.2237H190.592L189.584 107H180.08V4.47168ZM191.888 90.5837C195.248 93.5597 198.608 95.6717 201.968 96.9197C205.424 98.1677 208.4 98.7917 210.896 98.7917C213.968 98.7917 216.8 98.1677 219.392 96.9197C221.984 95.5757 224.24 93.7517 226.16 91.4477C228.08 89.0477 229.568 86.1197 230.624 82.6637C231.68 79.2077 232.208 75.3197 232.208 70.9997C232.208 67.1597 231.824 63.6557 231.056 60.4877C230.288 57.3197 229.088 54.6317 227.456 52.4237C225.92 50.1197 223.904 48.3437 221.408 47.0957C218.912 45.8477 215.936 45.2237 212.48 45.2237C209.408 45.2237 206.096 46.0877 202.544 47.8157C199.088 49.4477 195.536 52.0877 191.888 55.7357V90.5837Z" stroke="white" stroke-width="8" />
    <path d="M261.671 72.1517C261.671 66.2957 262.583 61.1117 264.407 56.5997C266.327 51.9917 268.871 48.1037 272.039 44.9357C275.207 41.7677 278.855 39.3677 282.983 37.7357C287.207 36.1037 291.623 35.2877 296.231 35.2877C300.839 35.2877 305.207 36.1037 309.335 37.7357C313.559 39.3677 317.255 41.7677 320.423 44.9357C323.591 48.1037 326.087 51.9917 327.911 56.5997C329.831 61.1117 330.791 66.2957 330.791 72.1517C330.791 77.9117 329.831 83.0957 327.911 87.7037C326.087 92.2157 323.591 96.0557 320.423 99.2237C317.255 102.296 313.559 104.648 309.335 106.28C305.207 107.912 300.839 108.728 296.231 108.728C291.623 108.728 287.207 107.912 282.983 106.28C278.855 104.648 275.207 102.296 272.039 99.2237C268.871 96.0557 266.327 92.2157 264.407 87.7037C262.583 83.0957 261.671 77.9117 261.671 72.1517ZM273.911 72.1517C273.911 76.1837 274.439 79.8317 275.495 83.0957C276.551 86.3597 278.039 89.1917 279.959 91.5917C281.975 93.8957 284.327 95.7197 287.015 97.0637C289.799 98.3117 292.871 98.9357 296.231 98.9357C299.591 98.9357 302.615 98.3117 305.303 97.0637C308.087 95.7197 310.439 93.8957 312.359 91.5917C314.375 89.1917 315.911 86.3597 316.967 83.0957C318.023 79.8317 318.551 76.1837 318.551 72.1517C318.551 68.1197 318.023 64.4717 316.967 61.2077C315.911 57.8477 314.375 54.9677 312.359 52.5677C310.439 50.1677 308.087 48.3437 305.303 47.0957C302.615 45.7517 299.591 45.0797 296.231 45.0797C292.871 45.0797 289.799 45.7517 287.015 47.0957C284.327 48.3437 281.975 50.1677 279.959 52.5677C278.039 54.9677 276.551 57.8477 275.495 61.2077C274.439 64.4717 273.911 68.1197 273.911 72.1517Z" stroke="white" stroke-width="8" />
    <path d="M375.231 70.7117L350.607 37.0157H363.711L374.799 52.4237C376.047 54.3437 377.343 56.3117 378.687 58.3277C380.127 60.3437 381.567 62.3117 383.007 64.2317H383.583C384.927 62.3117 386.271 60.2957 387.615 58.1837C388.959 56.0717 390.255 54.0557 391.503 52.1357L402.015 37.0157H414.543L389.631 71.7197L416.415 107H403.455L391.215 90.8717C389.775 88.8557 388.239 86.7437 386.607 84.5357C385.071 82.3277 383.535 80.2157 381.999 78.1997H381.423C379.983 80.3117 378.543 82.4237 377.103 84.5357C375.663 86.5517 374.223 88.6637 372.783 90.8717L361.263 107H348.591L375.231 70.7117Z" stroke="white" stroke-width="8" />
  </svg>
  <p class="motto"><?php echo $row['mottom'];?></p>
  <div >
    <input type="button" name="" value="EXPLORE" class="btn btn-theme" id="button-index">
  </div>
</div>


<!-- CHILD 2 -->
<div class="row no-gutters" class="index-div" id="child2">
  <div class="col-md-6 no-gutters">
    <div class="left-child2 d-flex justify-content-center align-items-center">
      <center>
      <h1 class="subtitle2">JOIN US</h1>
      <p class="text2">
        <br><br>There are already <b style="color:#86c232"><?php echo($number); ?></b> freelancers regsitered.<br><br><br>&nbsp;&nbsp;&nbsp;Searching for a reason about why you should try <b style="color:#86c232">JOBOX</b>? Maybe you have seen a lot of similar platforms while you were in search for a new job that comes with new opportunities, but we promise, this one will not gonna be a waste of time. Thousands of companies and fresh freelancers posts daily their annoucements about theirs services. Try it.
      </p>
      </center>
    </div>
  </div>
  <div class="col-md-6 -gutters">
    <div class="right-child2 d-flex justify-content-center align-items-center">
        <center>
          <img src="images/child2.svg" class="illustration2">
            <div style="margin-left:35px;">
                <input type="submit" name="" value="SIGN UP" onclick="window.location='signup.php'" class="btn btn-theme" id="button2">
            </div>
            <a href="login.php" class="already-index">Already registered? Log in quickly.</a>
        </center>
    </div>
 </div>
</div>


<!-- CHILD 3 -->
<div class="index-div" id="child3">
  <center>
  <h1 class="title3">MEET US</h1>
  <div class="card">
      <img src="images/div3-male.svg">
        <h1> Iulian Trif </h1>
        <h3> {Backend} </h3>
  </div>
  <div class="card">
      <img src="images/div3-female.svg" >
        <h1> Lorena Wolf </h1>
        <h3> {Frontend}</h3>
  </div>
  </center>
</div>


<!-- CHILD 4 -->
<div class="row no-gutters" class="index-div" id="child4">
  <div class="col-md-7 no-gutters">
    <div class="left-child4 d-flex justify-content-center align-items-center">
        <center>
        <h1 class="subtitle4">
          <span class="text-wrapper">
           <span class="letter">anytime, anywhere.</span>
         </span>
       </h1>
        <p class="text4"><br><br>&nbsp;&nbsp; Install our app and never be out of the loop on our services and the available job offers. We’ll pop you a message whenever we have something amazing to share with you. It’s completely free and no obligation. <br>&nbsp;&nbsp;Stay tunned for more updates and promotions by our developers.<br><br><br>With thanks, <b style="color:#222629">Jobox </b>Team.</p>
        <img src="images/download.png" class="download-img"></img>
      </center>
    </div>
  </div>
  <div class="col-md-5 no=gutters">
    <div class="right-child4 d-flex justify-content-center align-items-center">
      <img src="images/PHONE.png" class="phone-index"></img>
  </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>
