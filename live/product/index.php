<?php require '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shop Startup: Product</title>
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
              <li><a href="<? echo $cfg['weburl']; ?>">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Relationship</a></li>
                  <li><a href="#">Entertainment</a></li>
                  <li><a href="#">Beauty</a></li>
                  <li><a href="#">Tech</a></li>
                  <li><a href="#">Clothing</a></li>
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

    

	<div class="product-spacer"></div>
    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    
    	<div class="clearfix">
        
        	<div class="row-fluid">

            <?php
                if(is_numeric($_GET['id'])){
                    $query1 = "SELECT * FROM `products` WHERE `id` LIKE '" .addslashes($_GET['id']). "' LIMIT 1";
                    if($result1 = $db['link']->query($query1)){
                        while($row1 = $result1->fetch_array(MYSQLI_ASSOC)){
            ?>
    
    			<div class="span4">
                    <div class="prod-item">
                        <img src="<? echo $row1['image']; ?>" class="prod-image" />
                    </div>
               	</div>
                <div class="span8">
                	<h1><? echo $row1['productname']; ?></h1>
                    <h4><? echo $row1['companyname']; ?></h4>
                    <p><? echo $row1['productdesc']; ?></p>
                </div>
            
            <?php
                        }
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
