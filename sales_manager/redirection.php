<?php


$sm_idf = $_GET['sm_idf'];

session_start();
$_SESSION["notifier"] = "1";
$_SESSION["id"] = $sm_idf;

header( "Location: index.php" );


?>