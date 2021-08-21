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
    <title>Admit Patient</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
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
        body{
            margin-top: 100px;
            background-image: url("./Images/AdmitPatient.jpg");
            background-size:cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            height: 100%;
            color: rgba(255, 255, 255, 0.9);
            font-size: 18px;
        }

        .sub-container{
            background: rgba(0, 0 , 0 , 0.6);
            border-radius: 10px;
            box-shadow: 6px 8px black;
            width: 80%;
            padding: 20px 50px;
            margin-left: 10%;
        }
        .button{
            font-size: 22px;
            background-color: crimson;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 3px 4px black;
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
        <div class="sub-container">
        <h1><b>Admit Patient To Hospital</h1>
        <form action="admission.php" method="POST">
            <h2>Information about patient</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" placeholder="Enter Patient's Name" required/>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input class="form-control" type="int" name="age" placeholder="Enter Patient's Age" required/>
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
                <textarea class="form-control" rows="5" cols="48" name="problem"></textarea>
            </div>
            <div class="form-group">
                <label for="admissionHistory">Past Admission history(if any):</label>
                <textarea class="form-control" rows="5" cols="48" name="admissionHistory"></textarea>
            </div>
            <div class="form-group">
                <label for="otherProblem">Other medical problems that may complicate or cause the current problem to worsen(if any): </label>
                <textarea class="form-control" rows="5" cols="48" name="admissionHistory"></textarea>
            </div>
            <div class="form-group">
                <label for="bedType">Select the Bed Type:</label>
                <br>
                <label class="radio-inline">
                    <input type="radio" name="bedType" value="Ward"> Ward
                </label>
                <label class="radio-inline">
                    <input type="radio" name="bedType" value="ICU"> ICU
                </label>
                <label class="radio-inline">
                    <input type="radio" name="bedType" value="OT"> OT
                </label>
            </div>
            <div class="form-group">
                <label for="date">When to Admit the Patient:</label>
                <div ng-app="myApp" ng-controller="MyController">
                <input class="form-control" type="date" name="date" value="<?php echo date("Y-m-d"); ?>" min="{{ startDate | date:'yyyy-MM-dd' }}" max="{{ maxDate() | date:'yyyy-MM-dd' }}" />
            </div>
            <br><br>
            <div class="form-group">
                <label for="Slot">Select a time slot for admitting the patient:</label>
                <select class="form-control" name="Slot" class="form-control">
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
                <option value="Night">Night</option>
                </select>
            </div>
            <h2>Relative's Details</h2>
            <div class="form-group">
                <label for="rname">Relative's Name:</label>
                <input class="form-control" type="text" name="rname" placeholder="Enter Relative's Name" required/>
            </div>
            <div class="form-group">
                <label for="relation">Reltion with the patient:</label>
                <input class="form-control" type="int" name="relation" placeholder="Relation with the patient" required/>
            </div>
            <div class="form-group">
                <label for="rcontact">Contact Number:</label>
                <input class="form-control" type="digit" name="rcontact" placeholder="Enter Relative's Contact Number" required>
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