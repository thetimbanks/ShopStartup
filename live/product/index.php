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
    
    <!--<div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=289974361122262";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>-->
    
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
                            <?php if($row1['price'] != 0.00){ ?><h1 itemprop="price">$ <?php echo number_format($row1['price'],2); ?></h1><?php } ?>
                            
                            <div class="row" style="margin-left:0px;">
                                <div class="span6">
                                    <a href="<? echo $cfg['weburl']; ?>/go/?id=<? echo $_GET['id']; ?>" target="_new" class="btn btn-primary">Buy Now</a>
                            	</div>
                                <div class="span6 pagination-right">
									<?php
                                     $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                                                        === FALSE ? 'http' : 'https';
                                        $host     = $_SERVER['HTTP_HOST'];
                                        $script   = $_SERVER['SCRIPT_NAME'];
                                        $params   = $_SERVER['QUERY_STRING'];
                                         
                                        $currentUrl = $protocol . '://' . $host . $script . '?' . $params; 
                                    ?>
                                    <!-- Facebook Like Button -->
                                    <!--<div class="fb-like" 
                                        data-href="<?= $currentUrl; ?>" 
                                        data-send="false" data-layout="button_count" 
                                        data-width="450" 
                                        data-show-faces="false" 
                                        data-font="lucida grande">
                                    </div>
                                    <br />-->
                                    <!-- Tweet Button -->
                                    <a href="https://twitter.com/share" 
                                        class="twitter-share-button" 
                                        data-text="Check out <? echo urlencode($row1['productname']); ?> on Shop Startup!" 
                                        data-via="shopstartup" data-dnt="true">Tweet</a>
                                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                    <br />
                                    <!-- Pin It Button -->
                                    <a href="http://pinterest.com/pin/create/button/?url=<?= urlencode($currentUrl); ?>&media=<?= urlencode($row1['image']); ?>&description=<?= urlencode($row1['productdesc']); ?>" 
                                    	class="pin-it-button" 
                                        count-layout="horizontal">
                                        	<img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" />
                                    </a>
                                </div>

                            </div>
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
    <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</body>
</html>
