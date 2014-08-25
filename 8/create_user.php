<? include ('connection.php'); 

// Define $myusername and $mypassword
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$name=$_POST['name'];
$email=$_POST['email'];

// To protect MySQL injection
$myusername = stripslashes($username);
$mypassword = stripslashes($password);
$myphone = stripslashes($phone);
$myname = stripslashes($name);
$myemail = stripslashes($email);

$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$myphone = mysql_real_escape_string($myphone);
$myname = mysql_real_escape_string($myname);
$myemail = mysql_real_escape_string($myemail);


$sql="SELECT * FROM users WHERE username='$myusername'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be more than 0 rows

if($count==0){
$sql2="INSERT into users (username, password, phone, email, name, balance) VALUES ('$myusername', '$mypassword', '$myphone', '$myemail', '$myname', '6000')";
$result2=mysql_query($sql2);
// Register $myusername, $mypassword and redirect to file "products.php"
session_start();
$_SESSION['username'] = $myusername;
$_SESSION['password'] = 'something';
header("location:products.php?msg=done");
}
else {

header("location:register.php?msg=Try another username");}

ob_end_flush();
?>


