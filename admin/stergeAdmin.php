<?php
	include "connection.php";
	

	$c=$_POST['newname'];
	$e=$_POST['idu'];
	
	
	$sql="UPDATE Standard SET Cantitate1='$c' WHERE ID='$e'";
	
	$rez=mysql_query($sql);
	if($rez)
		header("Location: afisAdmin.php");
	else
		echo"Problema la ...";
?>