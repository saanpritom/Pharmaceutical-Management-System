<!DOCTYPE html>
<?php

session_start();
$notification = $_SESSION["notifier"];
$sm_id = $_SESSION["id"];
require'../connectivity_database.php';
if($notification==1){

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sales Manager</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Sales Manager</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/<?php echo $sm_id ?>.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
			  <?php 
				$query = "SELECT first_name, last_name FROM sm_details WHERE sm_id='$sm_id'";
				$result=mysql_query($query,$dbs);
				while($row=mysql_fetch_array($result)){
					echo $row['first_name']; echo ' '; echo $row['last_name'];
				}
			  ?>
			  </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/<?php echo $sm_id ?>.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php
						$query = "SELECT designation, com_name FROM sm_details WHERE sm_id='$sm_id'";
						$result=mysql_query($query,$dbs);
						while($row=mysql_fetch_array($result)){
							echo $row['designation'];
							?>
							<small><?php echo $row['com_name']; ?></small>
							<?php
						}
					?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/<?php echo $sm_id ?>.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">ADMIN NAVIGATION</li>
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<li><a href="mpo_list.php"><i class="fa fa-user"></i> <span>MPO's List</span></a></li>
		<li><a href="customer_list.php"><i class="fa fa-user"></i> <span>Customer's List</span></a></li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-cart-plus"></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="all_products.php"><i class="fa fa-circle-o"></i>All Products</a></li>
            <li><a href="av_products.php"><i class="fa fa-circle-o"></i>Avialable Products</a></li>
			<li><a href="unav_products.php"><i class="fa fa-circle-o"></i>Unaialable Products</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i> <span>Product Orders</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="cur_ordered.php"><i class="fa fa-circle-o"></i>Currently Ordered</a></li>
            <li><a href="on_delivery.php"><i class="fa fa-circle-o"></i>Order On Delivery</a></li>
			<li><a href="delivered.php"><i class="fa fa-circle-o"></i>Delivered Orders</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Orders Payment</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="order_purchase.php"><i class="fa fa-circle-o"></i>Total Order Purchase</a></li>
            <li><a href="dew_money.php"><i class="fa fa-circle-o"></i>Dew Money</a></li>
			<li><a href="paid_money.php"><i class="fa fa-circle-o"></i>Paid Money</a></li>
          </ul>
        </li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Profile     
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
	  <div class="col-md-3">
		<a href="edit_profile.php" type="button" class="btn btn-block btn-success btn-lg">Edit Profile</a>
		</div>
	  </div><br>
	  <div class="row">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><strong>Profile Information</strong></h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div><!-- /.box-header -->
			<?php
				$query="SELECT first_name, last_name, com_name, ut_num, com_address, city, state, zip, country, tel_numb, designation, webs FROM sm_details WHERE sm_id='$sm_id'";
				$result=mysql_query($query,$dbs);
				while($row=mysql_fetch_array($result)){
					$first_name = $row['first_name'];
					$last_name = $row['last_name'];
					$com_name = $row['com_name'];
					$ut_num = $row['ut_num'];
					$com_address = $row['com_address'];
					$city = $row['city'];
					$state = $row['state'];
					$zip = $row['zip'];
					$county = $row['country'];
					$tel_numb = $row['tel_numb'];
					$designation = $row['designation'];
					$webs = $row['webs'];
				}
			?>
			<div class="box-body no-padding">
				<br><br><br>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<strong>Profile Picture</strong>
						</div>
						<div class="col-md-6">
							<img src="images/<?php echo $sm_id ?>.jpg" width="20%" height="auto" alt="user_image" class="img-thumbnail">
						</div>
					</div><br>
					<div class="row">
						<div class="col-md-6">
							<strong>First Name</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $first_name; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Last Name</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $last_name; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Company Name</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $com_name; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Company UT Number</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $ut_num; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Company Address</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $com_address; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>City</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $city; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>State</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $state; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Zip Code</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $zip; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Country</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $county; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Designation</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $designation; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Tel Number</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $tel_numb; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Website</strong>
						</div>
						<div class="col-md-6">
							<p><strong><a target="_blank" href="http://<?php echo $webs; ?>"><?php echo $webs; ?></a></strong></p>
						</div>
					</div>
					<hr>
					<?php
						$query = "SELECT username, email FROM sm_login WHERE sm_id='$sm_id'";
						$result=mysql_query($query,$dbs);
						while($row=mysql_fetch_array($result)){
							$username = $row['username'];
							$email = $row['email'];
						}
					?>
					<div class="row">
						<div class="col-md-6">
							<strong>Username</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $username; ?></strong></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<strong>Email</strong>
						</div>
						<div class="col-md-6">
							<p><strong><?php echo $email; ?></strong></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; 2015-2016 <a href="http://essorar.com" target="_blank">Essorar</a>.</strong> All rights
    reserved.
  </footer>

  

</div>
<!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php 
}
else{
	header( "Location: signout.php" );
}
?>
