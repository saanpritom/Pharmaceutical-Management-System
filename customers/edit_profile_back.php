<?php
//error_reporting(0);
session_start();
$notification = $_SESSION["notifier"];
$sm_id = $_SESSION["id"];
require'../connectivity_database.php';
if($notification==1){

	$query="SELECT first_name, last_name, company_name, ut_number, company_address, city, state, zip, country, tel_number, gender, designation FROM customer_details WHERE cus_id='$sm_id'";
				$result=mysql_query($query,$dbs);
				while($row=mysql_fetch_array($result)){
					$first_name = $row['first_name'];
					$last_name = $row['last_name'];
					$com_name = $row['company_name'];
					$ut_num = $row['ut_num'];
					$com_address = $row['company_address'];
					$city = $row['city'];
					$state = $row['state'];
					$zip = $row['zip'];
					$county = $row['country'];
					$tel_numb = $row['tel_numb'];
					$designation = $row['designation'];
					$webs = $row['gender'];
				}
				
				$query = "SELECT username, password FROM customer_login WHERE cus_id='$sm_id'";
						$result=mysql_query($query,$dbs);
						while($row=mysql_fetch_array($result)){
							$username = $row['username'];
							$password = $row['password'];
						}
						
						
				
					if($_POST['firstname']==null){
						$_POST['firstname'] = $first_name;
					}else{
						$first_name=$_POST['firstname'];
					}
					if($_POST['lastname']==null){
						$_POST['lastname'] = $last_name;
					}else{
						$last_name=$_POST['lastname'];
					}
					if($_POST['comaddress']==null){
						$_POST['comaddress'] = $com_address;
					}else{
						$com_address=$_POST['comaddress'];
					}
					if($_POST['ncity']==null){
						$_POST['ncity'] = $city;
					}else{
						$city=$_POST['ncity'];
					}
					if($_POST['nstate']==null){
						$_POST['nstate'] = $state;
					}else{
						$state=$_POST['nstate'];
					}
					if($_POST['nzip']==null){
						$_POST['nzip'] = $zip;
					}else{
						$zip=$_POST['nzip'];
					}
					if($_POST['ncountry']==null){
						$_POST['ncountry'] = $county;
					}else{
						$county=$_POST['ncountry'];
					}
					if($_POST['ntel']==null){
						$_POST['ntel'] = $tel_numb;
					}else{
						$tel_numb=$_POST['ntel'];
					}
					if($_POST['ndesignation']==null){
						$_POST['ndesignation'] = $designation;
					}else{
						$designation=$_POST['ndesignation'];
					}
					if($_POST['nwebs']==null){
						$_POST['nwebs'] = $webs;
					}else{
						$webs=$_POST['nwebs'];
					}
					if($_POST['nusername']==null){
						$_POST['nusername'] = $username;
					}else{
						$username=$_POST['nusername'];
					}
					if($_POST['npassword']==null){
						$_POST['npassword'] = $password;
					}else{
						$password=$_POST['npassword'];
					}
					
					$query="UPDATE customer_details SET first_name='$first_name', last_name='$last_name', company_address='$com_address', city='$city', state='$state', zip='$zip', country='$county', tel_number='$tel_numb',
								designation='$designation', gender='$webs' WHERE cus_id='$sm_id'";
					if(mysql_query($query,$dbs)){
						$query="UPDATE customer_login SET username='$username', password='$password' WHERE cus_id='$sm_id'";
						if(mysql_query($query,$dbs)){
							header( "Location: profile.php" );
						}
					}
					}
else{
	header( "Location: signout.php" );
}
			?>