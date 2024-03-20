<?php
session_start();
if(isset($_SESSION['email'])){
include('../includes/connection.php');

$total_a = 0;
$total_ap = 0;
$total_an = 0;
$total_b = 0;
$total_bp = 0;
$total_bn = 0;
$total_abp = 0;
$total_abn = 0;
$total_op = 0;
$total_on = 0;

$query = "select stock from stocks where blood_group = 'A'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_a = $total_a + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'A+'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_ap = $total_ap + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'A-'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_an = $total_an + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'B'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_b = $total_b + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'B+'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_bp = $total_bp + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'B-'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_bn = $total_bn + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'AB+'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_abp = $total_abp + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'AB-'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_abn = $total_abn + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'O+'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_op = $total_op + number_format($row['stock']);
}

$query = "select stock from stocks where blood_group = 'O-'";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($query_run)){
    $total_on = $total_on + number_format($row['stock']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../bootstrap/css//bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../includes/juqery_latest.js"></script>
    <style>
        body{
            background-color: #EFF5F5;
        }
        .info_card{
            box-shadow: 3px 3px 3px gray;
            height:150px;
            border-left:2px solid gray;
            border-top:2px solid gray;
            padding-top:1%;
            padding-left:3%;
            border-radius:3%;
            margin-left:2%;  
            margin-bottom: 2%;
            margin-top: 2%;
        }

        .nav-link{
            color: white;
            opacity: 0.9;
            cursor: pointer;
        }

        .nav-link:hover{
            
            color: orange;
            cursor: pointer;
            opacity: 1;
            text-decoration: underline;
        }

    </style>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#donors_list").click(function(){
            $("#main-container").load("donors.php");
            });
        });

        $(document).ready(function(){
            $("#patients_list").click(function(){
            $("#main-container").load("patients.php");
            });
        });

        $(document).ready(function(){
            $("#manage_donation").click(function(){
            $("#main-container").load("manage_donations.php");
            });
        });
        
        $(document).ready(function(){
            $("#manage_requests").click(function(){
            $("#main-container").load("manage_requests.php");
            });
        });
        $(document).ready(function(){
            $("#manage_queries").click(function(){
            $("#main-container").load("manage_queries.php");
            });
        });

    </script>
</head>
<body>
    <nav class="navbar bg-danger">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="color: white;" href="admin_dashboard.php">Blood Bank Management System</a>
            </div>
            <div style="color: white;">
                <strong>Name: </strong> <?php echo $_SESSION['name'];?>
            </div>
            <ul class="nav navbar">
            <li class="nav-item">
                <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="donors_list">Donors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="patients_list">Patients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="manage_donation">Donations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="manage_requests" >Requests</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" id="manage_queries">Userqueries</a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
            </li>
        </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row" id="main-container">
            
            <div class="col-md-2 info_card">
                <h3 class="text-danger">A+</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_ap; ?> Units</b>
            </div>
            <div class="col-md-2 info_card">
                <h3 class="text-danger">A-</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_an; ?> Units</b>
            </div>
            
            <div class="col-md-2 info_card">
                <h3 class="text-danger">B+</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_bp; ?> Units</b>
            </div>
            <div class="col-md-2 info_card">
                <h3 class="text-danger">B-</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_bn; ?> Units</b>
            </div>
            <div class="col-md-2 info_card">
                <h3 class="text-danger">AB+</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_abp; ?> Units</b>
            </div>
            <div class="col-md-2 info_card">
                <h3 class="text-danger">AB-</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_abn; ?> Units</b>
            </div>
            <div class="col-md-2 info_card">
                <h3 class="text-danger">O+</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_op; ?> Units</b>
            </div>
            <div class="col-md-2 info_card">
                <h3 class="text-danger">O-</h3>
                <h5>Blood Available</h5>
                <b>Total: <?php echo $total_on; ?> Units</b>
            </div>
        </div>
    </div>
<div class="container-fluid">
<div class="row">
    <div class="col-md-12 bg-danger" id="footer">
    COPYRIGHT © 2024
BLOOD BANK MANAGEMENT SYSTEM
ALL RIGHTS RESERVED.
    </div>
</div>
</div>
</body>
</html>
<?php
}
else{
    header('Location:login.php');
}