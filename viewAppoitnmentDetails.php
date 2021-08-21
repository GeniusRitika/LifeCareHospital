<?php
        $server = "sql104.epizy.com";
        $username = "epiz_29485365";
        $password = "tbw0V08PpHX1";
        $dbname = "epiz_29485365_lifecarehospital";

        $conn = new mysqli($server, $username, $password, $dbname);

        // SQL query to select data from database
        $sql = "SELECT * FROM appointment ORDER BY name ASC";
        $result = $conn->query($sql);
        $conn->close(); 
        session_start();
        if(!isset($_SESSION['uid']))
        header('location:Home.php')
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>View Appointment Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            font-size: large;
            border: 1px solid black;
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
            border: 1px solid black;
            padding: 10px;
            text-align: center;
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
                    <li><a href="admin.php" target="blank"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['uid']; ?></a></li>
                    <li><a href="logout.php" target="blank"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        </nav>
        <br><br>
        <br><br>
        <section>
        <h1>Appointment Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>Doctor Name</th>
                <th>Patient Name</th>
                <th>Age</th>
                <th>Contact Number</th>
                <th>Gender</th>
                <th>Date of Appointment</th>
                <th>Slot</th>
                <th>EmailId</th>
                <th>Problem</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['DoctorName'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['contact'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['Slot'];?></td>
                <td><?php echo $rows['emailid'];?></td>
                <td><?php echo $rows['problem'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
    </section>
</body>
  
</html>