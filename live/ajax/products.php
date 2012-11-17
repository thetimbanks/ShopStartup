<?php

	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");

	// Require configuration
	require '../config.php';
	
	// Get all products
	$query1 = "SELECT * FROM `products` ORDER BY `dtadded` DESC";
	if($result1 = $db['link']->query($query1)){
		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
			
			print_r(json_encode($row1));
			
		}
	}

?>