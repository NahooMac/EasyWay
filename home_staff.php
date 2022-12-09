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
 ?></div></div> <!-- sidebar-16=10
  17=11
  18=12
   15=9
  //14=8
  13=7
  12=6
  11=5
  10=4
  9=3
  8=2
  7=1-->



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
 <div class="Creat_Accu"> 
   
<h2 class="Name_Staff"><?php echo $_SESSION['Staff_Name'];?></h2>
                  <h3 class="Fild_Staff"> <?php echo $_SESSION['Filde'];?></h3>

<div class="creat_accu_form"> 
    <div class="creat_accu_logo">
        <img src="css/img/patient.png" width="95" alt="">
    </div>
    Add New Patient Record 

    <form action="Save_patient.php" method="post">
    <input type="text" name="Card_Number" id="" placeholder="Patient_Card-Number" class="Form_patient"><br>
        <input type="text" name="Patient_Name" id="" placeholder="Patient Name" class="Form_patient"><br>
        <input type="text" name="Patient_Phone" placeholder="Patient_Phone" id="" class="Form_patient"><br>
        <input type="text" name="Patient_Age" placeholder="Patient_Age" id="" class="Form_patient"><br>
        <input type="text" name="Patient_Adderss" placeholder="Patient_Addderss" class="Form_patient" id=""><br>
       <div class="radio" name="Patient_Sex" >
        <label for="Male">Male</label>
        <input type="radio" name="Patient_Sex" value="Male" id="">
        <label for="Female" >Female</label>
        <input type="radio" name="Patient_Sex"  Value="Female"></div>
     
        <select name="patient_Status" class="optional" id="">
          <option value=""> Patient Status</option>
            <option value="Emergancy">Emergancy</option>
            <option value="outward_Patient">Outward Patient</option>
        </select><br>
         <input type="text" name="Patient_room" placeholder="Send_patient to Room" class="Form_patient" id="">
<br>
         <button class="btn-login"> Add Record</button>

    </form>
</div>
 </div>