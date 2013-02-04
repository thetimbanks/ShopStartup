<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Shop Startup - Coming Soon!</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="css/social-buttons.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
    <!-- Color picker -->
    <link href="colorpicker/css/colorpicker.css" rel="stylesheet" />
    <script src="colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript">
        $(function(){
        window.prettyPrint && prettyPrint()
            var logoStyle = $('#logo')[0].style;
            var headingStyle = $('h1')[0].style;
            $('#cp').colorpicker().on('changeColor', function(ev){
                logoStyle.backgroundColor = ev.color.toHex();
                headingStyle.color = ev.color.toHex();
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="gradient">
            <div class="row">
                <div class="span12">
                    <div class="content">
                        <img src="img/logo.png" width="450" height="100" />
                        <h1>Shop Startup connects you<br />to the hottest startups<br />with unique holiday gifts.</h1>
                        <p>Shop Startup is launching tomorrow!<br />Leave us your email below, and we’ll notify the minute we open the doors.</p>
                        <?php
                        	if($_POST['email']){
                        	
                            	require_once 'live/config.php';
                                $query1 = "INSERT INTO `landing` SET `email` = '" .addslashes($_POST['email']). "', `datetime` = '" .$cfg['sqltime']. "'";
                                $db['link']->query($query1);
                                
                                echo "<p>Thank you!<br />We'll be in touch!</p>";
                        
                        	} else {
                        ?>
                        <form action="#" class="form-horizontal" method="post">
                            <input type="email" name="email" placeholder="Enter your email" class="input-large" />
                            <input type="submit" value="Notify me!" class="btn btn-large" />
                        </form>
                        <?php
							}
						?>
                        <p>
                            <a href="http://twitter.com/shopstartup" class="sb circle twitter mytooltip" title="Twitter" target="_blank">Twitter</a>
                            <a href="http://facebook.com/shopstartup" class="sb circle facebook mytooltip" title="Facebook" target="_blank">Facebook</a>
                            <a href="http://pinterest.com/shopstartup" class="sb circle pinterest mytooltip" title="Pinterest" target="_blank">Pinterest</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
