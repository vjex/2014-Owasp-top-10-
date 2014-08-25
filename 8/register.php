<?php
// Check if session is not registered, redirect back to main page.

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
					<h2 class="login"><em><? echo $_GET['msg']; ?></em></h2>
					<form action="create_user.php" method="post">
						<div id="login-username">
							<div><label for="username">Username</label>: <input type="text" name="username" value="" id="username" /></div>
							<div><label for="password">Password</label>: <input type="password" name="password" value="" id="password" /></div>
							<div><label for="name">Full name</label>: <input type="text" name="name" value="" id="password" /></div>
							<div><label for="phone">Phone</label>: <input type="text" name="phone" value="" id="password" /></div>
							<div><label for="email">Email</label>: <input type="text" name="email" value="" id="password" /></div>
							<div><label for="register"></label><input type="submit" value="Register"></div>
						</div>

						<div class="clear">
							<div class="reg">
								Existing User? <a href="index.php">Login</a>
							</div>
						</div>
					</form>
				</div>
				<div id="login-welcome">
					<div>
						<h2>Signup bonus of Rs 6000 !!</h2>
						<p>Create an account now and get a signup bonus of Rs 6000 !!</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="body">
			<div id="body-bot">
					<h2><span>Signup bonus of <strong>Rs 6000!!</strong><br/>Create an account now and get a signup bonus of Rs 6000 !!</span></h2>

					<div id="banner">
						
						<div class="clear"></div>
					</div>
<?php include ('bottom.php'); ?>
