<?php
session_start();
include'dbconnection.php';
// checking session is valid for not
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from admin where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Admins</title>
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
            <a href="#" class="logo"><b>Jobox admin management</b></a>
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
                      <a href="change-motto.php" >
                          <i class="fa fa-first"></i>
                          <span>Change Motto</span>
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
          	<h3><i class="fa fa-angle-right"></i> Manage Administrators</h3>
				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Administrator's Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th class="hidden-phone">Username</th>
                                  <th> Password</th>
                                  <th> Options</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from admin");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['username'];?></td>
                                  <td><?php echo $row['password'];?></td>
                                  <td>

                                     <a href="update-admins.php?uid=<?php echo $row['id'];?>">
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="manage-admins.php?id=<?php echo $row['id'];?>">
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>

                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
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
