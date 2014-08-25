<?php
// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.

session_start();
if(!isset($_SESSION['username'])){
    // not logged in
    header("location:index.php");
}
?>

<?php include ('top.php'); ?>
<?php include ('connection.php'); ?>

<?php
$username = $_SESSION['username'];
$sql="SELECT * FROM users WHERE username='$username'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
ob_end_flush();
?>
		<div id="login">
			<div id="login-bot">
				<div id="login-box"><h2><span>Welcome <strong><? echo $rows['name']; ?></strong>, your balance is Rs. <strong><? echo $rows['balance']; ?></strong></span></h2>

				</div>

				<div id="login-welcome">
					<div><a href="logout.php"><input type="submit" class="register" value="logout" /></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="body">
			<div id="body-bot">
					<h2><span><strong><? echo $_GET['msg']; ?></strong></span></h2>
					<div id="items">
						<div class="item">
							<img src="images/pic_1.jpg" width="91" height="105" alt="iPod" class="left" />
							<h3>GEx 289</h3>
							<h3>Rs 6000</a><p></p>
							<div><a href="buy.php?code=gex289" class="details">ORDER NOW</a></div>
							<div class="divider"></div>
						</div>
						<div class="item">
							<img src="images/pic_3.jpg" width="91" height="105" alt="Plasma screen" class="left" />
							<h3>GEx 290</h3>
							<h3>Rs 6000</a><p></p>
							<div><a href="buy.php?code=gex290" class="details">ORDER NOW</a></div>
							<div class="divider"></div>
						</div>
						<div class="item">
							<img src="images/pic_2.jpg" width="91" height="105" alt="CD Player" class="left" />
							<h3>GEx 291</h3>
							<h3>Rs 6000</a><p></p>
							<div><a href="buy.php?code=gex291" class="details">ORDER NOW</a></div>
							<div class="divider"></div>
					  </div>
						<div class="item">
							<img src="images/pic_4.jpg" width="91" height="105" alt="Camera" class="left" />
							<h3>GEx 292</h3>
							<h3>Rs 6000</a><p></p>
							<div><a href="buy.php?code=gex292" class="details">ORDER NOW</a></div>
							<div class="divider"></div>
						</div>
						<div class="clear"></div>
					</div>

<?php include ('bottom.php'); ?>
