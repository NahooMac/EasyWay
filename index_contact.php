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
 

  <div class="index_contact">
                    <div class="index_contact_Titel">
                        <img src="css/img/support.png" width="65" alt="">
                        <br>Contact Us</div>

                         <br><br>
                 <div class="index_contact_body">
                    <form action="save_contact_issue.php" method="post">
                    Name : <input type="text" name="Name" id="" placeholder="Name"> <br><br>
                    Email : <input type="email" name="Email" id="" placeholder="Email"> <br><br>

                    Text : <textarea name="issue" id="" cols="38" rows="5" placeholder="Feel Free to Tell Us "></textarea>
                             <br><br>
                    <button type='submit' class ='btn-send'>Send</button></form>
                 </div>
  </div>
       <div class="content-Img">
        <img src="css/img/Med Tech Certification Online in Florida.jpg" alt="" srcset="">
       </div>




       











</body>
</html>