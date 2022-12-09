<?php
require_once("includes/initialize.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_SESSION['Hospital_Name'];?></title>
    <link rel="stylesheet" href="css/styleh.css">
</head>
<script src="script.js"></script>
<body>
    <div class="navbar">
        <div class="nav-titel"><a href="index.php"><h1><?php echo $_SESSION['Hospital_Name'];?></h1></a> </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <input type="search" class="search" name="" id="" placeholder="Search">
        <div class="nav-list">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#@">Menu</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="#$">Terms and policy</a></li>
            </ul>
        </div>
    </div>
    <!--SideBar-->
    <div class="contanier">
        <div class="cols">
            <div class="Sidbar"><hr>
                <h1 class="">List of Doctors</h1>
                <h1>List of Nurse</h1>
                <h1>List of Pharmacy</h1>
                <h1>List of Labratory</h1>
            </div>
        </div>
    </div>
    <!---Form-->
    <div class="form">

        <div class="form-title">
            Creat New Account For Doctor
        </div><hr>
        <form action="Creat_Doc.php" method="post">
        <input type="text" name="Doc_Name" id="" placeholder="Full Name"><br>
        <input type="text" name="Specal" id="" placeholder="Postion"><br>
       
        <input type="tel" name="phone" id="" placeholder="phone"><br>
        <input type="password" name="pword" id="" placeholder="password"><br>
        <button type="submit">SingUp</button>
        </form>
    </div>