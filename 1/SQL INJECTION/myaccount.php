<?php
// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
include ('log.php');
//session_start();
if(!isset($_SESSION['username'])){
    // not logged in
    header("location:login.php");
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

       
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">My Place My Account... </h2>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	
	<!-- start grids_of_3 -->
	
	
	Name: <? echo $rows['name']; ?><br/>
                Email: <? echo $rows['email']; ?><br/>
                Phone: <? echo $rows['phone']; ?><br/>

	
</div>
</div>
</div>
       
<?php include ('bottom.php'); ?>
