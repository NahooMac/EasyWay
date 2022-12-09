<?php
require_once("includes/initialize.php");


$Card_Num = $_GET['Patient_Id'];
$patient_rec   = $_POST['patient_rec'];
$send  = $_POST['send'];
$created =  strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `patient_rec` (`Card_Number`,`patient_rec`,`send`,`created`)
VALUES ('{$Card_Num}','{$patient_rec}','{$send}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"New Record Saved Successfully  .\");
                window.location = 'Patient_detile.php?Patient_Id=".$Card_Num."';
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"can't save Record please Contact IT Adminster.\");
                window.location = 'Patient_detile.php';
            </script>";
}
?>