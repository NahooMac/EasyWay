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

                  
                    <?php 
                    $id = $_GET['Patient_Id'];

                    global $mydb;
                    $mydb->setQuery("SELECT * FROM `hospital_patient` WHERE `Card_Number`='$id'");
                    $cur = $mydb->loadResultList();

                    foreach ($cur as $Pat){

                     echo "<div class='patient_detile'>";   
                     echo "<div class='patient_Name'>Patient_Name : $Pat->Patient_Name <br>
                                                     Patient_Age : $Pat->Patient_Age  <br>
                                                     Patient_Sex : $Pat->Patient_Sex <br>
                                                     Patient_Status : $Pat->patient_Status <br>
                                                     Date : $Pat->created</div><br>";

                     echo "<div class='comment'>
                     <form action='save_patient_rec.php?Patient_Id=".$Pat->Card_Number."'=' method='post'>
                        <textarea name='patient_rec' cols='64' rows='12' placeholder='Patient Recorde Box'></textarea><br>
                        <select name='send'>
                            <option value=''>Send to</option>
                            <option value='Laberatory'>Laberatory</option>
                            <option value='Phermacy'>Phermacy</option>
                         </select><br><br>
                         <button type='submit' class ='btn-send'>Send</button>
                    </form></div>";                                  

                    }?>
                  </div>