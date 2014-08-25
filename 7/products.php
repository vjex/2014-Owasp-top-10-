<!DOCTYPE HTML>
<html>
<head>
<title> Products</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
 
</head>
<body>
   <!-- Start Header -->
       <div class="header">	
   	 	    <div class="header-top">
   	 	      <div class="wrap"> 
   	 	    	 <div class="header-top-left">
   	 	    	 	<p>Support: +0123456789</p>
   	 	    	 </div>
   				  <div class="header-top-right">
				        <ul>
				            <li  class="login">
				              <div id="loginContainer">
				            	   <a href="login.php" id="loginButton"><span><i class="fa fa-lock"></i>Login</span></a>
						                
						             </div>
				               </li>
				         </ul>
				    </div>
			      <div class="clear"></div>
			     </div> 
		      </div>
             <div class="header-logo-nav">
             	  <div class="navbar navbar-inverse navbar-static-top nav-bg" role="navigation">
				      <div class="container">
				        <div class="navbar-header">
				          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				         <div class="logo"> <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" /></a></div>
				          <div class="clear"></div>
				        </div>
				        <div class="collapse navbar-collapse">
				          <ul class=" menu nav navbar-nav">
				            <li><a href="index.php">Home</a></li>
				            <li><a href="about.php">About</a></li>
				            <li class="active"><a href="#">Products</a></li>
				            <li><a href="support.php">Support</a></li>
				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </div>
		         <div class="clear"></div>
	        </div>
          </div>
   <!-- End Header -->
   
   <!-- Start Main Content -->
	 <div class="main">	 
	 	 <div class="wrap">
	 	<div class="features">
	 		<div class="row">
		        <div class="col-lg-4">
		          <img src="images/private-cloud.png" alt="" />
		          <h2>Private Cloud</h2>
		          <p>Your own secure, scalable OpenStack cloud, in your data center or ours.</p>
		          <p><a class="read-more" href="#">Read More</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		        <img src="images/dedicated-servers.png" alt="" />
		          <h2>Dedicated Servers</h2>
		          <p>Customized hardware to help you meet your performance, security, & compliance needs.</p>
		          <p><a class="read-more" href="#">Read More</a></p>
		        </div><!-- /.col-lg-4 -->
		        <div class="col-lg-4">
		          <img src="images/hybrid-cloud.png" alt="" />
		          <h2>Hybrid Cloud</h2>
		          <p>Performance compute, databases, and storage on-demand. All built on OpenStack®.</p>
		          <p><a class="read-more" href="#">Read More</a></p>
		        </div><!-- /.col-lg-4 -->
		      </div>
		   </div>
	
	       
	      
	 </div>
    </div>
   <!-- End Main Content -->
	   
  <!-- Start Footer -->
 <?php
 
include('bottom.php');
 ?>