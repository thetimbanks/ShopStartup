<?
require '../config.php';
require('../Pusher.php');

if(is_numeric($_GET['id'])){
	$query1 = "SELECT `buylink` FROM `products` WHERE `id` LIKE '" .$_GET['id']. "'";
	if($result1 = $db['link']->query($query1)){
		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
			
			$query2 = "INSERT INTO `clicks` SET
						`product` = '" .$_GET['id']. "',
						`session` = '" .$_COOKIE['ShopStartup']. "',
						`datetime` = '" .$cfg['sqltime']. "'";
			$db['link']->query($query2);
			

			$query3 = "select count(*) as total from `clicks`";
			if($result3 = $db['link']->query($query3)){
				while($row3 = $result3->fetch_array(MYSQLI_ASSOC)){
					$pusher = new Pusher($cfg['pusher_key'], $cfg['pusher_secret'], $cfg['pusher_appid']);
					$pusher->trigger('shopstartup', 'buy-click', array('count' => $row3["total"]) );
					break;
				}
			}
			
			header("Location: " .$row1['buylink']);
		}
	}
}
?>