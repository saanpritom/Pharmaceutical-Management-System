<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<?php
	
	require '../connectivity_database.php';
	error_reporting(0);

	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($email!=null and $password!=null){
		$query = "SELECT username, sm_id FROM sm_login WHERE email='$email'";
		$result = mysql_query($query,$dbs);
		while($row=mysql_fetch_array($result)){
			$username=$row['username'];
			$sm_id = $row['sm_id'];
		}
		if($username!=null){
			$query="SELECT password FROM sm_login WHERE username='$username'";
			$result = mysql_query($query,$dbs);
			while($row=mysql_fetch_array($result)){
				$pass=$row['password'];
			}
			if($password==$pass){
				session_start();
				$_SESSION["notifier"] = "1";
				$_SESSION["id"] = $sm_id;
				header( "Location: index.php" );
			}
			else{
				?>
					<nav class="navbar navbar-default navbar-fixed-bottom">
						<div class="container">
							Pharmaceutical Management
						</div>
					</nav>
					<div class="container">
						<div class="page-header">
							<h1>Password is wrong. Please try again. <small><a href="../index.html">Go Back</a></small></h1>
						</div>
					</div>
				<?php
			}
		}
		else{
			?>
				<nav class="navbar navbar-default navbar-fixed-bottom">
					<div class="container">
						Pharmaceutical Management
					</div>
				</nav>
				<div class="container">
					<div class="page-header">
						<h1>Please Enter a valid email address <small><a href="../index.html">Go Back</a></small></h1>
					</div>
				</div>
			<?
		}
	}
	else{
		?>
			<nav class="navbar navbar-default navbar-fixed-bottom">
				<div class="container">
					Pharmaceutical Management
				</div>
			</nav>
			<div class="container">
				<div class="page-header">
					<h1>Please Enter something at Email and Password field. <small><a href="../index.html">Go Back</a></small></h1>
				</div>
			</div>
		<?php
	}

}
?>



</body>
</html>




