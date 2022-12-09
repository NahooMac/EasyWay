<?php
require_once("includes/initialize.php");


$Doc_Name = $_POST['Doc_Name'];
$Specal = $_POST['Specal'];
$Hospital_Name   = $_SESSION['Hospital_Name'];
$phone	  = $_POST['phone'];
$pword = sha1($_POST['pword']);
$created =  strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `hospital_doctors` ( `Docotors_Name`, `Specality`, `Hospital_Name` , `phone`, `Pword`, `created`)
VALUES ('{$Doc_Name}', '{$Specal}','{$Hospital_Name}', '{$phone}', '{$pword}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"New Doctor Added Sucssfully\");
                window.location = 'Doctors.php';
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"fail.\");
                window.location = 'home.php';
            </script>";
}
?>