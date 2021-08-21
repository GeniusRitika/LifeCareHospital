<?php
        session_start();
        if(!isset($_SESSION['uid']))
        header('location:Home.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
        .button{
            font-size: 18px;
            background-color: crimson;
            color: white;
            text-decoration: none;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 3px;
            padding-bottom: 3px;
            border-radius: 10px;
            box-shadow: 3px 4px black;
        }
    </style>
    <script type="text/javascript">
        function calculateBill()
        {
            var noOfDays = document.getElementById('noOfDays').value;
            noOfDays = parseInt(noOfDays);
            var medicineCost = document.getElementById('medicineCost').value;
            medicineCost = parseInt(medicineCost);
            var operationCost = document.getElementById('operationCost').value;
            operationCost = parseInt(operationCost);
            var testCost = document.getElementById('testCharge').value;
            var testCost = parseInt(testCost);
            var totalCost = perDayCost*noOfDays + operationCost + medicineCost + testCost;
            document.getElementById("hidden").value = totalCost;
            document.getElementById("payform").action = "action.php";
            document.forms["payform"].submit();
            return false;
        }
        function calculateDays()
        {
            Adate = document.getElementById('Adate').value;
            Ddate = document.getElementById('Ddate').value;
            var date1 = new Date(Adate);
            var date2 = new Date(Ddate);
            // To calculate the time difference of two dates
            var Difference_In_Time = date2.getTime() - date1.getTime();
  
            // To calculate the no. of days between two dates
            var noOfDays = Difference_In_Time / (1000 * 3600 * 24);
            document.getElementById('noOfDays').value = noOfDays;
        }
        function calculateOC()
        {
            var operation = document.getElementById('operation').value;
            if(operation == 'none')
            {
                operationCost = 0;
            }
            else if(operation == 'General surgery')
            {
                operationCost = 25000;
            }
            else if(operation == 'Hand surgery')
            {
                operationCost = 30000;
            }
            else if(operation == 'Neurosurgery')
            {
                operationCost = 1100000;
            }
            else if(operation == 'Orthopedic surgery')
            {
                operationCost = 60000;
            }
            else if(operation == 'Gynecological surgery')
            {
                operationCost = 1000000;
            }
            else if(operation == 'Cataract surgery')
            {
                operationCost = 45000;
            }
            else
            {
                operationCost = 90000;
            }
            document.getElementById('operationCost').value = operationCost;
        }
        function calculatePerDayCost()
        {
            var bedType = document.getElementById("bedType").value;
            if(bedType == 'Ward')
            {
                perDayCost = 2000;
            }
            else if(bedType == 'ICU')
            {
                perDayCost = 5000;
            }
            else
            {
                perDayCost = 10000;
            }
            document.getElementById('perDayCost').value = perDayCost;
        }
   </script>
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
        <center><h1>Generate Bill</h1></center>
        <form id="payform" method="post">
       <center>
       <table>
           <tr>
               <td>Patient Name</td>
               <td>
               <div class="form-group">
                    <input class="form-control" type="text" name="name" id="name" placeholder="Enter patient's name" required> 
                </div>  
               </td>
           </tr>
           <tr>
               <td>Email Address</td>
               <td>
               <div class="form-group">
                    <input class="form-control" type="text" name="emailid" id="emailid" placeholder="Enter patient's email address" required>  
                </div>  
               </td>
           </tr>
           <tr>
               <td>Phone Number</td>
               <td>
               <div class="form-group">
                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter patient's phone number" required>   
                </div>  
               </td>
           </tr>
           <tr>
               <td>Admission Date</td>
               <td>
               <div class="form-group">
                   <input class="form-control" type="date" name="Adate" id="Adate" required>
                </div>  
               </td>
           </tr>
           <tr>
               <td>Discharge Date</td>
               <td>
               <div class="form-group">
                   <input class="form-control" type="date" name="Ddate" id="Ddate" required>
                </div>
               </td>
           </tr>
           <tr>
               <td>No of Days</td>
               <td>
               <div class="form-group">
                   <input class="form-control" type="number" name="noOfDays" id="noOfDays" onfocus="return calculateDays()" readonly required>
                </div>      
                </td>
           </tr>
           <tr>
               <td>Bed Type</td>
               <td>
               <div class="form-group">
                    <select class="form-control" name="bedType" id="bedType" required>
                        <option value="Ward">Ward</option>
                        <option value="ICU">ICU</option>
                        <option value="OT">OT</option>
                    </select>  
                </div>       
               </td>
           </tr>
           <tr>
               <td>Per Day Bed Cost</td>
               <td>
               <div class="form-group">
                    <input class="form-control" type="number" name="perDayCost" id="perDayCost" onfocus="return calculatePerDayCost()" readonly required>
                </div>
                </td>
           </tr>
           <tr>
               <td>Diagnostic Test Charge</td>
               <td>
               <div class="form-group">
                   <input class="form-control" type="number" name="testCharge" id="testCharge" required>
                </div>
               </td>
           </tr>
           <tr>
               <td>Operation</td>
               <td>
               <div class="form-group">
                    <select class="form-control" name="operation" id="operation" required>
                        <option value="none">none</option>
                        <option value="General surgery">General surgery</option>
                        <option value="Hand surgery">Hand surgery</option>
                        <option value="Neurosurgery">Neurosurgery</option>
                        <option value="Orthopedic surgery">Orthopedic surgery</option>
                        <option value="Gynecological surgery">Gynecological surgery</option>
                        <option value="Cataract surgery">Cataract surgery</option>
                        <option value="Coronary artery bypass">Coronary artery bypass</option>
                    </select>   
                </div>
               </td>
           </tr>
           <tr>
               <td>Operation Cost</td>
               <td>
               <div class="form-group">
                   <input class="form-control" type="number" name="operationCost" id="operationCost" onfocus="return calculateOC()" readonly required>
                </div>
                </td>
           </tr>
           <input type="hidden" id="hidden" name="hidden">
           <tr>
               <td>Medicine Cost</td>
               <td>
               <div class="form-group">
                   <input class="form-control" type="number" name="medicineCost" id="medicineCost" required>
                </div>
               </td>
           </tr>
           <tr>
               <td><input class="button" type="submit" value="Generate Bill" onclick="calculateBill()"></td>
               <td><input class="button" type="reset" value="Reset" onclick="clear()"></td>
           </tr>
        </table>
       <br>
       <center>
   </form>
</body>
</html>