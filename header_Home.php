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
        <li><a href="home_Doc.php"><img src="css/img/home.png" title="Home" width="32" alt=""></a></li>
        <li><a href="Setting_Doc.php"><img src="css/img/settings (2).png" title="Setting" width="32" alt=""></a></li>
        <li><a href="Contact.php"><img src="css/img/contact.png" title="Contact" width="32" alt=""></a></li>
        <li><a href="logout.php"onclick="logout()" ><img src="css/img/enter (1).png" title="logout" alt="" width="32"></a></li>
    </ul>
  </div>                                <!--NavBar-->