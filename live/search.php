<!DOCTYPE html>
<html lang="en">
<?php require 'config.php'; ?>
  <head>
    <meta charset="utf-8">
    <title>Shop Startup</title>
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
    
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    
	<?php nav(); ?>



    <!-- Carousel
    ================================================== -->
    <div style="height:80px"></div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    
    	<?php
            if ($_REQUEST["category"]) {
				$query1 = "SELECT * FROM `categories` where id = " . $_REQUEST["category"];
				if($result1 = $db['link']->query($query1)){
	        		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
			    		$categoryName = $row1["name"];
			    		break;
	        		}
	        	}
        	} else if ($_REQUEST["q"]) {
	        	$categoryName = 'Products containing "' . $_REQUEST["q"] . '"';
        	}
        ?>
    
        <? if ($_REQUEST["category"] || $_REQUEST["q"]) { ?>
    		<h2><a href="<? echo $cfg['weburl']; ?>/search.php">Discover</a> / <strong><?= $categoryName ?></strong></h2>
    	<? } else { ?>
    		<h2>Discover / <strong>Products</strong></h2>
    	<? } ?>
        
        <div class="centered clearfix">
            <div id="prod-container">
            
            <?php
            if ($_REQUEST["category"]) {
				$query1 = "SELECT * FROM `products` where category = " . $_REQUEST["category"] . " ORDER BY `sort` ASC";
			} else if ($_REQUEST["q"]) {
				$query1 = "SELECT * FROM `products` where productname like '%" . $_REQUEST["q"] . "%' or productdesc like '%" . $_REQUEST["q"] . "%' ORDER BY `sort` ASC";
			} else {
				$query1 = "SELECT * FROM `products` ORDER BY `sort` ASC";
			} 
			
				if($result1 = $db['link']->query($query1)){
            		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
            ?>
            
            <a href="<? echo $cfg['weburl']; ?>/product/?id=<? echo $row1['id']; ?>">
                <div class="prod-item">
                
                	<img src="<? echo $row1['image']; ?>" width="290" class="prod-image" />
                    
                    <div class="prod-itemlabel">
                        <h4><? echo $row1['productname']; ?></h4>
                        <? if(strlen($row1['productdesc']) > 150){ echo substr($row1['productdesc'],0,150). "..."; } else { echo $row1['productdesc']; } ?>
                        <? if($row1['city'] && $row1['state']){ 
							echo "<br /><small class=\"muted\"><img src=\"" .$cfg['weburl']. "/img/location-pin\" /> " .$row1['city']. ", " .$row1['state']. "</small>"; } ?>
                    </div>
                </div>
            </a>
            
            <?php
					}
				}
			?>

            </div>
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
        <script src="js/jquery.masonry.min.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel();
          
          $('#prod-container').masonry({
            // options
            itemSelector : '.prod-item',
            columnWidth : 310
          });
          
          setTimeout(function() {$("#prod-container").masonry( 'reload' ); }, 100);
        })
      }(window.jQuery)
    </script>

  </body>
</html>
