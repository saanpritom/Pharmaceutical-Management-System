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
  <title>MPO</title>
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
      <span class="logo-lg">MPO</span>
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
              <img src="database_images/mpo_images/<?php echo $sm_id ?>.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
			  <?php 
				$query = "SELECT first_name, last_name FROM mpo_details WHERE mpo_id='$sm_id'";
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
                <img src="database_images/mpo_images/<?php echo $sm_id ?>.jpg" class="img-circle" alt="User Image">

                <p>
					<?php
						$query = "SELECT designation, company_name FROM mpo_details WHERE mpo_id='$sm_id'";
						$result=mysql_query($query,$dbs);
						while($row=mysql_fetch_array($result)){
							echo $row['designation'];
							?>
							<small><?php echo $row['company_name']; ?></small>
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
          <img src="database_images/mpo_images/<?php echo $sm_id ?>.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">ADMIN NAVIGATION</li>
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<li><a href="sales_manager.php"><i class="fa fa-user"></i> <span>Sales Manager Info</span></a></li>
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
		<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-person-add"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Customers</span>
              <span class="info-box-number">
				<?php
					
					$query="SELECT COUNT(cus_id) AS t_id FROM mpo_customer_relation WHERE mpo_id='$sm_id' and status='2'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						echo $row['t_id'];
					}
					
					
				?>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-orange"><i class="ion ion-cube"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Product Order</span>
              <span class="info-box-number">
				<?php
					
					$query="SELECT COUNT(order_id) AS o_id FROM order_relation WHERE mpo_id='$sm_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						echo $row['o_id'];
					}
					
					
				?>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-cash"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Transactions</span>
              <span class="info-box-number">
				<?php
					
				$query="SELECT SUM(bill_status.total_bill) AS t_bill FROM bill_status INNER JOIN order_relation ON bill_status.order_id=order_relation.order_id WHERE order_relation.mpo_id='$sm_id'";
				$result=mysql_query($query,$dbs);
				while($row=mysql_fetch_array($result)){
					echo $row['t_bill'];
				}
					
					
				?>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-arrow-graph-down-right"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Dew Money</span>
              <span class="info-box-number">
				<?php
					
					$query="SELECT SUM(bill_status.total_bill) AS t_bill FROM bill_status INNER JOIN order_relation ON bill_status.order_id=order_relation.order_id WHERE order_relation.mpo_id='$sm_id' and bill_status.pay_status='0'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						if($row['t_bill']!=null){
							echo $row['t_bill'];
						
						}else{
							echo 'No Dew Pending';
						}
						
					}
					
					
				?>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		</div><br><br>
		<div class="row">
		<div class="col-md-12">
		<h2>Pharmasist Summary</h2>
		<hr>
			<div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Top Pharmasist</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <?php
					$query="SELECT mpo_customer_relation.cus_id, COUNT(order_relation.order_id) AS o_id FROM mpo_customer_relation
							INNER JOIN order_relation ON mpo_customer_relation.cus_id=order_relation.cus_id
							WHERE mpo_customer_relation.status='2' and mpo_customer_relation.mpo_id='$sm_id' GROUP BY mpo_customer_relation.cus_id ORDER BY o_id DESC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$cus_id = $row['cus_id'];
						break;
					}
					
					$query="SELECT customer_details.first_name, customer_details.last_name, COUNT(order_relation.order_id) AS t_id FROM customer_details INNER JOIN order_relation ON
							customer_details.cus_id=order_relation.cus_id WHERE customer_details.cus_id='$cus_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						?>
						<div class="col-md-6">
							<img src="../customers/database_images/mpo_images/<?php echo $cus_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="customer_details.php?cs_id=<?php echo $cus_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
							<strong>Total Order: </strong><?php echo $row['t_id']; ?>
						</div>
						<?php
					}
				?>
                
              </div>
            </div>
          </div>
		  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lowest Pharmasist</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                            <div class="row">
                <?php
					$query="SELECT mpo_customer_relation.cus_id, COUNT(order_relation.order_id) AS o_id FROM mpo_customer_relation
							INNER JOIN order_relation ON mpo_customer_relation.cus_id=order_relation.cus_id
							WHERE mpo_customer_relation.status='2' and mpo_customer_relation.mpo_id='$sm_id' GROUP BY mpo_customer_relation.cus_id ORDER BY o_id ASC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$cus_id = $row['cus_id'];
						break;
					}
					
					$query="SELECT customer_details.first_name, customer_details.last_name, COUNT(order_relation.order_id) AS t_id FROM customer_details INNER JOIN order_relation ON
							customer_details.cus_id=order_relation.cus_id WHERE customer_details.cus_id='$cus_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						?>
						<div class="col-md-6">
							<img src="../customers/database_images/mpo_images/<?php echo $cus_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="customer_details.php?cs_id=<?php echo $cus_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
							<strong>Total Order: </strong><?php echo $row['t_id']; ?>
						</div>
						<?php
					}
				?>
                
              </div>
            </div>
          </div>
		  </div>
		  <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pharmasist with most Dew</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <?php
					$m_id=0;
					$query="SELECT order_relation.cus_id, COUNT(order_relation.cus_id) AS m_id FROM order_relation INNER JOIN bill_status ON order_relation.order_id=bill_status.order_id 
							WHERE bill_status.pay_status='0' and order_relation.mpo_id='$sm_id' GROUP BY order_relation.cus_id ORDER BY m_id DESC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$m_id = $row['cus_id'];
						break;
					}
					if($m_id!=0){
						$query="SELECT customer_details.first_name, customer_details.last_name, SUM(bill_status.total_bill) AS t_bill FROM customer_details INNER JOIN order_relation ON
							customer_details.cus_id=order_relation.cus_id INNER JOIN bill_status ON bill_status.order_id=order_relation.order_id WHERE order_relation.cus_id='$m_id' and bill_status.pay_status='0'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						if($row['first_name']!=null){
							?>
						<div class="col-md-6">
							<img src="../customers/database_images/mpo_images/<?php echo $m_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="customer_details.php?cs_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
							<strong>Total Dew Bill: </strong><?php echo $row['t_bill']; ?>
						</div>
						<?php
						}else{
							?>
							<div class="col-md-10">
							<div class="alert alert-success">
								<strong>WOW!</strong> No one has dew in the market.
							</div></div>
							<?php
						}
						
						}
					}
					else{
						?>
							<div class="col-md-10">
							<div class="alert alert-success">
								<strong>WOW!</strong> No one has dew in the market.
							</div></div>
							<?php
					}
					
				?>
                
              </div>
            </div>
          </div>
		  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pharmasist with lowest Sale</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <?php
					$query="SELECT cus_id, COUNT(cus_id) AS m_id FROM order_relation WHERE mpo_id='$sm_id' GROUP BY cus_id ORDER BY m_id ASC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$m_id = $row['cus_id'];
						break;
					}
					
					$query="SELECT customer_details.first_name, customer_details.last_name, SUM(bill_status.total_bill) AS t_bill FROM customer_details INNER JOIN order_relation ON
							customer_details.cus_id=order_relation.cus_id INNER JOIN bill_status ON bill_status.order_id=order_relation.order_id WHERE order_relation.cus_id='$m_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						if($row['first_name']!=null){
							?>
						<div class="col-md-6">
							<img src="../customers/database_images/mpo_images/<?php echo $m_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="customer_details.php?cs_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
							<strong>Total Transactions: </strong><?php echo $row['t_bill']; ?>
						</div>
						<?php
						}else{
							?>
							<div class="col-md-10">
							<div class="alert alert-success">
								<strong>WOW!</strong> No one is there.
							</div></div>
							<?php
						}
						
					}
				?>
                
              </div>
            </div>
			<div class="box-footer">
			</div>
          </div>
		  </div>
        </div>
		</div>
		<div class="row">
			<div class="col-md-12">
		<h2>Product Summary</h2>
		<hr>
			<div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Top Product</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <?php
					$query="SELECT order_relation.product_id, COUNT(order_relation.product_id) AS p_id FROM order_relation
							WHERE order_relation.mpo_id='$sm_id' GROUP BY order_relation.product_id ORDER BY p_id DESC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$p_id = $row['product_id'];
						break;
					}
					
					$query="SELECT product_description.business_name, COUNT(order_relation.order_id) AS t_id FROM product_description INNER JOIN order_relation ON
							product_description.product_id=order_relation.product_id WHERE product_description.product_id='$p_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						?>
						<div class="col-md-6">
							<img src="../sales_manager/database_images/product_images/<?php echo $p_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="pro_ava.php?pro_id=<?php echo $p_id; ?>"><?php echo $row['business_name'];?></a><br>
							<strong>Total Order: </strong><?php echo $row['t_id']; ?>
						</div>
						<?php
					}
				?>
                
              </div>
            </div>
          </div>
		  
		  </div>
		  <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lowest Product</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <?php
					$query="SELECT order_relation.product_id, COUNT(order_relation.product_id) AS p_id FROM order_relation
							WHERE order_relation.mpo_id='$sm_id' GROUP BY order_relation.product_id ORDER BY p_id ASC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$p_id = $row['product_id'];
						break;
					}
					
					$query="SELECT product_description.business_name, COUNT(order_relation.order_id) AS t_id FROM product_description INNER JOIN order_relation ON
							product_description.product_id=order_relation.product_id WHERE product_description.product_id='$p_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						?>
						<div class="col-md-6">
							<img src="../sales_manager/database_images/product_images/<?php echo $p_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="pro_ava.php?pro_id=<?php echo $p_id; ?>"><?php echo $row['business_name'];?></a><br>
							<strong>Total Order: </strong><?php echo $row['t_id']; ?>
						</div>
						<?php
					}
				?>
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
