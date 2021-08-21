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


$uid =$_POST['uid'];
$securityCode =$_POST['securityCode'];
$password =$_POST['password'];


$query ="SELECT * FROM admin WHERE userId='$uid' AND securityCode='$securityCode' AND password='$password'";
$result = mysqli_query($conn,$query);

$num = mysqli_num_rows($result);

if (!$result || $num == 0)
{
    echo "Invalid User Credentials";
    echo '<script type="text/javascript">';
    echo 'alert("Login Unsuccessful"); location.href="LoginAsAdmin.php"';
    echo '</script>';
}else{
    $_SESSION['uid'] = $uid;
    echo '<script type="text/javascript">';
    echo 'alert("Login Successful"); location.href="admin.php"';
    echo '</script>';
}

?>