<!DOCTYPE HTML>
<html>
<head>
<title>The Fooseshoes Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script---->
<script src="js/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start slider -->
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#ei-slider').eislideshow({
					animation			: 'center',
					autoplay			: true,
					slideshow_interval	: 3000,
					titlesFactor		: 0
                });
            });
        </script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>

<!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>
		 <div class="log_reg">
				<ul>
					<li><a href="login.php">Login</a> </li>
					<div class="clear"></div>
				</ul>
		</div>	
		<div class="web_search">
		 	<form>
				<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
				<input type="submit" value=" " />
			</form>
	    </div>						
		<div class="clear"></div>
	</div>	
</div>
</div>
<!-- start header_btm -->
<div class="wrap">
<div class="header_btm">
		<div class="menu">
			<ul>
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="products.php">products</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="myaccount.php">My Account</a></li>
				<div class="clear"></div>
			</ul>
		</div>
		<div id="smart_nav">
			<a class="navicon" href="#menu-left"> </a>
		</div>
		<nav id="menu-left">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">products</a></li>
				<li><a href="about.php">about</a></li>
				<li><a href="myaccount.php">My Account</a></li>
				<div class="clear"></div>
			</ul>
		</nav>
	<div class="header_right">
		<ul>
			<li><a href="#"><i  class="cart"></i><span>0</span></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div>