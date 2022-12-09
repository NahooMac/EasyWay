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
 ?></div></div> <!-- sidebar-->


<div class="greting">
    <script>
        let clock = new Date();
        let Hours = clock.getHours();
      if( Hours >=0  && Hours <= 11){
        document.write("Good Morning ! <img src='css/img/sun.png' width='35'> ");
      }else if(Hours >=12  && Hours <= 17){
        document.write("Good Afternoon ! <img src='css/img/good-weather.png' width='35'>");
      } else {
        document.write("Good Evening ! <img src='css/img/night-symbol-of-the-moon-with-a-cloud-and-stars.png' width='35'>");
     
      }
    </script></div>
 
 <!--Card Section--->
 
   
<h2 class="Name_Doc">Dr <?php echo $_SESSION['Doctor_Name'];?></h2>
                  <h3 class="Doc_Spe"> <?php echo $_SESSION['Specality'];?> Office</h3>
                  <div class='table_responsive'>
                    <div class="Table_title">Patient's Sent By Medical Card Office</div>
                   
 <?php
 echo  " <table><thead>
 <tr><th>Patient Name </th>
 <th>Patient Sex </th>
 <th> Patient_Age </th>
 <th> Patient_Status</b></th>
</tr> </thead>";
global $mydb;
$mydb->setQuery("SELECT * FROM `hospital_patient` WHERE Patient_room ='{$_SESSION['postion_room']}' ");
$cur = $mydb->loadResultList();
foreach ($cur as $Pat){
 echo "<tbody><tr>
<td> <a href='Patient_detile.php?Patient_Id=".$Pat->Card_Number."'> $Pat->Patient_Name</td>
  <td><a href='Patient_detile.php?Patient_Id=".$Pat->Card_Number."'>$Pat->Patient_Sex</td>
  <td><a href='Patient_detile.php?Patient_Id=".$Pat->Card_Number."'>$Pat->Patient_Age</td>
   <td><a href='Patient_detile.php?Patient_Id=".$Pat->Card_Number."'>$Pat->patient_Status</td><br>
  
";    
                    }
                  ?>
       </div>