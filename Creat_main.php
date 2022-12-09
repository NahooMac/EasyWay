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
    <link rel="stylesheet" href="css/styleforcreat.css">
</head>
<script src="script.js"></script>
<body>
  <div class="scrollbar">
    
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
    </ul>
  </div>  
       <div class="content-img"><img src="css/img/AdobeStock_228931394-scaled.jpeg" alt="" srcset=""></div>

  <div class="form"><img src="css/img/hospital.png" width="100">
    <h2>Creat Account For Your Hospital</h2><br>
  <hr>  <label>Manger Name :</label><br>
  <form action="register_basic.php" method="post">
 <br>  <input type="text" name="fName" id="" class="form-con" placeholder="First Name"> 
   <input type="text" name="lName" id="" class="form-con" placeholder="Last Name" ><br>
  <br>  <div class="from-c"><input type="text" name="Hospital_Name" size="20" id="" class="form-con-md" placeholder="Hospital Name"><br>
  <br>  <input type="email" name="Email" id="" class="form-con-md" placeholder="Email"><br>
  <br>  <input type="tel" name="Phone" id="" class="form-con-md" placeholder="Phone"><br>
  <br>  <input type="password" name="Pass" id="pass" class="form-con-md" required placeholder="Password" ><br>
<br></div> <select class="option" name="city" >
      <option class="option" value="" >city</option>
      <option class="option" value="A.A">Addis Abeba</option>
    </select>
    <select class="option" name="Sub_city" >
      <option value="">Sub City</option>
      <option value="Yeka">Yeka</option>
      <option value="Bole">Bole</option>
      <option value="Lemi Kura">Lemi kura</option>
      <option value="Kality">Kality</option>
      <option value="Nefaselk">Nefas selk</option>
            </select>
            <select class="option" name="woreda" >
              <option class="option" value="" >Woreda</option>
              <option class="option" value="01">01</option>
              <option class="option" value="02">02</option>
              <option class="option" value="03">03</option>
              <option class="option" value="04">04</option>
              <option class="option" value="05">05</option>

          </select>

          <br>
          <br>
         <button type="submit" class="btn">SingUp</button></form>
</div>
</body>
</html>