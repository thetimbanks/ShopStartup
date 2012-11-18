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
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="<?php echo $cfg['weburl']; ?>/js/jquery.masonry.min.js"></script>
<script type="application/javascript">

	$(function(){
	  $('#prod-container').masonry({
		// options
		itemSelector : '.prod-item',
		columnWidth : 310
	  });
	});

</script>

  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    
    <div class="centered">
    	<img src="<?php echo $cfg['weburl']; ?>/img/logo.png" width="450" height="100" />
    </div>
    
    <div class="container navbar-wrapper">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<? echo $cfg['weburl']; ?>">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                <ul class="dropdown-menu">
                	<?php
            
						$query1 = "SELECT * FROM `categories` ORDER BY `name` ASC";
						if($result1 = $db['link']->query($query1)){
		            		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
		            ?>
		            <li><a href="<?= $cfg['weburl']; ?>/search.php?category=<?= $row1["id"]?>"><?= $row1["name"]?></a></li>
		            
		            <?php
							}
						}
					?>
                 <!-- <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>-->
                </ul>
              </li>
              <li><a href="<? echo $cfg['weburl']; ?>/businesses">For Startups</a></li>
              <li><a href="#about">About Us</a></li>
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
            </ul>
          </div><!--/.nav-collapse -->
          <form action="" method="get">
              <input type="text" class="search" value="Search"
                    onfocus="if (this.value=='Search') {this.value = '';}" 
                    onblur="if(this.value=='') {this.value = 'Search';}"
                    maxlength="100" />
          </form>
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/largegraphic1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Shop Startup connects you to the hottest startups with unique holiday gifts.</h1>
              <!--<p class="lead">Test</p>-->
              <!--<a class="btn btn-large btn-primary" href="#">Sign up today</a>-->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/largegraphic2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
               <h1>This holiday,<br />do more than shop.<br />Shop <em>Startup</em>.</h1>
              <!--<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    
    	<?php
            
			$query1 = "SELECT * FROM `categories` where category = " . $_REQUEST["category"] . " ORDER BY `sort` ASC";
			if($result1 = $db['link']->query($query1)){
        		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
		    		$categoryName = $row1["name"];
		    		break;
        		}
        	}
        ?>
    
    	<h2>Discover / <strong><?= $categoryName ?></strong></h2>
        
        <div class="centered clearfix">
            <div id="prod-container">
            
            <?php
            
				$query1 = "SELECT * FROM `products` where category = " . $_REQUEST["category"] . " ORDER BY `sort` ASC";
				if($result1 = $db['link']->query($query1)){
            		while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
            ?>
            
            <a href="<? echo $cfg['weburl']; ?>/product/?id=<? echo $row1['id']; ?>">
                <div class="prod-item">
                
                	<img src="<? echo $row1['image']; ?>" width="290" class="prod-image" />
                    
                    <div class="prod-itemlabel">
                        <h4><? echo $row1['productname']; ?></h4>
                        <strong><? echo $row1['companyname']; ?></strong>
                        <br />
                        <? echo $row1['productdesc']; ?>
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
  </body>
</html>
