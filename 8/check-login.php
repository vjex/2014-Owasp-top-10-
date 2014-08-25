<?php include ('connection.php'); ?>

<?php

// Define $myusername and $mypassword
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be more than 0 rows

if($count!=0){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['username'] = $myusername;
$_SESSION['password'] = 'something';
header("location:products.php");
}
else {
header("location:index.php");

}

ob_end_flush();
?>