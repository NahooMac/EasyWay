<?php
require_once("includes/initialize.php");


$Name  =$_POST['Name'];
$Email =$_POST['Email'];
$issue  = $_POST['issue'];
$created =  strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `admin_contact` (`Name`,`Email`, `Issue`, `created`)
VALUES ('{$Name}','{$Email}','{$issue}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"We Have Recived Your Problem We Well Try To fix you Case as soon as posseble or We Well contact you for more information .\");
            
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"can't save Record please Contact IT Adminster.\");
                window.location = 'Patient_detile.php';
            </script>";
}
?>