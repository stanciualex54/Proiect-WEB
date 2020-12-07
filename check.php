<?php
include "connection.php";

if(isset($_POST['reg_username'])){
	$username=mysql_real_escape_string($_POST['reg_username']);
	$password=mysql_real_escape_string($_POST['reg_password']);
}

	$sql="SELECT * FROM Useri WHERE `Username`='$username' AND `Parola`= md5('$password')";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	if(mysql_num_rows($result)==1){
		session_start();
		$_SESSION['id']=$row['ID'];
		$_SESSION['nume']=$row['Nume'];
		$_SESSION['prenume']=$row['Prenume'];
		$_SESSION['mail']=$row['Email'];
		$_SESSION['user']=$row['Username'];
		$_SESSION['parola']=$row['Parola'];
		
		if($_SESSION['parola'] == md5("parolando")){
			session_write_close();
			header ("Location: Home1.php");
		}
		else{
			session_write_close();
			header ("Location: Home1.php");
		}
		exit();
	}
	else{
		echo "<script>alert('Incorrect username or password!')</script>";
		echo"<script>location.href='ContulMeu.php'</script>";
	}

?>