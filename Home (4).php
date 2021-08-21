<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="HomePage.css">
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
            font-size: 24px;
            font-weight: 400;
        }
        .navbar-inverse .navbar-nav > li > a:hover {
            color: #ecb321;
        }

        /* Main Contant Styling */
        .main-content{
            margin:0px;
            padding:0px;
        }
    </style>
</head>
<body>
    <div class="container-fluid main-content">
        <!-- NavBar Code -->
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
                        <li><a href='#Home'><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa fa-book"></i> About</a></li>
                        <li><a href="Register.php" target="blank"><i class="fa fa-registered"></i> Register</a></li>
                        <li><a href="Login.php" target="blank"><i class="fa fa-sign-in"></i> Login</a></li>
                        <li><a href='#Contact'><i class="fa fa-phone"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Cover Image of my application -->
        <img src="./Images/FrontPage.jpg" class="img-responsive" width="100%">
        
        <!-- About the hospital -->
        <b><h1 style="text-align: center;">About the hospital</h1></b>
        <center><hr style="width:30%;height:2px;border-width:0;color:gray;background-color:crimson"></center>
        <div>
        <div class="content container-fluid" style="background-image: url(./Images/Background.jpg); background-repeat: no-repeat; background-position: center;">
            <center>
            <p style="width: 80%; text-align: center; font-size:18px; background-color: rgba(255,255,255,0.8); margin:5%; padding:3%; border-radius: 15px;">
                <b>LifeCare Hospital, the region’s healthcare provider of choice, is a not-for-profit locally owned healthcare system. An affiliate of University of Utah Health, LifeCare Hospital is dedicated to providing convenient access to advanced quality care in a tranquil, healing environment. From newborns to seniors, we care for patients of all ages and life stages. Our commitment to excellence makes us who we are and ensures our community is a healthy place to live, work, and thrive.</b>
            </p>
            </center>
        </div>

        <!-- Patient and their stories -->
        <b><h1 style="text-align: center;">Our Patients. Their Stories</h1></b>
        <center>
        <hr style="width:30%;height:2px;border-width:0;color:gray;background-color:crimson">
        <div>
            <img class="img-responsive" src="care.webp" alt="Love and care">
        </div>
        <div class="PatientStories">
            <div class="slider" style="width: 90%;">
                <div class="slider-container">
                    <p>“I just wanted to take a minute to tell you about my experience at your facility. I had a baby on May 5. I was treated so well and the experience with the doctors and nurses was amazing. It was my fourth child so I had a predisposition to think all experiences were the same. Your hospital was amazing. The nurses were attentive and so helpful...”
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>-Sreya Kumari</b></p>
                </div>
            
                <div class="slider-container">
                    <p>“LifeCare Hospital should be very proud of its PT Department. I just wanted to be sure to let you know how wonderful these people really are and how much they have changed my life for the better...”
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>-Heidi M. Sharma</b></p>
                </div>
                
                    <div class="slider-container">
                    <p>“I wish to thank the doctors, nurses, and other medical professionals and staff who each and collectively made my experience at your facility as easy and successful as it could be. I had a scheduled hysterectomy at Sierra Surgery on April 10, 2018 with Dr. Steven Arcangeli, assisted my Dr. Shannon Hess and anesthesiologist Dr. John Anxo. In my preliminary and pre-op appointments, Dr. Arcangeli was thorough, informative, kind, and compassionate, and I was very confident in the course of treatment we selected and in his ability...”
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>-Anonymous</b></p>
                </div>
                
                    <div class="slider-container">
                    <p>“I couldn’t have had a better healthcare experience than I did at LifeCare Hospital! Staff were wonderful and I cannot say enough nice things about my stay at the hospital...”
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>-Raghav Mehta</b></p>
                </div>
                
                    <div class="slider-container">
                    <p>“I wanted to extend my deep appreciation for the care my mother had in her last days...”
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>-Anonymous</b></p>
                </div>
            </div>
        </div>
        </center>

        <!-- Contact Us -->
        <div class="my-container">
            <br>
            
            <center>
                <h1>Contact Us</h1>
                <center><hr style="width:30%;height:2px;border-width:0;color:gray;background-color:crimson"></center>
                <div id="Contact" class="Contact" style="float: left; width:70%;">
                <br>
                    <p>For any queries, you can contact us on our help line number</p>
                    <p class="number">6291247655</p>
                    <br>
                    <p>You can also mail us on</p>
                    <p class="email"><a href="mailto:ritika.parekh99@gmail.com?subject=Text">ritika.parekh99@gmail.com</a></p>
                </div>
                <div>
                    <br>
                    <img class="img-responsive" src="./Images/24Hrs.jpg" alt="24X7 Service" width="250px" height="230px" style="border-radius: 50%">
                </div>
                <br>
            </center>
        </div>
    </div>
</body>
</html>