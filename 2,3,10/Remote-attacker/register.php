
    <?php
    //retrieve our data from POST
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $email = $_POST['email'];
	$phone=$_POST['phone'];
    $credit=$_POST['credit'];
	$city=$_POST['city'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	

	
    if($password1 !== $password2)
    header('Location: registration.php');
     
    if(strlen($username) > 30)
    header('Location: registration.php');


    $hash = hash('sha256', $password1);
     
    function createSalt()
    {
    $text = md5(uniqid(rand(), true));
    return substr($text, 0, 3);
    }
     
    $salt = createSalt();
    $password = hash('sha256', $salt . $hash);

    

    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('brokenauth', $conn);
     
    //sanitize username
    $username = mysql_real_escape_string($username);
     
    $query = "INSERT INTO member ( username, password, email, salt, phone, city , credit ,firstname ,lastname)
    VALUES ( '$username', '$password', '$email', '$salt' , '$phone' , '$city' , '$credit' ,'$firstname' ,'$lastname');";
    mysql_query($query);
     
    mysql_close();
     
    header('Location: login.php');
    ?>