<?php

	include "connection.php";
	
	$idul = $_GET['id'];
	$sql = "DELETE FROM Useri WHERE ID = '$idul'";
	$rez = mysql_query($sql);
	if($rez)
		header("Location: afisAdmin.php");
	else
		echo "Problema ...";
?>