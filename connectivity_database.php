<?php

	$server_name = "localhost";
    $server_username = "root";
    $server_password = "superacces";

    $dbs=mysql_connect($server_name,$server_username,$server_password)or die(mysql_error());

        mysql_select_db("pharma_manage",$dbs);
		
			mysql_query('SET CHARACTER SET utf8');
		mysql_query("SET SESSION collation_connection ='utf8_unicode_ci'"); 

?>