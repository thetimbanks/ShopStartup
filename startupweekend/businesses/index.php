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

  <body class="getlisted">



    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    
	<?php nav(); ?>



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo $cfg['weburl']; ?>/img/businessesbanner.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>You know your product.<br />
              		We know how to get it<br />
                    out there.</h1>
              <!--<p class="lead">Test</p>-->
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
    
    	<h1>Steps</h1>
    
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="<? echo $cfg['weburl']; ?>/img/steps/stepone.png">
          <h2><strong>Tell us about your products.</strong></h2><h3><em>(We'll give you the form.)</em></h3>
          <p><a class="btn" href="<?= $cfg['weburl']; ?>/files/companyproductform.pdf" target="_new">Go to the form &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="<? echo $cfg['weburl']; ?>/img/steps/steptwo.png">
          <h2><strong>Install our tracker.</strong></h2><h3><em>(We only make money when you do!)</em></h3>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="<? echo $cfg['weburl']; ?>/img/steps/stepthree.png">
          <h2><strong>There isn't one!</strong></h2><h3><em>(Unless you need our help.)</em></h3>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


   


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2012 Shop Startup &middot; <a href="<?= $cfg['weburl']; ?>/about">About Us</a></p>
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
