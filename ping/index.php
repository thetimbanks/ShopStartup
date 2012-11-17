<?php

	// Asynchronous purchase log page
	
	// Connect to DB
	require '../live/config.php';
	
	$cookie = "sample-cookie";
	
	// Add record to DB
	$query1 = "INSERT INTO `purchases` SET `session` = '" .$cookie. "', `datetime` = '" .$cfg['sqltime']. "'";
	$db['link']->query($query1);

?>