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

$name = $_POST['name'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$problem = $_POST['problem'];
$admissionHistory = $_POST['admissionHistory'];
$otherProblem = $_POST['otherProblem'];
$bedType = $_POST['bedType'];
$date = $_POST['date'];
$Slot = $_POST['Slot'];
$rname = $_POST['rname'];
$relation = $_POST['relation'];
$rcontact = $_POST['rcontact'];
$emailid = $_SESSION['email'];

$query1 = "SELECT * FROM admission WHERE name ='$name' AND age ='$age' AND contact ='$contact' AND gender ='$gender' AND problem ='$problem' AND admissionHistory='$admissionHistory' AND otherProblem='$otherProblem' AND bedType='$bedType' AND date='$date' AND Slot ='$Slot' AND emailid = '$emailid' AND rname='$rname' AND relation='$relation' AND rcontact='$rcontact' ";
$fetch = mysqli_query($conn,$query1);
$result = mysqli_num_rows($fetch);

if($result == 0)
{
    $query2 = "INSERT INTO admission (name,age,contact,gender,problem,admissionHistory,otherProblem,bedType,date,Slot,emailid,rname,relation,rcontact) VALUES ('$name','$age','$contact','$gender','$problem','$admissionHistory','$otherProblem','$bedType','$date','$Slot','$emailid', '$rname', '$relation', '$rcontact')";
    mysqli_query($conn,$query2);
    echo '<script type="text/javascript">';
    echo 'alert("Bed booked sucessfully"); location.href="Patient.php"';
    echo '</script>';
}

else
{
    echo "Data Already Exists";
    echo '<script type="text/javascript">';
    echo 'alert("Bed has already been booked for the given patient"); location.href="AdmitPatient.php"';
    echo '</script>';
}

?>