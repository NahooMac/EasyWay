<?php
require_once("includes/initialize.php");


$Nurse_Name = $_POST['Nurse_Name'];
$Hospital_Name   = $_SESSION['Hospital_Name'];
$Specality	  = $_POST['Specality'];
$postion_room = $_POST['postion_room'];
$phone_Number = $_POST['phone_Number'];
$Email = $_POST['Email'];
$password = sha1($_POST['Pass']);
$created =  strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `hospital_nures` ( `Nures_Name`, `Hospital_Name`, `postion_room`, `Specality`, `phone_Number`, `Email`, `Pword`, `created`)
VALUES ('{$Nurse_Name }', '{$Hospital_Name}','{$postion_room}', '{$Specality}','{$phone_Number}', '{$Email}','{$password}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"New Nures Added Successfuly To the Databaes so form now on they can Access to the website please tell them their Password And Phone Number  .\");
                window.location = 'Add_Nures.php';
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"fail.\");
                window.location = 'home.php';
            </script>";
}
?>