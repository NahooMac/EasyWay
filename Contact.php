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

                  <div class="contact">
                    <div class="contact_Titel">
                        <img src="css/img/support.png" width="65" alt="">
                        <br>Support</div>

                         <br><br><br>
                 <div class="contact_body">
                    <form action="save_contact_issue.php" method="post">
                    Name : <input type="text" name="Name" id="" placeholder="Name"> <br><br>
                    Email : <input type="text" name="Name" id="" placeholder="Name"> <br><br>

                    Text : <textarea name="issue" id="" cols="35" rows="5" placeholder="Is Their Any Problem Your Faceing Feel Free to Tell Us "></textarea>
                             <br><br>
                    <button type='submit' class ='btn-send'>Send</button></form>
                 </div>







                  </div>