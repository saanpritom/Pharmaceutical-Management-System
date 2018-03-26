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
  <div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Products of the Company</li>
      </ol>
    </section>
	<!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						Add New Product
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Add a New Product</h4>
							</div>
							<div class="modal-body">
								<form name="productadd_form" action="product_add.php" method="POST" enctype="multipart/form-data">
									 <div class="form-group required">
										<label class="control-label" for="exampleInputFirstname">Business Name</label>
										<input name="business_name" type="text" class="form-control" id="exampleInputFirstname" placeholder="Business Name">
									 </div>
									 <div class="form-group required">
										<label class="control-label" for="exampleInputFirstname">Scientific Name</label>
										<input name="scientific_name" type="text" class="form-control" id="exampleInputFirstname" placeholder="Scientific Name">
									 </div>
									 <div class="form-group required">
										<label class="control-label" for="exampleInputFirstname">Product Type</label>
										<input name="product_type" type="text" class="form-control" id="exampleInputFirstname" placeholder="E.G: Syrup, Injection etc.">
									 </div>
									 <div class="form-group required">
										<label class="control-label" for="exampleInputFirstname">Batch Number</label>
										<input name="batch_number" type="text" class="form-control" id="exampleInputFirstname" placeholder="Batch Number">
									 </div>
									 <div class="form-group required">
										<label class="control-label" for="exampleInputFirstname">Price Per Unit</label>
										<input name="price" type="text" class="form-control" id="exampleInputFirstname" placeholder="Ex. 34">
									 </div>
									 <div class="form-group required">
										<label class="control-label" for="exampleInputFirstname">Product Image</label>
										<input name="feature_image" type="file" class="form-control" id="exampleInputFirstname" placeholder="Batch Number">
									 </div>
									 <div class="radio">
										<label><input type="radio" name="optradio" value="1">Make it Avialable</label>
									 </div>
									 <div class="radio">
										<label><input type="radio" name="optradio" value="2">Make it Unavailable</label>
									 </div>
									 <div class="form-group">
                                        <div class="col-sm-offset-0 col-sm-8">
                                            <input id="addproduct_button"  type="submit" class="btn btn-lg btn-primary" value="Add Product">
                                        </div>
                                    </div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><strong>Injections</strong></h3>
						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="row col-md-12">
							<div class="table">
								<table class="table table-responsive table-striped table-hover">
									<thead>
										<th>Sl. Num</th>
										<th>Image</th>
										<th>Business Name</th>
										<th>Scientific Name</th>
										<th>Product Type</th>
										<th>Batch Number</th>
									</thead>
									<tbody>
										<?php
											
											$query="SELECT ut_num FROM sm_details WHERE sm_id='$sm_id'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												$ut_num = $row['ut_num'];
											}
											$count=1;
											$query="SELECT product_description.product_id, product_description.business_name, product_description.scientific_name, product_description.batch_number FROM product_description
													INNER JOIN company_product ON product_description.product_id=company_product.product_id WHERE company_product.ut_num='$ut_num' and product_description.product_type='Injection'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												?>
												<tr>
													<td>
														<?php echo $count; ?>
													</td>
													<td>
														<img src="database_images/product_images/<?php echo $row['product_id']; ?>.jpg" width="60px" height="60px">
													</td>
													<td>
														<a href="pro_ava.php?pro_id=<?php echo $row['product_id']; ?>"><?php echo $row['business_name']; ?> </a>
													</td>
													<td>
														<?php echo $row['scientific_name']; ?>
													</td>
													<td>
														Injection
													</td>
													<td>
														<?php echo $row['batch_number']; ?>
													</td>
												</tr>
												<?php
												$count++;
											}
											
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><strong>Syrup</strong></h3>
						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="row col-md-12">
							<div class="table">
								<table class="table table-responsive table-striped table-hover">
									<thead>
										<th>Sl. Num</th>
										<th>Image</th>
										<th>Business Name</th>
										<th>Scientific Name</th>
										<th>Product Type</th>
										<th>Batch Number</th>
									</thead>
									<tbody>
										<?php
											
											$query="SELECT ut_num FROM sm_details WHERE sm_id='$sm_id'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												$ut_num = $row['ut_num'];
											}
											$count=1;
											$query="SELECT product_description.product_id, product_description.business_name, product_description.scientific_name, product_description.batch_number FROM product_description
													INNER JOIN company_product ON product_description.product_id=company_product.product_id WHERE company_product.ut_num='$ut_num' and product_description.product_type='Syrup'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												?>
												<tr>
													<td>
														<?php echo $count; ?>
													</td>
													<td>
														<img src="database_images/product_images/<?php echo $row['product_id']; ?>.jpg" width="60px" height="60px">
													</td>
													<td>
														<a href="pro_ava.php?pro_id=<?php echo $row['product_id']; ?>"><?php echo $row['business_name']; ?> </a>
													</td>
													<td>
														<?php echo $row['scientific_name']; ?>
													</td>
													<td>
														Syrup
													</td>
													<td>
														<?php echo $row['batch_number']; ?>
													</td>
												</tr>
												<?php
												$count++;
											}
											
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><strong>Tablet</strong></h3>
						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="row col-md-12">
							<div class="table">
								<table class="table table-responsive table-striped table-hover">
									<thead>
										<th>Sl. Num</th>
										<th>Image</th>
										<th>Business Name</th>
										<th>Scientific Name</th>
										<th>Product Type</th>
										<th>Batch Number</th>
									</thead>
									<tbody>
										<?php
											
											$query="SELECT ut_num FROM sm_details WHERE sm_id='$sm_id'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												$ut_num = $row['ut_num'];
											}
											$count=1;
											$query="SELECT product_description.product_id, product_description.business_name, product_description.scientific_name, product_description.batch_number FROM product_description
													INNER JOIN company_product ON product_description.product_id=company_product.product_id WHERE company_product.ut_num='$ut_num' and product_description.product_type='Tablet'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												?>
												<tr>
													<td>
														<?php echo $count; ?>
													</td>
													<td>
														<img src="database_images/product_images/<?php echo $row['product_id']; ?>.jpg" width="60px" height="60px">
													</td>
													<td>
														<a href="pro_ava.php?pro_id=<?php echo $row['product_id']; ?>"><?php echo $row['business_name']; ?> </a>
													</td>
													<td>
														<?php echo $row['scientific_name']; ?>
													</td>
													<td>
														Tablet
													</td>
													<td>
														<?php echo $row['batch_number']; ?>
													</td>
												</tr>
												<?php
												$count++;
											}
											
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><strong>Capsule</strong></h3>
						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="row col-md-12">
							<div class="table">
								<table class="table table-responsive table-striped table-hover">
									<thead>
										<th>Sl. Num</th>
										<th>Image</th>
										<th>Business Name</th>
										<th>Scientific Name</th>
										<th>Product Type</th>
										<th>Batch Number</th>
									</thead>
									<tbody>
										<?php
											
											$query="SELECT ut_num FROM sm_details WHERE sm_id='$sm_id'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												$ut_num = $row['ut_num'];
											}
											$count=1;
											$query="SELECT product_description.product_id, product_description.business_name, product_description.scientific_name, product_description.batch_number FROM product_description
													INNER JOIN company_product ON product_description.product_id=company_product.product_id WHERE company_product.ut_num='$ut_num' and product_description.product_type='Capsule'";
											$result=mysql_query($query,$dbs);
											while($row=mysql_fetch_array($result)){
												?>
												<tr>
													<td>
														<?php echo $count; ?>
													</td>
													<td>
														<img src="database_images/product_images/<?php echo $row['product_id']; ?>.jpg" width="60px" height="60px">
													</td>
													<td>
														<a href="pro_ava.php?pro_id=<?php echo $row['product_id']; ?>"><?php echo $row['business_name']; ?> </a>
													</td>
													<td>
														<?php echo $row['scientific_name']; ?>
													</td>
													<td>
														Capsule
													</td>
													<td>
														<?php echo $row['batch_number']; ?>
													</td>
												</tr>
												<?php
												$count++;
											}
											
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; 2015-2016 <a href="http://essorar.com" target="_blank">Essorar</a>.</strong> All rights
    reserved.
  </footer>
</div>
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
