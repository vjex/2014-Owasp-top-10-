<?php
// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.

session_start();
if(!isset($_SESSION['username'])){
    // not logged in
    header("location:index.php");
}

include ('connection.php');

$username = $_SESSION['username'];
$sql="SELECT * FROM users WHERE username='$username'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

$giftee=$_GET['giftee'];
$code=$_GET['code'];

$sql4="SELECT * FROM users WHERE username='$giftee'";
$result4=mysql_query($sql4);
$count=mysql_num_rows($result4);

if($count==0)
	{
include ('top.php');
echo "<div id='body'><div id='body-bot'><h2><span><strong>Error: </strong>Invalid Giftee</span></h2>";
	}

elseif ($rows['balance'] < 6000)
	{
include ('top.php');
echo "<div id='body'><div id='body-bot'><h2><span><strong>Error: </strong>Balance Insufficient</span></h2>";
	}
else
	{
	$sql2="INSERT INTO gifts (giftor, giftee, code) VALUES ('$username', '$giftee', '$code')";
	$result2=mysql_query($sql2);
	
	$new_balance = $rows['balance'] - 6000;

	$sql3="UPDATE users SET balance = '$new_balance' WHERE username = '$username'";
	$result3=mysql_query($sql3);
	
	include ('top.php');
	echo "<div id='body'><div id='body-bot'><h2><span><strong>Transaction Complete</strong></span></h2>";

	}

ob_end_flush();

?>
<!--		<div id="login">
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
					<h2><span>Welcome <strong><? echo $rows['name']; ?></strong>, your balance is Rs. <strong><? echo $rows['balance']; ?></strong></span></h2>
					<div id="items">
						<div class="item">
							<h3>To gift <? echo $code; ?> (Rs 6,000) to a friend, enter his / her GadgetExpress ID below:</h3>
							<p></p>
						<form action="process.php" method="get">
						<div id="login-username">
							<div><input type="text" name="giftee" value=""><input type="hidden" name="giftor" value="<? echo $username; ?>"><input type="hidden" name="giftor" value="<? echo $code; ?>"></div>
						</div>
							<div><input type="submit" class="details" value="GIFT NOW"></div>

						<div class="clear">

						</div>
					</form>
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

<? include ('bottom.php'); ?>
-->