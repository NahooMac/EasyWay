<?php
require_once("includes/initialize.php");


$staff_Name = $_POST['staff_Name'];
$Hospital_Name   = $_SESSION['Hospital_Name'];
$filde	  = $_POST['filde'];
$postion_room = $_POST['postion_room'];
$phone_Number = $_POST['phone_Number'];
$Email = $_POST['Email'];
$password =sha1($_POST['password']);
$created =  strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `hospital_staff` ( `Staff_Name`, `Hospital_Name`, `Filde`, `Postion_room`, `Phone`, `Email`, `Pword`, `created`)
VALUES ('{$staff_Name }', '{$Hospital_Name}', '{$filde}','{$postion_room}','{$phone_Number}', '{$Email}','{$password}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"New Staff Member Add To Databeas Successfuly please let them know the password You Give.\");
                window.location = 'Add_Staff.php';
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"fail. please contact to IT Supporter \");
                window.location = 'home.php';
            </script>";
}
?>