<?php
require_once("includes/initialize.php");


$Doctor_Name = $_POST['Doctor_Name'];
$Hospital_Name   = $_SESSION['Hospital_Name'];
$Specality	  = $_POST['Specality'];
$postion_room = $_POST['postion_room'];
$phone_Number = $_POST['phone_Number'];
$Email = $_POST['Email'];
$Password = sha1($_POST['Password']);
$created =  strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `hospital_doctors` (`Doctor_Name`, `Hospital_Name`, `Specality`, `postion_room`, `phone_Number`, `Email`, `Pword`, `created`)
VALUES ('{$Doctor_Name }', '{$Hospital_Name}', '{$Specality}','{$postion_room}','{$phone_Number}', '{$Email}','{$Password}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"New doctor Added Successfuly To the Databaes so form now on they can Access to the website please tell them their Password And Phone Number  .\");
                window.location = 'Add_doctor.php';
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"fail.\");
                window.location = 'creat.php';
            </script>";
}
?>