<?php


include('top.php');
include('log.php');
?>

<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h4 class="style"> login .. and GET STARTED</h4>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<div class="login_left">
		<img src="images/about_pic.jpg">
	</div>
	<div class="login_left">
		<h3>registered customers</h3>
	
		<p>if you have any account with us, please log in.</p>
	<!-- start registration -->
	<div class="registration">
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		
	<div class="registration_left">
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" name="login "action="check-login.php" method="post">
				<div>
					<label>
						<input placeholder="Username" type="text" tabindex="3" required="" name="username">
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required="" name="password">
					</label>
				</div>						
				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
					<h1><?php echo $_GET["msg"] ; ?></h1>
			</form>
			<!-- /Form -->
		</div>
	</div>
	</div>
	<!-- end registration -->
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
<!-- start footer -->


<?php

include('bottom.php');
?>