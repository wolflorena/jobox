<?php
session_start();
error_reporting(0);
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

 // for  password change
if(isset($_POST['Submit']))
{
$oldpassword=md5($_POST['oldpass']);
$sql=mysqli_query($con,"SELECT password FROM admin where password='$oldpassword'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$adminid=$_SESSION['id'];
$newpass=md5($_POST['newpass']);
 $ret=mysqli_query($con,"update admin set password='$newpass' where id='$adminid'");
$_SESSION['msg']="Parola schimbata cu succes.";
//header('location:user.php');
}
else
{
$_SESSION['msg']="Parola veche este gresita.";
}
}
?>
<script language="javascript" type="text/javascript">
function valid()
{
if(document.form1.oldpass.value=="")
{
alert(" Campul parolei vechi este necompletat.");
document.form1.oldpass.focus();
return false;
}
else if(document.form1.newpass.value=="")
{
alert(" Campul parolei noi este necompletat.");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value=="")
{
alert(" Campul confirmarii parolei este necompletat.");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value.length<6)
{
alert(" Campul parolei trebuie sa fie de minim 6 caractere.");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value.length<6)
{
alert(" Confirmarea noii parole este mai mica de 6 caractere.");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value!= document.form1.confirmpassword.value)
{
alert("Parolele introduse nu corespund.");
document.form1.newpass.focus();
return false;
}
return true;
}
</script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Change Password</title>
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
          	<h3><i class="fa fa-angle-right"></i> Change Password </h3>
				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                           <form class="form-horizontal style-form" name="form1" method="post" action="" onSubmit="return valid();">
                           <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Old Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="oldpass" value="" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">New Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="newpass" value="" >
                              </div>
                          </div>

                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Confirm Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="confirmpassword" value="" >
                              </div>
                          </div>
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Change" class="btn btn-theme"></div>
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
<?php } ?>
