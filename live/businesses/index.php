<?php require '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shop Startup: For Businesses</title>
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
    	<img src="<?php echo $cfg['weburl']; ?>/img/logo.png" width="683" height="90" />
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
              <li class="active"><a href="<? echo $cfg['weburl']; ?>/businesses">For Startups</a></li>
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
          <img src="<?php echo $cfg['weburl']; ?>/img/largegraphic1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>You know your product.<br />
              		We know how to get it out there.</h1>
              <!--<p class="lead">Test</p>-->
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
    
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="http://placehold.it/140x140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="http://placehold.it/140x140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="http://placehold.it/140x140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="<?php echo $cfg['weburl']; ?>/img/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="<?php echo $cfg['weburl']; ?>/img/browser-icon-firefox.png">
        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-right" src="<?php echo $cfg['weburl']; ?>/img/browser-icon-safari.png">
        <h2 class="featurette-heading">And lastly, this one. <span class="muted">Checkmate.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


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
