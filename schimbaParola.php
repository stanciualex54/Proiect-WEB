<?php
	include "connection.php";
	
	$e=$_POST['idu'];
	
	if(isset($_POST['chg_pass'])){
		$a = $_POST['change'];
		$b = $_POST['change1'];
		if($a == $b)
		{
			$pass = md5($a);
			$sql="UPDATE Useri SET Parola='$pass' WHERE ID='$e'";
			$rez=mysql_query($sql);
	if($rez)
		header("Location: adminCont.php");
		}
	else
		echo"Parolele nu coincid";
		
	}
?>