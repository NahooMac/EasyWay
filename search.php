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
<script>
  function logout(){
 alert ("Are you Sure You Went to logout?");
  } 
</script>
<body>

 
                                                   <!--NavBar-->
  <div class="navbar">
  </div>
  <div class="navbar-titel"><?php echo $_SESSION['Hospital_Name'];?></div>
  <div class="navbar-sera">
 <form action="search.php" method="POST" >
<input class="form-control mr-sm-3" type="text" placeholder="Search" name="keyword" required="required"
 value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
 
</form></div>
  <div class="navbar-list-home">
    <ul>
        <li><a href="home_Doc.php"><img src="css/img/home.png" title="Home" width="43" alt=""></a></li>
        <li><a href="Setting_Doc.php"><img src="css/img/settings (2).png" title="Setting" width="43" alt=""></a></li>
        <li><a href="Contact.php"><img src="css/img/contact.png" title="Contact" width="43" alt=""></a></li>
        <li><a href="logout.php"onclick="logout()" ><img src="css/img/enter (1).png" title="logout" alt="" width="43"></a></li>
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
                  <h3 class="Doc_Spe"> <?php echo $_SESSION['Specality'];?></h3>

<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
    }
?>

<div>
<div class='table_responsive'>
            <?php

					global $mydb;
					$mydb->setQuery("SELECT * FROM `hospital_patient` WHERE `Card_Number` LIKE '$keyword' ORDER BY `created`");
					$cur = $mydb->loadResultList();

				
					foreach ($cur as $Pat){
                        echo " <table><a href='Patient_detile.php'>
                               <tr>
                                <th><b>Patient Name </th>
                                <th>Patient Sex </th>
                                <th> Patient_Age </th>
                                <th> Patient_Status</b></th>
                               </tr>
                               <tr>
                                <td>$Pat->Patient_Name</td>
                                <td>$Pat->Patient_Sex</td>
                                <td>$Pat->Patient_Age</td>
                                <td>$Pat->patient_Status</td>
                               </tr>
                               </table>
                               </a>
                               </div>";

                       
                    }
					?>
                    </div>
</div>
</div>
                </div></div>

        
            
   







                <script src="js/tooltip.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.min1.js"></script>
<script src="js/bootstrap.min2.js"></script><script src="js/bootstrap.min3.js"></script>
<script src="js/popover.js"></script>
<script src="js/tooltip.js"></script>
<script src="js/bootstrap.min1.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popover.js"></script> <script>









    <style>
    body{
        color: beige;
    }
    .Name {
        position: relative;
        padding: 12;

    }
    h3{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .text {
        font-family : 'monotype corsiva';
    
    }
    </style> 


</body>
</html>