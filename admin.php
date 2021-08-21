<?php
    session_start();
    if(!isset($_SESSION['uid']))
    header('location:Home.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="AdminPage.css">
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
        .bar a{
        background-color: crimson;
        width: 100%;
        font-size: 18px;
        border-radius: 20px;
        box-shadow: 5px 5px black;
        }
        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            text-decoration: none;
            color: black;
        }
        img{
            border-radius: 10px;
        }
        p{
            font-size: 18px;
            font-weight: bold;
        }
        @media only screen and (max-width: 992px) {
            .bar a{
                width: 60%;
            }
        }
        @media only screen and (max-width: 620px) {
            .bar a{
                width: 90%;
            }
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
                    <li><a href="#admin" target="blank"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['uid']; ?></a></li>
                    <li><a href="logout.php" target="blank"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        </nav>
        <br><br>
        <br><br>
        <!-- Various options available for the patients -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/AppointmentDetails.jpg" alt="" height="300px" width="450px"></center>
                    </div>
                    <br>
                    <center><div class="bar"><a href="viewAppoitnmentDetails.php" class="btn btn-responsive">View Appointment Details</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/viewAdmittedPatient.jpg" alt="" height="300px" width="450px"></center>
                    </div>
                    <br>
                    <center><div class="bar"><a href="viewAdmittedPatient.php" class="btn btn-responsive">View Admitted Patient Details</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/GenerateBill.jpg" alt="" height="300px" width="450px"></center>
                    </div>
                    <br>
                    <center><div class="bar"><a href="GenerateAdmissionBill.php" class="btn btn-responsive">Generate Bill</a></div></center>
                    <br>
                    <br>
                </div>
            </div>
        </div>
</body>
</html>


