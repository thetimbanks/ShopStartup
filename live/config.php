<?php

	// Shop Startup Configuration File
	
	// Database Connection Variables
	$db['hostname'] = "localhost";
	$db['username'] = "root";
	$db['password'] = "shopstartup";
	$db['database'] = "shopstartup";
	
	// Set up database connection
	$db['link'] = new mysqli($db['hostname'], $db['username'], $db['password'], $db['database']);
	if(mysqli_connect_errno()){ die; }
	
	date_default_timezone_set("UTC");
	$cfg['timestamp'] = mktime();
	$cfg['sqltime'] = strftime("%Y-%m-%d %H:%M:%S",$cfg['timestamp']);
	
	$cfg['weburl'] = "http://shopstartup.co/live";


?>