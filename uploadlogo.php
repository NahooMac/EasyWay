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
    <link rel="stylesheet" href="css/style.css">
</head>
<script src="script.js"></script>
<body>
  <div class="navbar">
  </div>
  <div class="navbar-titel"><?php echo $_SESSION['Hospital_Name'];?></div>
  <div class="navbar-list">
    <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="about.php">Contact</a></li>
        <li><a href="about.php">Privcy And Term</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
  </div> 
<div class="uploadform"><img src="css/img/photo.png" alt="" srcset="">
    <h1> For Best Expriance Please Upload your Hospital Logo</h1>
    <hr>
    <form action="save_Logo.php" enctype="multipart/form-data" method="post">
    <input type="file" name="upload_file" id=""><br><br>
     <button type="submit" name="savelogo" class="btnlog">Upload</button>
</div></form>
