<?php

	session_start();
	
	unset($_SESSION['notifier']);
	unset($_SESSION["id"]);
	
	header( "Location: ../index.html" );

?>