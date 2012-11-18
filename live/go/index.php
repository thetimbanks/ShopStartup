<?

if(is_numeric($_GET['id'])){
	$query1 = "SELECT `buylink` FROM `products` WHERE `id` LIKE '" .$_GET['id']. "'";
	if($result1 = $db['link']->query($query1)){
		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
			
			$query2 = "INSERT INTO `clicks` SET
						`product` = '" .$_GET['id']. "',
						`session` = '" .$_COOKIE['ShopStartup']. "',
						`datetime` = '" .$cfg['sqltime']. "'";
			$db['link']->query($query2);
			
			header("Location: " .$row1['buylink']);
		}
	}
}
?>