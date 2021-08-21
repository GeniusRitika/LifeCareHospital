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

$DoctorName = $_POST['DoctorName'];
$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$problem = $_POST['problem'];
$date = $_POST['date'];
$Slot = $_POST['Slot'];
$emailid = $_SESSION['email'];
$dCategory = $_POST['dCategory'];

$query1 = "SELECT * FROM appointment WHERE DoctorName ='$DoctorName' AND name ='$name' AND age ='$age' AND contact ='$contact' AND gender ='$gender' AND date='$date' AND Slot ='$Slot' AND emailid = '$emailid' ";
$fetch = mysqli_query($conn,$query1);
$result = mysqli_num_rows($fetch);

if($result == 0)
{
    $query2 = "INSERT INTO appointment (dCategory,DoctorName,name,age,contact,gender,date,Slot,emailid,problem) VALUES ('$dCategory','$DoctorName','$name','$age','$contact','$gender','$date','$Slot','$emailid','$problem')";
    mysqli_query($conn,$query2);
    echo '<script type="text/javascript">';
    echo 'alert("Appointment booked sucessfully"); location.href="Patient.php"';
    echo '</script>';    
}

else
{
    echo "Data Already Exists";
    echo '<script type="text/javascript">';
    echo 'alert("Appointment has already been booked sucessfully for the given patient"); location.href="patient.php"';
    echo '</script>';
}

?>