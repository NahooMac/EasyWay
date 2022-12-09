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
                                                   <!--NavBar-->
  <div class="navbar">
  </div>
  <div class="navbar-titel"><?php echo $_SESSION['Hospital_Name'];?></div>
  <div class="navbar-list-home">
    <ul>
        <li><a href="home_main.php"><img src="css/img/home.png" title="Home" width="32" alt=""></a></li>
        <li><a href="about.php"><img src="css/img/settings (2).png" title="Setting" width="32" alt=""></a></li>
        <li><a href="about.php"><img src="css/img/contact.png" title="Contact" width="32" alt=""></a></li>
        <li><a href="logout.php"><img src="css/img/enter (1).png" title="logout" alt="" width="32"></a></li>
    </ul>
  </div>                                <!--NavBar-->
  
<div class="content_main">
    <div class="logoholder">
              <?php
				$mydb->setQuery("SELECT * FROM hospital_logo WHERE `hospital_name`='{$_SESSION['Hospital_Name']}'");
				$cur = $mydb->loadResultList("1");
				if ($mydb->affected_rows()==0){
					echo '<img src="./uploads/u.jpg" class="img-thumbnail"/>';
				}
				foreach($cur as $object){
		           			echo '
                 <img src="./uploads/'. $object->filename.'" class="img-thumbnail" width="250" /></ di v>
                     ';
				}
                 ?>
 </div> <!-- sidebar-->
            </div>
<div class="content_main_Detitel">
           <div class="content_main_Detitel_heade">Details of Your Hospital</div>
 <hr> Manger: <?php echo $_SESSION['fName']; ?>    <?php echo  $_SESSION['lName']; ?>
<hr>
  
  phone : <?php echo $_SESSION['phone'];?>
 <hr>

  Email : <?php echo $_SESSION['Email'];?> 
<hr>
</div>
<!-- sidebar-->


<!---Form Form Doctors ---->


<div class="form_doc">
<img src="css/img/employee.png" width="59"alt=""title="Nurse List">
       <br>
       Creat New Account For Staff Member
<br><br>
    <form action="Save_staff.php" method="post">
        <input type="text" name="staff_Name" id="" class="doc_input" placeholder="staff_Name" required><br><br>
        <input type="text" name="phone_Number" id="" class="doc_input" placeholder="phone Number" required><br><br>
        <input type="text" name="Email" id=""class="doc_input"  placeholder="Email" ><br><br>
        <input type="password" required  name="password" id="" class="doc_input" placeholder="Password"><br><br>
        <select name="filde" class="option" required>
            <option name="filde" value="">Employee Filld</option>
          <option name="filde" value="Card room employee">Card room employee</option>
          <option name="filde" value="Security Guard">Security Guard</option>
          <option name="filde" value="Janitor">Janitor</option>
        </select><br><br>

        <input type="text" name="postion_room" id="" class="doc_input" placeholder="postion_room" required><br><br>

        <button class="btn-login"> Singup</button>

    </form>
</div>