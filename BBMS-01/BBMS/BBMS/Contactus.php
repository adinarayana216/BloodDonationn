<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management</title>
    <!-- Bootstrap files-->
    <link rel="stylesheet" href="bootstrap/css//bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        
        <a class="navbar-brand" href="index.php">Blood Bank Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav" >
            <li class="nav-item" >
                <a class="nav-link" href="index.php" >Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/login.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donor/login.php">Donor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="patient/login.php">Patient</a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contactus.php">ContactUs</a>
                
            </li>
            
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row" style="margin-top: 7%;  margin-bottom:5%">
            <div class="col-md-4 mx-auto" id="login-container">
                <center><h4>Contact Us</h4></center><hr><br>
                <form action="" method="POST" >
                <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name1" placeholder="Enter your name" required>
                    </div><br>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email ID" required>
                    </div><br>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" name="no" placeholder="Enter Phone Number" required>
                    </div><br>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea rows="10" cols="100" class="form-control" autocomplete="off" id="message" name="message" required  maxlength="999" style="resize:none"></textarea>
                 </div><br>
                    <input type="submit" class="btn btn-danger" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </div>
<?php if(isset($_POST['submit']))
{
   
$n=$_POST['name1'];
$ema=$_POST['email'];
$pho=$_POST['no'];
$mess=$_POST['message'];
$conn=mysqli_connect("localhost","root","","bbms") or die("can't connect to database");
$sql="INSERT INTO contact_info(nam,email,phonenumber,messag) values('{$n}','{$ema}','{$pho}','{$mess}' )";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");
if($result){
echo '<script>alert("Your query succeesfully received, we will contact you shortly.")</script>'; 
}
else{
    echo '<script>alert("Query not sent, try again")</script>';
}}?>
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
</html> -->