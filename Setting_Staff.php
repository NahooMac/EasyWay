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
 ?></div></div> 

<div class="greting">
    <script>
        let clock = new Date();
        let Hours = clock.getHours();
      if(Hours <= 7){
        document.write("Good Morning");
      }else if(Hours <=12){
        document.write("Good Afternoon");
      }else if(Hours <= 11){
        document.write("Good Evening");
      }else{
        document.write("I Wish A Good Day");
      }
    
    </script></div>
 
 <!--Card Section--->
 <div class="Creat_Accu"> 
   
<h2 class="Name_Staff"><?php echo $_SESSION['Staff_Name'];?></h2>
                  <h3 class="Fild_Staff"> <?php echo $_SESSION['Filde'];?></h3>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  <div class="form_doc">
<img src="css/img/settings (2).png" width="59"alt=""title="Nurse List">
       <br>
      Update Your Information
<br><br>
    <form action="Save_staff.php" method="post">
        <input type="text" name="staff_Name" id="" class="doc_input" value="<?php echo $_SESSION['Staff_Name'];?>" placeholder="staff_Name" required><br><br>
        <input type="text" name="phone_Number" id="" class="doc_input"value="<?php echo $_SESSION['phone'];?>" placeholder="phone Number" required><br><br>
        <input type="text" name="Email" id=""class="doc_input"  value="<?php echo $_SESSION['Email'];?>"placeholder="Email" ><br><br>
        <input type="password" required  name="password" id="" class="doc_input"value="<?php echo sha1 ( $_SESSION['Pword']);?>" placeholder="Password"><br><br>
        <select name="filde" required>
            <option name="filde" value="<?php echo $_SESSION['Filde'];?>"><?php echo $_SESSION['Filde'];?></option>
          <option name="filde" value="Card room employee">Card room employee</option>
          <option name="filde" value="Security Guard">Security Guard</option>
          <option name="filde" value="Janitor">Janitor</option>
        </select>

        <input type="text" name="postion_room" id="" class="doc_input"value="<?php echo $_SESSION['Postion_room'];?>" placeholder="postion_room" required><br><br>

        <button class="btn-login"> Update</button>

    </form>
</div>