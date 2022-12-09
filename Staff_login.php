<?php
require_once("includes/initialize.php");

if (logged_in()) {
	header('Location: home_main.php');
	exit;
	//echo '<script type="text/javascript">window.location = "home.php";</script>';
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Go</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<script src="script.js"></script>
<body>
  <div class="navbar">
  </div><a href="index.php">
  <div class="navbar-titel">Easy <sup>Way</sup></div></a>
  <div class="navbar-list">
    <ul>
    <li><a href="about.php"> <img src="css/img/about.png" width="20" alt="" srcset="">About</h4> </a></li>
        <li><a href="index_contact.php"><img src="css/img/contact.png" width="20" alt="" srcset="">Contact</h4></a></li>
        <li><a href="about.php"><img src="css/img/privcy.png" width="20" alt="" srcset="">Privcy And Term</h4></a></li>
        <li><a href="login_A.php"><img src="css/img/login (1).png" width="20" alt="" srcset="">login</h4></a></li>
    </ul>
    </ul>
  </div> 
     <?php
if (isset($_POST['btnlogin'])) {
	//form has been submitted1

	$ID = trim($_POST['log_phone']);
	$upass = trim($_POST['log_pword']);

	$h_upass = sha1($upass);
	//check if the email and password is equal to nothing or null then it will show message box
	if ($ID == '') {
?>
<script type="text/javascript">
alert("In correct Phone Number.");
</script>
<?php
	} elseif ($upass == '') {
?>
<script type="text/javascript">
alert("Incorrect password..");
</script>
<?php
	} else {
		//it creates a new objects of member
		$member = new member_staff();
		//make use of the static function, and we passed to parameters
		$res = $member::AuthenticateMember($ID, $h_upass);
		//then it check if the function return to true
		if($res == true){
			?>
<script type="text/javascript">
//then it will be redirected to home.php
window.location = "home_Staff.php";
</script>
<?php
		} else {
?>
<script type="text/javascript">
alert("I can't find your account try  sign up or contact your administer..");
window.location = "staff_login.php";
</script>
<?php
		}
	}
} else {

	$ID = "";
	$upass = "";

}

?>
        <div class="loginform"><img src="css/img/employee.png" alt="" srcset="">
                <h2>Welcome Staff</h2>
            <h2>Login To Your Account</h2><hr>
            <form  method="POST" action="staff_login.php">
           <input type="tel" name="log_phone"  id="" class="form-log" placeholder="Phone"><br>
           <br><input type="password" name="log_pword" id="" class="form-log" placeholder="Password"><br>
           <br> <input type="submit" value="SignIn" class="btn-login" name="btnlogin">
                </form>
          
              </div>


        <div class="content-Img">
          <img src="css/img/health-nursing-workforce.jpg" alt="" srcset="">
         </div>