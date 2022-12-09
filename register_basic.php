<?php
require_once("includes/initialize.php");


$f_name = $_POST['fName'];
$l_name = $_POST['lName'];
$Hospital_Name   = $_POST['Hospital_Name'];
$Phone	  = $_POST['Phone'];
$email = $_POST['Email'];
$password = sha1($_POST['Pass']);
$city	  = $_POST['city'];
$Sub_city = $_POST['Sub_city'];
$Woreda   = $_POST['Woreda'];
$created =  strftime("%Y-%m-%d %H:%M:%S", time());

global $mydb;
$mydb->setQuery ( "INSERT INTO `Hospital_Account` (`fName`, `lName`, `Hospital_Name`, `Email`, `Phone`, `Pword`, `city`, `Sub_city`, `woreda`, `created`)
VALUES ('{$f_name}', '{$l_name}','{$Hospital_Name}', '{$email}','{$Phone}', '{$password}','{$city}','{$Sub_city}','{$woreda}','{$created}')");
$mydb->executeQuery();

if ($mydb->affected_rows() == 1) {

    echo "<script type=\"text/javascript\">
                alert(\"Welcome Your Reistertion Has Been Accepted from now on you can login and mange  .\");
                window.location = 'login.php';
            </script>";
} else{
    
    echo "<script type=\"text/javascript\">
                alert(\"fail.\");
                window.location = 'creat.php';
            </script>";
}
?>