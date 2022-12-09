<?php
require_once("includes/initialize.php");

$Card_Number = $_POST['Card_Number'];
$Patient_Name = $_POST['Patient_Name'];
$Hospital_Name   = $_SESSION['Hospital_Name'];
$Patient_Phone	  = $_POST['Patient_Phone'];
$Patient_Age = $_POST['Patient_Age'];
$Patient_Adderss = $_POST['Patient_Adderss'];
$Patient_Sex = $_POST['Patient_Sex'];
$patient_Status= $_POST['patient_Status'];
$Patient_room = $_POST['Patient_room'];

$created = strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `hospital_patient` ( `Card_Number`, `Hospital_Name`, `Patient_Name`, `Patient_Phone`, `Patient_Age`, `Patient_Adderss`, `Patient_Sex`, `patient_Status`, `Patient_room`, `created`)
VALUES ( '{$Card_Number}', '{$Hospital_Name}','{$Patient_Name  }', '{$Patient_Phone}','{$Patient_Age}','{$Patient_Adderss}', '{$Patient_Sex}','{$patient_Status}','{$Patient_room}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"New Patient Recorder Saved I Have Send To The Doctors Room .\");
                window.location = 'Home_Staff.php';
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"fail.\");
                window.location = 'Home_Staff.php';
            </script>";
}
?>