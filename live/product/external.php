<?php require '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   <!-- <title>Shop Startup: Product Details</title>-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $cfg['weburl']; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $cfg['weburl']; ?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo $cfg['weburl']; ?>/css/style.css" rel="stylesheet">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
 <!--   <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">-->
    
    <style>
    	html, body, iframe {
	    	height: 100%;
    	}
    	iframe {
	    	width: 100%;
    	}
    	.back {
	    	position: absolute;
	    	left: 23px;
	    	top: 31px;
    	}
    	.back img{
	    	width: 16px;
	    	height: 16px;
	    	transform:rotate(180deg);
			-ms-transform:rotate(180deg); /* IE 9 */
			-moz-transform:rotate(180deg); /* Firefox */
			-webkit-transform:rotate(180deg); /* Safari and Chrome */
			-o-transform:rotate(180deg); /* Opera */
    	}
    </style>
  </head>

<body>

	<?php
        if(is_numeric($_GET['id'])){
            $query1 = "SELECT * FROM `products` WHERE `id` LIKE '" .addslashes($_GET['id']). "' LIMIT 1";
            if($result1 = $db['link']->query($query1)){
                while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
                	$product = $row1;
                }
            }
        }
    ?>

    <div class="centered" style="position: relative; padding-bottom: 10px;">
    	<a href="<?= $cfg['home'] ?>"><img src="<?php echo $cfg['weburl']; ?>/img/logo.png" style="height: 70px;"/></a>
    	<div class="back">
    		<a href="<?= $cfg['weburl'] ?>/product/?id=<?= $_REQUEST["id"]?>">
	    		<img src="<?php echo $cfg['weburl']; ?>/img/arrow.png" />
	    		Back to <?= $product["productname"] ?> on Shop Startup
    		</a>
    	</div>
    </div>
    
    <iframe src="<?= $product["buylink"] ?>" style="width=100%;"/>

    


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $cfg['weburl']; ?>/js/jquery.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-button.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo $cfg['weburl']; ?>/js/bootstrap-typeahead.js"></script>
</body>
</html>
