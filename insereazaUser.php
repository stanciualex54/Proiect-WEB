<?php
include "connection.php";
$nume=$_POST['reg_name'];
$prenume=$_POST['reg_prenume'];
$username=$_POST['reg_username'];
$parola=$_POST['reg_password'];
$parola=md5($parola);
$email=$_POST['reg_email'];

$sql = "INSERT INTO `Useri` (`Nume`, `Prenume`, `Username`, `Parola`, `Email`) 
VALUES ('$nume' ,'$prenume', '$username', '$parola', '$email')";
$rez = mysql_query($sql);
if($rez)
	header("Location:ContulMeu.php");
else
	header("Location:Home.php");
?>

