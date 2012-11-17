<?php

	// Asynchronous purchase log page
	header('Access-Control-Allow-Origin: *');
	
	// Connect to DB
	require '../config.php';
	
	$cookie = $_COOKIE["ss_user_tracker"];
	
	// Add record to DB
	$query1 = "INSERT INTO `purchases` SET `session` = '" .$cookie. "', `datetime` = '" .$cfg['sqltime']. "'";
	$db['link']->query($query1);

?>