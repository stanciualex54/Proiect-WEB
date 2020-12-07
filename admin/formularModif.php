<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Doi</title>


<link href="stilSite.css" rel="stylesheet" type="text/css">
</head>
<header>
	<?php
include "Meniu.php";
?>
</header>
<body>
<div class = "container">
<?php
	include "connection.php";
		$id=$_GET['id'];
			$sql = "SELECT * FROM Standard WHERE ID = '$id'";
			$rez = mysql_query($sql);
			$row = mysql_fetch_array($rez);
			$idstudent = $row['ID'];
		$sql1 = "SELECT * FROM Standard WHERE ID = 'idstudent'";
		$rez1 = mysql_query($sql1);
		$row1 = mysql_fetch_array($rez1);

	?>
	<div class = "formulare">	
		<div class = "reg_form">
			<p> Cantitate: <?php echo $row1['Cantitate1']; ?> <br />

			<form action = "stergeAdmin.php" method = "post">
				<input class = "register" type = "text" name = "newname" value = "<?php echo $row['Cantitate1'] ?>" />
				<input class = "register" type = "hidden" name = "idu" value = " <?php echo $id ?>" />
				<input class = "button" type = "submit" value = "modifica" />
			</form>
		</div>
	</div>
</div>

</body></html>