<?php
require_once("includes/initialize.php");

if (logged_in()) {
	header('Location: home_staff.php');
	exit;
	//echo '<script type="text/javascript">window.location = "home.php";</script>';
}
?><?php
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
		$member_staff = new member_staff();
		//make use of the static function, and we passed to parameters
		$res = $member_staff::AuthenticateMember($ID, $h_upass);
		//then it check if the function return to true
		if($res == true){
			?>
<script type="text/javascript">
//then it will be redirected to home.php
window.location = "home_staff.php";
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