<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body{
            margin-top: 100px;
            background-image: url("./Images/RegistrationPage.jpg");
            background-size:cover;
            background-position:inherit;
            background-repeat: no-repeat;
            height: 100%;
            color: rgba(255, 255, 255, 0.8);
        }
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

        /* Changing input size */
        .form-control{
            width: 40%;
        }
        .Registration-Form{
            margin-left: 100px;
        }
        .button{
            font-size: 20px;
            background-color: crimson;
            color: white;
            text-decoration: none;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 7px;
            padding-bottom: 7px;
            border-radius: 10px;
            box-shadow: 3px 4px black;
        }
        @media only screen and (max-width: 900px) {
            .form-control{
                width: 60%;
            }
        }
        @media only screen and (max-width: 650px) {
            .form-control{
                width: 90%;
            }
            .Registration-Form{
                margin-left: 10%;
            }
            body{
            background-image: url("./Images/RegistrationPage.jpg");
            background-size:cover;
            background-repeat: no-repeat;
            height: 100%;
            color: rgba(255, 255, 255, 0.8);
            }
        }
    </style>
</head>

<body>
    <!-- NavBar Styling -->
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
            <li><a href='Home.php'><i class="fa fa-home"></i> Home</a></li>
            <li><a href="about.php"><i class="fa fa-book"></i> About</a></li>
            <li><a href="#Register" target="blank"><i class="fa fa-registered"></i> Register</a></li>
            <li><a href="Login.php" target="blank"><i class="fa fa-sign-in"></i> Login</a></li>
            <li><a href='Home.php#Contact'><i class="fa fa-phone"></i> Contact</a></li>
            </ul>
            </div>
        </div>
        </nav>

        <!-- Registration Form -->
        <div class="main-container">
            <div class="Registration-Form">
                <h1>Registration Form</h1>
                <div class="Registration">
                    <form action="registration.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input class="form-control w-50" type="text" name="name" placeholder="Enter Patient Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Id:</label>
                            <input class="form-control" type="email" name="email" placeholder="Enter Email Id" required>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact Number:</label>
                            <input class="form-control" type="digit" name="contact" placeholder="Enter Contact Number" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Male"> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Female"> Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="Others"> Others
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input class="form-control" type="date" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input class="form-control" type="text" name="address" placeholder="Enter address">   
                        </div>
                        <button id="mybtn" type="submit" class="button">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
</body>
</html>