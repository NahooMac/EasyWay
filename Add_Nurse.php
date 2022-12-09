<?php 
require_once("header_Home.php");
?>
  
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
<img src="css/img/nurse (1).png" width="59"alt=""title="Nurse List">
       <br>
       Creat New Account For Nurse
<br><br>
    <form action="Save_Nur.php" method="post">
        <input type="text" name="Nurse_Name" id="" class="doc_input" placeholder="Nurse_Name"><br><br>
        <input type="text" name="phone_Number" id="" class="doc_input" placeholder="phone Number"><br><br>
        <input type="text" name="Email" id=""class="doc_input"  placeholder="Email"><br><br>
        <input type="password" titel="please give defult password to your hospiatal" name="pass" id="" class="doc_input" placeholder="Password"><br><br>
        <input type="text" name="Specality" id=""class="doc_input" placeholder="Specality"><br><br>
        <input type="text" name="postion_room" id="" class="doc_input" placeholder="postion_room"><br><br>

        <button class="btn-login"> Singup</button>

    </form>
</div>