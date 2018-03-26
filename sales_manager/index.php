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
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-person-add"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total MPO</span>
              <span class="info-box-number">
				<?php
					
					$query="SELECT ut_num FROM sm_details WHERE sm_id='$sm_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$ut_num=$row['ut_num'];
					}
					
					$query="SELECT COUNT(mpo_id) AS t_mpo FROM mpo_details WHERE ut_number='$ut_num'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						echo $row['t_mpo'];
					}
					
					
				?>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-person-stalker"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Customers</span>
              <span class="info-box-number">
				<?php
				
					$query="SELECT COUNT(cus_id) AS c_id FROM mpo_customer_relation INNER JOIN mpo_details ON mpo_customer_relation.mpo_id=mpo_details.mpo_id WHERE mpo_details.ut_number='$ut_num'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						echo $row['c_id'];
					}
					
				?>
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Sales</span>
              <span class="info-box-number">
			  
			  <?php
			  
			  $query="SELECT SUM(bill_status.total_bill) AS t_bill FROM bill_status INNER JOIN order_relation ON bill_status.order_id=order_relation.order_id WHERE order_relation.ut_number='$ut_num'";
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
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-medkit"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Products</span>
              <span class="info-box-number">
			  
			  <?php
			  
			  $query="SELECT COUNT(product_id) AS p_id FROM company_product WHERE ut_num='$ut_num'";
			  $result=mysql_query($query,$dbs);
			  while($row=mysql_fetch_array($result)){
				  echo $row['p_id'];
			  }
			  
			  ?>
			  
			  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  
      <div class="row">
        <div class="col-md-12">
		<h2>Medical Promotion Officers</h2>
		<hr>
			<div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MPO with higest Pharmasist</h3>

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
					$query="SELECT mpo_id, COUNT(mpo_id) AS m_id FROM mpo_customer_relation WHERE status='2' GROUP BY mpo_id ORDER BY m_id DESC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$m_id = $row['mpo_id'];
						break;
					}
					
					$query="SELECT mpo_details.first_name, mpo_details.last_name, COUNT(mpo_customer_relation.cus_id) AS t_id FROM mpo_details INNER JOIN mpo_customer_relation ON
							mpo_details.mpo_id=mpo_customer_relation.mpo_id WHERE mpo_customer_relation.mpo_id='$m_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						?>
						<div class="col-md-6">
							<img src="../mpo/database_images/mpo_images/<?php echo $m_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="mpo_details.php?mpo_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
							<strong>Pharmasist Number: </strong><?php echo $row['t_id']; ?>
						</div>
						<?php
					}
				?>
                
              </div>
            </div>
          </div>
		  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MPO with higest Sale</h3>

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
					$query="SELECT mpo_id, COUNT(mpo_id) AS m_id FROM order_relation WHERE ut_number='$ut_num' GROUP BY mpo_id ORDER BY m_id DESC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$m_id = $row['mpo_id'];
						break;
					}
					
					$query="SELECT mpo_details.first_name, mpo_details.last_name, SUM(bill_status.total_bill) AS t_bill FROM mpo_details INNER JOIN order_relation ON
							mpo_details.mpo_id=order_relation.mpo_id INNER JOIN bill_status ON bill_status.order_id=order_relation.order_id WHERE order_relation.mpo_id='$m_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						?>
						<div class="col-md-6">
							<img src="../mpo/database_images/mpo_images/<?php echo $m_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="mpo_details.php?mpo_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
							<strong>Total Transactions: </strong><?php echo $row['t_bill']; ?>
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
              <h3 class="box-title">MPO with higest Dew</h3>

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
					$query="SELECT order_relation.mpo_id, COUNT(order_relation.mpo_id) AS m_id FROM order_relation INNER JOIN bill_status ON order_relation.order_id=bill_status.order_id 
							WHERE bill_status.pay_status='0' and order_relation.ut_number='$ut_num' GROUP BY order_relation.mpo_id ORDER BY m_id DESC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$m_id = $row['mpo_id'];
						break;
					}
					
					$query="SELECT mpo_details.first_name, mpo_details.last_name, SUM(bill_status.total_bill) AS t_bill FROM mpo_details INNER JOIN order_relation ON
							mpo_details.mpo_id=order_relation.mpo_id INNER JOIN bill_status ON bill_status.order_id=order_relation.order_id WHERE order_relation.mpo_id='$m_id' and bill_status.pay_status='0'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						if($row['first_name']!=null){
							?>
						<div class="col-md-6">
							<img src="../mpo/database_images/mpo_images/<?php echo $m_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="mpo_details.php?mpo_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
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
				?>
                
              </div>
            </div>
          </div>
		  <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">MPO with lowest Sale</h3>

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
					$query="SELECT mpo_id, COUNT(mpo_id) AS m_id FROM order_relation WHERE ut_number='$ut_num' GROUP BY mpo_id ORDER BY m_id ASC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$m_id = $row['mpo_id'];
						break;
					}
					
					$query="SELECT mpo_details.first_name, mpo_details.last_name, SUM(bill_status.total_bill) AS t_bill FROM mpo_details INNER JOIN order_relation ON
							mpo_details.mpo_id=order_relation.mpo_id INNER JOIN bill_status ON bill_status.order_id=order_relation.order_id WHERE order_relation.mpo_id='$m_id'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						if($row['first_name']!=null){
							?>
						<div class="col-md-6">
							<img src="../mpo/database_images/mpo_images/<?php echo $m_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="mpo_details.php?mpo_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
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
				<p>The mpo who has at least 1 Connection with Pharmasist is shown here. Rest of them are not showing here.</p>
			</div>
          </div>
		  </div>
        </div>
      </div>
      <div class="row">
		<div class="col-md-12">
		<h2>Pharmasist Statistics</h2>
		<hr>
		<div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Highest Payer Pharmasist</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
			<div class="box-body">
				<div class="row">
                <?php
					$query="SELECT cus_id, COUNT(cus_id) AS m_id FROM order_relation WHERE ut_number='$ut_num' GROUP BY cus_id ORDER BY m_id DESC";
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
							<strong>Name: </strong><a href="customer_details.php?cus_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br>
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
			</div>
			</div>
			<div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Highest Dew Pharmasist</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
			<div class="box-body">
				<div class="row">
                <?php
					$query="SELECT order_relation.cus_id, COUNT(order_relation.cus_id) AS m_id FROM order_relation INNER JOIN bill_status ON order_relation.order_id=bill_status.order_id 
							WHERE bill_status.pay_status='0' and order_relation.ut_number='$ut_num' GROUP BY order_relation.cus_id ORDER BY m_id DESC";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						$m_id = $row['cus_id'];
						break;
					}
					
					$query="SELECT customer_details.first_name, customer_details.last_name, SUM(bill_status.total_bill) AS t_bill FROM customer_details INNER JOIN order_relation ON
							customer_details.cus_id=order_relation.cus_id INNER JOIN bill_status ON bill_status.order_id=order_relation.order_id WHERE order_relation.cus_id='$m_id' and bill_status.pay_status='0'";
					$result=mysql_query($query,$dbs);
					while($row=mysql_fetch_array($result)){
						if($row['first_name']!=null){
							?>
						<div class="col-md-6">
							<img src="../mpo/database_images/mpo_images/<?php echo $m_id; ?>.jpg" width="50%" height="auto">
						</div>
						<div class="col-md-6">
							<strong>Name: </strong><a href="customer_details.php?cus_id=<?php echo $m_id; ?>"><?php echo $row['first_name']; echo '  '; echo $row['last_name']; ?></a><br><br>
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
				?>
                
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
