<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="LoginPage.css"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
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

        .form-control{
            width: 100%;
        }
        body{
            background-image: url("Nurse.webp");
            background-size:cover;
            background-position: initial;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .button{
            font-size: 25px;
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
        .main-container{
            width: fit-content;
            background-color: rgba(0,0,0,0.5);
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
            border-radius: 25px;
            box-shadow: 6px 7px black;
        }
    </style>
</head>

<body>
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
            <li><a href="Register.php" target="blank"><i class="fa fa-registered"></i> Register</a></li>
            <li><a href="Login.php" target="blank"><i class="fa fa-sign-in"></i> Login</a></li>
            <li><a href='Home.php#Contact'><i class="fa fa-phone"></i> Contact</a></li>
            </ul>
            </div>
        </div>
        </nav>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <center>
    <div class="main-container">
            <h1 style="color: whitesmoke;">Login</h1>
            <form action="validation.php" method="POST">
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Enter your email id">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Enter your password">
            </div>
                <button type="submit" class="button">Login</button>
            </form>
    </div>
    </center>
</body>
</html>