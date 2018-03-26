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
<nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
            Pharmaceutical Management
        </div>
    </nav>
	<?php
		require'../connectivity_database.php';
		session_start();
		$sm_id = $_SESSION["id"];
		
		$cs_id=$_GET['cs_id'];
		
		$query="UPDATE mpo_customer_relation SET status='2' WHERE mpo_id='$sm_id' and cus_id='$cs_id'";
		mysql_query($query,$dbs);
		
		
	
	?>
	<div class="container">
        <div class="page-header">
            <h1>Add successfully.</h1>
        </div>
    </div>
</body>
</html>