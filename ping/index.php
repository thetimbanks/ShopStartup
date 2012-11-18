<?php

	// Asynchronous purchase log page
	
	// Connect to DB
	require '../live/config.php';
	
	$cookie = $_COOKIE["ShopStartup"];
	
	if(is_numeric($_GET['company'])){
	// Add record to DB
	$query1 = "INSERT INTO `purchases` SET `company` = '" .$_GET['company']. "', `session` = '" .$cookie. "', `datetime` = '" .$cfg['sqltime']. "'";
	$db['link']->query($query1);
	}

?>