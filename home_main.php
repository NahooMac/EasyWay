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
 ?></div> <!-- sidebar-->
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

                             <!---DasheBorde--->
<div class="content_item">
 <a href="Add_Doctor.php">
<div class="info_doctors" title="Add Doctor">
<img src="css/img/doctor.png" width="35" alt="" title="Doctors List"> Doctors We have<hr>
<b><?php
$mydb->setQuery("SELECT * FROM hospital_doctors WHERE `Hospital_Name`='{$_SESSION['Hospital_Name']}'");
$cur = $mydb->executeQuery();
echo $row_count = $mydb->num_rows($cur);

echo ' + Total';
?><hr></b>
<a href="List_doctors.php"><button> Detail</button>
</div>
</a>
 <a href="Add_Nurse.php">
<div class="info_Nurse" title="Add Nures">
<img src="css/img/nurse (1).png" width="35" alt="" title="Doctors List"> Nurse We have<hr>
<?php
$mydb->setQuery("SELECT * FROM hospital_nures WHERE `Hospital_Name`='{$_SESSION['Hospital_Name']}'");
$cur = $mydb->executeQuery();
echo $row_count = $mydb->num_rows($cur);

echo ' + Total';
?><hr>
<a href="List_doctors.php"><button> Detail</button>
</div>
</a>
 <a href="Add_peatent.php">
<div class="info_patient" title="check patient recordes">
<img src="css/img/hospitalisation.png" width="35" alt="" title="Patiemt Progerss"> patient We have<hr>
<?php
$mydb->setQuery("SELECT * FROM hospital_patient WHERE `Hospital_Name`='{$_SESSION['Hospital_Name']}'");
$cur = $mydb->executeQuery();
echo $row_count = $mydb->num_rows($cur);

echo ' + Total ';
?><hr>
<a href="List_doctors.php"><button> Detail</button>
 </div></a>
 <a href="Add_peatent.php">
<div class="info_laberatory" title="Add labaratory Techention">
<img src="css/img/observation.png" width="35" alt="" title="Labaratory Detile"> Laberatory We have<hr>
<?php
$mydb->setQuery("SELECT * FROM hospital_staff WHERE `Hospital_Name`='{$_SESSION['Hospital_Name']}'");
$cur = $mydb->executeQuery();
echo $row_count = $mydb->num_rows($cur);

echo ' + Total ';
?><hr>
<a href="List_doctors.php"><button> Detail</button>
 </div></a>
 <a href="Add_peatent.php">
<div class="info_Payment" title="Control Payment">
<img src="css/img/payment-method (1).png" width="35" alt="" title="Labaratory Detile"> Payment Collected<hr>
<?php
$mydb->setQuery("SELECT * FROM hospital_Staff WHERE `Hospital_Name`='{$_SESSION['Hospital_Name']}'");
$cur = $mydb->executeQuery();
echo $row_count = $mydb->num_rows($cur);

echo ' $ Total';
?><hr>
<a href="List_doctors.php"><button> Detail</button>
 </div></a>
 <a href="Add_Staff.php">
<div class="info_staff" title="Add New staff">
<img src="css/img/employee.png" width="35" alt="" title="Labaratory Detile"> Other Staffe's<hr>
<?php
$mydb->setQuery("SELECT * FROM hospital_staff WHERE `Hospital_Name`='{$_SESSION['Hospital_Name']}'");
$cur = $mydb->executeQuery();
echo $row_count = $mydb->num_rows($cur);

echo '+ Total Staff Member';
?><hr>
<a href="List_doctors.php"><button> Detail</button>
 </div></a>

                          <!---DasheBorde--->





















                          <center>
</div>
                                             <!--Menus-->
<div class="Menus">
  <a href="labratory"> <img src="css/img/observation.png" width="59" alt="" title="Labaratory Detile"></a>
  <a href="Nurse"> <img src="css/img/nurse (1).png" width="59"alt=""title="Nurse List"></a>
   <a href="Menus"><img src="css/img/menu.png" width="59"alt="" title="Menu"></a>
   <a href="Doctors"><img src="css/img/doctor.png" width="59" alt="" title="Doctors List"></a>
   <a href="patient"><img src="css/img/hospitalisation.png" width="59" alt="" title="Patiemt Progerss"></a></center>
  </div>
                                             <!--Menus-->













     


















</body>
</html>