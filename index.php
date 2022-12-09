<?php
       require_once("includes/initialize.php");
       
       if (logged_in()) {
           header('Location: home.php');
           exit;
           //echo '<script type="text/javascript">window.location = "home.php";</script>';
       }
       ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Go</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<script src="script.js"></script>
<body>
<div class="navbar">
  </div><a href="index.php">
  <div class="navbar-titel">Easy <sup>Way</sup></div></a>
  <div class="navbar-list">
    <ul>
        <li><a href="about.php"> <img src="css/img/about.png" width="20" alt="" srcset="">About</h4> </a></li>
        <li><a href="index_contact.php"><img src="css/img/contact.png" width="20" alt="" srcset="">Contact</h4></a></li>
        <li><a href="about.php"><img src="css/img/privcy.png" width="20" alt="" srcset="">Privcy And Term</h4></a></li>
        <li><a href="login_A.php"><img src="css/img/login (1).png" width="20" alt="" srcset="">login</h4></a></li>
    </ul>
  </div> 
 

  <div class="content">
    <div class="content-titel">
        Easy <sup>Way</sup>
    </div><div class="content-description">
    <p>Easy <sup>Way</sup>  Come's up With E_hospital <br> System that is used
        to efficently manage <br>the operation of hospital. it covers all
        <br> aspects of hospital administration in one<br> centralised system.to Get strart<a href="Creat_main.php"> click here
   </a> </p></div>
  </div>
        
       <div class="content-Img">
        <img src="css/img/health-nursing-workforce.jpg" alt="" srcset="">
       </div>




       











</body>
</html>