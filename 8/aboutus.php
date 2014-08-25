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

				</div>
				<div id="login-welcome">
					<div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="body">
			<div id="body-bot">
					<h2><span>This website is a simulated site with very insecure code.<br/>Use it to enhance your knowledge of web hacking.</span></h2>

					<div id="banner">
						
						<div class="clear"></div>
					</div>
<?php include ('bottom.php'); ?>
