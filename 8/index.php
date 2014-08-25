<?php
// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.

session_start();
if(isset($_SESSION['username'])){
    //  logged in
    header("location:products.php");
}
?>

<?php include ('top.php'); ?>

		<div id="login">
			<div id="login-bot">
				<div id="login-box">
					<h2 class="login"><em>user</em>login</h2>
					<form action="check-login.php" method="post">
						<div id="login-username">
							<div><label for="username">username</label>: <input type="text" name="username" value="" id="username" /></div>
							<div><label for="password">password</label>: <input type="password" name="password" value="" id="password" /></div>
						</div>
						<div id="login-button">
							<input type="image" src="images/btn_login.gif" name="l" value="h" id="l" />
						</div>
						<div class="clear">
							<div class="reg">
								New User? <a href="register.php">REGISTER for FREE</a>
							</div>
						</div>
					</form>
				</div>
				<div id="login-welcome">
					<div>
						<h2>Welcome to GadgetExpress</h2>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="body">
			<div id="body-bot">
					<h2><span>Every month, we bring you <strong>4 AWESOME gadgets</strong> at really cheap prices.<br/><br/>So register, login and buy or gift NOW.</span></h2>

					<div id="banner">
						
						<div class="clear"></div>
					</div>
<?php include ('bottom.php'); ?>
