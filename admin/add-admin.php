<?php
session_start();
error_reporting(0);
include'dbconnection.php';

if(isset($_POST['addadmin']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$msg=mysqli_query($con,"insert into admin(username,password) values('$username','$password')");
if($msg)
{
	echo "<script>alert('Administrator inregistrat cu succes.');</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Add Admin</title>
		<link rel="icon" href="assets/img/pngstock.png">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>JOBOX ADMIN MANAGEMENT</b></a>
            <div class="nav notify-row" id="top_menu">



                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/white-logo.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>

                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Freelancers</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="manage-admins.php" >
                          <i class="fa fa-table"></i>
                          <span>Manage Admins</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="add-admin.php" >
                          <i class="fa fa-plus"></i>
                          <span>Add admin</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-comment"></i>
                          <span>User's messages</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="guest-message.php" >
                          <i class="fa fa-comment"></i>
                          <span>Guest's messages</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-flag"></i>
                          <span>Bug reports</span>
                      </a>

                  </li>


                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-lock"></i>
                          <span>Privacy</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-gear"></i>
                          <span>Settings</span>
                      </a>

                  </li>


              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add administrator </h3>
				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="username" value="" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="password" value="" >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="addadmin" value="+ Add" class="btn btn-theme"></div>
                          </form>
                      </div>
                  </div>
              </div>
		</section>
      </section></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
