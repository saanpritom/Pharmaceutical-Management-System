
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
	error_reporting(0);

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $com_name = $_POST['c_name'];
    $ut_num = $_POST['ut_number'];
    $com_address = $_POST['c_address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipcode'];
    $country = $_POST['country'];
    $tel_numb = $_POST['tel_number'];
    $designation = $_POST['designation'];
    $webs = $_POST['website'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $feature_image = $_FILES['feature_image'];
	
	
	$query="SELECT first_name FROM sm_details WHERE ut_num='$ut_num'";
	$result = mysql_query($query,  $dbs);
	while($row=mysql_fetch_array($result))
	{
		$f_name = $row['first_name'];
	}
	
	if($f_name!=null){
		?>
			<div class="container">
				<div class="page-header">
					<h1>Sorry this company is already have an account. You can't create an account with this company. Use the existing one. <small><a href="../index.html">Go Back</a></small></h1>
				</div>
			</div>
		<?php
	}
	else{
		$query = "SELECT MAX(sm_id) AS max_id FROM sm_details WHERE 1";
    $result = mysql_query($query,$dbs);
    while($row=mysql_fetch_array($result)){
        $max_id = $row['max_id'];
    }

    if($max_id!=null){
       $max_id = $max_id+1;
    }
    else{
		$max_id = 1;
        
    }


    $query = "INSERT INTO sm_login (sm_id, username, email, password) VALUES ('$max_id', '$username','$email','$password')";
    mysql_query($query, $dbs);

    $query = "INSERT INTO sm_details (first_name, last_name, com_name, ut_num, com_address, city, state, zip, country, tel_numb, designation, webs) VALUES('$first_name','$last_name','$com_name','$ut_num','$com_address','$city','$state','$zip','$country','$tel_numb','$designation','$webs')";
    mysql_query($query, $dbs);


    //news_content table data insertion

                    

                        
						//content news update
						$target_dir = "images/";
						$target_file = $target_dir . basename($_FILES["feature_image"]["name"]);
						$img_name = $_FILES["feature_image"]["name"];
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
						// Check if image file is a actual image or fake image
						if(isset($_POST["submit"])) {
							$check = getimagesize($_FILES["feature_image"]["tmp_name"]);
							if($check !== false) {
								//echo "File is an image - " . $check["mime"] . ".";
								$uploadOk = 1;
							} else {
							//echo "File is not an image.";
							$uploadOk = 0;
							}
						}
						// Check if file already exists
						if (file_exists($target_file)) {
							//echo "Sorry, file already exists.";
							$uploadOk = 0;
						}
						// Check file size
						if ($_FILES["feature_image"]["size"] > 500000) {
							//echo "Sorry, your file is too large.";
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
							&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
							//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
							//echo "Sorry, your file was not uploaded.";
							// if everything is ok, try to upload file
						} else {
							if (move_uploaded_file($_FILES["feature_image"]["tmp_name"], $target_file)) {
								//echo "The file ". basename( $_FILES["feature_image"]["name"]). " has been uploaded.";
		
								$content = file_get_contents("images/".$img_name);
								//Store in the filesystem.
								$fp = fopen("images/".$max_id.".jpg", "w");
								fwrite($fp, $content);
								fclose($fp);
								unlink("images/".$img_name);
								$tmp=1;
							} else {
								//echo "Sorry, there was an error uploading your file.";
							}
						}
    
    
?>
	<div class="container">
        <div class="page-header">
            <h1>Account created successfully. <small><a href="redirection.php?sm_idf=<?php echo $max_id; ?>">Continue to the site.</a></small></h1>
        </div>
    </div>
<?php
	}
	?>

    

    
    
</body>
</html>