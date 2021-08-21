<!-- We will write all the php queries here -->

<?php

    
session_start();

$server = "sql104.epizy.com";
$username = "epiz_29485365";
$password = "tbw0V08PpHX1";
$dbname = "epiz_29485365_lifecarehospital";

$conn = new mysqli($server, $username, $password, $dbname);

if(!$conn) {
    die("Connection failed: ". mysql_connect_error());
}


$email =$_POST['email'];
$password =$_POST['password'];


$query ="SELECT * FROM info WHERE emailid='$email' AND password='$password'";
$result = mysqli_query($conn,$query);

$num = mysqli_num_rows($result);

if (!$result || $num == 0)
{
    echo "Invalid User Credentials";
    echo '<script type="text/javascript">';
    echo 'alert("Login Unsuccessful"); location.href="Login.php"';
    echo '</script>';
}else{
    $_SESSION['email'] = $email;
    echo '<script type="text/javascript">';
    echo 'alert("Login Successful"); location.href="Patient.php"';
    echo '</script>';
}

?>