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
    
  </head>

<body>



    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    
	<?php nav(); ?>

    

<div class="product-spacer"></div>
    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    
    	<div class="clearfix" itemscope itemtype="http://schema.org/Product">

            <?php
                if(is_numeric($_GET['id'])){
                    $query1 = "SELECT * FROM `products` WHERE `id` LIKE '" .addslashes($_GET['id']). "' LIMIT 1";
                    if($result1 = $db['link']->query($query1)){
                        while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
            ?>
            <title>Shop Startup: <? echo $row1['productname']; ?></title>
            <div class="row-fluid">

    			<div class="span4">
                  <div class="prod-item">
                        <img src="<? echo $row1['image']; ?>" class="prod-image" /><br />
                        <div class="prod-itemlabel" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <h1 itemprop="price">$ <?php echo number_format($row1['price'],2); ?></h1>
                            <a href="#" class="btn">Save</a>
                            <a href="<? echo $cfg['weburl']; ?>/go/?id=<? echo $_GET['id']; ?>" target="_new" class="btn btn-primary">Buy Now</a>
                        </div>
                  </div>
                    
                    
               	</div>
                <div class="span8">
                	<h1 itemprop="name"><? echo $row1['productname']; ?></h1>
                    <h4><small><em>by</em></small> <? echo $row1['companyname']; ?></h4>
                    <p itemprop="description"><? echo $row1['productdesc']; ?></p>
                </div>
            </div>
            
            <div class="row-fluid">
            	
            	<div class="span12">
            		
                    <h2>more about <strong><?php echo $row1['companyname']; ?></strong></h2>
                    <p><? echo $row1['companydesc']; ?></p>
                
                </div>
                
            </div>
            
            <?php
                        }
                    }
                }
            ?>
            
            
            

		</div>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2012 Shop Startup &middot; <a href="#">About Us</a></p>
      </footer>

</div><!-- /.container -->



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
