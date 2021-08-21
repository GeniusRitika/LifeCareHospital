<?php
    session_start();
    if(!isset($_SESSION['email']))
    header('location:Home.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        font-size: 28px;
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
                    <li><a href="#Patient" target="blank"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['email']; ?></a></li>
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
                <div class="col-sm-4 col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/GeneralPhysician.jpg" alt=""                     <center><p>Consult a General Physician</p></center>
                    </div>
                    <div class="bar"><a href="GPCategories.php" class="btn btn-responsive">Click Here</a></div>
                    <br>
                    <br>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Specialist.jpg" alt=""                     <center><p>Consult a Specialist</p></center>
                    </div>
                    <div class="bar"><a href="Specialist.php" class="btn btn-responsive">Click Here</a></div>
                    <br>
                    <br>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/BedInHospital.jpg" alt=""                     <center><p>Admit Patient to Hospital</p></center>
                    </div>
                    <div class="bar"><a href="AdmitPatient.php" class="btn btn-responsive">Click Here</a></div>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/MedicalHistory.jpg" alt=""></center>
                        <center><p>View Patient History</p></center>
                    </div>
                    <div class="bar"><a href="#Patient" class="btn btn-responsive" onclick="alert('Feature is currently unavailable');">Click Here</a></div>
                    <br>
                    <br>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/MedicalRecord.jpg" alt=""></center>
                        <center><p>View Patient's Report and Prescription</p></center>
                    </div>
                    <div class="bar"><a href="#Patient" class="btn btn-responsive" onclick="alert('Feature is currently unavailable');">Click Here</a></div>
                    <br>
                    <br>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/GenerateBill.jpg" alt=""></center>
                        <center><p>View Billing Details</p></center>
                    </div>
                    <div class="bar"><a href="viewBillDetails.php" class="btn btn-responsive">Click Here</a></div>
                    <br>              </div>
            </div>
        </div>
</body>
</html>


