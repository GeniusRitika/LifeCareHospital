<?php
        session_start();
        $server = "sql104.epizy.com";
        $username = "epiz_29485365";
        $password = "tbw0V08PpHX1";
        $dbname = "epiz_29485365_lifecarehospital";

        $conn = new mysqli($server, $username, $password, $dbname);

        // SQL query to select data from database
        $emailid=$_SESSION['email'];
        $sql = "SELECT * FROM admission WHERE emailid = '$emailid'";
        $result = mysqli_query($conn,$sql);
        $conn->close(); 

        if(!isset($_SESSION['email']))
        header('location:Home.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bill</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!-- Bootstrap Styling -->
    <style>
        /* NavBar Styling */
        .logo{
            color: white;
            font-size: 28px;
        }
        .logo span{
            color: crimson;
        }
        .fa{
            color: crimson;
        }
        .navbar{
            margin-bottom:0px;
        }
        .navbar-inverse .navbar-nav > li > a,
        .navbar-inverse .navbar-nav > li > a:focus {
        color: white;
        font-size: 25px;
        font-weight: 400;
        }
        .navbar-inverse .navbar-nav > li > a:hover {
        color: #ecb321;
        }
        p{
            font-size: 18px;
            font-weight: bold;
        }
        table {
            margin: 0 auto;
            font-size: medium;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
        }
  
        th,
        td {
            font-weight: bold;
            padding: 10px;
            text-align: left;
        }
        .beforeTotal{
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
        <!-- NavBar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <div class="navbar-brand"><p class="logo">Hospi<span>tal</span></p></div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="Patient.php" target="blank"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['email']; ?></a></li>
                    <li><a href="logout.php" target="blank"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        </nav>
        <br><br>
        <section>
            <h1>View Billing Details</h1>
            <!-- TABLE CONSTRUCTION-->
            <table>
                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                <?php
                    $row = $result->num_rows;
                    if($row==0)
                    {
                ?>
                <br>
                <h2 style="text-align:center">No billing details available.</h2>
                <?php
                    }
                ?>
                <?php   // LOOP TILL END OF DATA 
                    while($rows = mysqli_fetch_array($result))
                    {
                ?>
                <tr>
                    <th>Patient Name</th>
                    <td><?php echo $rows['name'];?></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td><?php echo $rows['age'];?></td>
                </tr>
                <tr>
                    <th>Contact Number</th>
                    <td><?php echo $rows['contact'];?></td>
                </tr>
                <tr>
                    <th>EmailId</th>
                    <td><?php echo $rows['emailid'];?></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><?php echo $rows['gender'];?></td>
                </tr>
                <tr>
                    <th>Problem</th>
                    <td><?php echo $rows['problem'];?></td>
                </tr>
                <tr>
                    <th>Bed Type</th>
                    <td><?php echo $rows['bedType'];?></td>
                </tr>
                <tr>
                    <th>Per Day Bed Cost</th>
                    <td><?php echo $rows['perDayCost'];?></td>
                </tr>
                <tr>
                    <th>Date of admitting the patient to the hospital</th>
                    <td><?php echo $rows['date'];?></td>
                </tr>
                <tr>
                    <th>Date of discharging the patient from the hospital</th>
                    <td><?php echo $rows['Ddate'];?></td>
                </tr>
                <tr>
                    <th>Operation Cost</th>
                    <td><?php echo $rows['operationCost'];?></td>
                </tr>
                <tr>
                    <th>Diagnostic Test Charge</th>
                    <td><?php echo $rows['testCharge'];?></td>
                </tr>
                <tr class="beforeTotal">
                    <th class="beforeTotal">Medicine Cost</th>
                    <td class="beforeTotal"><?php echo $rows['medicineCost'];?></td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td><?php echo $rows['billAmount'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </section>  
</body>
</html>