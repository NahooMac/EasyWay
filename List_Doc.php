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
                <h1 class="active"><a href="List_Doc.php">List of Doctors</a></h1>
                <h1>List of Nurse</h1>
                <h1>List of Pharmacy</h1>
                <h1>List of Labratory</h1>
            </div>
        </div>
    </div>
    <!--List_Doc-->
    <?php

global $mydb;
$mydb->setQuery("SELECT * FROM `hospital_doctors` where `Hospital_Name`=".$_SESSION['Hospital_Name']."");
$cur = $mydb->loadResultList();
foreach ($cur as $Doc){
  
      echo "<table>";
        echo    "<th>";
           echo"     <tr>Doctor Name</tr>     <tr>Specality</tr>       <tr>Join date</tr>";
           echo "</th>";
           echo" <th ><td>'.$Doc->Docotors_Name.'</td>  <td>'.$Doc->Specality.'</td> <td>'.$Doc->created.'</td>
                       </th>
        </table>";}?>
    </div>