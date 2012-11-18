<?php
	function nav(){ 
		global $db;
		global $cfg;
		
	?>
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36410019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php
	}
	?>