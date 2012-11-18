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
	
	$cfg['home'] = "http://" .$_SERVER['SERVER_NAME'];
	$cfg['weburl'] = $cfg['home'] . "/live";
	
	$cfg['pusher_key'] = "af4f0ba396f0d552d1e1";
	$cfg['pusher_secret'] = "08c13b0ec61e41e826b6";
	$cfg['pusher_appid'] = 31955;
	
	if(!$_COOKIE['ShopStartup']){
		
		session_start();
		setcookie("ShopStartup",session_id(), 0, '/', '.shopstartup.co');
		
		$query0 = "INSERT INTO `sessions` SET 
					`session` = '" .session_id(). "', 
					`datetime` = '" .$cfg['sqltime']. "', 
					`ipaddr` = '" .$_SERVER['REMOTE_ADDR']. "', 
					`useragent` = '" .$_SERVER['USERAGENT_STRING']. "'";
		$db['link']->query($query1);
		
	}
	
	require 'nav.php';

?>