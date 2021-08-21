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

$name =$_POST['name'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$password =$_POST['password'];
$gender =$_POST['gender'];
$dob =$_POST['dob'];
$address =$_POST['address'];

$query ="SELECT * FROM info WHERE name='$name' AND emailid='$email' AND phone='$contact' AND password='$password' AND gender='$gender' AND dob='$dob' AND address='$address'";
$result = mysqli_query($conn,$query);

$num = mysqli_num_rows($result);

if (!$result || $num == 0)
{
    $qy="INSERT INTO info(name, emailid, phone, password, gender, dob, address) VALUES('$name', '$email', '$contact', '$password', '$gender', '$dob', '$address')";
    mysqli_query($conn,$qy);
    echo '<script type="text/javascript">';
    echo 'alert("User Successfully Registered"); location.href="Login.php"';
    echo '</script>';
    $subject = "Registration Confirmed";
    $message = "You have successfully registered"; 
    $from = "ritika.parekh99@gmail.com";
    $headers = "From:" . $from;
 
    // Sending email
    if(mail($email, $subject, $message, $headers)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }
    
    
}else{
    echo '<script type="text/javascript">';
    echo 'alert("User Already Exists"); location.href="Register.php"';
    echo '</script>';
}

?>