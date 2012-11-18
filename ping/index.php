<?php

	// Asynchronous purchase log page
	header('Access-Control-Allow-Origin: *');
	
	// Connect to DB
	require '../live/config.php';
	
	$cookie = $_COOKIE["ss_user_tracker"];
	
	if(is_numeric($_GET['company'])){
	// Add record to DB
	$query1 = "INSERT INTO `purchases` SET `company` = '" .$_GET['company']. "', `session` = '" .$cookie. "', `datetime` = '" .$cfg['sqltime']. "'";
	$db['link']->query($query1);
	}

?>