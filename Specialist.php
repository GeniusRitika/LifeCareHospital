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
    <title>Make Appointment</title>
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
        font-size: 22px;
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
                width: 70%;
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
                    <li><a href="Patient.php" target="blank"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['email']; ?></a></li>
                    <li><a href="logout.php" target="blank"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        </nav>
        <br><br>
        <br><br>
        <!-- Various options available for the specialist -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/ENTSpecialist.jpeg" alt=""></center>
                        <center><p>ENT Specialist</p></center>
                    </div>
                    <center><div class="bar"><a href="ENTSpecialist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Cardiologist.jpeg" alt=""></center>
                        <center><p>Cardiologist</p></center>
                    </div>
                    <center><div class="bar"><a href="Cardiologist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/EyeSpecialist.jpeg" alt=""></center>
                        <center><p>Eye Specialist</p></center>
                    </div>
                    <center><div class="bar"><a href="EyeSpecialist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Dentist.jpeg" alt=""></center>
                        <center><p>Dentist</p></center>
                    </div>
                    <center><div class="bar"><a href="Dentist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Dermatologist.jpeg" alt=""></center>
                        <center><p>Dermatologist</p></center>
                    </div>
                    <center><div class="bar"><a href="Dermatologist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Gynaecologist.jpeg" alt=""></center>
                        <center><p>Gynaecologist</p></center>
                    </div>
                    <center><div class="bar"><a href="Gynaecologist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Orthopedic.jpeg" alt=""></center>
                        <center><p>Orthopedic</p></center>
                    </div>
                    <center><div class="bar"><a href="Orthopedic.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Immunologist.jpeg" alt=""></center>
                        <center><p>Immunologist</p></center>
                    </div>
                    <center><div class="bar"><a href="Immunologist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
                <div class="col-md-4">
                    <div>
                        <center><img class="img-responsive" src="./Images/Psychiatrist.jpeg" alt=""></center>
                        <center><p>Psychiatrist</p></center>
                    </div>
                    <center><div class="bar"><a href="Psychiatrist.php" class="btn btn-responsive">Make an appointment</a></div></center>
                    <br>
                    <br>
                </div>
            </div>
        </div>
</body>
</html>
