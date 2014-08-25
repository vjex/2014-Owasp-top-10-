<?php
error_reporting(0);
?>
<?php

session_start();
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ip = $_SERVER['REMOTE_ADDR'];
$user=$_SESSION['username'];
$browser=$_SERVER['HTTP_USER_AGENT'];
$ref=$_SERVER['HTTP_REFERER'];
if (isset($_COOKIE["auto_parts_user"]))
	{
  		$cookie=$_COOKIE["auto_parts_user"];
  	}
else
	{
 $rand=(rand(1000000,9999999));
 setcookie("auto_parts_user", $rand);
 $cookie=$_COOKIE["auto_parts_user"];
 	}

include ('connection.php'); 

$sql="INSERT into log (url, ip, user, browser, ref, cookie) VALUES ('$url', '$ip', '$user', '$browser', '$ref', '$cookie')";
$result=mysql_query($sql);
?>
