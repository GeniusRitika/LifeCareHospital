<?php
    session_start();
    if(!isset($_SESSION['email']))
    header('location:Home.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardiologist</title>
    <link rel="stylesheet" href="BookAppointment.css">
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
        /* Changing input size */
        .form-control{
            width: 60%;
        }
        @media only screen and (max-width: 600px) {
            .form-control{
                width: 100%;
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
        <!-- Appointment with doctor -->
        <div class="container">
        <h1>Appointment With Cardiologist</h1>
        <form action="appointment.php" method="POST">
            <input type="hidden" name="dCategory" id="dCategory" value="Cardiologist" readonly>
            <div class="form-group">
                <label for="DoctorName">Doctor's Name:</label>
                <br>
                <select name="DoctorName" class="form-control">
                <option value="Dr. Ramesh Kumar">Dr. Ramesh Kumar</option>
                <option value="Dr. Yamini Kumari">Dr. Yamini Kumari</option>
                <option value="Dr. Sudheshna Chatterjee">Dr. Sudheshna Chatterjee</option>
                <option value="Dr. Rohan Jha">Dr. Rohan Jha</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" placeholder="Enter Patient's Name"/>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input class="form-control" type="int" name="age" placeholder="Enter Patient's Age"/>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input class="form-control" type="digit" name="contact" placeholder="Enter Patient's Contact Number" required>
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
                <label for="problem">Describe your problem in brief:</label>
                <textarea class="form-control" rows="4" cols="48" name="problem"></textarea>
            </div>
            <div class="form-group">
                <label for="date">Enter appointment date:</label>
                <div ng-app="myApp" ng-controller="MyController">
                <input class="form-control" type="date" name="date" value="<?php echo date("Y-m-d"); ?>" min="{{ startDate | date:'yyyy-MM-dd' }}" max="{{ maxDate() | date:'yyyy-MM-dd' }}" />
            </div>
            <div class="form-group">
                <label for="Slot">Select a time slot:</label>
                <select name="Slot" class="form-control">
                <option value="12pm-2pm">12pm-2pm</option>
                <option value="4pm-6pm">4pm-6pm</option>
                </select>
            </div>
            <input type="submit" class="button" />
        </form>
        <br>
        </div>
    </div>
    <br>
    <script>

    var myApp = angular.module('myApp', []);
		
        myApp.controller('MyController', ['$scope', function($scope) {
          //Data
          $scope.startDate = new Date();
          $scope.range = 30;
          
          //Functions
          $scope.maxDate = function () {
            var d = new Date($scope.startDate);
            
            d.setDate($scope.startDate.getDate() + $scope.range);
            
            return d;
          };
        }]);

    </script>
</body>
</html>