<?php 
include ('log.php');
include ('connection.php');

// Define $myusername and $mypassword
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be more than 0 rows

if($count!=0){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['username'] = $username;
$_SESSION['password'] = 'something';
header("location:myaccount.php");
}
else {
header("location:login.php?msg=Invalid+credentials");
}

ob_end_flush();
?>