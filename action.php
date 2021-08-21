<?php
    $server = "sql104.epizy.com";
    $username = "epiz_29485365";
    $password = "tbw0V08PpHX1";
    $dbname = "epiz_29485365_lifecarehospital";

    $conn = new mysqli($server, $username, $password, $dbname);

    if(!$conn) {
        die("Connection failed: ". mysql_connect_error());
    }

        $name = $_POST['name'];
        $contact = $_POST['phone'];
        $Adate = $_POST['Adate'];
        $Ddate = $_POST['Ddate'];
        $emailid = $_POST['emailid'];
        $medicineCost = $_POST['medicineCost'];
        $perDayCost = $_POST['perDayCost'];
        $testCharge = $_POST['testCharge'];
        $operationCost = $_POST['operationCost'];
        $totalCost = $_POST['hidden'];

        $query ="SELECT * FROM admission WHERE name='$name' AND emailid='$emailid' AND contact='$contact' AND date='$Adate'";
        $result = mysqli_query($conn,$query);

        $num = mysqli_num_rows($result);
        if (!$result || $num == 0)
        {
            echo '<script type="text/javascript">';
            echo 'alert("No such patient exists."); location.href="GenerateAdmissionBill.php"';
            echo '</script>';
        }else{
            $qy="UPDATE admission SET billAmount='$totalCost',Ddate='$Ddate',medicineCost='$medicineCost',perDayCost='$perDayCost',testCharge='$testCharge',operationCost='$operationCost' WHERE name='$name' AND emailid='$emailid' AND contact='$contact' AND date='$Adate'";
            mysqli_query($conn,$qy);
            echo '<script type="text/javascript">';
            echo 'alert("Bill generated successfully"); location.href="GenerateAdmissionBill.php"';
            echo '</script>';
        }
?>  